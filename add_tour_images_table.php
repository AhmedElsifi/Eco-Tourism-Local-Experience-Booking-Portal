<?php
require_once 'core/connection.php';

$sql = "CREATE TABLE IF NOT EXISTS tour_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tour_id INT NOT NULL,
    image_type ENUM('hero', 'gallery') DEFAULT 'gallery',
    image_path VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    FOREIGN KEY (tour_id) REFERENCES tour(tour_id) ON DELETE CASCADE
)";

try {
    $connect->exec($sql);
    echo "Table tour_images created successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

echo "<br><br>Current tour table columns:<br>";
$stmt = $connect->query("DESCRIBE tour");
$columns = $stmt->fetchAll(PDO::FETCH_COLUMN);
print_r($columns);
?>
