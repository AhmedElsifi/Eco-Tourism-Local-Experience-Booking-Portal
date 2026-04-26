<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
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
    public function processAction()
    {
        $guideId = $this->requireLogin();
        $action = $_POST['action'] ?? '';
        $errors = [];
        $message = '';
        $error = '';
        
        if ($action === 'create_tour') {
            $tourName = $_POST['tour_name'] ?? '';
            $tourType = $_POST['tour_type'] ?? 'eco';
            $locationId = $_POST['location_id'] ?? 1;
            $pricePerPerson = $_POST['price_per_person'] ?? 0;
            $maxCapacity = $_POST['max_capacity'] ?? 10;
            $carbonFootprint = $_POST['carbon_footprint'] ?? null;
            
            if (empty($tourName)) {
                $errors['tour_name'] = 'Tour name is required';
            } elseif (strlen($tourName) < 3) {
                $errors['tour_name'] = 'Tour name must be at least 3 characters';
            } elseif (empty($pricePerPerson) || $pricePerPerson <= 0) {
                $errors['price_per_person'] = 'Price is required';
            }
            
            if (empty($errors)) {
                try {
                    $stmt = $this->db->prepare("INSERT INTO tour (tour_name, guide_id, location_id, tour_type, status, carbon_footprint) VALUES (?, ?, ?, ?, 'draft', ?)");
                    $stmt->execute([$tourName, $guideId, $locationId, $tourType, $carbonFootprint]);
                    $tourId = $this->db->lastInsertId();
                    
                    $stmt = $this->db->prepare("INSERT INTO tour_version (tour_id, version_name, price_per_person, max_capacity, is_active) VALUES (?, 'v1', ?, ?, 1)");
                    $stmt->execute([$tourId, $pricePerPerson, $maxCapacity]);
                    
                    $message = "Tour created successfully! Tour ID: $tourId";
                } catch (Exception $e) {
                    $error = 'Error: ' . $e->getMessage();
                }
            }
            return ['message' => $message, 'errors' => $errors, 'error' => $error];
        }
        
        if ($action === 'withdraw') {
            $amount = floatval($_POST['amount'] ?? 0);
            if ($amount <= 0) {
                $errors['amount'] = 'Please enter a valid amount';
            } elseif ($amount > 10000) {
                $errors['amount'] = 'Amount exceeds maximum limit';
            } elseif ($guideId) {
                $stmt = $this->db->prepare("SELECT * FROM guide_wallet WHERE guide_id = ?");
                $stmt->execute([$guideId]);
                $wallet = $stmt->fetch();
                if ($wallet && $wallet['available_balance'] >= $amount) {
                    $stmt = $this->db->prepare("INSERT INTO withdrawal_requests (guide_id, amount, status) VALUES (?, ?, 'pending')");
                    $stmt->execute([$guideId, $amount]);
                    $stmt = $this->db->prepare("UPDATE guide_wallet SET available_balance = available_balance - ?, pending_balance = pending_balance + ? WHERE guide_id = ?");
                    $stmt->execute([$amount, $amount, $guideId]);
                    $message = "Withdrawal request submitted for $$amount";
                } else {
                    $errors['amount'] = 'Insufficient balance';
                }
            }
            return ['message' => $message, 'errors' => $errors];
        }
        
        if ($action === 'post_report') {
            $content = trim($_POST['report_content'] ?? '');
            $tourId = $_POST['tour_id'] ?? null;
            if (empty($content)) {
                $errors['report_content'] = 'Please enter report content';
            } elseif (strlen($content) < 10) {
                $errors['report_content'] = 'Report must be at least 10 characters';
            } elseif (strlen($content) > 2000) {
                $errors['report_content'] = 'Report must be less than 2000 characters';
            } elseif ($guideId) {
                $stmt = $this->db->prepare("INSERT INTO field_reports (guide_id, tour_id, content_text) VALUES (?, ?, ?)");
                $stmt->execute([$guideId, $tourId ?: null, $content]);
                $message = 'Field report posted successfully';
            }
            return ['message' => $message, 'errors' => $errors];
        }
        
        if ($action === 'upload_cert') {
            $certName = trim($_POST['certificate_name'] ?? '');
            $issueDate = $_POST['issue_date'] ?? date('Y-m-d');
            $expiryDate = $_POST['expiry_date'] ?? null;
            if (empty($certName)) {
                $errors['certificate_name'] = 'Please enter certificate name';
            } elseif (strlen($certName) < 3) {
                $errors['certificate_name'] = 'Certificate name too short';
            } elseif ($guideId) {
                $stmt = $this->db->prepare("INSERT INTO eco_certifications (guide_id, certificate_name, status, issue_date, expiry_date) VALUES (?, ?, 'pending', ?, ?)");
                $stmt->execute([$guideId, $certName, $issueDate, $expiryDate]);
                $message = 'Certification uploaded (pending review)';
            }
            return ['message' => $message, 'errors' => $errors];
        }
        
        if ($action === 'upload_lang_cert') {
            $languageId = $_POST['language_id'] ?? 0;
            $certName = trim($_POST['certificate_name'] ?? '');
            if (!$languageId) {
                $errors['language_id'] = 'Please select a language';
            }
            if (empty($certName)) {
                $errors['lang_certificate_name'] = 'Please enter certificate name';
            } elseif ($guideId) {
                $stmt = $this->db->prepare("INSERT INTO language_certifications (guide_id, language_id, certificate_name, status, issue_date) VALUES (?, ?, ?, 'pending', CURDATE())");
                $stmt->execute([$guideId, $languageId, $certName]);
                $message = 'Language certification uploaded';
            }
            return ['message' => $message, 'errors' => $errors];
        }
        
        if ($action === 'add_impact_tag') {
            $tourId = $_POST['tour_id'] ?? 0;
            $tagName = $_POST['tag_name'] ?? '';
            if (!$tourId) {
                $errors['tag_tour_id'] = 'Please select a tour';
            }
            if (empty($tagName)) {
                $errors['tag_name'] = 'Please select a tag';
            } elseif ($guideId) {
                $stmt = $this->db->prepare("INSERT INTO tour_impact_tag (tour_id, tag_name) VALUES (?, ?)");
                $stmt->execute([$tourId, $tagName]);
                $message = "Impact tag '$tagName' added";
            }
            return ['message' => $message, 'errors' => $errors];
        }
        
        if ($action === 'remove_impact_tag') {
            $tourId = $_POST['tour_id'] ?? 0;
            $tagName = $_POST['tag_name'] ?? '';
            if ($tourId && $tagName) {
                $stmt = $this->db->prepare("DELETE FROM tour_impact_tag WHERE tour_id = ? AND tag_name = ?");
                $stmt->execute([$tourId, $tagName]);
                $message = "Impact tag '$tagName' removed";
            }
            return ['message' => $message, 'errors' => $errors];
        }
        
        if ($action === 'update_itinerary') {
            $tourId = $_POST['tour_id'] ?? 0;
            $languageId = $_POST['language_id'] ?? 1;
            $content = trim($_POST['content'] ?? '');
            if (!$tourId) {
                $errors['itin_tour_id'] = 'Please select a tour';
            }
            if (empty($content)) {
                $errors['itin_content'] = 'Please enter itinerary content';
            } elseif (strlen($content) < 20) {
                $errors['itin_content'] = 'Itinerary must be at least 20 characters';
            } elseif ($tourId) {
                $stmt = $this->db->prepare("INSERT INTO itinerary (tour_id, language_id, version, content) SELECT ?, ?, COALESCE(MAX(version), 0) + 1, ? FROM itinerary WHERE tour_id = ?");
                $stmt->execute([$tourId, $languageId, $content, $tourId]);
                $message = 'Itinerary updated (translation flags triggered)';
            }
            return ['message' => $message, 'errors' => $errors];
        }
        
        if ($action === 'claim_badge') {
            $badge = $_POST['badge'] ?? '';
            if (empty($badge)) {
                $errors['badge'] = 'Please select a badge';
            } elseif ($guideId) {
                $stmt = $this->db->prepare("INSERT INTO guide_badges (guide_id, badge) VALUES (?, ?)");
                $stmt->execute([$guideId, $badge]);
                $message = "Badge '$badge' earned!";
            }
            return ['message' => $message, 'errors' => $errors];
        }
        
        if ($action === 'request_shadow') {
            $tourId = $_POST['tour_id'] ?? 0;
            $role = $_POST['role'] ?? 'senior';
            $targetGuideId = $_POST['target_guide_id'] ?? 0;
            $startTime = $_POST['start_time'] ?? '';
            $endTime = $_POST['end_time'] ?? '';
            if (!$tourId) {
                $errors['shadow_tour_id'] = 'Please select a tour';
            }
            if (empty($startTime)) {
                $errors['shadow_start_time'] = 'Please select start date';
            }
            if (empty($endTime)) {
                $errors['shadow_end_time'] = 'Please select end date';
            }
            if ($targetGuideId == 0) {
                $targetGuideId = $guideId;
            }
            $seniorId = $role === 'senior' ? $guideId : $targetGuideId;
            $traineeId = $role === 'trainee' ? $guideId : $targetGuideId;
            if ($tourId && $guideId && $seniorId > 0 && $traineeId > 0 && empty($errors)) {
                try {
                    $stmt = $this->db->prepare("INSERT INTO guide_shadowing (tour_id, senior_guide_id, trainee_guide_id, start_time, end_time, status) VALUES (?, ?, ?, ?, ?, 'scheduled')");
                    $stmt->execute([$tourId, $seniorId, $traineeId, $startTime, $endTime]);
                    $message = 'Shadowing request submitted';
                } catch (Exception $e) {
                    $error = 'Error: ' . $e->getMessage();
                }
            }
            return ['message' => $message, 'errors' => $errors, 'error' => $error];
        }
        
        if ($action === 'verify_identity') {
            $docNumber = trim($_POST['doc_number'] ?? '');
            if (empty($docNumber)) {
                $errors['doc_number'] = 'Please enter document number';
            } elseif (strlen($docNumber) < 5) {
                $errors['doc_number'] = 'Document number too short';
            } elseif ($guideId) {
                $stmt = $this->db->prepare("UPDATE guide SET identity_verification_path = ?, verified_at = NOW() WHERE guide_id = ?");
                $stmt->execute([$docNumber, $guideId]);
                $message = 'Identity verification submitted (pending review)';
            }
            return ['message' => $message, 'errors' => $errors];
        }
        
        if ($action === 'validate_voucher') {
            $bookingId = $_POST['booking_id'] ?? 0;
            if (!$bookingId) {
                $errors['voucher_booking_id'] = 'Please enter booking ID';
            } else {
                $stmt = $this->db->prepare("UPDATE booking SET status = 'completed' WHERE booking_id = ? AND guide_id = ?");
                $stmt->execute([$bookingId, $guideId]);
                $message = 'Traveler checked in successfully';
            }
            return ['message' => $message, 'errors' => $errors];
        }
    }
    
    public function getTourById($tourId)
    {
        $stmt = $this->db->prepare("SELECT t.*, tv.tour_version_id, tv.price_per_person, tv.max_capacity, tv.is_active, l.location_name, l.country FROM tour t LEFT JOIN tour_version tv ON t.tour_id = tv.tour_id LEFT JOIN location l ON t.location_id = l.location_id WHERE t.tour_id = ?");
        $stmt->execute([$tourId]);
        return $stmt->fetch();
    }
    
    public function getGuideSchedule($startDate = null, $endDate = null)
    {
        $guideId = $this->requireLogin();
        $startDate = $startDate ?? date('Y-m-01');
        $endDate = $endDate ?? date('Y-m-t');
        
        $stmt = $this->db->prepare("
            SELECT b.*, t.tour_name, tr.traveler_id, u.name as traveler_name
            FROM booking b
            JOIN tour_version tv ON b.tour_version_id = tv.tour_version_id
            JOIN tour t ON tv.tour_id = t.tour_id
            LEFT JOIN traveler tr ON b.traveler_id = tr.traveler_id
            LEFT JOIN users u ON tr.traveler_id = u.user_id
            WHERE b.guide_id = ? AND b.start_time >= ? AND b.end_time <= ?
            ORDER BY b.start_time
        ");
        $stmt->execute([$guideId, $startDate, $endDate]);
        return $stmt->fetchAll();
    }
    
    public function getGuideWalletDetails()
    {
        $guideId = $this->requireLogin();
        $stmt = $this->db->prepare("SELECT * FROM guide_wallet WHERE guide_id = ?");
        $stmt->execute([$guideId]);
        return $stmt->fetch();
    }
    
    public function getWithdrawalRequests()
    {
        $guideId = $this->requireLogin();
        $stmt = $this->db->prepare("SELECT * FROM withdrawal_requests WHERE guide_id = ? ORDER BY requested_at DESC LIMIT 20");
        $stmt->execute([$guideId]);
        return $stmt->fetchAll();
    }
    
    public function getFieldReports()
    {
        $guideId = $this->requireLogin();
        $stmt = $this->db->prepare("SELECT fr.*, t.tour_name FROM field_reports fr LEFT JOIN tour t ON fr.tour_id = t.tour_id WHERE fr.guide_id = ? ORDER BY fr.created_at DESC LIMIT 20");
        $stmt->execute([$guideId]);
        return $stmt->fetchAll();
    }
    
    public function getGuideCertifications()
    {
        $guideId = $this->requireLogin();
        $stmt = $this->db->prepare("SELECT * FROM eco_certifications WHERE guide_id = ? ORDER BY issue_date DESC");
        $stmt->execute([$guideId]);
        return $stmt->fetchAll();
    }
    
    public function getGuideLanguages()
    {
        $stmt = $this->db->query("SELECT * FROM languages");
        return $stmt->fetchAll();
    }
    
    public function getTourImpactTags($tourId)
    {
        $stmt = $this->db->prepare("SELECT * FROM tour_impact_tag WHERE tour_id = ?");
        $stmt->execute([$tourId]);
        return $stmt->fetchAll();
    }
    
    public function getTourItinerary($tourId)
    {
        $stmt = $this->db->prepare("SELECT i.*, l.language_name FROM itinerary i LEFT JOIN languages l ON i.language_id = l.language_id WHERE i.tour_id = ? ORDER BY i.version DESC");
        $stmt->execute([$tourId]);
        return $stmt->fetchAll();
    }
    
    public function getGuideBadges()
    {
        $guideId = $this->requireLogin();
        $stmt = $this->db->prepare("SELECT * FROM guide_badges WHERE guide_id = ? ORDER BY awarded_at DESC");
        $stmt->execute([$guideId]);
        return $stmt->fetchAll();
    }
    
    public function cancelBooking($bookingId)
    {
        $guideId = $this->requireLogin();
        if ($bookingId) {
            $stmt = $this->db->prepare("UPDATE booking SET status = 'cancelled', cancelled_at = NOW() WHERE booking_id = ? AND guide_id = ?");
            $stmt->execute([$bookingId, $guideId]);
            return ['success' => true, 'message' => 'Booking cancelled successfully'];
        }
        return ['success' => false, 'message' => 'Invalid booking'];
    }
    
    public function postFieldReportApi($tourId, $content)
    {
        $guideId = $this->requireLogin();
        if (empty($content) || strlen($content) < 10) {
            return ['success' => false, 'message' => 'Report must be at least 10 characters'];
        }
        $stmt = $this->db->prepare("INSERT INTO field_reports (guide_id, tour_id, content_text) VALUES (?, ?, ?)");
        $stmt->execute([$guideId, $tourId, $content]);
return ['success' => true, 'message' => 'Field report posted successfully'];
    }
    
    public function getGuideShadowingData()
    {
        $guideId = $this->requireLogin();
        return $this->guideModel->getGuideShadowing($guideId);
    }
    
    public function getBookingDetails($bookingId)
    {
        $guideId = $this->requireLogin();
        $stmt = $this->db->prepare("SELECT b.*, t.tour_id, t.tour_name, t.tour_type, l.location_name, l.country, l.region, tv.price_per_person, tv.max_capacity, u.name as traveler_name, u.email as traveler_email FROM booking b JOIN tour_version tv ON b.tour_version_id = tv.tour_version_id JOIN tour t ON tv.tour_id = t.tour_id LEFT JOIN location l ON t.location_id = l.location_id JOIN traveler tr ON b.traveler_id = tr.traveler_id JOIN users u ON tr.traveler_id = u.user_id WHERE b.booking_id = ? AND b.guide_id = ?");
        $stmt->execute([$bookingId, $guideId]);
        $booking = $stmt->fetch();
        
        $fieldReports = [];
        if ($booking) {
            $stmt = $this->db->prepare("SELECT * FROM field_reports WHERE guide_id = ? AND tour_id = ? ORDER BY created_at DESC");
            $stmt->execute([$guideId, $booking['tour_id']]);
            $fieldReports = $stmt->fetchAll();
        }
        
        return ['booking' => $booking, 'fieldReports' => $fieldReports];
    }
    
    public function getGuideData()
    {
        $guideId = $this->requireLogin();
        return $this->guideModel->getGuideById($guideId);
    }
    
    public function getGuideWallet()
    {
        $guideId = $this->requireLogin();
        return $this->walletModel->getWallet($guideId);
    }
    
    public function getGuideTours()
    {
        $guideId = $this->requireLogin();
        return $this->guideModel->getGuideTours($guideId);
    }
    
    public function getGuideBookings($status = null)
    {
        $guideId = $this->requireLogin();
        return $this->guideModel->getGuideBookings($guideId, $status);
    }
    
    public function getGuideShadowingList()
    {
        $guideId = $this->requireLogin();
        $stmt = $this->db->prepare("SELECT gs.*, t.tour_name, u1.name as senior_name, u2.name as trainee_name FROM guide_shadowing gs JOIN tour t ON gs.tour_id = t.tour_id JOIN users u1 ON gs.senior_guide_id = u1.user_id JOIN users u2 ON gs.trainee_guide_id = u2.user_id WHERE gs.senior_guide_id = ? OR gs.trainee_guide_id = ? ORDER BY gs.start_time DESC LIMIT 20");
        $stmt->execute([$guideId, $guideId]);
        return $stmt->fetchAll();
    }
}

if (basename($_SERVER['SCRIPT_FILENAME'] ?? '') === 'GuideController.php') {
    $controller = new GuideController();
    $action = $_GET['action'] ?? 'index';
    $controller->$action();
}