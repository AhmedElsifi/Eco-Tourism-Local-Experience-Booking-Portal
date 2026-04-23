<?php

session_start();
require_once __DIR__ . "/../models/GuideModel.php";
require_once __DIR__ . "/../models/TourModel.php";
require_once __DIR__ . "/../models/WalletModel.php";
require_once __DIR__ . "/../models/CertificationModel.php";
require_once __DIR__ . "/../models/FieldReportModel.php";

class GuideController
{
    private $guideModel;
    private $tourModel;
    private $walletModel;
    private $certificationModel;
    private $fieldReportModel;
    private $db;

    public function __construct()
    {
        global $connect;
        $this->db = $connect;
        $this->guideModel = new GuideModel();
        $this->tourModel = new TourModel();
        $this->walletModel = new WalletModel();
        $this->certificationModel = new CertificationModel();
        $this->fieldReportModel = new FieldReportModel();
    }

    private function requireLogin()
    {
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'guide') {
            header("Location: ../views/guest/login.php");
            exit;
        }
        return $_SESSION['guide_id'] ?? $_SESSION['user_id'];
    }

    public function index()
    {
        $guideId = $this->requireLogin();
        $guide = $this->guideModel->getGuideById($guideId);
        $wallet = $this->guideModel->getGuideWallet($guideId);
        $tours = $this->guideModel->getGuideTours($guideId);
        
        include __DIR__ . "/../views/guide/guide_dashboard.php";
    }

    public function dashboard()
    {
        $this->index();
    }

    public function schedule()
    {
        $guideId = $this->requireLogin();
        
        $startDate = $_GET['start'] ?? date('Y-m-01');
        $endDate = $_GET['end'] ?? date('Y-m-t');
        
        $schedule = $this->guideModel->getGuideSchedule($guideId, $startDate, $endDate);
        $availableTours = $this->guideModel->getAvailableToursForSchedule($guideId);
        
        include __DIR__ . "/../views/guide/guide_schedule_management.php";
    }

    public function earnings()
    {
        $guideId = $this->requireLogin();
        
        $wallet = $this->walletModel->getWallet($guideId);
        $withdrawals = $this->walletModel->getWithdrawalRequests($guideId);
        
        include __DIR__ . "/../views/guide/earnings_payouts.php";
    }

    public function createExperience()
    {
        $guideId = $this->requireLogin();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tourId = $this->tourModel->createTour($guideId, $_POST);
            if ($tourId) {
                $this->tourModel->createTourVersion($tourId, $_POST);
                header("Location: tour_management_view.php?id=" . $tourId);
                exit;
            }
        }
        
        $locations = $this->tourModel->getLocations();
        include __DIR__ . "/../views/guide/create_new_experience.php";
    }

    public function tourDetail()
    {
        $guideId = $this->requireLogin();
        $tourId = $_GET['id'] ?? null;
        
        if (!$tourId) {
            header("Location: guide_dashboard.php");
            exit;
        }
        
        $tour = $this->tourModel->getTourById($tourId);
        $versions = $this->tourModel->getTourVersions($tourId);
        $impactTags = $this->tourModel->getImpactTags($tourId);
        $itineraries = $this->tourModel->getItineraries($tourId);
        
        include __DIR__ . "/../views/guide/tour_management_view.php";
    }

    public function postFieldReport()
    {
        $guideId = $this->requireLogin();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tourId = $_POST['tour_id'] ?? null;
            $content = $_POST['report_content'] ?? '';
            
            $result = $this->fieldReportModel->createFieldReport($guideId, $content, $tourId);
            if ($result['success']) {
                header("Location: guide_dashboard.php?success=report_submitted");
                exit;
            }
        }
        
        $reports = $this->fieldReportModel->getFieldReports($guideId);
        include __DIR__ . "/../views/guide/post_field_report.php";
    }

    // Function 9: Eco-Certification Audit Trail - Upload and renew sustainability certificates
    public function uploadCertification()
    {
        $guideId = $this->requireLogin();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_FILES['certificate'])) {
            $file = $_FILES['certificate'];
            $uploadDir = __DIR__ . "/../../public/uploads/certifications/";
            
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            
            $fileName = $guideId . '_' . time() . '_' . basename($file['name']);
            $filePath = '/public/uploads/certifications/' . $fileName;
            
            if (move_uploaded_file($file['tmp_name'], __DIR__ . "/../../" . $filePath)) {
                $result = $this->certificationModel->uploadCertification(
                    $guideId,
                    $_POST['certificate_name'] ?? 'Eco Certification',
                    $filePath,
                    $_POST['issue_date'] ?? null,
                    $_POST['expiry_date'] ?? null
                );
                
                if ($result['success']) {
                    echo json_encode(['success' => true, 'message' => 'Certification uploaded successfully']);
                } else {
                    echo json_encode(['success' => false, 'message' => $result['message']]);
                }
            } else {
                echo json_encode(['success' => false, 'message' => 'File upload failed']);
            }
            exit;
        }
        
        $certifications = $this->certificationModel->getGuideCertifications($guideId);
        include __DIR__ . "/../views/guide/certifications.php";
    }

    // Function 9: Renew Certification
    public function renewCertification()
    {
        $guideId = $this->requireLogin();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $certId = $_POST['cert_id'] ?? null;
            $file = $_FILES['certificate'] ?? null;
            
            if (!$certId || empty($file['name'])) {
                echo json_encode(['success' => false, 'message' => 'Missing required fields']);
                exit;
            }
            
            $uploadDir = __DIR__ . "/../../public/uploads/certifications/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            
            $fileName = $guideId . '_renew_' . time() . '_' . basename($file['name']);
            $filePath = '/public/uploads/certifications/' . $fileName;
            
            if (move_uploaded_file($file['tmp_name'], __DIR__ . "/../../" . $filePath)) {
                $result = $this->certificationModel->renewCertification(
                    $certId,
                    $filePath,
                    $_POST['expiry_date']
                );
                echo json_encode($result);
            } else {
                echo json_encode(['success' => false, 'message' => 'File upload failed']);
            }
            exit;
        }
    }

    // Function 2: Dynamic Impact-Tag Generator
    public function manageImpactTags()
    {
        $guideId = $this->requireLogin();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tourId = $_POST['tour_id'] ?? null;
            $action = $_POST['action'] ?? 'add';
            $tagName = $_POST['tag_name'] ?? '';
            
            if (!$tourId || !$tagName) {
                echo json_encode(['success' => false, 'message' => 'Missing required fields']);
                exit;
            }
            
            if ($action === 'add') {
                $result = $this->tourModel->addImpactTag($tourId, $tagName);
            } else {
                $result = $this->tourModel->removeImpactTag($tourId, $tagName);
            }
            
            echo json_encode(['success' => $result]);
            exit;
        }
    }

    // Function 12: Language Proficiency Verification
    public function languageVerification()
    {
        $guideId = $this->requireLogin();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $languageId = $_POST['language_id'] ?? null;
            $certificateName = $_POST['certificate_name'] ?? '';
            $file = $_FILES['certificate'] ?? null;
            
            if (!$languageId) {
                echo json_encode(['success' => false, 'message' => 'Language required']);
                exit;
            }
            
            $filePath = null;
            if (!empty($file['name'])) {
                $uploadDir = __DIR__ . "/../../public/uploads/language_certifications/";
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                
                $fileName = $guideId . '_lang_' . $languageId . '_' . time() . '_' . basename($file['name']);
                $filePath = '/public/uploads/language_certifications/' . $fileName;
                
                move_uploaded_file($file['tmp_name'], __DIR__ . "/../../" . $filePath);
            }
            
            $result = $this->certificationModel->uploadLanguageCertification(
                $guideId,
                $languageId,
                $certificateName,
                $filePath,
                $_POST['issue_date'] ?? null,
                $_POST['expiry_date'] ?? null
            );
            
            echo json_encode($result);
            exit;
        }
        
        $languages = $this->certificationModel->getLanguages();
        $languageCerts = $this->certificationModel->getLanguageCertifications($guideId);
        $guideLanguages = $this->guideModel->getGuideLanguages($guideId);
        
        include __DIR__ . "/../views/guide/language_verification.php";
    }

    // Function 14: Dynamic Multilingual Content Sync - Update itineraries
    public function updateItinerary()
    {
        $guideId = $this->requireLogin();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tourId = $_POST['tour_id'] ?? null;
            $languageId = $_POST['language_id'] ?? null;
            $content = $_POST['content'] ?? '';
            
            if (!$tourId || !$languageId || !$content) {
                echo json_encode(['success' => false, 'message' => 'Missing required fields']);
                exit;
            }
            
            $result = $this->tourModel->updateItinerary($tourId, $languageId, $content);
            echo json_encode(['success' => $result, 'message' => 'Itinerary updated. Translation flags triggered.']);
            exit;
        }
    }

    // Function 15: Guide Availability Conflict Resolver
    public function updateAvailability()
    {
        $guideId = $this->requireLogin();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $startTime = $_POST['start_time'] ?? null;
            $endTime = $_POST['end_time'] ?? null;
            
            if (!$startTime || !$endTime) {
                echo json_encode(['success' => false, 'message' => 'Start and end time required']);
                exit;
            }
            
            $hasConflict = $this->guideModel->checkScheduleConflict($guideId, $startTime, $endTime);
            
            if ($hasConflict) {
                echo json_encode([
                    'success' => false, 
                    'message' => 'Conflict detected! This time slot overlaps with an existing booking.',
                    'conflict' => true
                ]);
            } else {
                echo json_encode(['success' => true, 'message' => 'Time slot available']);
            }
            exit;
        }
    }

    // Function 16: Expertise-Based Badge System
    public function badges()
    {
        $guideId = $this->requireLogin();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $badge = $_POST['badge'] ?? '';
            
            if (!$badge) {
                echo json_encode(['success' => false, 'message' => 'Badge type required']);
                exit;
            }
            
            global $connect;
            $stmt = $connect->prepare("
                INSERT INTO guide_badges (guide_id, badge) VALUES (?, ?)
            ");
            $stmt->execute([$guideId, $badge]);
            
            echo json_encode(['success' => true, 'message' => 'Badge awarded']);
            exit;
        }
        
        $badges = $this->guideModel->getGuideBadges($guideId);
        include __DIR__ . "/../views/guide/badges.php";
    }

    // Function 17: Profile Shadowing for Trainees
    public function shadowing()
    {
        $guideId = $this->requireLogin();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tourId = $_POST['tour_id'] ?? null;
            $role = $_POST['role'] ?? 'senior';
            $targetGuideId = $_POST['target_guide_id'] ?? null;
            
            if (!$tourId) {
                echo json_encode(['success' => false, 'message' => 'Tour required']);
                exit;
            }
            
            if ($role === 'senior' && !$targetGuideId) {
                echo json_encode(['success' => false, 'message' => 'Trainee guide required']);
                exit;
            }
            
            global $connect;
            $stmt = $connect->prepare("
                INSERT INTO guide_shadowing (tour_id, senior_guide_id, trainee_guide_id, start_time, end_time, status)
                VALUES (?, ?, ?, NOW(), DATE_ADD(NOW(), INTERVAL 1 DAY), 'scheduled')
            ");
            
            if ($role === 'senior') {
                $stmt->execute([$tourId, $guideId, $targetGuideId]);
            } else {
                $stmt->execute([$tourId, $targetGuideId, $guideId]);
            }
            
            echo json_encode(['success' => true, 'message' => 'Shadowing request created']);
            exit;
        }
        
        $availableGuides = $this->guideModel->getAvailableGuidesForShadowing($guideId);
        $shadowings = $this->guideModel->getGuideShadowing($guideId);
        
        include __DIR__ . "/../views/guide/shadowing.php";
    }

    // Function 18: Mobile In-Field Profile Updater - Already handled in postFieldReport()

    // Function 20: Withdrawal Request Processor
    public function requestWithdrawal()
    {
        $guideId = $this->requireLogin();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $amount = $_POST['amount'] ?? 0;
            
            if ($amount <= 0) {
                echo json_encode(['success' => false, 'message' => 'Invalid amount']);
                exit;
            }
            
            $result = $this->walletModel->requestWithdrawal($guideId, $amount);
            echo json_encode($result);
            exit;
        }
    }

    // Function 22: Biometric Identity Verification Simulation
    public function verifyIdentity()
    {
        $guideId = $this->requireLogin();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $file = $_FILES['identity_document'] ?? null;
            
            if (empty($file['name'])) {
                echo json_encode(['success' => false, 'message' => 'Identity document required']);
                exit;
            }
            
            $uploadDir = __DIR__ . "/../../public/uploads/identity/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            
            $fileName = $guideId . '_identity_' . time() . '_' . basename($file['name']);
            $filePath = '/public/uploads/identity/' . $fileName;
            
            if (move_uploaded_file($file['tmp_name'], __DIR__ . "/../../" . $filePath)) {
                $stmt = $this->db->prepare("
                    UPDATE guide SET identity_verification_path = ?, verified_at = NOW() WHERE guide_id = ?
                ");
                $stmt->execute([$filePath, $guideId]);
                
                echo json_encode(['success' => true, 'message' => 'Identity verification submitted']);
            } else {
                echo json_encode(['success' => false, 'message' => 'File upload failed']);
            }
            exit;
        }
        
        include __DIR__ . "/../views/guide/identity_verification.php";
    }

    // Function 31: Voucher Generation & Validation
    public function validateVoucher()
    {
        $guideId = $this->requireLogin();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $bookingId = $_POST['booking_id'] ?? null;
            $travelerId = $_POST['traveler_id'] ?? null;
            $voucherCode = $_POST['voucher_code'] ?? null;
            
            if (!$bookingId || !$travelerId) {
                echo json_encode(['success' => false, 'message' => 'Invalid voucher data']);
                exit;
            }
            
            $result = $this->guideModel->verifyVoucher($bookingId, $travelerId);
            
            if ($result) {
                echo json_encode(['success' => true, 'message' => 'Traveler checked in successfully']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Invalid voucher or already verified']);
            }
            exit;
        }
        
        $bookings = $this->guideModel->getGuideBookings($guideId, 'confirmed');
        include __DIR__ . "/../views/guide/voucher_validation.php";
    }

    // Function 40: Marketplace Search Index Rebuilder - Update tour availability and price
    public function updateTourListing()
    {
        $guideId = $this->requireLogin();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $versionId = $_POST['version_id'] ?? null;
            $price = $_POST['price_per_person'] ?? null;
            $maxCapacity = $_POST['max_capacity'] ?? null;
            $isActive = $_POST['is_active'] ?? 1;
            
            if (!$versionId) {
                echo json_encode(['success' => false, 'message' => 'Tour version required']);
                exit;
            }
            
            $data = [];
            if ($price !== null) $data['price_per_person'] = $price;
            if ($maxCapacity !== null) $data['max_capacity'] = $maxCapacity;
            if ($isActive !== null) $data['is_active'] = $isActive;
            
            if (empty($data)) {
                echo json_encode(['success' => false, 'message' => 'No data to update']);
                exit;
            }
            
            $result = $this->tourModel->updateTourVersion($versionId, $data);
            echo json_encode(['success' => $result, 'message' => 'Listing updated. Search index rebuilt.']);
            exit;
        }
    }
}

$controller = new GuideController();
$action = $_GET['action'] ?? 'index';
$controller->$action();