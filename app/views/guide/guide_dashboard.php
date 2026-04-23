<?php 
$page = 'dashboard';
require_once __DIR__ . '/header.php';
?>

<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Guide Dashboard - EcoPortal</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
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
                    "borderRadius": {
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
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body
    class="bg-background text-on-background font-body min-h-screen flex selection:bg-primary-container selection:text-on-primary-container">
    <!-- SideNavBar (from JSON) -->
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
                    <a class="bg-[#dbe7dd] dark:bg-stone-700 text-[#2d4b37] font-semibold px-6 py-4 flex items-center gap-4 border-l-4 border-[#2d4b37]"
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
    <!-- Main Content Wrapper -->
    <div class="flex-1 ml-72 flex flex-col min-h-screen">
        <!-- Main Canvas -->
        <main class="flex-1 p-8 lg:p-12 bg-surface-bright flex flex-col gap-12">
            <!-- Hero / Welcome Section -->
            <section
                class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 bg-gradient-to-br from-primary to-primary-container p-10 text-on-primary shadow-[0px_20px_40px_rgba(25,28,25,0.06)] relative overflow-hidden group">
                <!-- Decorative element -->
                <div
                    class="absolute -right-20 -top-20 w-64 h-64 border border-on-primary/10 rotate-45 transform origin-center opacity-50 pointer-events-none">
                </div>
                <div
                    class="absolute right-10 bottom-10 w-32 h-32 bg-on-primary/5 rotate-12 transform origin-center pointer-events-none">
                </div>
                <div class="flex flex-col gap-2 relative z-10">
                    <h1
                        class="font-headline text-4xl lg:text-[3.5rem] leading-none tracking-tight font-extrabold text-on-primary">
                        Hello, <?php echo htmlspecialchars($guide['name'] ?? 'Guide'); ?></h1>
                    <p class="font-body text-on-primary-container text-lg max-w-2xl mt-4">Your guide ecosystem is
                        thriving. Here is your operational overview for the current season.</p>
                </div>
                <a href="create_new_experience.php"
                    class="relative z-10 bg-secondary-container text-on-secondary-container px-6 py-4 font-label font-bold uppercase tracking-wider text-sm hover:bg-secondary-fixed hover:text-on-secondary-fixed transition-colors flex items-center gap-2">
                    <span class="material-symbols-outlined text-[18px]">add</span>
                    Create New Experience
                </a>
            </section>
            <!-- Metrics Bento Grid -->
            <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Metric 1: Rating -->
                <div
                    class="bg-surface-container-low p-8 flex flex-col gap-4 border-l-4 border-primary shadow-[0px_20px_40px_rgba(25,28,25,0.03)] hover:bg-surface-container transition-colors group">
                    <div class="flex justify-between items-start">
                        <span
                            class="font-label text-sm font-semibold text-on-surface-variant uppercase tracking-wider">Overall
                            Rating</span>
                        <span
                            class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform duration-300">star</span>
                    </div>
                    <div class="flex items-baseline gap-2 mt-2">
                        <span class="font-headline text-5xl font-black text-on-surface">4.8</span>
                        <span class="font-body text-on-surface-variant text-lg">/ 5</span>
                    </div>
                    <!-- The Eco-Leaf Rating Visual -->
                    <div class="flex gap-1 mt-auto pt-4 border-t border-outline-variant/30">
                        <span class="material-symbols-outlined text-primary text-[20px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[20px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[20px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[20px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-outline-variant/40 text-[20px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                    </div>
                </div>
                <!-- Metric 2: Completed Tours -->
                <div
                    class="bg-surface-container-low p-8 flex flex-col gap-4 border-l-4 border-secondary shadow-[0px_20px_40px_rgba(25,28,25,0.03)] hover:bg-surface-container transition-colors group">
                    <div class="flex justify-between items-start">
                        <span
                            class="font-label text-sm font-semibold text-on-surface-variant uppercase tracking-wider">Completed
                            Tours</span>
                        <span
                            class="material-symbols-outlined text-secondary group-hover:scale-110 transition-transform duration-300">hiking</span>
                    </div>
                    <div class="flex items-baseline gap-2 mt-2">
                        <span class="font-headline text-5xl font-black text-on-surface">142</span>
                    </div>
                    <div class="mt-auto pt-4 border-t border-outline-variant/30 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[16px]">trending_up</span>
                        <span class="font-body text-sm text-primary font-medium">+12 this month</span>
                    </div>
                </div>
                <!-- Metric 3: Earnings Balance -->
                <div
                    class="bg-surface-container-low p-8 flex flex-col gap-4 border-l-4 border-tertiary shadow-[0px_20px_40px_rgba(25,28,25,0.03)] hover:bg-surface-container transition-colors group">
                    <div class="flex justify-between items-start">
                        <span
                            class="font-label text-sm font-semibold text-on-surface-variant uppercase tracking-wider">Earnings
                            Balance</span>
                        <span
                            class="material-symbols-outlined text-tertiary group-hover:scale-110 transition-transform duration-300">account_balance_wallet</span>
                    </div>
                    <div class="flex items-baseline gap-2 mt-2">
                        <span class="font-headline text-5xl font-black text-on-surface tracking-tighter">$<?php echo number_format($wallet['available_balance'] ?? 0, 2); ?><span
                                class="text-2xl text-on-surface-variant"></span></span>
                    </div>
                    <div class="mt-auto pt-4 border-t border-outline-variant/30 flex items-center justify-between">
                        <span class="font-body text-sm text-on-surface-variant">Pending: $<?php echo number_format($wallet['pending_balance'] ?? 0, 2); ?></span>
                        <a href="earnings_payouts.php"
                            class="text-sm font-bold text-tertiary hover:underline uppercase tracking-wide">Withdraw</a>
                    </div>
                </div>
            </section>
            <!-- Table of Tours (Brutalist style, no lines) -->
            <section class="flex flex-col gap-6 mt-8">
                <div class="flex justify-between items-end">
                    <h2 class="font-headline text-2xl font-bold text-on-surface">Active Roster</h2>
                    <button
                        class="font-label text-sm font-semibold text-primary uppercase tracking-wider hover:text-primary-container transition-colors flex items-center gap-1">
                        View Full History <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </button>
                </div>
                <div class="bg-surface-container-lowest p-1 shadow-[0px_20px_40px_rgba(25,28,25,0.04)] overflow-x-auto">
                    <table class="w-full text-left border-collapse min-w-[800px]">
                        <thead>
                            <tr
                                class="bg-surface-container-low text-on-surface-variant font-label text-xs uppercase tracking-widest">
                                <th class="p-4 font-semibold w-24">Tour ID</th>
                                <th class="p-4 font-semibold">Name</th>
                                <th class="p-4 font-semibold">Location</th>
                                <th class="p-4 font-semibold">Status</th>
                                <th class="p-4 font-semibold w-32">Start Date</th>
                                <th class="p-4 font-semibold w-32">End Date</th>
                                <th class="p-4 font-semibold w-16"></th>
                            </tr>
                        </thead>
                        <tbody class="font-body text-sm text-on-surface">
                            <?php if (!empty($schedule)): ?>
                                <?php foreach ($schedule as $index => $booking): ?>
                            <tr onclick="window.location.href='tour_detail.php?booking_id=<?php echo $booking['booking_id']; ?>'" class="hover:bg-surface-container-low transition-colors group cursor-pointer <?php echo $index % 2 === 0 ? 'bg-surface-container-lowest' : ''; ?>">
                                <td class="p-4 font-mono text-outline">#TR-<?php echo str_pad($booking['booking_id'], 4, '0', STR_PAD_LEFT); ?></td>
                                <td class="p-4 font-semibold text-on-surface group-hover:text-primary transition-colors">
                                    <?php echo htmlspecialchars($booking['tour_name'] ?? 'Tour'); ?></td>
                                <td class="p-4 text-on-surface-variant flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[16px] text-outline">pin_drop</span>
                                    <?php echo htmlspecialChars($booking['location_name'] ?? 'Location'); ?>
                                </td>
                                <td class="p-4">
                                    <?php 
                                    $statusClass = match($booking['status'] ?? '') {
                                        'confirmed' => 'bg-primary-fixed text-on-primary-fixed-variant border border-primary-fixed-dim',
                                        'pending' => 'bg-surface-variant text-on-surface-variant border border-outline-variant',
                                        'completed' => 'bg-tertiary-fixed text-on-tertiary-fixed-variant border border-tertiary-fixed-dim',
                                        'cancelled' => 'bg-error-container text-on-error-container border border-error/30',
                                        default => 'bg-surface-variant text-on-surface-variant border border-outline-variant'
                                    };
                                    $statusIcon = match($booking['status'] ?? '') {
                                        'confirmed' => 'check_circle',
                                        'pending' => 'pending',
                                        'completed' => 'block',
                                        'cancelled' => 'cancel',
                                        default => 'schedule'
                                    };
                                    ?>
                                    <span class="inline-flex items-center gap-1 px-2 py-1 text-xs font-bold uppercase tracking-wider <?php echo $statusClass; ?>">
                                        <span class="material-symbols-outlined text-[14px]"><?php echo $statusIcon; ?></span> <?php echo ucfirst($booking['status'] ?? 'Unknown'); ?>
                                    </span>
                                </td>
                                <td class="p-4 text-on-surface-variant"><?php echo date('M d, Y', strtotime($booking['start_time'] ?? 'now')); ?></td>
                                <td class="p-4 text-on-surface-variant"><?php echo date('M d, Y', strtotime($booking['end_time'] ?? 'now')); ?></td>
                                <td class="p-4 text-right">
                                    <a href="tour_management_view.php?id=<?php echo $booking['tour_id'] ?? ''; ?>"
                                        class="text-outline hover:text-primary opacity-0 group-hover:opacity-100 transition-all">
                                        <span class="material-symbols-outlined">more_vert</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="h-4 bg-surface-bright" colspan="7"></td>
                            </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                            <tr class="hover:bg-surface-container-low transition-colors group cursor-pointer">
                                <td class="p-4 font-mono text-outline">#TR-0000</td>
                                <td class="p-4 font-semibold text-on-surface group-hover:text-primary transition-colors">No scheduled tours</td>
                                <td class="p-4 text-on-surface-variant flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[16px] text-outline">pin_drop</span>
                                    Schedule a tour to get started
                                </td>
                                <td class="p-4">
                                    <span class="inline-flex items-center gap-1 bg-surface-variant text-on-surface-variant px-2 py-1 text-xs font-bold uppercase tracking-wider border border-outline-variant">
                                        <span class="material-symbols-outlined text-[14px]">schedule</span> None
                                    </span>
                                </td>
                                <td class="p-4 text-on-surface-variant">-</td>
                                <td class="p-4 text-on-surface-variant">-</td>
                                <td class="p-4 text-right">
                                </td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
</body>

</html>