<?php

session_start();

if (!isset($connect)) {
    require_once dirname(__DIR__, 3) . '/core/connection.php';
}

function loadGuideData($guideId) {
    global $connect;
    
    $guide = null;
    $tours = [];
    $wallet = null;
    $schedule = [];
    $certifications = [];
    $badges = [];
    $fieldReports = [];
    
    if (!isset($connect) || !$connect) {
        return compact('guide', 'tours', 'wallet', 'schedule', 'certifications', 'badges', 'fieldReports');
    }
    
    try {
        $stmt = $connect->prepare("
            SELECT g.*, u.name, u.email, u.profile_picture_url 
            FROM guide g 
            JOIN users u ON g.guide_id = u.user_id 
            WHERE g.guide_id = ?
        ");
        $stmt->execute([$guideId]);
        $guide = $stmt->fetch();
        
        $stmt = $connect->prepare("
            SELECT t.*, l.location_name, l.country 
            FROM tour t 
            JOIN location l ON t.location_id = l.location_id 
            WHERE t.guide_id = ?
            ORDER BY t.created_at DESC
        ");
        $stmt->execute([$guideId]);
        $tours = $stmt->fetchAll();
        
        $stmt = $connect->prepare("SELECT * FROM guide_wallet WHERE guide_id = ?");
        $stmt->execute([$guideId]);
        $wallet = $stmt->fetch();
        
        $stmt = $connect->prepare("
            SELECT b.booking_id, b.start_time, b.end_time, b.status, b.total_price,
                   t.tour_name, l.location_name
            FROM booking b
            JOIN tour_version tv ON b.tour_version_id = tv.tour_version_id
            JOIN tour t ON tv.tour_id = t.tour_id
            LEFT JOIN location l ON t.location_id = l.location_id
            WHERE b.guide_id = ?
            AND b.start_time >= CURDATE()
            ORDER BY b.start_time
            LIMIT 20
        ");
        $stmt->execute([$guideId]);
        $schedule = $stmt->fetchAll();
        
        $stmt = $connect->prepare("SELECT * FROM eco_certifications WHERE guide_id = ? ORDER BY issue_date DESC");
        $stmt->execute([$guideId]);
        $certifications = $stmt->fetchAll();
        
        $stmt = $connect->prepare("SELECT * FROM guide_badges WHERE guide_id = ? ORDER BY awarded_at DESC");
        $stmt->execute([$guideId]);
        $badges = $stmt->fetchAll();
        
        $stmt = $connect->prepare("
            SELECT fr.*, t.tour_name 
            FROM field_reports fr
            LEFT JOIN tour t ON fr.tour_id = t.tour_id
            WHERE fr.guide_id = ?
            ORDER BY fr.created_at DESC
            LIMIT 10
        ");
        $stmt->execute([$guideId]);
        $fieldReports = $stmt->fetchAll();
        
    } catch (Exception $e) {
        error_log($e->getMessage());
    }
    
    return compact('guide', 'tours', 'wallet', 'schedule', 'certifications', 'badges', 'fieldReports');
}

if (isset($_SESSION['user_id']) && isset($_SESSION['role']) && $_SESSION['role'] === 'guide') {
    $guideId = (int)($_SESSION['guide_id'] ?? $_SESSION['user_id']);
    
    error_log("Loading guide data for guide_id: " . $guideId);
    
    $stmt = $connect->prepare("SELECT COUNT(*) as cnt FROM guide_wallet WHERE guide_id = ?");
    $stmt->execute([$guideId]);
    $walletCheck = $stmt->fetch();
    if ($walletCheck['cnt'] == 0) {
        $stmt = $connect->prepare("INSERT INTO guide_wallet (guide_id, pending_balance, available_balance, withdrawn_balance) VALUES (?, 0, 0, 0)");
        $stmt->execute([$guideId]);
    }
    
    $guideData = loadGuideData($guideId);
    extract($guideData);
    if (!$guide || !isset($guide['name'])) {
        $guide = ['name' => $_SESSION['name'] ?? 'Guide'];
    }
    error_log("Guide loaded: " . print_r($guide, true));
} else {
    $guide = ['name' => $_SESSION['name'] ?? 'Guide'];
    $tours = [];
    $wallet = ['available_balance' => 0, 'pending_balance' => 0, 'withdrawn_balance' => 0];
    $schedule = [];
    $certifications = [];
    $badges = [];
    $fieldReports = [];
    error_log("Not logged in as guide, session: " . print_r($_SESSION, true));
}