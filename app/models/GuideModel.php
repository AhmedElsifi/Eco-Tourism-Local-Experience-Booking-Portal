<?php

require_once __DIR__ . "/../../core/connection.php";

class GuideModel
{
    private $db;

    public function __construct()
    {
        global $connect;
        $this->db = $connect;
    }

    public function getGuideById($guideId)
    {
        $stmt = $this->db->prepare("
            SELECT g.*, u.name, u.email, u.profile_picture_url 
            FROM guide g 
            JOIN users u ON g.guide_id = u.user_id 
            WHERE g.guide_id = ?
        ");
        $stmt->execute([$guideId]);
        return $stmt->fetch();
    }

    public function getGuideWallet($guideId)
    {
        $stmt = $this->db->prepare("SELECT * FROM guide_wallet WHERE guide_id = ?");
        $stmt->execute([$guideId]);
        return $stmt->fetch();
    }

    public function getGuideTours($guideId)
    {
        $stmt = $this->db->prepare("
            SELECT t.*, l.location_name, l.country 
            FROM tour t 
            JOIN location l ON t.location_id = l.location_id 
            WHERE t.guide_id = ?
            ORDER BY t.created_at DESC
        ");
        $stmt->execute([$guideId]);
        return $stmt->fetchAll();
    }

    public function getGuideSchedule($guideId, $startDate = null, $endDate = null)
    {
        $sql = "
            SELECT b.booking_id, b.start_time, b.end_time, b.status, b.total_price,
                   t.tour_name, l.location_name,
                   (SELECT COUNT(*) FROM booking WHERE booking.guide_id = ? AND booking.start_time = b.start_time) as conflicting_bookings
            FROM booking b
            JOIN tour_version tv ON b.tour_version_id = tv.tour_version_id
            JOIN tour t ON tv.tour_id = t.tour_id
            LEFT JOIN location l ON t.location_id = l.location_id
            WHERE b.guide_id = ?
        ";
        $params = [$guideId, $guideId];

        if ($startDate && $endDate) {
            $sql .= " AND b.start_time BETWEEN ? AND ?";
            $params[] = $startDate;
            $params[] = $endDate;
        }

        $sql .= " ORDER BY b.start_time";

        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    public function checkScheduleConflict($guideId, $startTime, $endTime)
    {
        $stmt = $this->db->prepare("
            SELECT COUNT(*) as conflict_count 
            FROM booking 
            WHERE guide_id = ? 
            AND status IN ('pending', 'confirmed')
            AND (
                (start_time < ? AND end_time > ?) 
                OR (start_time < ? AND end_time > ?)
                OR (start_time >= ? AND end_time <= ?)
            )
        ");
        $stmt->execute([$guideId, $endTime, $startTime, $endTime, $startTime, $startTime, $endTime]);
        $result = $stmt->fetch();
        return $result['conflict_count'] > 0;
    }

    public function getGuideBadges($guideId)
    {
        $stmt = $this->db->prepare("SELECT * FROM guide_badges WHERE guide_id = ? ORDER BY awarded_at DESC");
        $stmt->execute([$guideId]);
        return $stmt->fetchAll();
    }

    public function getGuideLanguages($guideId)
    {
        $stmt = $this->db->prepare("
            SELECT gl.*, l.language_name, l.language_code 
            FROM guide_languages gl
            JOIN languages l ON gl.language_id = l.language_id
            WHERE gl.guide_id = ?
        ");
        $stmt->execute([$guideId]);
        return $stmt->fetchAll();
    }

    public function getGuideCertifications($guideId)
    {
        $stmt = $this->db->prepare("SELECT * FROM eco_certifications WHERE guide_id = ? ORDER BY issue_date DESC");
        $stmt->execute([$guideId]);
        return $stmt->fetchAll();
    }

    public function getGuideFieldReports($guideId, $limit = 10)
    {
        $stmt = $this->db->prepare("
            SELECT fr.*, t.tour_name 
            FROM field_reports fr
            LEFT JOIN tour t ON fr.tour_id = t.tour_id
            WHERE fr.guide_id = ?
            ORDER BY fr.created_at DESC
            LIMIT ?
        ");
        $stmt->execute([$guideId, $limit]);
        return $stmt->fetchAll();
    }

    public function getGuideShadowing($guideId, $role = 'all')
    {
        if ($role === 'senior') {
            $stmt = $this->db->prepare("
                SELECT gs.*, t.tour_name, u.name as trainee_name
                FROM guide_shadowing gs
                JOIN tour t ON gs.tour_id = t.tour_id
                JOIN users u ON gs.trainee_guide_id = u.user_id
                WHERE gs.senior_guide_id = ?
                ORDER BY gs.start_time
            ");
        } elseif ($role === 'trainee') {
            $stmt = $this->db->prepare("
                SELECT gs.*, t.tour_name, u.name as senior_name
                FROM guide_shadowing gs
                JOIN tour t ON gs.tour_id = t.tour_id
                JOIN users u ON gs.senior_guide_id = u.user_id
                WHERE gs.trainee_guide_id = ?
                ORDER BY gs.start_time
            ");
        } else {
            $stmt = $this->db->prepare("
                SELECT gs.*, t.tour_name, 
                       u1.name as senior_name, u2.name as trainee_name
                FROM guide_shadowing gs
                JOIN tour t ON gs.tour_id = t.tour_id
                JOIN users u1 ON gs.senior_guide_id = u1.user_id
                JOIN users u2 ON gs.trainee_guide_id = u2.user_id
                WHERE gs.senior_guide_id = ? OR gs.trainee_guide_id = ?
                ORDER BY gs.start_time
            ");
            $stmt->execute([$guideId, $guideId]);
            return $stmt->fetchAll();
        }
        $stmt->execute([$guideId]);
        return $stmt->fetchAll();
    }

    public function getAvailableGuidesForShadowing($excludeGuideId)
    {
        $stmt = $this->db->prepare("
            SELECT g.guide_id, u.name, g.years_of_experience, g.sustainability_score
            FROM guide g
            JOIN users u ON g.guide_id = u.user_id
            WHERE g.guide_id != ? AND g.status = 'verified'
            ORDER BY g.years_of_experience DESC
        ");
        $stmt->execute([$excludeGuideId]);
        return $stmt->fetchAll();
    }

    public function getBookingVouchers($bookingId)
    {
        $stmt = $this->db->prepare("
            SELECT b.booking_id, b.start_time, t.tour_name, tr.name as traveler_name, tr.nationality
            FROM booking b
            JOIN tour_version tv ON b.tour_version_id = tv.tour_version_id
            JOIN tour t ON tv.tour_id = t.tour_id
            JOIN traveler tr ON b.traveler_id = tr.traveler_id
            WHERE b.booking_id = ?
        ");
        $stmt->execute([$bookingId]);
        return $stmt->fetch();
    }

    public function getGuideBookings($guideId, $status = null)
    {
        $sql = "
            SELECT b.booking_id, b.start_time, b.end_time, b.status, b.total_price,
                   t.tour_name, l.location_name, u.name as traveler_name
            FROM booking b
            JOIN tour_version tv ON b.tour_version_id = tv.tour_version_id
            JOIN tour t ON tv.tour_id = t.tour_id
            LEFT JOIN location l ON t.location_id = l.location_id
            JOIN traveler tr ON b.traveler_id = tr.traveler_id
            JOIN users u ON tr.traveler_id = u.user_id
            WHERE b.guide_id = ?
        ";

        if ($status) {
            $sql .= " AND b.status = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$guideId, $status]);
        } else {
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$guideId]);
        }
        return $stmt->fetchAll();
    }

    public function getAvailableToursForSchedule($guideId)
    {
        $stmt = $this->db->prepare("
            SELECT t.tour_id, t.tour_name, tv.tour_version_id, tv.price_per_person, tv.max_capacity
            FROM tour t
            JOIN tour_version tv ON t.tour_id = tv.tour_id
            WHERE t.guide_id = ? AND t.status = 'active' AND tv.is_active = 1
        ");
        $stmt->execute([$guideId]);
        return $stmt->fetchAll();
    }

    public function verifyVoucher($bookingId, $travelerId)
    {
        $stmt = $this->db->prepare("
            UPDATE booking 
            SET status = 'confirmed' 
            WHERE booking_id = ? AND traveler_id = ? AND status = 'pending'
        ");
        return $stmt->execute([$bookingId, $travelerId]);
    }

    public function getTourVersions($tourId)
    {
        $stmt = $this->db->prepare("
            SELECT * FROM tour_version 
            WHERE tour_id = ? 
            ORDER BY created_at DESC
        ");
        $stmt->execute([$tourId]);
        return $stmt->fetchAll();
    }

    public function searchTours($query, $locationId = null)
    {
        $sql = "
            SELECT t.tour_id, t.tour_name, t.tour_type, t.status,
                   l.location_name, l.country,
                   tv.price_per_person, tv.max_capacity
            FROM tour t
            JOIN location l ON t.location_id = l.location_id
            JOIN tour_version tv ON t.tour_id = tv.tour_id
            WHERE t.status = 'active' AND tv.is_active = 1
        ";
        $params = [];

        if ($query) {
            $sql .= " AND t.tour_name LIKE ?";
            $params[] = "%$query%";
        }
        if ($locationId) {
            $sql .= " AND t.location_id = ?";
            $params[] = $locationId;
        }

        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    public function getNumberOfGuides(): int
    {
        $stmt = $this->db->query("SELECT COUNT(*) as total FROM guide;");
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }



}