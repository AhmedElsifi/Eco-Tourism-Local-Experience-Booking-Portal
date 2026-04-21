<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Super Admin Dashboard - EcoPortal Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Manrope:wght@400;500;600;700;800;900&amp;display=swap"
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
                        "on-tertiary-container": "#c3b08c",
                        "surface-container-high": "#e7e9e4",
                        "on-secondary-fixed-variant": "#5c421f",
                        "surface-container-lowest": "#ffffff",
                        "inverse-on-surface": "#f0f1ec",
                        "on-error-container": "#93000a",
                        "surface-container-low": "#f3f4ef",
                        "surface-container-highest": "#e1e3de",
                        "secondary": "#765934",
                        "primary": "#163422",
                        "primary-container": "#2d4b37",
                        "on-primary": "#ffffff",
                        "outline-variant": "#c2c8c0",
                        "tertiary-container": "#504327",
                        "surface": "#f8faf5",
                        "on-background": "#191c19",
                        "surface-variant": "#e1e3de",
                        "surface-container": "#edeee9",
                        "on-primary-container": "#99baa1",
                        "error": "#ba1a1a",
                        "outline": "#727972",
                        "on-primary-fixed-variant": "#2f4d39",
                        "on-primary-fixed": "#022110",
                        "secondary-fixed": "#ffddb6",
                        "on-secondary-fixed": "#2a1800",
                        "on-secondary": "#ffffff",
                        "inverse-surface": "#2e312e",
                        "tertiary-fixed-dim": "#d8c49f",
                        "on-tertiary-fixed-variant": "#534529",
                        "on-tertiary": "#ffffff",
                        "tertiary": "#392d13",
                        "on-tertiary-fixed": "#241a03",
                        "primary-fixed-dim": "#adcfb4",
                        "secondary-container": "#fed6a7",
                        "on-secondary-container": "#795b36",
                        "error-container": "#ffdad6",
                        "on-surface-variant": "#424843",
                        "surface-bright": "#f8faf5",
                        "on-surface": "#191c19",
                        "tertiary-fixed": "#f5e0ba",
                        "surface-tint": "#466550",
                        "inverse-primary": "#adcfb4",
                        "background": "#f8faf5",
                        "surface-dim": "#d9dbd6",
                        "secondary-fixed-dim": "#e6c093",
                        "on-error": "#ffffff",
                        "primary-fixed": "#c8ebd0"
                    },
                    "borderRadius": {
                        "DEFAULT": "0px",
                        "lg": "0px",
                        "xl": "0px",
                        "full": "0px"
                    },
                    "spacing": {},
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
        body {
            background-color: #f8faf5;
            color: #191c19;
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .font-headline {
            font-family: 'Manrope', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .material-symbols-outlined[style*="'FILL' 1"] {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="flex min-h-screen bg-background">
    <!-- SideNavBar -->
    <nav
        class="hidden md:flex bg-[#edeee9] dark:bg-[#1a1c18] text-[#163422] dark:text-[#d1e8d5] rounded-none w-64 h-full fixed left-0 top-0 flex-col py-8 border-r border-[#727972]/15 z-40">
        <div class="px-6 mb-8">
            <h1 class="font-headline font-black text-lg tracking-widest text-[#163422] dark:text-[#d1e8d5]">EcoPortal
                Admin</h1>
            <p class="font-body font-medium text-sm mt-1 text-on-surface-variant">Admin Console v1.0</p>
        </div>
        <ul class="flex flex-col gap-1 px-2 font-['Manrope'] font-medium text-sm">
            <li>
                <a class="bg-[#163422] text-[#ffffff] rounded-none px-4 py-3 flex items-center gap-3 active:opacity-80"
                    href="admin_command_center.php">
                    <span class="material-symbols-outlined">dashboard</span>
                    Dashboard
                </a>
            </li>
            <li>
                <a class="text-[#414941] dark:text-[#c1c9be] px-4 py-3 flex items-center gap-3 hover:bg-[#e7e9e4] dark:hover:bg-[#3e4a40] transition-all duration-150 active:opacity-80"
                    href="global_review_monitor.php">
                    <span class="material-symbols-outlined">rate_review</span>
                    Reviews
                </a>
            </li>
            <li>
                <a class="text-[#414941] dark:text-[#c1c9be] px-4 py-3 flex items-center gap-3 hover:bg-[#e7e9e4] dark:hover:bg-[#3e4a40] transition-all duration-150 active:opacity-80"
                    href="dispute_mediation_hub.php">
                    <span class="material-symbols-outlined">gavel</span>
                    Disputes
                </a>
            </li>
            <li>
                <a class="text-[#414941] dark:text-[#c1c9be] px-4 py-3 flex items-center gap-3 hover:bg-[#e7e9e4] dark:hover:bg-[#3e4a40] transition-all duration-150 active:opacity-80"
                    href="guide_management_registry.php">
                    <span class="material-symbols-outlined">explore</span>
                    Guides
                </a>
            </li>
            <li>
                <a class="text-[#414941] dark:text-[#c1c9be] px-4 py-3 flex items-center gap-3 hover:bg-[#e7e9e4] dark:hover:bg-[#3e4a40] transition-all duration-150 active:opacity-80"
                    href="traveler_directory.php">
                    <span class="material-symbols-outlined">group</span>
                    Travelers
                </a>
            </li>
            <li>
                <a class="text-[#414941] dark:text-[#c1c9be] px-4 py-3 flex items-center gap-3 hover:bg-[#e7e9e4] dark:hover:bg-[#3e4a40] transition-all duration-150 active:opacity-80"
                    href="regional_auditor_oversight.php">
                    <span class="material-symbols-outlined">verified_user</span>
                    Auditors
                </a>
            </li>
            <li>
                <a class="text-[#414941] dark:text-[#c1c9be] px-4 py-3 flex items-center gap-3 hover:bg-[#e7e9e4] dark:hover:bg-[#3e4a40] transition-all duration-150 active:opacity-80"
                    href="tour_registry_monitoring.php">
                    <span class="material-symbols-outlined">map</span>
                    Tours
                </a>
            </li>
            <li>
                <a class="text-[#414941] dark:text-[#c1c9be] px-4 py-3 flex items-center gap-3 hover:bg-[#e7e9e4] dark:hover:bg-[#3e4a40] transition-all duration-150 active:opacity-80"
                    href="impact_analytics_reporting.php">
                    <span class="material-symbols-outlined">analytics</span>
                    Reports
                </a>
            </li>
            <li>
                <a class="text-[#414941] dark:text-[#c1c9be] px-4 py-3 flex items-center gap-3 hover:bg-[#e7e9e4] dark:hover:bg-[#3e4a40] transition-all duration-150 active:opacity-80"
                    href="platform_configuration_console.php">
                    <span class="material-symbols-outlined">settings</span>
                    Settings
                </a>
            </li>
        </ul>
        <div class="mt-auto px-6 flex items-center gap-3">
            <img alt="Super Admin Avatar" class="w-10 h-10 object-cover border border-outline-variant/30"
                data-alt="Close up portrait of a professional man in a dark green shirt against a neutral background, authoritative but approachable"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdCwSlhbIxjvWXD9_VqMqOANL6nJ4-20SfRxmPokRkgSmqepZwHJUwpWFLli2fiHvWYKO3McnDrTHxezTgKSIIfeuWFW8ecIqd3kcnhOd1s6OxuSC7aWXcstDuFgDPN-5XEQaY244QZ_U843Jizw_kl4bSzbF90mdm0oquYfeFbXgmnYT6Arrb40DhGybwjE6H60t64BrNbqGayGKZcOb8G2zFNSQ6kBjFLH6eLcJ9hsQH8k0O5Z2wNsq2GAK2XOFhzUZmvU-SIw8" />
            <div>
                <p class="font-body font-semibold text-sm text-on-surface">Earth Architect</p>
                <p class="font-label text-xs text-on-surface-variant">System Admin</p>
            </div>
        </div>
        <div class="mt-4 border-t border-[#727972]/15">
            <ul class="flex flex-col font-['Manrope'] font-bold tracking-tight uppercase">
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-3 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="#">
                        <span class="material-symbols-outlined">logout</span>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col md:ml-64 bg-background min-h-screen">
        <!-- Dashboard Canvas -->
        <main class="flex-1 pt-24 px-6 md:px-12 pb-12 overflow-y-auto">
            <div class="max-w-7xl mx-auto">
                <div class="mb-10">
                    <h2 class="font-headline text-display-sm text-on-surface tracking-tight">System Overview</h2>
                    <p class="font-body text-on-surface-variant mt-2">Real-time metrics and global activity logs.</p>
                </div>
                <!-- Metrics Bento Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                    <!-- Metric Card 1 -->
                    <div
                        class="bg-surface-container-high p-8 flex flex-col justify-between border-l-4 border-primary relative overflow-hidden group hover:bg-surface-variant transition-colors">
                        <div
                            class="absolute -right-4 -top-4 opacity-5 pointer-events-none transition-transform group-hover:scale-110">
                            <span class="material-symbols-outlined text-9xl">group</span>
                        </div>
                        <div>
                            <p
                                class="font-label text-sm text-on-surface-variant uppercase tracking-widest font-semibold mb-2">
                                Total Travelers</p>
                            <h3 class="font-headline text-5xl font-black text-on-surface tracking-tighter">12,450</h3>
                        </div>
                        <div class="mt-8 flex items-center gap-2 text-primary">
                            <span class="material-symbols-outlined text-sm"
                                style="font-variation-settings: 'FILL' 1;">trending_up</span>
                            <span class="font-body text-sm font-semibold">+4.2% from last month</span>
                        </div>
                    </div>
                    <!-- Metric Card 2 -->
                    <div
                        class="bg-surface-container-high p-8 flex flex-col justify-between border-l-4 border-secondary relative overflow-hidden group hover:bg-surface-variant transition-colors">
                        <div
                            class="absolute -right-4 -top-4 opacity-5 pointer-events-none transition-transform group-hover:scale-110">
                            <span class="material-symbols-outlined text-9xl">explore</span>
                        </div>
                        <div>
                            <p
                                class="font-label text-sm text-on-surface-variant uppercase tracking-widest font-semibold mb-2">
                                Active Guides</p>
                            <h3 class="font-headline text-5xl font-black text-on-surface tracking-tighter">1,200</h3>
                        </div>
                        <div class="mt-8 flex items-center gap-2 text-primary">
                            <span class="material-symbols-outlined text-sm"
                                style="font-variation-settings: 'FILL' 1;">trending_up</span>
                            <span class="font-body text-sm font-semibold">+1.8% from last month</span>
                        </div>
                    </div>
                    <!-- Metric Card 3 -->
                    <div
                        class="bg-surface-container-high p-8 flex flex-col justify-between border-l-4 border-tertiary-container relative overflow-hidden group hover:bg-surface-variant transition-colors">
                        <div
                            class="absolute -right-4 -top-4 opacity-5 pointer-events-none transition-transform group-hover:scale-110">
                            <span class="material-symbols-outlined text-9xl">verified_user</span>
                        </div>
                        <div>
                            <p
                                class="font-label text-sm text-on-surface-variant uppercase tracking-widest font-semibold mb-2">
                                Regional Auditors</p>
                            <h3 class="font-headline text-5xl font-black text-on-surface tracking-tighter">45</h3>
                        </div>
                        <div class="mt-8 flex items-center gap-2 text-on-surface-variant">
                            <span class="material-symbols-outlined text-sm">horizontal_rule</span>
                            <span class="font-body text-sm font-semibold">Stable across regions</span>
                        </div>
                    </div>
                </div>
                <!-- System Logs Section -->
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="font-headline text-xl font-bold text-on-surface">Recent System Logs</h3>
                        <button
                            class="font-label text-sm font-semibold text-primary hover:text-primary-container transition-colors flex items-center gap-1">
                            View All Logs
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </button>
                    </div>
                    <div class="bg-surface-container w-full overflow-x-auto">
                        <table class="w-full text-left font-body text-sm whitespace-nowrap">
                            <thead
                                class="bg-surface-container-high text-on-surface-variant border-b border-outline-variant/30">
                                <tr>
                                    <th class="px-6 py-4 font-semibold">Timestamp</th>
                                    <th class="px-6 py-4 font-semibold">Event Type</th>
                                    <th class="px-6 py-4 font-semibold">User / ID</th>
                                    <th class="px-6 py-4 font-semibold">Action Detail</th>
                                    <th class="px-6 py-4 font-semibold text-right">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-outline-variant/20 text-on-surface">
                                <!-- Row 1 -->
                                <tr class="hover:bg-surface-container-low transition-colors">
                                    <td class="px-6 py-4 font-mono text-xs text-on-surface-variant">2023-10-27 14:32:01
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-surface-container-highest text-on-surface text-xs font-semibold uppercase tracking-wider">
                                            <span class="material-symbols-outlined text-[14px]">policy</span>
                                            Audit Created
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="w-6 h-6 bg-primary/10 flex items-center justify-center text-primary font-bold text-xs">
                                                M</div>
                                            <span>M. Torres (AUD-92)</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-on-surface-variant truncate max-w-xs">Initiated ecological
                                        impact review for 'Costa Verde Trail'</td>
                                    <td class="px-6 py-4 text-right">
                                        <span class="material-symbols-outlined text-primary"
                                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                    </td>
                                </tr>
                                <!-- Row 2 -->
                                <tr class="hover:bg-surface-container-low transition-colors">
                                    <td class="px-6 py-4 font-mono text-xs text-on-surface-variant">2023-10-27 14:15:22
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-error-container text-on-error-container text-xs font-semibold uppercase tracking-wider">
                                            <span class="material-symbols-outlined text-[14px]">gavel</span>
                                            Dispute Raised
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="w-6 h-6 bg-secondary/10 flex items-center justify-center text-secondary font-bold text-xs">
                                                S</div>
                                            <span>S. Jenkins (TRV-114)</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-on-surface-variant truncate max-w-xs">Reported misleading
                                        guide credentials for 'Alpine Peak'</td>
                                    <td class="px-6 py-4 text-right">
                                        <span class="material-symbols-outlined text-error"
                                            style="font-variation-settings: 'FILL' 1;">warning</span>
                                    </td>
                                </tr>
                                <!-- Row 3 -->
                                <tr class="hover:bg-surface-container-low transition-colors">
                                    <td class="px-6 py-4 font-mono text-xs text-on-surface-variant">2023-10-27 13:45:10
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-surface-container-highest text-on-surface text-xs font-semibold uppercase tracking-wider">
                                            <span class="material-symbols-outlined text-[14px]">person_add</span>
                                            New Guide Reg
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="w-6 h-6 bg-tertiary-container text-on-tertiary-container flex items-center justify-center font-bold text-xs">
                                                L</div>
                                            <span>L. Chen (GUD-842)</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-on-surface-variant truncate max-w-xs">Submitted documents
                                        for 'Advanced Caving' certification</td>
                                    <td class="px-6 py-4 text-right">
                                        <span class="material-symbols-outlined text-primary"
                                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                    </td>
                                </tr>
                                <!-- Row 4 -->
                                <tr class="hover:bg-surface-container-low transition-colors">
                                    <td class="px-6 py-4 font-mono text-xs text-on-surface-variant">2023-10-27 12:30:05
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-surface-container-highest text-on-surface text-xs font-semibold uppercase tracking-wider">
                                            <span class="material-symbols-outlined text-[14px]">payments</span>
                                            Payout Proc
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="w-6 h-6 bg-surface-variant text-on-surface-variant flex items-center justify-center font-bold text-xs">
                                                S</div>
                                            <span>System Auto</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-on-surface-variant truncate max-w-xs">Processed weekly
                                        payouts to 452 guides ($124k total)</td>
                                    <td class="px-6 py-4 text-right">
                                        <span class="material-symbols-outlined text-primary"
                                            style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>