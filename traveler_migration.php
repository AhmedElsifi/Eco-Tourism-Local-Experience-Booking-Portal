<?php
require_once 'core/connection.php';

$statements = [];

$statements[] = "CREATE TABLE IF NOT EXISTS carbon_offset_projects (
    project_id INT AUTO_INCREMENT PRIMARY KEY,
    project_name VARCHAR(150) NOT NULL,
    location VARCHAR(150) NOT NULL,
    cost_per_ton DECIMAL(10,2) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$statements[] = "CREATE TABLE IF NOT EXISTS traveler_carbon_offsets (
    offset_id INT AUTO_INCREMENT PRIMARY KEY,
    booking_id INT NOT NULL,
    traveler_id INT NOT NULL,
    project_id INT NOT NULL,
    amount_tons DECIMAL(10,2) NOT NULL,
    cost_amount DECIMAL(10,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (booking_id) REFERENCES booking(booking_id) ON DELETE CASCADE,
    FOREIGN KEY (traveler_id) REFERENCES traveler(traveler_id) ON DELETE CASCADE,
    FOREIGN KEY (project_id) REFERENCES carbon_offset_projects(project_id) ON DELETE CASCADE
)";

$statements[] = "CREATE TABLE IF NOT EXISTS booking_vouchers (
    voucher_id INT AUTO_INCREMENT PRIMARY KEY,
    booking_id INT NOT NULL,
    voucher_code VARCHAR(50) NOT NULL UNIQUE,
    qr_code_data TEXT,
    status ENUM('active','used','expired') DEFAULT 'active',
    valid_until DATETIME NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (booking_id) REFERENCES booking(booking_id) ON DELETE CASCADE
)";

$statements[] = "CREATE TABLE IF NOT EXISTS booking_waitlist (
    waitlist_id INT AUTO_INCREMENT PRIMARY KEY,
    traveler_id INT NOT NULL,
    tour_version_id INT NOT NULL,
    num_people INT DEFAULT 1,
    status ENUM('waiting','offered','joined','expired','cancelled') DEFAULT 'waiting',
    offered_at TIMESTAMP NULL,
    expires_at TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (traveler_id) REFERENCES traveler(traveler_id) ON DELETE CASCADE,
    FOREIGN KEY (tour_version_id) REFERENCES tour_version(tour_version_id) ON DELETE CASCADE
)";

$statements[] = "CREATE TABLE IF NOT EXISTS booking_reviews (
    review_id INT AUTO_INCREMENT PRIMARY KEY,
    booking_id INT NOT NULL,
    eco_friendliness_rating INT NOT NULL CHECK (eco_friendliness_rating BETWEEN 1 AND 5),
    cultural_respect_rating INT NOT NULL CHECK (cultural_respect_rating BETWEEN 1 AND 5),
    overall_rating INT NOT NULL CHECK (overall_rating BETWEEN 1 AND 5),
    eco_friendliness_comment TEXT,
    cultural_respect_comment TEXT,
    general_comment TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (booking_id) REFERENCES booking(booking_id) ON DELETE CASCADE
)";

$statements[] = "CREATE TABLE IF NOT EXISTS dispute_cases (
    dispute_id INT AUTO_INCREMENT PRIMARY KEY,
    booking_id INT NOT NULL,
    traveler_id INT NOT NULL,
    reason TEXT NOT NULL,
    evidence_text TEXT,
    evidence_photos TEXT,
    status ENUM('open','under_review','resolved','rejected') DEFAULT 'open',
    resolution TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (booking_id) REFERENCES booking(booking_id) ON DELETE CASCADE,
    FOREIGN KEY (traveler_id) REFERENCES traveler(traveler_id) ON DELETE CASCADE
)";

$statements[] = "CREATE TABLE IF NOT EXISTS newsletter_interactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    traveler_id INT NOT NULL,
    tour_id INT,
    interaction_type ENUM('view','click','booking','wishlist') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (traveler_id) REFERENCES traveler(traveler_id) ON DELETE CASCADE
)";

$statements[] = "CREATE TABLE IF NOT EXISTS cancellation_policies (
    policy_id INT AUTO_INCREMENT PRIMARY KEY,
    hours_before_start INT NOT NULL,
    refund_percent DECIMAL(5,2) NOT NULL,
    description VARCHAR(255)
)";

$statements[] = "INSERT IGNORE INTO carbon_offset_projects (project_id, project_name, location, cost_per_ton, description) VALUES
(1, 'Amazon Reforestation', 'Brazil', 15.00, 'Plant trees in the Amazon rainforest to absorb CO2'),
(2, 'Ocean Plastic Cleanup', 'Pacific Ocean', 20.00, 'Remove plastic waste from ocean ecosystems'),
(3, 'Solar Energy for Villages', 'Kenya', 12.00, 'Install solar panels for off-grid communities')";

$statements[] = "INSERT IGNORE INTO cancellation_policies (policy_id, hours_before_start, refund_percent, description) VALUES
(1, 168, 100.00, 'Free cancellation 7+ days before'),
(2, 72, 50.00, '50% refund 3-7 days before'),
(3, 24, 25.00, '25% refund 1-3 days before'),
(4, 0, 0.00, 'No refund within 24 hours')";

foreach ($statements as $sql) {
    try {
        $connect->exec($sql);
        echo "Executed: " . substr($sql, 0, 50) . "...<br>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage() . "<br>";
    }
}

echo "<br><b>Migration complete!</b><br>";
echo "<a href='app/views/traveler/traveler_dashboard.php'>Go to Traveler Dashboard</a>";
?>