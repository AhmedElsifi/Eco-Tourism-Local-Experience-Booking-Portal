<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once dirname(__DIR__, 3) . '/core/connection.php';

echo "<h1>Fix Guide Data</h1><pre>";

$stmt = $connect->prepare("
    INSERT INTO guide (guide_id, join_date, status, sustainability_score, cancellation_rate, visibility_score)
    VALUES (6, NOW(), 'verified', 4.80, 2.50, 4.50)
");
$stmt->execute();
echo "Guide record created for user_id 6!\n";

$stmt = $connect->prepare("
    INSERT INTO guide_wallet (guide_id, pending_balance, available_balance, withdrawn_balance)
    VALUES (6, 150.00, 500.00, 0.00)
");
$stmt->execute();
echo "Wallet created for guide_id 6!\n";

$stmt = $connect->query("SELECT * FROM guide");
$guideTable = $stmt->fetchAll();
echo "\nGuide table now:\n";
print_r($guideTable);

$stmt = $connect->query("SELECT * FROM guide_wallet");
$wallets = $stmt->fetchAll();
echo "\nWallets now:\n";
print_r($wallets);

echo "</pre><p><a href='guide_dashboard.php'>Go to Dashboard</a></p>";