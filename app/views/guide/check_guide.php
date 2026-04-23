<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once dirname(__DIR__, 3) . '/core/connection.php';

echo "<h1>Database Check</h1><pre>";

$stmt = $connect->query("SELECT user_id, name, email, role FROM users WHERE role = 'guide'");
$guides = $stmt->fetchAll();
echo "Users with role 'guide':\n";
print_r($guides);

$stmt = $connect->query("SELECT * FROM guide");
$guideTable = $stmt->fetchAll();
echo "\nGuide table:\n";
print_r($guideTable);

$stmt = $connect->query("SELECT * FROM guide_wallet");
$wallets = $stmt->fetchAll();
echo "\nGuide wallets:\n";
print_r($wallets);

$stmt = $connect->prepare("INSERT IGNORE INTO guide_wallet (guide_id, pending_balance, available_balance, withdrawn_balance) VALUES (6, 100.00, 500.00, 0.00)");
$stmt->execute();
echo "\nWallet created/updated for guide_id 6!\n";

$stmt = $connect->prepare("SELECT * FROM guide_wallet WHERE guide_id = 6");
$stmt->execute([]);
$wallet = $stmt->fetch();
echo "\nWallet for guide 6:\n";
print_r($wallet);

echo "</pre><p><a href='guide_dashboard.php'>Go to Dashboard</a></p>";