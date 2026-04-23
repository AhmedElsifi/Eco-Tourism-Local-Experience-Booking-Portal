<?php
require_once 'core/connection.php';

$guideId = 6; 

$stmt = $connect->query("SELECT t.tour_id, tv.tour_version_id FROM tour t JOIN tour_version tv ON t.tour_id = tv.tour_id WHERE t.guide_id = $guideId LIMIT 1");
$tour = $stmt->fetch();

if (!$tour) {
    $stmt = $connect->prepare("
        INSERT INTO tour (tour_name, guide_id, location_id, tour_type, status, carbon_footprint, waste_management, local_hiring)
        VALUES ('Amazon Rainforest Adventure', ?, 1, 'eco', 'active', 50.00, 'Zero Trace', 1)
    ");
    $stmt->execute([$guideId]);
    $tourId = $connect->lastInsertId();
    
    $stmt = $connect->prepare("
        INSERT INTO tour_version (tour_id, version_name, price_per_person, max_capacity, is_active)
        VALUES (?, 'v1', 150.00, 10, 1)
    ");
    $stmt->execute([$tourId]);
    $versionId = $connect->lastInsertId();
    echo "Created tour ID: $tourId, version ID: $versionId<br>";
} else {
    $tourId = $tour['tour_id'];
    $versionId = $tour['tour_version_id'];
    echo "Using tour ID: $tourId, version ID: $versionId<br>";
}

$stmt = $connect->query("SELECT traveler_id FROM traveler WHERE traveler_id = 2 LIMIT 1");
$traveler = $stmt->fetch();

if (!$traveler) {
    $stmt = $connect->prepare("INSERT INTO traveler (traveler_id, nationality, total_carbon_offset) VALUES (2, 'USA', 0)");
    $stmt->execute();
}

$stmt = $connect->prepare("DELETE FROM booking WHERE guide_id = ?");
$stmt->execute([$guideId]);

$tests = [
    ['start' => '2026-04-25 09:00:00', 'end' => '2026-04-25 14:00:00', 'price' => 150.00, 'status' => 'confirmed'],
    ['start' => '2026-05-01 08:00:00', 'end' => '2026-05-01 16:00:00', 'price' => 200.00, 'status' => 'pending'],
    ['start' => '2026-05-10 09:00:00', 'end' => '2026-05-10 15:00:00', 'price' => 175.00, 'status' => 'confirmed'],
];

foreach ($tests as $test) {
    $stmt = $connect->prepare("
        INSERT INTO booking (guide_id, traveler_id, tour_version_id, start_time, end_time, total_price, status)
        VALUES (?, 2, ?, ?, ?, ?, ?)
    ");
    $stmt->execute([$guideId, $versionId, $test['start'], $test['end'], $test['price'], $test['status']]);
    echo "Created booking<br>";
}

$stmt = $connect->prepare("UPDATE guide_wallet SET available_balance = 350.00, pending_balance = 100.00 WHERE guide_id = ?");
$stmt->execute([$guideId]);

$connect->exec("INSERT IGNORE INTO eco_certifications (guide_id, certificate_name, status, issue_date) VALUES (6, 'Eco Guide Level 1', 'verified', '2026-01-01')");
$connect->exec("INSERT IGNORE INTO language_certifications (guide_id, language_id, certificate_name, status, issue_date) VALUES (6, 1, 'English Certificate', 'verified', '2026-01-01')");
$connect->exec("INSERT IGNORE INTO guide_badges (guide_id, badge) VALUES (6, 'Expert Guide')");
$connect->exec("INSERT IGNORE INTO guide_badges (guide_id, badge) VALUES (6, 'Conservation Champion')");
$connect->exec("INSERT IGNORE INTO field_reports (guide_id, content_text) VALUES (6, 'Beautiful weather today at the Amazon. Birds spotted: Macaws, Toucans.')");
$connect->exec("INSERT IGNORE INTO itinerary (tour_id, language_id, content) VALUES ($tourId, 1, 'Day 1: Arrival at basecamp. Day 2: Trek through rainforest. Day 3: River camping.')");

try {
    $connect->exec("INSERT IGNORE INTO tour_impact_tag (tour_id, tag_name) VALUES ($tourId, 'Wildlife Conservation')");
    $connect->exec("INSERT IGNORE INTO tour_impact_tag (tour_id, tag_name) VALUES ($tourId, 'Zero Waste')");
} catch (Exception $e) {
    echo "Error adding impact tags: " . $e->getMessage() . "<br>";
}

echo "<br><b>Done!</b><br>";
echo "<a href='app/views/guide/all_functions.php?tab=schedule'>Schedule</a> | ";
echo "<a href='app/views/guide/all_functions.php?tab=earnings'>Earnings</a> | ";
echo "<a href='app/views/guide/all_functions.php?tab=reports'>Reports</a> | ";
echo "<a href='app/views/guide/guide_dashboard.php'>Dashboard</a>";
?>