<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/header.php';

$requestedPage = $_GET['page'] ?? 'dashboard';

$validPages = ['dashboard'];

if (!in_array($requestedPage, $validPages)) {
    $requestedPage = 'dashboard';
}

$pageMap = [
    'dashboard' => 'admin_command_center.php',
    'guides_management' => 'guides_management_registry.php',

];

$currentPage = $pageMap[$requestedPage];

if (file_exists(__DIR__ . '/' . $currentPage)) {
    include __DIR__ . '/' . $currentPage;
} else {
    include __DIR__ . '/admin_command_center.php';
}