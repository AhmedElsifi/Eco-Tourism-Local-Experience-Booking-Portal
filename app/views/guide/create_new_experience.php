<?php
session_start();

if (!isset($connect)) {
    require_once dirname(__DIR__, 3) . '/core/connection.php';
}

$message = '';
$error = '';
$fieldErrors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'create_tour') {
    $tourName = $_POST['tour_name'] ?? '';
    $tourType = $_POST['tour_type'] ?? 'eco';
    $locationId = $_POST['location_id'] ?? 1;
    $description = $_POST['description'] ?? '';
    $duration = $_POST['duration'] ?? 4;
    $pricePerPerson = $_POST['price_per_person'] ?? 0;
    $maxCapacity = $_POST['max_capacity'] ?? 10;
    $carbonFootprint = $_POST['carbon_footprint'] ?? null;
    $wasteManagement = $_POST['waste_management'] ?? '';
    $localHiring = isset($_POST['local_hiring']) ? 1 : 0;
    $waypoints = $_POST['waypoints'] ?? [];
    
    if (empty($tourName)) {
        $fieldErrors['tour_name'] = 'Tour name is required';
    } elseif (strlen($tourName) < 3) {
        $fieldErrors['tour_name'] = 'Tour name must be at least 3 characters';
    } elseif (empty($pricePerPerson) || $pricePerPerson <= 0) {
        $fieldErrors['price_per_person'] = 'Price per person is required';
    } elseif (empty($maxCapacity) || $maxCapacity < 1) {
        $fieldErrors['max_capacity'] = 'Max capacity is required';
    } elseif (!isset($_SESSION['user_id'])) {
        $error = 'You must be logged in';
    } else {
        try {
            $guideId = $_SESSION['guide_id'] ?? $_SESSION['user_id'];
            
            $uploadDir = dirname(__DIR__, 3) . '/public/uploads/tours/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            
            $heroImagePath = '';
            $image1Path = '';
            $image2Path = '';
            
            if (!empty($_FILES['hero_image']['name'])) {
                $ext = pathinfo($_FILES['hero_image']['name'], PATHINFO_EXTENSION);
                $heroImagePath = '/public/uploads/tours/' . time() . '_hero.' . $ext;
                move_uploaded_file($_FILES['hero_image']['tmp_name'], dirname(__DIR__, 3) . $heroImagePath);
            }
            if (!empty($_FILES['image_1']['name'])) {
                $ext = pathinfo($_FILES['image_1']['name'], PATHINFO_EXTENSION);
                $image1Path = '/public/uploads/tours/' . time() . '_img1.' . $ext;
                move_uploaded_file($_FILES['image_1']['tmp_name'], dirname(__DIR__, 3) . $image1Path);
            }
            if (!empty($_FILES['image_2']['name'])) {
                $ext = pathinfo($_FILES['image_2']['name'], PATHINFO_EXTENSION);
                $image2Path = '/public/uploads/tours/' . time() . '_img2.' . $ext;
                move_uploaded_file($_FILES['image_2']['tmp_name'], dirname(__DIR__, 3) . $image2Path);
            }
            
            $certPath = '';
            if (!empty($_FILES['certificate_file']['name'])) {
                $ext = pathinfo($_FILES['certificate_file']['name'], PATHINFO_EXTENSION);
                $certPath = '/public/uploads/certs/' . time() . '_cert.' . $ext;
                $certDir = dirname(__DIR__, 3) . '/public/uploads/certs/';
                if (!is_dir($certDir)) { mkdir($certDir, 0777, true); }
                move_uploaded_file($_FILES['certificate_file']['tmp_name'], dirname(__DIR__, 3) . $certPath);
            }
            
            $stmt = $connect->prepare("
                INSERT INTO tour (tour_name, guide_id, location_id, tour_type, status, carbon_footprint, waste_management, local_hiring)
                VALUES (?, ?, ?, ?, 'draft', ?, ?, ?)
            ");
            $stmt->execute([$tourName, $guideId, $locationId, $tourType, $carbonFootprint, $wasteManagement, $localHiring]);
            $tourId = $connect->lastInsertId();
            
            if ($heroImagePath) {
                $stmt = $connect->prepare("INSERT INTO tour_images (tour_id, image_type, image_path) VALUES (?, 'hero', ?)");
                $stmt->execute([$tourId, $heroImagePath]);
            }
            if ($image1Path) {
                $stmt = $connect->prepare("INSERT INTO tour_images (tour_id, image_type, image_path) VALUES (?, 'gallery', ?)");
                $stmt->execute([$tourId, $image1Path]);
            }
            if ($image2Path) {
                $stmt = $connect->prepare("INSERT INTO tour_images (tour_id, image_type, image_path) VALUES (?, 'gallery', ?)");
                $stmt->execute([$tourId, $image2Path]);
            }
            
            $stmt = $connect->prepare("
                INSERT INTO tour_version (tour_id, version_name, price_per_person, max_capacity, is_active)
                VALUES (?, 'v1', ?, ?, 1)
            ");
            $stmt->execute([$tourId, $pricePerPerson, $maxCapacity]);
            
            if (!empty($waypoints)) {
                $stmt = $connect->prepare("
                    INSERT INTO tour_routes (tour_id, route_name, total_distance_km)
                    VALUES (?, ?, ?)
                ");
                $stmt->execute([$tourId, $tourName . ' Route', null]);
                $routeId = $connect->lastInsertId();
                
                $order = 1;
                foreach ($waypoints as $wp) {
                    if (!empty($wp['title'])) {
                        $stmt = $connect->prepare("
                            INSERT INTO route_stops (route_id, stop_name, stop_order)
                            VALUES (?, ?, ?)
                        ");
                        $stmt->execute([$routeId, $wp['title'], $order++]);
                    }
                }
            }
            
            if ($certPath) {
                $stmt = $connect->prepare("
                    INSERT INTO eco_certifications (guide_id, certificate_name, file_path, status, issue_date)
                    VALUES (?, ?, ?, 'pending', CURDATE())
                ");
                $stmt->execute([$guideId, $tourName . ' Certification', $certPath]);
            }
            
            $message = "Tour created successfully! Tour ID: $tourId";
            
        } catch (Exception $e) {
            $error = 'Error: ' . $e->getMessage();
        }
    }
}

$stmt = $connect->query("SELECT location_id, location_name, country FROM location ORDER BY location_name");
$locations = $stmt->fetchAll();
?>

<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Draft Experience - EcoPortal</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@400;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .icon-fill {
            font-variation-settings: 'FILL' 1;
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-tint": "#466550",
                        "surface-dim": "#d9dbd6",
                        "secondary-fixed-dim": "#e6c093",
                        "error-container": "#ffdad6",
                        "outline": "#727972",
                        "secondary-container": "#fed6a7",
                        "inverse-on-surface": "#f0f1ec",
                        "on-tertiary-fixed": "#241a03",
                        "error": "#ba1a1a",
                        "on-error": "#ffffff",
                        "on-secondary-container": "#795b36",
                        "on-primary": "#ffffff",
                        "primary": "#163422",
                        "on-secondary": "#ffffff",
                        "tertiary-fixed": "#f5e0ba",
                        "tertiary": "#392d13",
                        "on-tertiary": "#ffffff",
                        "surface-container-high": "#e7e9e4",
                        "outline-variant": "#c2c8c0",
                        "tertiary-container": "#504327",
                        "on-background": "#191c19",
                        "background": "#f8faf5",
                        "surface-variant": "#e1e3de",
                        "tertiary-fixed-dim": "#d8c49f",
                        "on-primary-fixed": "#022110",
                        "surface-bright": "#f8faf5",
                        "primary-fixed-dim": "#adcfb4",
                        "on-primary-container": "#99baa1",
                        "inverse-primary": "#adcfb4",
                        "on-tertiary-fixed-variant": "#534529",
                        "on-tertiary-container": "#c3b08c",
                        "on-surface": "#191c19",
                        "on-secondary-fixed-variant": "#5c421f",
                        "on-error-container": "#93000a",
                        "on-surface-variant": "#424843",
                        "primary-container": "#2d4b37",
                        "primary-fixed": "#c8ebd0",
                        "surface-container": "#edeee9",
                        "surface": "#f8faf5",
                        "on-primary-fixed-variant": "#2f4d39",
                        "surface-container-low": "#f3f4ef",
                        "on-secondary-fixed": "#2a1800",
                        "surface-container-highest": "#e1e3de",
                        "secondary": "#765934",
                        "secondary-fixed": "#ffddb6",
                        "inverse-surface": "#2e312e",
                        "surface-container-lowest": "#ffffff"
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    fontFamily: {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-surface text-on-surface font-body antialiased min-h-screen">
    <!-- Shared Component: SideNavBar -->
    <aside
        class="fixed left-0 top-0 h-full flex flex-col z-40 bg-[#f8faf5] dark:bg-stone-950 rounded-none w-72 border-r border-[#727972]/15 shadow-none">
        <div class="p-6 flex flex-col gap-2">
            <div class="flex items-center gap-3 mb-6">
                <div
                    class="w-10 h-10 bg-primary-container rounded-none flex items-center justify-center overflow-hidden">
                    <span class="material-symbols-outlined text-on-primary-container">nature_people</span>
                </div>
                <div>
                    <h1
                        class="text-2xl font-black tracking-tighter text-[#163422] dark:text-emerald-400 font-headline uppercase">
                        EcoPortal</h1>
                    <p class="text-xs font-medium text-[#2d4b37] dark:text-stone-400 font-label">Certified Guide</p>
                </div>
            </div>
        </div>
<nav class="flex-1 overflow-y-auto py-4">
            <ul class="flex flex-col font-['Manrope'] font-bold tracking-tight uppercase">
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="guide_dashboard.php">
                        <span class="material-symbols-outlined">grid_view</span>
                        Overview
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=schedule">
                        <span class="material-symbols-outlined">calendar_today</span>
                        <span>Schedule</span>
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=earnings">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Earnings</span>
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=reports">
                        <span class="material-symbols-outlined">article</span>
                        <span>Field Reports</span>
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=certs">
                        <span class="material-symbols-outlined">verified</span>
                        <span>Certifications</span>
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=languages">
                        <span class="material-symbols-outlined">translate</span>
                        <span>Languages</span>
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=tags">
                        <span class="material-symbols-outlined">sell</span>
                        <span>Impact Tags</span>
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=itinerary">
                        <span class="material-symbols-outlined">map</span>
                        <span>Itinerary</span>
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=badges">
                        <span class="material-symbols-outlined">workspace_premium</span>
                        <span>Badges</span>
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=shadowing">
                        <span class="material-symbols-outlined">group</span>
                        <span>Shadowing</span>
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=identity">
                        <span class="material-symbols-outlined">badge</span>
                        <span>Identity</span>
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=vouchers">
                        <span class="material-symbols-outlined">qr_code</span>
                        <span>Vouchers</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="mt-auto border-t border-[#727972]/15 pt-4 pb-6">
            <ul class="flex flex-col font-['Manrope'] font-bold tracking-tight uppercase">
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-3 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="../../index.php?logout=1">
                        <span class="material-symbols-outlined">logout</span>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- Main Canvas: Create Experience Form -->
    <main class="ml-72 p-10 lg:p-16 max-w-[1400px]">
        <header class="mb-12">
            <h1 class="text-[3.5rem] leading-none font-headline font-bold text-primary tracking-[-0.02em] mb-4">Draft
                Experience</h1>
            <p class="text-on-surface-variant font-body text-lg max-w-2xl">Define the architecture of your tour. Ensure
                all sustainability metrics are accurately recorded for the audit trail.</p>
        </header>
        <?php if ($message): ?>
        <div class="bg-primary-fixed text-on-primary-fixed p-4 mb-6 border-l-4 border-primary">
            <?php echo $message; ?>
        </div>
        <?php endif; ?>
        
        <?php if ($error): ?>
        <div class="bg-error-container text-on-error-container p-4 mb-6 border-l-4 border-error">
            <?php echo $error; ?>
        </div>
        <?php endif; ?>
        
        <form method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
            <input type="hidden" name="action" value="create_tour">
            <!-- Left Column: Details & Waypoints -->
            <div class="lg:col-span-7 flex flex-col gap-12">
                <!-- Section: Tour Details -->
                <section class="bg-surface-container-low p-8 rounded-none">
                    <h3
                        class="font-headline font-bold text-xl text-primary mb-6 uppercase tracking-tight flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">edit_document</span>
                        Tour Blueprint
                    </h3>
                    <div class="space-y-6">
                        <div>
                            <label class="block font-label text-sm font-semibold text-on-surface mb-2">Experience
                                Title</label>
                            <input name="tour_name"
                                class="w-full bg-surface border <?php echo isset($fieldErrors['tour_name']) ? 'border-error' : 'border-outline'; ?> rounded-none p-4 font-body text-on-surface focus:border-primary focus:border-2 focus:outline-none transition-all placeholder:text-outline-variant"
                                placeholder="e.g., Coastal Foraging Expedition" type="text" value="<?php echo htmlspecialchars($_POST['tour_name'] ?? ''); ?>" />
                            <?php if (isset($fieldErrors['tour_name'])): ?>
                            <p class="text-error text-sm mt-1"><?php echo $fieldErrors['tour_name']; ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block font-label text-sm font-semibold text-on-surface mb-2">Location</label>
                                <select name="location_id"
                                    class="w-full bg-surface border border-outline rounded-none p-4 font-body text-on-surface focus:border-primary focus:border-2 focus:outline-none transition-all appearance-none cursor-pointer">
                                    <?php foreach ($locations as $loc): ?>
                                    <option value="<?php echo $loc['location_id']; ?>"><?php echo htmlspecialchars($loc['location_name'] . ' - ' . $loc['country']); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div>
                                <label class="block font-label text-sm font-semibold text-on-surface mb-2">Category</label>
                                <select name="tour_type"
                                    class="w-full bg-surface border border-outline rounded-none p-4 font-body text-on-surface focus:border-primary focus:border-2 focus:outline-none transition-all appearance-none cursor-pointer">
                                    <option value="eco">Flora &amp; Fauna</option>
                                    <option value="adventure">Adventure</option>
                                    <option value="cultural">Cultural</option>
                                    <option value="wildlife">Wildlife</option>
                                    <option value="mixed">Mixed</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block font-label text-sm font-semibold text-on-surface mb-2">Duration
                                    (Hours)</label>
                                <input name="duration"
                                    class="w-full bg-surface border border-outline rounded-none p-4 font-body text-on-surface focus:border-primary focus:border-2 focus:outline-none transition-all"
                                    placeholder="4" type="number" value="4" />
                            </div>
                            <div>
                                <label class="block font-label text-sm font-semibold text-on-surface mb-2">Price per Person ($)</label>
                                <input name="price_per_person"
                                    class="w-full bg-surface border <?php echo isset($fieldErrors['price_per_person']) ? 'border-error' : 'border-outline'; ?> rounded-none p-4 font-body text-on-surface focus:border-primary focus:border-2 focus:outline-none transition-all"
                                    placeholder="100" type="number" step="0.01" value="<?php echo htmlspecialchars($_POST['price_per_person'] ?? '100'); ?>" />
                                <?php if (isset($fieldErrors['price_per_person'])): ?>
                                <p class="text-error text-sm mt-1"><?php echo $fieldErrors['price_per_person']; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div>
                            <label class="block font-label text-sm font-semibold text-on-surface mb-2">Max Capacity</label>
                            <input name="max_capacity"
                                class="w-full bg-surface border <?php echo isset($fieldErrors['max_capacity']) ? 'border-error' : 'border-outline'; ?> rounded-none p-4 font-body text-on-surface focus:border-primary focus:border-2 focus:outline-none transition-all"
                                placeholder="10" type="number" value="<?php echo htmlspecialchars($_POST['max_capacity'] ?? '10'); ?>" />
                            <?php if (isset($fieldErrors['max_capacity'])): ?>
                            <p class="text-error text-sm mt-1"><?php echo $fieldErrors['max_capacity']; ?></p>
                            <?php endif; ?>
                        </div>
                        <div>
                            <label class="block font-label text-sm font-semibold text-on-surface mb-2">Field
                                Description</label>
                            <textarea name="description"
                                class="w-full bg-surface border border-outline rounded-none p-4 font-body text-on-surface focus:border-primary focus:border-2 focus:outline-none transition-all placeholder:text-outline-variant resize-y"
                                placeholder="Detail the ecological significance and physical requirements of this journey..."
                                rows="5"></textarea>
                        </div>
                    </div>
                </section>
                <!-- Section: Stop Sequence (Waypoints) -->
                <section>
                    <div class="flex justify-between items-end mb-6">
                        <h3
                            class="font-headline font-bold text-xl text-primary uppercase tracking-tight flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">route</span>
                            Stop Sequence
                        </h3>
                        <button
                            class="bg-secondary-container text-on-secondary-container rounded-none px-4 py-2 font-label text-sm font-bold hover:brightness-95 transition-all flex items-center gap-1"
                            type="button" onclick="addWaypoint()">
                            <span class="material-symbols-outlined text-sm">add</span> Add Waypoint
                        </button>
                    </div>
                    <div class="flex flex-col gap-4" id="waypoints_container">
                        <!-- Waypoint Card 1 -->
                        <div class="bg-surface-container p-6 rounded-none flex gap-6 items-start relative group hover:bg-surface-container-high transition-colors">
                            <div class="flex flex-col items-center gap-2 mt-1">
                                <span class="w-8 h-8 bg-primary text-on-primary flex items-center justify-center font-headline font-bold text-sm rounded-none">01</span>
                                <div class="w-px h-12 bg-outline-variant/40"></div>
                            </div>
                            <div class="flex-1 space-y-3">
                                <input name="waypoints[1][title]" class="w-full bg-transparent border-b border-outline-variant/50 rounded-none pb-2 font-body font-semibold text-on-surface focus:border-primary focus:outline-none transition-all text-lg" type="text" value="Basecamp Orientation" />
                                <textarea name="waypoints[1][description]" class="w-full bg-surface border border-outline/30 rounded-none p-3 font-body text-sm text-on-surface focus:border-primary focus:outline-none transition-all mt-2" placeholder="Waypoint activity details..." rows="2">Briefing on local ecosystem and safety protocols.</textarea>
                            </div>
                        </div>
                        <!-- Waypoint Card 2 -->
                        <div class="bg-surface-container p-6 rounded-none flex gap-6 items-start relative group hover:bg-surface-container-high transition-colors">
                            <div class="flex flex-col items-center gap-2 mt-1">
                                <span class="w-8 h-8 bg-primary text-on-primary flex items-center justify-center font-headline font-bold text-sm rounded-none">02</span>
                            </div>
                            <div class="flex-1 space-y-3">
                                <input name="waypoints[2][title]" class="w-full bg-transparent border-b border-outline-variant/50 rounded-none pb-2 font-body font-semibold text-on-surface focus:border-primary focus:outline-none transition-all text-lg" placeholder="Waypoint Title" type="text" />
                                <textarea name="waypoints[2][description]" class="w-full bg-surface border border-outline/30 rounded-none p-3 font-body text-sm text-on-surface focus:border-primary focus:outline-none transition-all mt-2" placeholder="Waypoint activity details..." rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Right Column: Media & Sustainability -->
            <div class="lg:col-span-5 flex flex-col gap-8 lg:mt-12">
                <!-- Section: Media Upload -->
                <section class="bg-surface-container-low p-8 rounded-none">
                    <h3
                        class="font-headline font-bold text-xl text-primary mb-6 uppercase tracking-tight flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">photo_library</span>
                        Visual Documentation
                    </h3>
                    <div class="space-y-4">
                        <!-- Hero Upload -->
                        <label class="block cursor-pointer">
                            <input type="file" name="hero_image" accept="image/*" class="hidden" id="hero_upload" onchange="previewImage(this, 'hero_preview')">
                            <div id="hero_preview" class="w-full aspect-square bg-surface-variant flex flex-col items-center justify-center text-outline-variant border-2 border-dashed border-outline/30 hover:border-primary hover:text-primary transition-all cursor-pointer relative group">
                                <span class="material-symbols-outlined text-4xl mb-2 group-hover:scale-110 transition-transform">add_photo_alternate</span>
                                <span class="font-label text-sm font-medium">Upload Hero Image</span>
                                <span class="font-label text-xs mt-1 opacity-70">Strictly square, high contrast</span>
                            </div>
                        </label>
                        <!-- Grid Uploads -->
                        <div class="grid grid-cols-2 gap-4">
                            <label class="cursor-pointer">
                                <input type="file" name="image_1" accept="image/*" class="hidden" id="img1_upload" onchange="previewImage(this, 'img1_preview')">
                                <div id="img1_preview" class="aspect-square bg-surface-variant flex items-center justify-center text-outline-variant border border-dashed border-outline/30 hover:border-primary hover:text-primary transition-all cursor-pointer">
                                    <span class="material-symbols-outlined text-2xl">add</span>
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="file" name="image_2" accept="image/*" class="hidden" id="img2_upload" onchange="previewImage(this, 'img2_preview')">
                                <div id="img2_preview" class="aspect-square bg-surface-variant flex items-center justify-center text-outline-variant border border-dashed border-outline/30 hover:border-primary hover:text-primary transition-all cursor-pointer">
                                    <span class="material-symbols-outlined text-2xl">add</span>
                                </div>
                            </label>
                        </div>
                    </div>
                </section>
                <!-- Section: Sustainability & Audit -->
                <section class="bg-surface-container-high p-8 rounded-none relative overflow-hidden">
                    <!-- Accent background element -->
                    <div
                        class="absolute -right-12 -top-12 w-32 h-32 bg-primary/5 rounded-none rotate-45 pointer-events-none">
                    </div>
                    <h3
                        class="font-headline font-bold text-xl text-primary mb-6 uppercase tracking-tight flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">eco</span>
                        Impact &amp; Audit
                    </h3>
                    <!-- Impact Chips (Data Dense) -->
                    <div class="space-y-4 mb-8">
                        <div
                            class="bg-tertiary-container text-on-tertiary-container p-4 rounded-none flex items-center justify-between group cursor-pointer hover:brightness-110 transition-all">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined">recycling</span>
                                <span class="font-label font-semibold text-sm">Waste Mitigation</span>
                            </div>
                            <span class="font-headline font-bold">Zero Trace</span>
                        </div>
                        <div
                            class="bg-tertiary-container text-on-tertiary-container p-4 rounded-none flex items-center justify-between group cursor-pointer hover:brightness-110 transition-all">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined">co2</span>
                                <span class="font-label font-semibold text-sm">Carbon Offset</span>
                            </div>
                            <span class="font-headline font-bold">Pending Setup</span>
                        </div>
                        <div
                            class="bg-tertiary-container text-on-tertiary-container p-4 rounded-none flex items-center justify-between group cursor-pointer hover:brightness-110 transition-all">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined">handshake</span>
                                <span class="font-label font-semibold text-sm">Local Hiring</span>
                            </div>
                            <input type="checkbox" name="local_hiring" value="1" class="w-8 h-8 accent-primary" />
                        </div>
                    </div>
                    <div>
                        <label class="block font-label text-sm font-semibold text-on-surface mb-2">Carbon Footprint (kg CO2)</label>
                        <input name="carbon_footprint"
                            class="w-full bg-surface border border-outline rounded-none p-4 font-body text-on-surface focus:border-primary focus:border-2 focus:outline-none transition-all"
                            placeholder="e.g., 50.00" type="number" step="0.01" />
                    </div>
                    <div>
                        <label class="block font-label text-sm font-semibold text-on-surface mb-2">Waste Management</label>
                        <input name="waste_management"
                            class="w-full bg-surface border border-outline rounded-none p-4 font-body text-on-surface focus:border-primary focus:border-2 focus:outline-none transition-all"
                            placeholder="e.g., Zero trace policy" type="text" />
                    </div>
                    <!-- Certificate Upload -->
                    <div>
                        <label
                            class="block font-label text-sm font-semibold text-on-surface mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">verified</span>
                            Audit Trail Credentials
                        </label>
                        <label class="block cursor-pointer">
                            <input type="file" name="certificate_file" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" class="hidden" id="cert_upload" onchange="updateCertLabel(this)">
                            <div id="cert_file_label"
                                class="w-full bg-surface border border-outline border-dashed p-4 flex items-center justify-between hover:bg-surface-variant transition-colors cursor-pointer group">
                                <div class="flex items-center gap-3 text-on-surface-variant">
                                    <span class="material-symbols-outlined">upload_file</span>
                                    <span class="font-body text-sm">Attach Certification (PDF)</span>
                                </div>
                                <span class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">arrow_forward</span>
                            </div>
                        </label>
                    </div>
                </section>
                <!-- Action Block -->
                <div class="mt-4 flex justify-end">
                    <button
                        class="bg-gradient-to-br from-primary to-primary-container text-on-primary font-headline font-bold text-lg uppercase tracking-tight py-4 px-10 rounded-none hover:shadow-[0_20px_40px_rgba(25,28,25,0.1)] hover:-translate-y-1 transition-all active:translate-y-0 active:shadow-none flex items-center gap-3"
                        type="submit">
                        Compile Record
                        <span class="material-symbols-outlined">arrow_right_alt</span>
                    </button>
                </div>
            </div>
        </form>
    </main>
<script>
    let waypointCount = 2;
    
    function addWaypoint() {
        waypointCount++;
        const container = document.querySelector('.flex.flex-col.gap-4');
        const newWaypoint = document.createElement('div');
        newWaypoint.className = 'bg-surface-container p-6 rounded-none flex gap-6 items-start relative group hover:bg-surface-container-high transition-colors';
        newWaypoint.innerHTML = `
            <div class="flex flex-col items-center gap-2 mt-1">
                <span class="w-8 h-8 bg-primary text-on-primary flex items-center justify-center font-headline font-bold text-sm rounded-none">${String(waypointCount).padStart(2, '0')}</span>
                <div class="w-px h-12 bg-outline-variant/40"></div>
            </div>
            <div class="flex-1 space-y-3">
                <input name="waypoints[${waypointCount}][title]" class="w-full bg-transparent border-b border-outline-variant/50 rounded-none pb-2 font-body font-semibold text-on-surface focus:border-primary focus:outline-none transition-all text-lg" type="text" placeholder="Waypoint Title" />
                <textarea name="waypoints[${waypointCount}][description]" class="w-full bg-surface border border-outline/30 rounded-none p-3 font-body text-sm text-on-surface focus:border-primary focus:outline-none transition-all mt-2" placeholder="Waypoint activity details..." rows="2"></textarea>
            </div>
            <button type="button" class="text-outline hover:text-error transition-colors p-2" onclick="this.parentElement.remove()"><span class="material-symbols-outlined">delete</span></button>
        `;
        container.appendChild(newWaypoint);
    }
    
    function previewImage(input, previewId) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById(previewId);
                preview.innerHTML = '<img src="' + e.target.result + '" class="w-full h-full object-cover">';
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    function updateCertLabel(input) {
        if (input.files && input.files[0]) {
            const label = document.getElementById('cert_file_label');
            label.querySelector('.font-body').textContent = input.files[0].name;
        }
    }
</script>
</body>

</html>