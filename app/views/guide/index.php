<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/header.php';

$requestedPage = $_GET['page'] ?? 'dashboard';

$validPages = ['dashboard', 'schedule', 'earnings', 'create_new_experience', 'tour_management_view', 'post_field_report', 'certifications', 'language_verification', 'shadowing', 'badges', 'identity_verification', 'voucher_validation'];

if (!in_array($requestedPage, $validPages)) {
    $requestedPage = 'dashboard';
}

$pageMap = [
    'dashboard' => 'guide_dashboard.php',
    'schedule' => 'guide_schedule_management.php',
    'earnings' => 'earnings_payouts.php',
    'create_new_experience' => 'create_new_experience.php',
    'tour_management_view' => 'tour_management_view.php',
    'post_field_report' => 'post_field_report.php',
    'certifications' => 'certifications.php',
    'language_verification' => 'language_verification.php',
    'shadowing' => 'shadowing.php',
    'badges' => 'badges.php',
    'identity_verification' => 'identity_verification.php',
    'voucher_validation' => 'voucher_validation.php'
];

$currentPage = $pageMap[$requestedPage];

if (file_exists(__DIR__ . '/' . $currentPage)) {
    include __DIR__ . '/' . $currentPage;
} else {
    include __DIR__ . '/guide_dashboard.php';
}