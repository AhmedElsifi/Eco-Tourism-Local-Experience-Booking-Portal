<?php
require_once 'core/connection.php';

$guideId = 6;

$stmt = $connect->query("SELECT guide_id FROM guide WHERE guide_id = $guideId");
if (!$stmt->fetch()) {
    echo "Guide not found<br>";
    exit;
}

$tours = [
    [
        'name' => 'Amazon Rainforest Explorer',
        'type' => 'eco',
        'location' => 1,
        'price' => 150.00,
        'max_capacity' => 8,
        'carbon' => 25.00,
        'description' => 'Explore the Amazon rainforest with eco-friendly guides'
    ],
    [
        'name' => 'Great Barrier Reef Dive',
        'type' => 'wildlife',
        'location' => 2,
        'price' => 200.00,
        'max_capacity' => 6,
        'carbon' => 35.00,
        'description' => 'Snorkel and dive in the world-famous Great Barrier Reef'
    ],
    [
        'name' => 'Amazon River Canoe Adventure',
        'type' => 'adventure',
        'location' => 1,
        'price' => 175.00,
        'max_capacity' => 10,
        'carbon' => 20.00,
        'description' => 'Paddle through the Amazon River tributaries'
    ],
    [
        'name' => 'Patagonia Glacier Trek',
        'type' => 'adventure',
        'location' => 3,
        'price' => 250.00,
        'max_capacity' => 6,
        'carbon' => 45.00,
        'description' => 'Trek through stunning Patagonian glaciers'
    ],
    [
        'name' => 'Safari Wildlife Expedition',
        'type' => 'wildlife',
        'location' => 4,
        'price' => 300.00,
        'max_capacity' => 8,
        'carbon' => 50.00,
        'description' => 'Witness African wildlife in their natural habitat'
    ],
    [
        'name' => 'Japanese Temple Retreat',
        'type' => 'cultural',
        'location' => 5,
        'price' => 180.00,
        'max_capacity' => 12,
        'carbon' => 15.00,
        'description' => 'Meditation and cultural immersion in ancient temples'
    ],
    [
        'name' => 'Norwegian Northern Lights',
        'type' => 'adventure',
        'location' => 6,
        'price' => 350.00,
        'max_capacity' => 8,
        'carbon' => 40.00,
        'description' => 'Chase the Aurora Borealis in the Arctic wilderness'
    ],
    [
        'name' => 'Costa Rica Rainforest Canopy',
        'type' => 'eco',
        'location' => 7,
        'price' => 190.00,
        'max_capacity' => 10,
        'carbon' => 22.00,
        'description' => 'Walk among the treetops in Costa Rica rainforest'
    ],
    [
        'name' => 'Galapagos Island Discovery',
        'type' => 'wildlife',
        'location' => 8,
        'price' => 400.00,
        'max_capacity' => 6,
        'carbon' => 55.00,
        'description' => 'Explore unique wildlife that inspired Darwin'
    ],
    [
        'name' => 'Swiss Alps Alpine Experience',
        'type' => 'adventure',
        'location' => 9,
        'price' => 280.00,
        'max_capacity' => 8,
        'carbon' => 38.00,
        'description' => 'Hiking through the majestic Swiss Alps'
    ]
];

$locations = [
    1 => ['name' => 'Amazon Rainforest', 'country' => 'Brazil'],
    2 => ['name' => 'Great Barrier Reef', 'country' => 'Australia'],
    3 => ['name' => 'Patagonia', 'country' => 'Argentina'],
    4 => ['name' => 'Serengeti', 'country' => 'Tanzania'],
    5 => ['name' => 'Kyoto', 'country' => 'Japan'],
    6 => ['name' => 'Tromso', 'country' => 'Norway'],
    7 => ['name' => 'Monteverde', 'country' => 'Costa Rica'],
    8 => ['name' => 'Galapagos Islands', 'country' => 'Ecuador'],
    9 => ['name' => 'Swiss Alps', 'country' => 'Switzerland']
];

foreach ($locations as $locId => $loc) {
    $stmt = $connect->prepare("SELECT location_id FROM location WHERE location_name = ?");
    $stmt->execute([$loc['name']]);
    $existing = $stmt->fetch();
    if (!$existing) {
        $stmt = $connect->prepare("INSERT INTO location (location_name, country, region) VALUES (?, ?, ?)");
        $stmt->execute([$loc['name'], $loc['country'], 'Region']);
    }
}

foreach ($tours as $tour) {
    $stmt = $connect->prepare("
        INSERT INTO tour (tour_name, guide_id, location_id, tour_type, status, carbon_footprint, waste_management, local_hiring)
        VALUES (?, ?, ?, ?, 'active', ?, 'Zero Trace', 1)
    ");
    $stmt->execute([$tour['name'], $guideId, $tour['location'], $tour['type'], $tour['carbon']]);
    $tourId = $connect->lastInsertId();
    
    $stmt = $connect->prepare("
        INSERT INTO tour_version (tour_id, version_name, price_per_person, max_capacity, is_active)
        VALUES (?, 'v1', ?, ?, 1)
    ");
    $stmt->execute([$tourId, $tour['price'], $tour['max_capacity']]);
    
    $stmt = $connect->prepare("
        INSERT INTO itinerary (tour_id, language_id, content)
        VALUES (?, 1, ?)
    ");
    $stmt->execute([$tourId, 'Day 1: ' . $tour['description']]);
    
    echo "Created: " . $tour['name'] . "<br>";
}

echo "<br><b>Done! 10 tours created.</b><br>";
echo "<a href='app/views/traveler/traveler_website.php?tab=destinations'>Go to Destinations</a>";
?>