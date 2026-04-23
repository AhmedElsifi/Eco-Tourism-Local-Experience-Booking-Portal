<?php
require_once 'core/connection.php';

$userId = 7;

$stmt = $connect->prepare("SELECT user_id FROM users WHERE user_id = ?");
$stmt->execute([$userId]);
if (!$stmt->fetch()) {
    $stmt = $connect->prepare("INSERT INTO users (user_id, name, email, password_hash, role) VALUES (?, 'John Smith', 'john@example.com', ?, 'guide')");
    $hash = password_hash('john123', PASSWORD_DEFAULT);
    $stmt->execute([$userId, $hash]);
    echo "Created user ID 7<br>";
}

$stmt = $connect->prepare("SELECT guide_id FROM guide WHERE guide_id = ?");
$stmt->execute([$userId]);
if (!$stmt->fetch()) {
    $stmt = $connect->prepare("INSERT INTO guide (guide_id, join_date, status, sustainability_score, cancellation_rate, visibility_score) VALUES (?, NOW(), 'verified', 4.5, 3.0, 4.2)");
    $stmt->execute([$userId]);
    echo "Created guide ID 7<br>";
    
    $stmt = $connect->prepare("INSERT INTO guide_wallet (guide_id, pending_balance, available_balance, withdrawn_balance) VALUES (?, 0, 0, 0)");
    $stmt->execute([$userId]);
    echo "Created wallet for guide 7<br>";
} else {
    echo "Guide 7 already exists<br>";
}

echo "Done! Now you can use Shadowing feature.<br>";
echo "Test guide: john@example.com / john123";
?>
