<?php
require_once 'core/connection.php';

$travelerId = 2;

$existing = $connect->query("SELECT * FROM traveler WHERE traveler_id = $travelerId")->fetch();
if (!$existing) {
    $stmt = $connect->prepare("INSERT INTO traveler (traveler_id, nationality, total_carbon_offset) VALUES (?, 'USA', 0)");
    $stmt->execute([$travelerId]);
    echo "Created traveler record for user $travelerId<br>";
}

$guideId = 6;
$stmt = $connect->query("SELECT t.tour_id, tv.tour_version_id FROM tour t JOIN tour_version tv ON t.tour_id = tv.tour_id WHERE t.guide_id = $guideId AND tv.is_active = 1 LIMIT 1");
$tour = $stmt->fetch();

if (!$tour) {
    $stmt = $connect->prepare("INSERT INTO tour (tour_name, guide_id, location_id, tour_type, status, carbon_footprint) VALUES (?, ?, 1, 'eco', 'active', 25.00)");
    $stmt->execute([$guideId, 'Rainforest Adventure']);
    $tourId = $connect->lastInsertId();
    
    $stmt = $connect->prepare("INSERT INTO tour_version (tour_id, version_name, price_per_person, max_capacity, is_active) VALUES (?, 'v1', 150.00, 8, 1)");
    $stmt->execute([$tourId]);
    $versionId = $connect->lastInsertId();
} else {
    $tourId = $tour['tour_id'];
    $versionId = $tour['tour_version_id'];
}

$stmt = $connect->query("SELECT * FROM addon WHERE tour_version_id = $versionId")->fetch();
if (!$stmt) {
    $addons = [
        ['name' => 'Organic Lunch', 'price' => 25.00],
        ['name' => 'Equipment Rental', 'price' => 40.00],
        ['name' => 'Photography Service', 'price' => 60.00]
    ];
    foreach ($addons as $addon) {
        $stmt = $connect->prepare("INSERT INTO addon (tour_version_id, name, price) VALUES (?, ?, ?)");
        $stmt->execute([$versionId, $addon['name'], $addon['price']]);
    }
    echo "Created addons<br>";
}

echo "<br><b>Test data ready!</b><br>";
echo "<a href='app/views/traveler/traveler_dashboard.php'>Go to Traveler Dashboard</a><br>";
echo "Login: shahd@gmail.com (password from registration)<br>";
echo "Or update password for user 2 in database.";
?>