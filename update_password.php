<?php
require_once __DIR__ . '/core/connection.php';

$password = 'alimohamed';
$hash = password_hash($password, PASSWORD_DEFAULT);

echo "Password: $password\n";
echo "Hash: $hash\n";

$stmt = $connect->prepare("UPDATE users SET password_hash = ? WHERE email = 'ali@gmail.com'");
$stmt->execute([$hash]);

echo "Updated!\n";
?>
