<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Dispute Mediation Hub - EcoPortal Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
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
                    colors: {
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
                    borderRadius: {
                        "DEFAULT": "0px",
                        "lg": "0px",
                        "xl": "0px",
                        "full": "0px"
                    },
                    fontFamily: {
                        "headline": ["Manrope", "sans-serif"],
                        "body": ["Inter", "sans-serif"],
                        "label": ["Inter", "sans-serif"]
                    }
                }
            }
        }
    </script>
    <style>
        /* Base styles from JSON injection instructions and design system */
        body {
            background-color: theme('colors.background');
            color: theme('colors.on-background');
            font-family: theme('fontFamily.body');
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: theme('fontFamily.headline');
        }

        .ghost-border {
            outline: 1px solid theme('colors.outline-variant');
            outline-color: rgba(194, 200, 192, 0.15);
        }
    </style>
</head>

<body class="flex h-screen overflow-hidden">
    <!-- SideNavBar Component -->
    <nav
        class="hidden md:flex bg-[#edeee9] dark:bg-[#1a1c18] text-[#163422] dark:text-[#d1e8d5] rounded-none w-64 h-full fixed left-0 top-0 flex-col py-8 border-r border-[#727972]/15 z-40">
        <div class="px-6 mb-8">
            <h1 class="font-headline font-black text-lg tracking-widest text-[#163422] dark:text-[#d1e8d5]">EcoPortal
                Admin</h1>
            <p class="font-body font-medium text-sm mt-1 text-on-surface-variant">Admin Console v1.0</p>
        </div>
        <ul class="flex flex-col gap-1 px-2 font-['Manrope'] font-medium text-sm">
            <li>
                <a class="text-[#414941] dark:text-[#c1c9be] px-4 py-3 flex items-center gap-3 hover:bg-[#e7e9e4] dark:hover:bg-[#3e4a40] transition-all duration-150 active:opacity-80"
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
                <a class="bg-[#163422] text-[#ffffff] rounded-none px-4 py-3 flex items-center gap-3 active:opacity-80"
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
    <main class="flex-1 md:ml-64 relative flex flex-col h-full bg-surface">
        <!-- Page Content -->
        <div class="pt-16 flex-1 overflow-y-auto overflow-x-hidden p-6 lg:p-8">
            <!-- Header Section -->
            <div class="mb-8 flex flex-col md:flex-row justify-between items-start md:items-end gap-4">
                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <span
                            class="bg-error text-on-error font-label text-xs font-bold px-2 py-1 uppercase tracking-wider">Active
                            Dispute</span>
                        <span class="text-outline font-label text-sm">Case #DSP-8924</span>
                    </div>
                    <h2 class="text-3xl font-headline font-extrabold text-primary tracking-tight">Rainforest Canopy Tour
                        Refund Request</h2>
                </div>
                <div class="flex gap-3">
                    <button
                        class="bg-surface-container-high text-on-surface font-label font-medium px-4 py-2 hover:bg-surface-dim transition-colors">
                        Reassign Case
                    </button>
                    <button
                        class="bg-primary text-on-primary font-label font-medium px-4 py-2 hover:bg-primary-fixed-dim transition-colors shadow-sm">
                        Resolve Dispute
                    </button>
                </div>
            </div>
            <!-- Bento Grid Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                <!-- Left Column: Case Details & Evidence (7 cols) -->
                <div class="lg:col-span-7 flex flex-col gap-6">
                    <!-- Trip Details Card -->
                    <div class="bg-surface-container-low p-6 flex flex-col gap-4">
                        <h3 class="font-headline font-bold text-lg border-b border-outline-variant/30 pb-2">Trip Details
                        </h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-xs font-label text-outline uppercase tracking-wider mb-1">Guide</p>
                                <p class="font-body text-on-surface font-medium">Elena Rodriguez</p>
                                <p class="text-sm font-body text-outline-variant">Eco-Rating: <span
                                        class="text-primary font-bold">4.8</span></p>
                            </div>
                            <div>
                                <p class="text-xs font-label text-outline uppercase tracking-wider mb-1">Traveler</p>
                                <p class="font-body text-on-surface font-medium">Marcus Chen</p>
                                <p class="text-sm font-body text-outline-variant">Joined: Mar 2022</p>
                            </div>
                            <div>
                                <p class="text-xs font-label text-outline uppercase tracking-wider mb-1">Date &amp;
                                    Location</p>
                                <p class="font-body text-on-surface font-medium">Oct 12, 2023</p>
                                <p class="text-sm font-body text-outline-variant">Monteverde, CR</p>
                            </div>
                            <div>
                                <p class="text-xs font-label text-outline uppercase tracking-wider mb-1">Financials</p>
                                <p class="font-body text-on-surface font-medium">Total Paid: $240.00</p>
                                <p class="text-sm font-body text-error font-bold">Disputed: $120.00</p>
                            </div>
                        </div>
                    </div>
                    <!-- Evidence Section -->
                    <div class="bg-surface-container p-6">
                        <h3 class="font-headline font-bold text-lg border-b border-outline-variant/30 pb-2 mb-4">
                            Submitted Evidence</h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            <div class="relative group cursor-pointer">
                                <img alt="Muddy trail" class="w-full aspect-square object-cover"
                                    data-alt="close up of extremely muddy rainforest hiking trail impassable conditions"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNaDJ-ooY2QB5ibMkjnh2HypfQxft8gfeBMMRkQhvogeeT9mbmucUQayuguCODVQmqn5I2vdHfoIVswtUoHB7lTDInqutFuhK5hAMf69e4aHVCvKWyZVM79w30BuChtt0sKXMd87XK3UymkFeSM-ezTEhn-idwQdt27PiHrnP4km8lCWefE_D-ad9gHuqx2FvABH701kwndl7qkxnWy5xZA9OXlFELD1fWV42ZegUwajQlG47_r08cyqz4tccAnORKFXqrl6Vwi6k" />
                                <div
                                    class="absolute inset-0 bg-primary/80 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-sm">
                                    <span class="material-symbols-outlined text-on-primary">zoom_in</span>
                                </div>
                            </div>
                            <div class="relative group cursor-pointer">
                                <img alt="Weather report" class="w-full aspect-square object-cover"
                                    data-alt="screenshot of a severe weather warning app showing heavy rain in monteverde"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBr6x785-WRCobrrq9Yl_w1p12O2gIuPenpAIWA4YjxvPznDYPY83ZOrldRmsd3CunyBuHIuzbfinI4HymrCB4E0hq_TjZkQv-F_rZ2pdNRJHYdalpHPAWShOytfPi8ylIxJiqtEqYrtvN6Yp6U0xBse4qVQfQwb1Ktru1CB-1TJvoc0EsyvT5N8pc90K1Pmwg4IiEmg6YMvpO1sudzLvyU1p5WblFBk6zBQmsAn8EV7VfSV9dlHynDkY4k1QJrpS6ni_FCcsu_Waw" />
                                <div
                                    class="absolute inset-0 bg-primary/80 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-sm">
                                    <span class="material-symbols-outlined text-on-primary">zoom_in</span>
                                </div>
                            </div>
                            <div
                                class="bg-surface-container-high aspect-square flex flex-col items-center justify-center text-outline cursor-pointer hover:bg-surface-variant transition-colors border border-outline border-dashed">
                                <span class="material-symbols-outlined mb-2">add_photo_alternate</span>
                                <span class="font-label text-sm">Request More</span>
                            </div>
                        </div>
                        <div class="mt-4 p-4 bg-tertiary-container text-on-tertiary-container text-sm font-body">
                            <strong>Traveler Claim:</strong> "The tour was cut short by 3 hours due to severe weather,
                            but the guide refused a partial refund stating weather was 'part of the experience'."
                        </div>
                    </div>
                </div>
                <!-- Right Column: Chat Log & Resolution (5 cols) -->
                <div class="lg:col-span-5 flex flex-col gap-6 h-[calc(100vh-12rem)] min-h-[600px]">
                    <!-- Chat Log -->
                    <div class="bg-surface-container-low flex-1 flex flex-col overflow-hidden">
                        <div
                            class="p-4 border-b border-outline-variant/30 bg-surface-container flex justify-between items-center">
                            <h3 class="font-headline font-bold text-lg">Communication Log</h3>
                            <span class="material-symbols-outlined text-outline">history</span>
                        </div>
                        <div class="flex-1 overflow-y-auto p-4 space-y-6">
                            <!-- Message from Traveler -->
                            <div class="flex flex-col gap-1 items-start">
                                <span class="text-xs font-label text-outline ml-1">Marcus (Traveler) - Oct 13, 10:00
                                    AM</span>
                                <div class="bg-surface p-3 max-w-[85%] border border-outline-variant/20">
                                    <p class="font-body text-sm text-on-surface">I'm requesting a 50% refund. We only
                                        completed 1 of the 4 canopy bridges before turning back. The weather was unsafe.
                                    </p>
                                </div>
                            </div>
                            <!-- Message from Guide -->
                            <div class="flex flex-col gap-1 items-end">
                                <span class="text-xs font-label text-outline mr-1">Elena (Guide) - Oct 13, 11:30
                                    AM</span>
                                <div class="bg-primary-container p-3 max-w-[85%]">
                                    <p class="font-body text-sm text-on-primary-container">Marcus, as stated in the
                                        pre-tour briefing, rainforest tours proceed in rain. We turned back because your
                                        group lacked proper rain gear despite instructions, not because conditions were
                                        inherently unsafe for equipped hikers.</p>
                                </div>
                            </div>
                            <!-- System Note -->
                            <div class="flex justify-center my-4">
                                <span
                                    class="bg-surface-container-high text-on-surface-variant font-label text-xs py-1 px-3">Escalated
                                    to Mediation - Oct 14</span>
                            </div>
                        </div>
                        <div class="p-4 bg-surface border-t border-outline-variant/30">
                            <div class="flex gap-2">
                                <input
                                    class="flex-1 bg-transparent border border-outline p-2 text-sm font-body focus:border-primary focus:ring-0 focus:border-2"
                                    placeholder="Add internal mediation note..." type="text" />
                                <button class="bg-surface-container-high p-2 text-on-surface hover:bg-surface-dim">
                                    <span class="material-symbols-outlined">send</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Resolution Action Box -->
                    <div class="bg-surface-container-highest p-6 border-l-4 border-primary">
                        <h3 class="font-headline font-bold text-lg mb-4">Mediation Decision</h3>
                        <div class="space-y-3">
                            <button
                                class="w-full flex items-center justify-between p-3 bg-surface hover:bg-surface-container transition-colors border border-outline-variant/30">
                                <span class="font-label font-medium text-on-surface">Issue Partial Refund ($120)</span>
                                <span class="material-symbols-outlined text-outline">payments</span>
                            </button>
                            <button
                                class="w-full flex items-center justify-between p-3 bg-surface hover:bg-surface-container transition-colors border border-outline-variant/30">
                                <span class="font-label font-medium text-on-surface">Issue Full Refund ($240)</span>
                                <span class="material-symbols-outlined text-outline">account_balance</span>
                            </button>
                            <button
                                class="w-full flex items-center justify-between p-3 bg-error text-on-error hover:bg-error/90 transition-colors">
                                <span class="font-label font-medium">Disapprove Refund Request</span>
                                <span class="material-symbols-outlined">block</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>