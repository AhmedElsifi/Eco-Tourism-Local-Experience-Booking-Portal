<?php

class TravelerModel
{
    private $connect;

    public function __construct($db)
    {
        $this->connect = $db;
    }

    public function getTravelerById($travelerId)
    {
        $stmt = $this->connect->prepare("
            SELECT t.*, u.name, u.email, u.profile_picture_url 
            FROM traveler t 
            JOIN users u ON t.traveler_id = u.user_id 
            WHERE t.traveler_id = ?
        ");
        $stmt->execute([$travelerId]);
        return $stmt->fetch();
    }

    public function getTravelerBookings($travelerId, $status = null)
    {
        $sql = "
            SELECT b.*, t.tour_name, t.tour_type, l.location_name, l.country,
                   tv.price_per_person, tv.max_capacity, g.guide_id, u.name as guide_name
            FROM booking b
            JOIN tour_version tv ON b.tour_version_id = tv.tour_version_id
            JOIN tour t ON tv.tour_id = t.tour_id
            LEFT JOIN location l ON t.location_id = l.location_id
            JOIN guide g ON b.guide_id = g.guide_id
            JOIN users u ON g.guide_id = u.user_id
            WHERE b.traveler_id = ?
        ";
        if ($status) {
            $sql .= " AND b.status = ?";
            $stmt = $this->connect->prepare($sql);
            $stmt->execute([$travelerId, $status]);
        } else {
            $stmt = $this->connect->prepare($sql);
            $stmt->execute([$travelerId]);
        }
        return $stmt->fetchAll();
    }

    public function getAvailableTours($travelerId)
    {
        $stmt = $this->connect->prepare("
            SELECT t.tour_id, t.tour_name, t.tour_type, l.location_name, l.country,
                   tv.price_per_person, tv.max_capacity, tv.tour_version_id,
                   g.guide_id, u.name as guide_name
            FROM tour t
            JOIN tour_version tv ON t.tour_id = tv.tour_id AND tv.is_active = 1
            LEFT JOIN location l ON t.location_id = l.location_id
            JOIN guide g ON t.guide_id = g.guide_id
            JOIN users u ON g.guide_id = u.user_id
            WHERE t.status = 'active'
            AND t.tour_id NOT IN (
                SELECT tv2.tour_id FROM booking b2
                JOIN tour_version tv2 ON b2.tour_version_id = tv2.tour_version_id
                WHERE b2.traveler_id = ? AND b2.status IN ('confirmed', 'pending')
                AND b2.start_time >= NOW()
            )
            ORDER BY t.created_at DESC
        ");
        $stmt->execute([$travelerId]);
        return $stmt->fetchAll();
    }

    public function calculateGroupDiscount($numPeople, $basePrice)
    {
        $discounts = [
            2 => 0.05,
            3 => 0.08,
            4 => 0.10,
            5 => 0.12,
            6 => 0.15,
            7 => 0.18,
            8 => 0.20,
            9 => 0.22,
            10 => 0.25
        ];
        $discount = $discounts[$numPeople] ?? 0;
        return [
            'discount_percent' => $discount * 100,
            'discounted_price' => $basePrice * (1 - $discount),
            'total_price' => $basePrice * (1 - $discount) * $numPeople
        ];
    }

    public function calculateCarbonOffset($bookingId)
    {
        $stmt = $this->connect->prepare("
            SELECT t.carbon_footprint, b.total_price
            FROM booking b
            JOIN tour_version tv ON b.tour_version_id = tv.tour_version_id
            JOIN tour t ON tv.tour_id = t.tour_id
            WHERE b.booking_id = ?
        ");
        $stmt->execute([$bookingId]);
        $booking = $stmt->fetch();

        if (!$booking || !$booking['carbon_footprint']) {
            return 0;
        }
        return $booking['carbon_footprint'];
    }

    public function getCarbonOffsetProjects()
    {
        $stmt = $this->connect->prepare("SELECT * FROM carbon_offset_projects ORDER BY cost_per_ton ASC");
        $stmt->execute();
        return $stmt->fetchAll();
    }

public function purchaseCarbonOffset($bookingId, $travelerId, $projectId, $amountTons, $costAmount)
    {
        if ($bookingId > 0) {
            $stmt = $this->connect->prepare("
                INSERT INTO traveler_carbon_offsets (booking_id, traveler_id, project_id, amount_tons, cost_amount)
                VALUES (?, ?, ?, ?, ?)
            ");
            $stmt->execute([$bookingId, $travelerId, $projectId, $amountTons, $costAmount]);
        }
        
        $stmt = $this->connect->prepare("
            UPDATE traveler SET total_carbon_offset = total_carbon_offset + ? WHERE traveler_id = ?
        ");
        $stmt->execute([$amountTons, $travelerId]);

        return true;
    }

    public function getTravelerCarbonOffsets($travelerId)
    {
        $stmt = $this->connect->prepare("
            SELECT o.*, p.project_name, p.location, b.booking_id
            FROM traveler_carbon_offsets o
            JOIN carbon_offset_projects p ON o.project_id = p.project_id
            JOIN booking b ON o.booking_id = b.booking_id
            WHERE o.traveler_id = ?
            ORDER BY o.created_at DESC
        ");
        $stmt->execute([$travelerId]);
        return $stmt->fetchAll();
    }

    public function createBooking($travelerId, $tourVersionId, $guideId, $startTime, $endTime, $totalPrice, $bookingType = 'instant')
    {
        $stmt = $this->connect->prepare("
            INSERT INTO booking (traveler_id, guide_id, tour_version_id, start_time, end_time, total_price, status, carbon_offset)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)
        ");
        $status = $bookingType === 'instant' ? 'confirmed' : 'pending';
        $stmt->execute([$travelerId, $guideId, $tourVersionId, $startTime, $endTime, $totalPrice, $status, 0]);
        return $this->connect->lastInsertId();
    }

    public function getBookingById($bookingId, $travelerId)
    {
        $stmt = $this->connect->prepare("
            SELECT b.*, t.tour_id, t.tour_name, t.tour_type, l.location_name, l.country,
                   tv.price_per_person, tv.max_capacity, g.guide_id, u.name as guide_name,
                   u.email as guide_email
            FROM booking b
            JOIN tour_version tv ON b.tour_version_id = tv.tour_version_id
            JOIN tour t ON tv.tour_id = t.tour_id
            LEFT JOIN location l ON t.location_id = l.location_id
            JOIN guide g ON b.guide_id = g.guide_id
            JOIN users u ON g.guide_id = u.user_id
            WHERE b.booking_id = ? AND b.traveler_id = ?
        ");
        $stmt->execute([$bookingId, $travelerId]);
        return $stmt->fetch();
    }

    public function checkItineraryConflict($travelerId, $startTime, $endTime, $excludeBookingId = null)
    {
        $sql = "
            SELECT b.*, t.tour_name, l.location_name
            FROM booking b
            JOIN tour_version tv ON b.tour_version_id = tv.tour_version_id
            JOIN tour t ON tv.tour_id = t.tour_id
            LEFT JOIN location l ON t.location_id = l.location_id
            WHERE b.traveler_id = ?
            AND b.status IN ('confirmed', 'pending')
            AND (
                (b.start_time <= ? AND b.end_time >= ?) OR
                (b.start_time <= ? AND b.end_time >= ?) OR
                (b.start_time >= ? AND b.end_time <= ?)
            )
        ";
        $params = [$travelerId, $startTime, $startTime, $endTime, $endTime, $startTime, $endTime];

        if ($excludeBookingId) {
            $sql .= " AND b.booking_id != ?";
            $params[] = $excludeBookingId;
        }

        $stmt = $this->connect->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    public function checkGeographicOverlap($travelerId, $locationId, $startTime, $endTime, $excludeBookingId = null)
    {
        $sql = "
            SELECT b.*, t.tour_name, l.location_name, l.latitude, l.longitude
            FROM booking b
            JOIN tour_version tv ON b.tour_version_id = tv.tour_version_id
            JOIN tour t ON tv.tour_id = t.tour_id
            LEFT JOIN location l ON t.location_id = l.location_id
            WHERE b.traveler_id = ?
            AND b.status IN ('confirmed', 'pending')
            AND t.location_id = ?
            AND (
                (b.start_time <= ? AND b.end_time >= ?) OR
                (b.start_time <= ? AND b.end_time >= ?) OR
                (b.start_time >= ? AND b.end_time <= ?)
            )
        ";
        $params = [$travelerId, $locationId, $startTime, $startTime, $endTime, $endTime, $startTime, $endTime];

        if ($excludeBookingId) {
            $sql .= " AND b.booking_id != ?";
            $params[] = $excludeBookingId;
        }

        $stmt = $this->connect->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    public function getTourAddons($tourVersionId)
    {
        $stmt = $this->connect->prepare("
            SELECT * FROM addon WHERE tour_version_id = ? ORDER BY price ASC
        ");
        $stmt->execute([$tourVersionId]);
        return $stmt->fetchAll();
    }

    public function addBookingAddon($bookingId, $addonId, $quantity, $price)
    {
        $stmt = $this->connect->prepare("
            INSERT INTO booking_addons (booking_id, addon_id, quantity, price_at_booking)
            VALUES (?, ?, ?, ?)
        ");
        $stmt->execute([$bookingId, $addonId, $quantity, $price]);

        $stmt = $this->connect->prepare("UPDATE booking SET total_price = total_price + ? WHERE booking_id = ?");
        $stmt->execute([$price * $quantity, $bookingId]);

        return true;
    }

    public function getBookingAddons($bookingId)
    {
        $stmt = $this->connect->prepare("
            SELECT ba.*, a.name, a.description
            FROM booking_addons ba
            JOIN addon a ON ba.addon_id = a.addon_id
            WHERE ba.booking_id = ?
        ");
        $stmt->execute([$bookingId]);
        return $stmt->fetchAll();
    }

    public function getCancellationPolicy()
    {
        $stmt = $this->connect->prepare("
            SELECT * FROM cancellation_policies ORDER BY hours_before_start DESC
        ");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function calculateRefund($bookingId)
    {
        $stmt = $this->connect->prepare("SELECT * FROM booking WHERE booking_id = ?");
        $stmt->execute([$bookingId]);
        $booking = $stmt->fetch();

        if (!$booking) return 0;

        $startTime = strtotime($booking['start_time']);
        $now = time();
        $hoursBefore = ($startTime - $now) / 3600;

        $stmt = $this->connect->prepare("
            SELECT * FROM cancellation_policies 
            WHERE hours_before_start <= ? 
            ORDER BY hours_before_start DESC LIMIT 1
        ");
        $stmt->execute([$hoursBefore]);
        $policy = $stmt->fetch();

        if (!$policy) {
            return 0;
        }

        return $booking['total_price'] * ($policy['refund_percent'] / 100);
    }

    public function cancelBooking($bookingId, $travelerId)
    {
        $refund = $this->calculateRefund($bookingId);

        $stmt = $this->connect->prepare("
            UPDATE booking SET status = 'cancelled', cancelled_at = NOW() WHERE booking_id = ? AND traveler_id = ?
        ");
        $stmt->execute([$bookingId, $travelerId]);

        $stmt = $this->connect->prepare("DELETE FROM booking_vouchers WHERE booking_id = ?");
        $stmt->execute([$bookingId]);

        return $refund;
    }

    public function generateVoucher($bookingId)
    {
        $voucherCode = 'V' . strtoupper(substr(md5($bookingId . time()), 0, 8));
        $validUntil = date('Y-m-d H:i:s', strtotime('+1 year'));

        $qrData = json_encode([
            'voucher_code' => $voucherCode,
            'booking_id' => $bookingId,
            'valid_until' => $validUntil
        ]);

        $stmt = $this->connect->prepare("
            INSERT INTO booking_vouchers (booking_id, voucher_code, qr_code_data, valid_until)
            VALUES (?, ?, ?, ?)
        ");
        $stmt->execute([$bookingId, $voucherCode, $qrData, $validUntil]);

        return $voucherCode;
    }

    public function getBookingVoucher($bookingId)
    {
        $stmt = $this->connect->prepare("SELECT * FROM booking_vouchers WHERE booking_id = ? ORDER BY created_at DESC LIMIT 1");
        $stmt->execute([$bookingId]);
        return $stmt->fetch();
    }

    public function validateVoucher($voucherCode, $guideId)
    {
        $stmt = $this->connect->prepare("
            SELECT v.*, b.guide_id, b.status
            FROM booking_vouchers v
            JOIN booking b ON v.booking_id = b.booking_id
            WHERE v.voucher_code = ?
        ");
        $stmt->execute([$voucherCode]);
        $voucher = $stmt->fetch();

        if (!$voucher) {
            return ['valid' => false, 'error' => 'Voucher not found'];
        }

        if ($voucher['guide_id'] != $guideId) {
            return ['valid' => false, 'error' => 'Voucher does not belong to your tours'];
        }

        if ($voucher['status'] === 'used') {
            return ['valid' => false, 'error' => 'Voucher already used'];
        }

        if ($voucher['status'] === 'expired' || strtotime($voucher['valid_until']) < time()) {
            return ['valid' => false, 'error' => 'Voucher expired'];
        }

        $stmt = $this->connect->prepare("UPDATE booking_vouchers SET status = 'used' WHERE voucher_id = ?");
        $stmt->execute([$voucher['voucher_id']]);

        return ['valid' => true, 'voucher' => $voucher];
    }

    public function joinWaitlist($travelerId, $tourVersionId, $numPeople = 1)
    {
        $stmt = $this->connect->prepare("
            INSERT INTO booking_waitlist (traveler_id, tour_version_id, num_people)
            VALUES (?, ?, ?)
        ");
        $stmt->execute([$travelerId, $tourVersionId, $numPeople]);
        return $this->connect->lastInsertId();
    }

    public function getTravelerWaitlist($travelerId)
    {
        $stmt = $this->connect->prepare("
            SELECT w.*, t.tour_name, tv.price_per_person
            FROM booking_waitlist w
            JOIN tour_version tv ON w.tour_version_id = tv.tour_version_id
            JOIN tour t ON tv.tour_id = t.tour_id
            WHERE w.traveler_id = ?
            ORDER BY w.created_at DESC
        ");
        $stmt->execute([$travelerId]);
        return $stmt->fetchAll();
    }

    public function offerWaitlistSpot($waitlistId)
    {
        $stmt = $this->connect->prepare("
            UPDATE booking_waitlist 
            SET status = 'offered', offered_at = NOW(), expires_at = DATE_ADD(NOW(), INTERVAL 48 HOUR)
            WHERE waitlist_id = ?
        ");
        $stmt->execute([$waitlistId]);
    }

    public function acceptWaitlistOffer($waitlistId, $travelerId)
    {
        $stmt = $this->connect->prepare("SELECT * FROM booking_waitlist WHERE waitlist_id = ? AND traveler_id = ? AND status = 'offered'");
        $stmt->execute([$waitlistId, $travelerId]);
        $waitlist = $stmt->fetch();

        if (!$waitlist || ($waitlist['expires_at'] && strtotime($waitlist['expires_at']) < time())) {
            $stmt = $this->connect->prepare("UPDATE booking_waitlist SET status = 'expired' WHERE waitlist_id = ?");
            $stmt->execute([$waitlistId]);
            return false;
        }

        $stmt = $this->connect->prepare("UPDATE booking_waitlist SET status = 'joined' WHERE waitlist_id = ?");
        $stmt->execute([$waitlistId]);

        return true;
    }

    public function cancelWaitlist($waitlistId, $travelerId)
    {
        $stmt = $this->connect->prepare("UPDATE booking_waitlist SET status = 'cancelled' WHERE waitlist_id = ? AND traveler_id = ?");
        $stmt->execute([$waitlistId, $travelerId]);
    }

    public function createReview($bookingId, $travelerId, $data)
    {
        $stmt = $this->connect->prepare("
            INSERT INTO booking_reviews (booking_id, eco_friendliness_rating, cultural_respect_rating, overall_rating,
                eco_friendliness_comment, cultural_respect_comment, general_comment)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ");
        $stmt->execute([
            $bookingId,
            $data['eco_friendliness_rating'],
            $data['cultural_respect_rating'],
            $data['overall_rating'],
            $data['eco_friendliness_comment'] ?? null,
            $data['cultural_respect_comment'] ?? null,
            $data['general_comment'] ?? null
        ]);

        $stmt = $this->connect->prepare("UPDATE booking SET status = 'completed' WHERE booking_id = ?");
        $stmt->execute([$bookingId]);

        return $this->connect->lastInsertId();
    }

    public function getTravelerReviews($travelerId)
    {
        $stmt = $this->connect->prepare("
            SELECT r.*, b.booking_id, t.tour_name
            FROM booking_reviews r
            JOIN booking b ON r.booking_id = b.booking_id
            JOIN tour_version tv ON b.tour_version_id = tv.tour_version_id
            JOIN tour t ON tv.tour_id = t.tour_id
            WHERE b.traveler_id = ?
            ORDER BY r.created_at DESC
        ");
        $stmt->execute([$travelerId]);
        return $stmt->fetchAll();
    }

    public function createDispute($bookingId, $travelerId, $reason, $evidenceText = null, $evidencePhotos = null)
    {
        $stmt = $this->connect->prepare("
            INSERT INTO dispute_cases (booking_id, traveler_id, reason, evidence_text, evidence_photos)
            VALUES (?, ?, ?, ?, ?)
        ");
        $stmt->execute([$bookingId, $travelerId, $reason, $evidenceText, $evidencePhotos]);
        return $this->connect->lastInsertId();
    }

    public function getTravelerDisputes($travelerId)
    {
        $stmt = $this->connect->prepare("
            SELECT d.*, b.booking_id, t.tour_name
            FROM dispute_cases d
            JOIN booking b ON d.booking_id = b.booking_id
            JOIN tour_version tv ON b.tour_version_id = tv.tour_version_id
            JOIN tour t ON tv.tour_id = t.tour_id
            WHERE d.traveler_id = ?
            ORDER BY d.created_at DESC
        ");
        $stmt->execute([$travelerId]);
        return $stmt->fetchAll();
    }

    public function logInteraction($travelerId, $tourId, $type)
    {
        $stmt = $this->connect->prepare("
            INSERT INTO newsletter_interactions (traveler_id, tour_id, interaction_type)
            VALUES (?, ?, ?)
        ");
        $stmt->execute([$travelerId, $tourId, $type]);
    }

    public function getTopEcoExperiences($limit = 10)
    {
        $stmt = $this->connect->prepare("
            SELECT t.tour_id, t.tour_name, t.tour_type, l.location_name, l.country,
                   COUNT(DISTINCT ni.id) as interaction_count,
                   COUNT(DISTINCT b.booking_id) as booking_count,
                   AVG(r.eco_friendliness_rating) as avg_eco_rating
            FROM tour t
            LEFT JOIN location l ON t.location_id = l.location_id
            LEFT JOIN newsletter_interactions ni ON t.tour_id = ni.tour_id
            LEFT JOIN tour_version tv ON t.tour_id = tv.tour_id
            LEFT JOIN booking b ON tv.tour_version_id = b.tour_version_id
            LEFT JOIN booking_reviews r ON b.booking_id = r.booking_id
            WHERE t.status = 'active'
            GROUP BY t.tour_id, t.tour_name, t.tour_type, l.location_name, l.country
            ORDER BY (COUNT(DISTINCT ni.id) * 0.3 + COUNT(DISTINCT b.booking_id) * 0.5 + COALESCE(AVG(r.eco_friendliness_rating), 0) * 0.2) DESC
            LIMIT " . (int)$limit . "
        ");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getEscrowBalance($bookingId)
    {
        $stmt = $this->connect->prepare("
            SELECT * FROM booking WHERE booking_id = ? AND status = 'confirmed'
        ");
        $stmt->execute([$bookingId]);
        $booking = $stmt->fetch();

        if (!$booking) {
            return 0;
        }

        return $booking['total_price'];
    }

    public function releaseEscrow($bookingId)
    {
        $stmt = $this->connect->prepare("SELECT * FROM booking WHERE booking_id = ?");
        $stmt->execute([$bookingId]);
        $booking = $stmt->fetch();

        if (!$booking || $booking['status'] !== 'confirmed') {
            return false;
        }

        $stmt = $this->connect->prepare("
            UPDATE guide_wallet 
            SET pending_balance = pending_balance + ?, available_balance = available_balance + ?
            WHERE guide_id = ?
        ");
        $stmt->execute([$booking['total_price'], $booking['total_price'], $booking['guide_id']]);

        return true;
    }
}