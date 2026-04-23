<?php
session_start();

if (!isset($connect)) {
    require_once dirname(__DIR__, 3) . '/core/connection.php';
}

$guideId = $_SESSION['guide_id'] ?? $_SESSION['user_id'] ?? 0;
$message = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    
    if ($_POST['action'] === 'check_conflict') {
        $startTime = $_POST['start_time'] ?? '';
        $endTime = $_POST['end_time'] ?? '';
        
        if ($startTime && $endTime) {
            $stmt = $connect->prepare("
                SELECT COUNT(*) as cnt FROM booking
                WHERE guide_id = ? AND status IN ('pending', 'confirmed')
                AND (
                    (start_time < ? AND end_time > ?)
                    OR (start_time < ? AND end_time > ?)
                    OR (start_time >= ? AND end_time <= ?)
                )
            ");
            $stmt->execute([$guideId, $endTime, $startTime, $endTime, $startTime, $startTime, $endTime]);
            $result = $stmt->fetch();
            
            if ($result['cnt'] > 0) {
                $conflict = true;
                echo json_encode(['success' => false, 'message' => 'Schedule conflict! This time overlaps with an existing booking.']);
            } else {
                echo json_encode(['success' => true, 'message' => 'Time slot available!']);
            }
            exit;
        }
    }
    
    // Update booking status (cancel)
    if ($_POST['action'] === 'cancel_booking') {
        $bookingId = $_POST['booking_id'] ?? 0;
        if ($bookingId) {
            $stmt = $connect->prepare("UPDATE booking SET status = 'cancelled', cancelled_at = NOW() WHERE booking_id = ? AND guide_id = ?");
            $stmt->execute([$bookingId, $guideId]);
            $message = "Booking cancelled successfully";
        }
    }
}

// Get schedule/bookings
$schedule = [];
if ($guideId) {
    $stmt = $connect->prepare("
        SELECT b.booking_id, b.start_time, b.end_time, b.status, b.total_price, b.created_at,
               t.tour_name, l.location_name, u.name as traveler_name, tr.nationality
        FROM booking b
        JOIN tour_version tv ON b.tour_version_id = tv.tour_version_id
        JOIN tour t ON tv.tour_id = t.tour_id
        LEFT JOIN location l ON t.location_id = l.location_id
        JOIN traveler tr ON b.traveler_id = tr.traveler_id
        JOIN users u ON tr.traveler_id = u.user_id
        WHERE b.guide_id = ?
        ORDER BY b.start_time DESC
        LIMIT 30
    ");
    $stmt->execute([$guideId]);
    $schedule = $stmt->fetchAll();
    
    // Get available tours for blocking time
    $stmt = $connect->prepare("
        SELECT t.tour_id, t.tour_name, tv.tour_version_id, tv.price_per_person
        FROM tour t
        JOIN tour_version tv ON t.tour_id = tv.tour_id
        WHERE t.guide_id = ? AND t.status = 'active' AND tv.is_active = 1
    ");
    $stmt->execute([$guideId]);
    $availableTours = $stmt->fetchAll();
}
?>

<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Earth Architect | Guide Schedule</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;family=Inter:wght@100..900&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-dim": "#d9dbd6",
                        "surface-container-highest": "#e1e3de",
                        "on-tertiary-fixed-variant": "#534529",
                        "on-secondary-container": "#795b36",
                        "surface-bright": "#f8faf5",
                        "on-secondary-fixed": "#2a1800",
                        "on-primary": "#ffffff",
                        "surface-container-high": "#e7e9e4",
                        "error-container": "#ffdad6",
                        "on-surface": "#191c19",
                        "tertiary-fixed-dim": "#d8c49f",
                        "on-primary-fixed-variant": "#2f4d39",
                        "on-primary-container": "#99baa1",
                        "primary-container": "#2d4b37",
                        "on-tertiary-container": "#c3b08c",
                        "secondary-fixed": "#ffddb6",
                        "on-secondary-fixed-variant": "#5c421f",
                        "inverse-primary": "#adcfb4",
                        "on-tertiary": "#ffffff",
                        "surface-container": "#edeee9",
                        "primary": "#163422",
                        "on-tertiary-fixed": "#241a03",
                        "outline-variant": "#c2c8c0",
                        "on-error-container": "#93000a",
                        "surface-variant": "#e1e3de",
                        "on-background": "#191c19",
                        "background": "#f8faf5",
                        "surface-container-low": "#f3f4ef",
                        "secondary-container": "#fed6a7",
                        "on-error": "#ffffff",
                        "on-primary-fixed": "#022110",
                        "primary-fixed-dim": "#adcfb4",
                        "outline": "#727972",
                        "inverse-on-surface": "#f0f1ec",
                        "surface-container-lowest": "#ffffff",
                        "error": "#ba1a1a",
                        "tertiary-fixed": "#f5e0ba",
                        "on-surface-variant": "#424843",
                        "surface-tint": "#466550",
                        "secondary-fixed-dim": "#e6c093",
                        "inverse-surface": "#2e312e",
                        "surface": "#f8faf5",
                        "tertiary": "#392d13",
                        "on-secondary": "#ffffff",
                        "secondary": "#765934",
                        "tertiary-container": "#504327",
                        "primary-fixed": "#c8ebd0"
                    },
                    "borderRadius": {
                        "none": "0px",
                        "DEFAULT": "0px",
                        "lg": "0px",
                        "xl": "0px",
                        "full": "0px"
                    },
                    "fontFamily": {
                        "headline": ["Manrope", "sans-serif"],
                        "body": ["Inter", "sans-serif"],
                        "label": ["Inter", "sans-serif"]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        .font-headline {
            font-family: 'Manrope', sans-serif;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f3f4ef;
        }

        ::-webkit-scrollbar-thumb {
            background: #727972;
        }
    </style>
</head>

<body class="bg-background text-on-background min-h-screen flex overflow-x-hidden">
    <!-- SideNavBar (Authority: JSON & Design System) -->
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
                    <a class="bg-[#dbe7dd] dark:bg-stone-700 text-[#2d4b37] font-semibold px-6 py-4 flex items-center gap-4 border-l-4 border-[#2d4b37]"
                        href="all_functions.php?tab=schedule">
                        <span class="material-symbols-outlined">calendar_today</span>
                        Schedule
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=earnings">
                        <span class="material-symbols-outlined">payments</span>
                        Earnings
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=reports">
                        <span class="material-symbols-outlined">article</span>
                        Field Reports
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=certs">
                        <span class="material-symbols-outlined">verified</span>
                        Certifications
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=tags">
                        <span class="material-symbols-outlined">sell</span>
                        Impact Tags
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=badges">
                        <span class="material-symbols-outlined">workspace_premium</span>
                        Badges
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=identity">
                        <span class="material-symbols-outlined">badge</span>
                        Identity
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=vouchers">
                        <span class="material-symbols-outlined">qr_code</span>
                        Vouchers
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
    <!-- Main Content Canvas -->
    <main class="flex-1 flex flex-col min-w-0 bg-surface">
        <!-- Page Content -->
        <div class="p-6 md:p-10 max-w-7xl w-full mx-auto grid grid-cols-1 xl:grid-cols-12 gap-8">
            <!-- Calendar Section (Bento Grid Style) -->
            <section class="xl:col-span-8 space-y-6">
                <div class="flex items-baseline justify-between mb-2">
                    <h2 class="text-4xl font-headline font-extrabold tracking-tighter text-primary">October 2024</h2>
                    <div class="flex gap-1">
                        <button class="p-2 bg-surface-container hover:bg-surface-container-high transition-colors"><span
                                class="material-symbols-outlined">chevron_left</span></button>
                        <button class="p-2 bg-surface-container hover:bg-surface-container-high transition-colors"><span
                                class="material-symbols-outlined">chevron_right</span></button>
                    </div>
                </div>
                <!-- Monthly Grid -->
                <div class="grid grid-cols-7 gap-px bg-outline-variant/20 border border-outline-variant/20">
                    <!-- Weekdays -->
                    <div
                        class="bg-surface-container-low p-4 text-center text-xs font-bold uppercase tracking-widest text-outline">
                        Mon</div>
                    <div
                        class="bg-surface-container-low p-4 text-center text-xs font-bold uppercase tracking-widest text-outline">
                        Tue</div>
                    <div
                        class="bg-surface-container-low p-4 text-center text-xs font-bold uppercase tracking-widest text-outline">
                        Wed</div>
                    <div
                        class="bg-surface-container-low p-4 text-center text-xs font-bold uppercase tracking-widest text-outline">
                        Thu</div>
                    <div
                        class="bg-surface-container-low p-4 text-center text-xs font-bold uppercase tracking-widest text-outline">
                        Fri</div>
                    <div
                        class="bg-surface-container-low p-4 text-center text-xs font-bold uppercase tracking-widest text-outline text-primary">
                        Sat</div>
                    <div
                        class="bg-surface-container-low p-4 text-center text-xs font-bold uppercase tracking-widest text-outline text-primary">
                        Sun</div>
                    <!-- Days (Sample Data) -->
                    <!-- Row 1 -->
                    <div class="bg-surface h-32 p-3 text-sm text-outline opacity-40">26</div>
                    <div class="bg-surface h-32 p-3 text-sm text-outline opacity-40">27</div>
                    <div class="bg-surface h-32 p-3 text-sm text-outline opacity-40">28</div>
                    <div class="bg-surface h-32 p-3 text-sm text-outline opacity-40">29</div>
                    <div class="bg-surface h-32 p-3 text-sm text-outline opacity-40">30</div>
                    <div class="bg-surface-container h-32 p-3 text-sm font-bold">01</div>
                    <div class="bg-surface-container h-32 p-3 text-sm font-bold">02</div>
                    <!-- Row 2 -->
                    <div class="bg-surface h-32 p-3 text-sm font-bold">03</div>
                    <div
                        class="bg-surface h-32 p-3 text-sm font-bold border-l-4 border-primary bg-primary-container/10">
                        <span>04</span>
                        <div class="mt-2 text-[10px] bg-primary text-white p-1 uppercase truncate font-bold">Highland
                            Trek</div>
                    </div>
                    <div class="bg-surface h-32 p-3 text-sm font-bold">05</div>
                    <div class="bg-surface h-32 p-3 text-sm font-bold">06</div>
                    <div class="bg-surface h-32 p-3 text-sm font-bold">07</div>
                    <div class="bg-surface-container h-32 p-3 text-sm font-bold">08</div>
                    <div class="bg-surface-container h-32 p-3 text-sm font-bold">09</div>
                    <!-- Row 3 with Conflict (SRS Requirement 15) -->
                    <div class="bg-surface h-32 p-3 text-sm font-bold relative overflow-hidden group">
                        <span>10</span>
                        <div
                            class="mt-2 text-[10px] bg-error text-white p-1 uppercase font-bold flex items-center gap-1">
                            <span class="material-symbols-outlined text-[12px]">warning</span> Conflict
                        </div>
                        <div class="absolute inset-0 bg-error/5 pointer-events-none"></div>
                    </div>
                    <div
                        class="bg-surface-bright h-32 p-3 text-sm font-bold outline outline-2 outline-primary -outline-offset-2 shadow-xl z-10">
                        <span>11</span>
                        <div class="mt-2 text-[10px] bg-primary text-white p-1 uppercase truncate font-bold">Mossy
                            Forest</div>
                        <div class="mt-1 text-[10px] bg-secondary text-white p-1 uppercase truncate font-bold">Workshop
                        </div>
                    </div>
                    <div class="bg-surface h-32 p-3 text-sm font-bold">12</div>
                    <div class="bg-surface h-32 p-3 text-sm font-bold">13</div>
                    <div class="bg-surface h-32 p-3 text-sm font-bold">14</div>
                    <div class="bg-surface-container h-32 p-3 text-sm font-bold">15</div>
                    <div class="bg-surface-container h-32 p-3 text-sm font-bold">16</div>
                </div>
                <!-- Legend & Toggles -->
                <div class="flex flex-wrap gap-6 pt-4 border-t border-outline-variant/15">
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 bg-primary"></div>
                        <span class="text-xs font-bold uppercase tracking-wider text-outline">Confirmed Tour</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 bg-secondary"></div>
                        <span class="text-xs font-bold uppercase tracking-wider text-outline">Maintenance</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 bg-error"></div>
                        <span class="text-xs font-bold uppercase tracking-wider text-outline">Overlapping
                            Conflict</span>
                    </div>
                </div>
            </section>
            <!-- Daily Agenda Side Panel -->
            <section class="xl:col-span-4 space-y-6">
                <div class="bg-surface-container-low p-8 h-full flex flex-col">
                    <header class="mb-8">
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-outline mb-1 block">Selected
                            Day</span>
                        <h3 class="text-2xl font-headline font-bold text-primary">Friday, Oct 11</h3>
                    </header>
                    <div class="flex-1 space-y-8">
                        <!-- Agenda Item 1 -->
                        <article
                            class="relative pl-6 before:content-[''] before:absolute before:left-0 before:top-0 before:bottom-0 before:w-1 before:bg-primary">
                            <span class="text-[10px] font-bold text-primary uppercase">08:00 AM - 12:00 PM</span>
                            <h4 class="text-lg font-headline font-extrabold mt-1">Deep Mossy Forest Expedition</h4>
                            <div class="mt-4 grid grid-cols-2 gap-4">
                                <div class="bg-surface p-3">
                                    <span class="text-[10px] text-outline uppercase block mb-1">Tour ID</span>
                                    <span class="font-bold text-xs">#EXP-4402</span>
                                </div>
                                <div class="bg-surface p-3">
                                    <span class="text-[10px] text-outline uppercase block mb-1">Travelers</span>
                                    <span class="font-bold text-xs">8 People</span>
                                </div>
                            </div>
                            <div class="mt-3 bg-surface p-3 flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">location_on</span>
                                <div>
                                    <span class="text-[10px] text-outline uppercase block mb-1">Meeting Point</span>
                                    <span class="font-bold text-xs">North Ridge Base Camp</span>
                                </div>
                            </div>
                        </article>
                        <!-- Agenda Item 2 (Maintenance/Overlap) -->
                        <article
                            class="relative pl-6 before:content-[''] before:absolute before:left-0 before:top-0 before:bottom-0 before:w-1 before:bg-secondary">
                            <div class="flex justify-between items-start">
                                <div>
                                    <span class="text-[10px] font-bold text-secondary uppercase">01:30 PM - 03:00
                                        PM</span>
                                    <h4 class="text-lg font-headline font-extrabold mt-1">Eco-System Workshop</h4>
                                </div>
                                <span
                                    class="bg-secondary-container text-on-secondary-container px-2 py-0.5 text-[10px] font-bold uppercase">Maintenance</span>
                            </div>
                            <p class="text-sm text-outline mt-2 leading-relaxed">Mandatory quarterly sustainability
                                assessment for certified guides.</p>
                        </article>
                    </div>
                    <!-- Bottom Bar (Mobile Only) -->
                    <nav
                        class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-4 py-3 md:hidden bg-[#f8faf5]/80 dark:bg-[#121410]/80 backdrop-blur-md border-t border-[#727972]/15 shadow-[0px_-10px_30px_rgba(25,28,25,0.04)]">
                        <a class="flex flex-col items-center justify-center text-[#727972] dark:text-[#8c938c]"
                            href="#">
                            <span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
                            <span
                                class="font-inter text-[10px] font-bold uppercase tracking-widest mt-1">Schedule</span>
                        </a>
                        <a class="flex flex-col items-center justify-center text-[#727972] dark:text-[#8c938c]"
                            href="#">
                            <span class="material-symbols-outlined" data-icon="map">map</span>
                            <span class="font-inter text-[10px] font-bold uppercase tracking-widest mt-1">Tours</span>
                        </a>
                        <a class="flex flex-col items-center justify-center text-[#727972] dark:text-[#8c938c]"
                            href="#">
                            <span class="material-symbols-outlined"
                                data-icon="account_balance_wallet">account_balance_wallet</span>
                            <span
                                class="font-inter text-[10px] font-bold uppercase tracking-widest mt-1">Earnings</span>
                        </a>
                        <a class="flex flex-col items-center justify-center text-[#727972] dark:text-[#8c938c]"
                            href="#">
                            <span class="material-symbols-outlined" data-icon="person">person</span>
                            <span class="font-inter text-[10px] font-bold uppercase tracking-widest mt-1">Profile</span>
                        </a>
                    </nav>
    </main>
    <!-- FAB Suppression Logic as per System: Highly contextual, not needed on detailed management view -->
</body>

</html>