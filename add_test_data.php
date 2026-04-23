<?php
require_once 'core/connection.php';

$guideId = 6;

$stmt = $connect->prepare("INSERT INTO eco_certifications (guide_id, certificate_name, status, issue_date) VALUES (?, 'Eco Guide Level 1', 'verified', '2026-01-01')");
$stmt->execute([$guideId]);

$stmt = $connect->prepare("INSERT INTO language_certifications (guide_id, language_id, certificate_name, status, issue_date) VALUES (?, 1, 'English Certificate', 'verified', '2026-01-01')");
$stmt->execute([$guideId]);

$stmt = $connect->prepare("INSERT INTO guide_badges (guide_id, badge) VALUES (?, 'Expert Guide')");
$stmt->execute([$guideId]);
$stmt = $connect->prepare("INSERT INTO guide_badges (guide_id, badge) VALUES (?, 'Conservation Champion')");
$stmt->execute([$guideId]);

$stmt = $connect->prepare("INSERT INTO field_reports (guide_id, content_text) VALUES (?, 'Beautiful weather today at the Amazon. Birds spotted: Macaws, Toucans.')");
$stmt->execute([$guideId]);

$stmt = $connect->query("SELECT tour_id FROM tour LIMIT 1");
$tour = $stmt->fetch();
if ($tour) {
    $stmt = $connect->prepare("INSERT INTO tour_impact_tag (tour_id, tag_name) VALUES (?, 'Wildlife Conservation')");
    $stmt->execute([$tour['tour_id']]);
    $stmt = $connect->prepare("INSERT INTO tour_impact_tag (tour_id, tag_name) VALUES (?, 'Zero Waste')");
    $stmt->execute([$tour['tour_id']]);
}

if ($tour) {
    $stmt = $connect->prepare("INSERT INTO itinerary (tour_id, language_id, content) VALUES (?, 1, 'Day 1: Arrival at basecamp. Day 2: Trek through rainforest. Day 3: River camping.')");
    $stmt->execute([$tour['tour_id']]);
}

echo "Test data added! <br>";
echo "<a href='app/views/guide/all_functions.php?tab=earnings'>Earnings</a> | ";
echo "<a href='app/views/guide/all_functions.php?tab=reports'>Reports</a> | ";
echo "<a href='app/views/guide/all_functions.php?tab=certs'>Certifications</a> | ";
echo "<a href='app/views/guide/all_functions.php?tab=tags'>Tags</a> | ";
echo "<a href='app/views/guide/all_functions.php?tab=badges'>Badges</a>";
?>