<?php

require_once __DIR__ . '/../models/TravelerModel.php';

class TravelerController
{
    private $model;
    private $connect;

    public function __construct($db)
    {
        $this->connect = $db;
        $this->model = new TravelerModel($db);
    }

    public function dashboard()
    {
        $travelerId = $_SESSION['user_id'] ?? 0;
        if (!$travelerId || $_SESSION['role'] !== 'traveler') {
            header('Location: /eco_full/app/views/guest/login_page.php');
            exit;
        }

        $traveler = $this->model->getTravelerById($travelerId);
        $bookings = $this->model->getTravelerBookings($travelerId);
        $availableTours = $this->model->getAvailableTours($travelerId);
        $carbonOffsets = $this->model->getTravelerCarbonOffsets($travelerId);
        $waitlist = $this->model->getTravelerWaitlist($travelerId);
        $reviews = $this->model->getTravelerReviews($travelerId);
        $disputes = $this->model->getTravelerDisputes($travelerId);

        return [
            'traveler' => $traveler,
            'bookings' => $bookings,
            'availableTours' => $availableTours,
            'carbonOffsets' => $carbonOffsets,
            'waitlist' => $waitlist,
            'reviews' => $reviews,
            'disputes' => $disputes
        ];
    }

    public function carbonOffset()
    {
        $travelerId = $_SESSION['user_id'] ?? 0;
        $bookingId = $_POST['booking_id'] ?? 0;
        $projectId = $_POST['project_id'] ?? 0;
        $amountTons = floatval($_POST['amount_tons'] ?? 0);

        $errors = [];
        if ($bookingId == 0) $bookingId = 0;
        if (!$projectId) $errors['project_id'] = 'Project is required';
        if ($amountTons <= 0) $errors['amount_tons'] = 'Amount must be greater than 0';

        $projects = $this->model->getCarbonOffsetProjects();
        $selectedProject = null;
        foreach ($projects as $p) {
            if ($p['project_id'] == $projectId) {
                $selectedProject = $p;
                break;
            }
        }

        if (!$selectedProject) $errors['project_id'] = 'Invalid project selected';

        if ($selectedProject && $amountTons > 0) {
            $costAmount = $amountTons * $selectedProject['cost_per_ton'];
        }

        if (empty($errors) && $_SERVER['REQUEST_METHOD'] === 'POST' && $selectedProject && $amountTons > 0) {
            $this->model->purchaseCarbonOffset($bookingId, $travelerId, $projectId, $amountTons, $costAmount);
            return ['success' => true, 'message' => 'Carbon offset purchased successfully'];
        }

        return ['errors' => $errors, 'projects' => $projects, 'booking_id' => $bookingId];
    }

    public function bookTour()
    {
        $travelerId = $_SESSION['user_id'] ?? 0;
        $tourVersionId = $_POST['tour_version_id'] ?? 0;
        $numPeople = intval($_POST['num_people'] ?? 1);
        $startDate = $_POST['start_date'] ?? '';
        $endDate = $_POST['end_date'] ?? '';
        $bookingType = $_POST['booking_type'] ?? 'instant';
        $addons = $_POST['addons'] ?? [];

        $errors = [];
        if (!$tourVersionId) $errors['tour_version_id'] = 'Tour is required';
        if (!$startDate) $errors['start_date'] = 'Start date is required';
        if (!$endDate) $errors['end_date'] = 'End date is required';
        if ($numPeople < 1) $errors['num_people'] = 'At least 1 person required';

        if (empty($errors) && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $stmt = $this->connect->prepare("SELECT tv.*, t.guide_id, t.tour_id FROM tour_version tv JOIN tour t ON tv.tour_id = t.tour_id WHERE tv.tour_version_id = ?");
            $stmt->execute([$tourVersionId]);
            $tourVersion = $stmt->fetch();

            if ($tourVersion && $numPeople > $tourVersion['max_capacity']) {
                $errors['num_people'] = 'Exceeds maximum capacity of ' . $tourVersion['max_capacity'];
            }

            $conflicts = $this->model->checkItineraryConflict($travelerId, $startDate, $endDate);
            if (!empty($conflicts)) {
                $errors['schedule'] = 'You have a scheduling conflict with: ' . $conflicts[0]['tour_name'];
            }

            if (empty($errors)) {
                $groupPricing = $this->model->calculateGroupDiscount($numPeople, $tourVersion['price_per_person']);
                $totalPrice = $groupPricing['total_price'];

                $bookingId = $this->model->createBooking($travelerId, $tourVersionId, $tourVersion['guide_id'], $startDate, $endDate, $totalPrice, $bookingType);

                foreach ($addons as $addonId) {
                    $stmt = $this->connect->prepare("SELECT * FROM addon WHERE addon_id = ?");
                    $stmt->execute([$addonId]);
                    $addon = $stmt->fetch();
                    if ($addon) {
                        $this->model->addBookingAddon($bookingId, $addonId, 1, $addon['price']);
                    }
                }

                $this->model->generateVoucher($bookingId);
                $this->model->logInteraction($travelerId, $tourVersion['tour_id'], 'booking');

                return ['success' => true, 'booking_id' => $bookingId, 'group_pricing' => $groupPricing];
            }
        }

        $availableTours = $this->model->getAvailableTours($travelerId);
        return ['errors' => $errors, 'availableTours' => $availableTours];
    }

    public function cancelBooking()
    {
        $travelerId = $_SESSION['user_id'] ?? 0;
        $bookingId = $_POST['booking_id'] ?? 0;

        $errors = [];
        if (!$bookingId) $errors['booking_id'] = 'Booking is required';

        $booking = $this->model->getBookingById($bookingId, $travelerId);
        if (!$booking) $errors['booking_id'] = 'Booking not found';

        if ($booking && in_array($booking['status'], ['cancelled', 'completed'])) {
            $errors['booking_id'] = 'Cannot cancel this booking';
        }

        if (empty($errors) && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $refund = $this->model->cancelBooking($bookingId, $travelerId);
            return ['success' => true, 'refund' => $refund, 'message' => "Booking cancelled. Refund: $" . number_format($refund, 2)];
        }

        $policies = $this->model->getCancellationPolicy();
        return ['errors' => $errors, 'booking' => $booking, 'policies' => $policies];
    }

    public function waitlist()
    {
        $travelerId = $_SESSION['user_id'] ?? 0;
        $action = $_POST['action'] ?? '';

        if ($action === 'join' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $tourVersionId = $_POST['tour_version_id'] ?? 0;
            $numPeople = intval($_POST['num_people'] ?? 1);

            $errors = [];
            if (!$tourVersionId) $errors['tour_version_id'] = 'Tour is required';

            if (empty($errors)) {
                $waitlistId = $this->model->joinWaitlist($travelerId, $tourVersionId, $numPeople);
                return ['success' => true, 'waitlist_id' => $waitlistId, 'message' => 'Added to waitlist'];
            }
            return ['errors' => $errors];
        }

        if ($action === 'accept' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $waitlistId = $_POST['waitlist_id'] ?? 0;
            $result = $this->model->acceptWaitlistOffer($waitlistId, $travelerId);

            if ($result) {
                return ['success' => true, 'message' => 'Spot accepted! Complete your booking.'];
            }
            return ['error' => 'Offer expired or invalid'];
        }

        if ($action === 'cancel' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $waitlistId = $_POST['waitlist_id'] ?? 0;
            $this->model->cancelWaitlist($waitlistId, $travelerId);
            return ['success' => true, 'message' => 'Removed from waitlist'];
        }

        $waitlist = $this->model->getTravelerWaitlist($travelerId);
        return ['waitlist' => $waitlist];
    }

    public function voucher()
    {
        $travelerId = $_SESSION['user_id'] ?? 0;
        $bookingId = $_GET['booking_id'] ?? 0;

        $voucher = $this->model->getBookingVoucher($bookingId);

        if (!$voucher) {
            $voucher = $this->model->generateVoucher($bookingId);
            $voucher = $this->model->getBookingVoucher($bookingId);
        }

        return ['voucher' => $voucher, 'booking_id' => $bookingId];
    }

    public function review()
    {
        $travelerId = $_SESSION['user_id'] ?? 0;
        $bookingId = $_POST['booking_id'] ?? 0;

        $errors = [];
        if (!$bookingId) $errors['booking_id'] = 'Booking is required';

        $ecoRating = intval($_POST['eco_friendliness_rating'] ?? 0);
        $culturalRating = intval($_POST['cultural_respect_rating'] ?? 0);
        $overallRating = intval($_POST['overall_rating'] ?? 0);

        if ($ecoRating < 1 || $ecoRating > 5) $errors['eco_friendliness_rating'] = 'Rating must be 1-5';
        if ($culturalRating < 1 || $culturalRating > 5) $errors['cultural_respect_rating'] = 'Rating must be 1-5';
        if ($overallRating < 1 || $overallRating > 5) $errors['overall_rating'] = 'Rating must be 1-5';

        if (empty($errors) && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $reviewId = $this->model->createReview($bookingId, $travelerId, [
                'eco_friendliness_rating' => $ecoRating,
                'cultural_respect_rating' => $culturalRating,
                'overall_rating' => $overallRating,
                'eco_friendliness_comment' => $_POST['eco_friendliness_comment'] ?? '',
                'cultural_respect_comment' => $_POST['cultural_respect_comment'] ?? '',
                'general_comment' => $_POST['general_comment'] ?? ''
            ]);
            return ['success' => true, 'review_id' => $reviewId, 'message' => 'Review submitted'];
        }

        $booking = $this->model->getBookingById($bookingId, $travelerId);
        $reviews = $this->model->getTravelerReviews($travelerId);
        return ['errors' => $errors, 'booking' => $booking, 'reviews' => $reviews];
    }

    public function dispute()
    {
        $travelerId = $_SESSION['user_id'] ?? 0;
        $action = $_POST['action'] ?? '';

        if ($action === 'create' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $bookingId = $_POST['booking_id'] ?? 0;
            $reason = trim($_POST['reason'] ?? '');
            $evidenceText = trim($_POST['evidence_text'] ?? '');
            $evidencePhotos = $_POST['evidence_photos'] ?? '';

            $errors = [];
            if (!$bookingId) $errors['booking_id'] = 'Booking is required';
            if (!$reason) $errors['reason'] = 'Reason is required';

            if (empty($errors)) {
                $disputeId = $this->model->createDispute($bookingId, $travelerId, $reason, $evidenceText, $evidencePhotos);
                return ['success' => true, 'dispute_id' => $disputeId, 'message' => 'Dispute submitted'];
            }
            return ['errors' => $errors];
        }

        $disputes = $this->model->getTravelerDisputes($travelerId);
        return ['disputes' => $disputes];
    }

    public function addons()
    {
        $travelerId = $_SESSION['user_id'] ?? 0;
        $bookingId = $_POST['booking_id'] ?? 0;
        $addonId = $_POST['addon_id'] ?? 0;
        $quantity = intval($_POST['quantity'] ?? 1);

        $errors = [];
        if (!$bookingId) $errors['booking_id'] = 'Booking is required';
        if (!$addonId) $errors['addon_id'] = 'Addon is required';
        if ($quantity < 1) $errors['quantity'] = 'Quantity must be at least 1';

        $booking = $this->model->getBookingById($bookingId, $travelerId);
        if ($booking && $booking['status'] !== 'confirmed') {
            $errors['booking_id'] = 'Cannot modify completed or cancelled booking';
        }

        if (empty($errors) && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $stmt = $this->connect->prepare("SELECT * FROM addon WHERE addon_id = ?");
            $stmt->execute([$addonId]);
            $addon = $stmt->fetch();

            if ($addon) {
                $this->model->addBookingAddon($bookingId, $addonId, $quantity, $addon['price']);
                return ['success' => true, 'message' => 'Addon added to booking'];
            }
            $errors['addon_id'] = 'Addon not found';
        }

        $addons = $this->model->getTourAddons($booking['tour_version_id'] ?? 0);
        return ['errors' => $errors, 'addons' => $addons, 'booking' => $booking];
    }

    public function checkConflicts()
    {
        $travelerId = $_SESSION['user_id'] ?? 0;
        $startTime = $_POST['start_time'] ?? '';
        $endTime = $_POST['end_time'] ?? '';
        $locationId = $_POST['location_id'] ?? 0;

        $timeConflicts = $this->model->checkItineraryConflict($travelerId, $startTime, $endTime);
        $geoConflicts = $locationId ? $this->model->checkGeographicOverlap($travelerId, $locationId, $startTime, $endTime) : [];

        return [
            'time_conflicts' => $timeConflicts,
            'geographic_conflicts' => $geoConflicts,
            'has_conflicts' => !empty($timeConflicts) || !empty($geoConflicts)
        ];
    }

    public function escrow()
    {
        $travelerId = $_SESSION['user_id'] ?? 0;
        $bookingId = $_POST['booking_id'] ?? 0;

        $booking = $this->model->getBookingById($bookingId, $travelerId);
        if (!$booking) {
            return ['error' => 'Booking not found'];
        }

        $escrowBalance = $this->model->getEscrowBalance($bookingId);

        if ($booking['status'] === 'completed' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->releaseEscrow($bookingId);
            return ['success' => true, 'message' => 'Funds released to guide'];
        }

        return ['booking' => $booking, 'escrow_balance' => $escrowBalance];
    }

    public function topExperiences()
    {
        return $this->model->getTopEcoExperiences();
    }
    
    public function getProjects()
    {
        return $this->model->getCarbonOffsetProjects();
    }
    
    public function getPolicies()
    {
        return $this->model->getCancellationPolicy();
    }
    
    public function getAvailableTours()
    {
        $travelerId = $_SESSION['user_id'] ?? 0;
        return $this->model->getAvailableTours($travelerId);
    }
    
    public function getTourAddons($tourVersionId)
    {
        return $this->model->getTourAddons($tourVersionId);
    }
    
    public function getTourById($tourVersionId)
    {
        $stmt = $this->connect->prepare("SELECT tv.*, t.*, l.location_name, l.country, l.region, u.name as guide_name FROM tour_version tv JOIN tour t ON tv.tour_id = t.tour_id LEFT JOIN location l ON t.location_id = l.location_id JOIN guide g ON t.guide_id = g.guide_id JOIN users u ON g.guide_id = u.user_id WHERE tv.tour_version_id = ? AND tv.is_active = 1");
        $stmt->execute([$tourVersionId]);
        return $stmt->fetch();
    }
}