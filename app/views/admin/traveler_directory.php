<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manage Travelers List - EcoPortal Admin</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                        "headline": [
                            "Manrope"
                        ],
                        "body": [
                            "Inter"
                        ],
                        "label": [
                            "Inter"
                        ]
                    }
                },
            },
        }
    </script>
    <style>
        .ghost-border {
            outline: 1px solid rgba(194, 200, 192, 0.15);
            /* outline-variant */
            outline-offset: -1px;
        }

        .text-gradient-primary {
            background: linear-gradient(135deg, #163422, #2d4b37);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body
    class="bg-background text-on-background font-body min-h-screen flex selection:bg-primary selection:text-on-primary">
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
                <a class="bg-[#163422] text-[#ffffff] rounded-none px-4 py-3 flex items-center gap-3 active:opacity-80"
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
    <main class="flex-1 md:ml-64 pt-16 min-h-screen bg-surface-bright flex flex-col">
        <!-- Page Header -->
        <div class="px-8 py-10 bg-surface-container-lowest">
            <div class="flex justify-between items-end">
                <div>
                    <div class="text-sm font-label text-on-surface-variant uppercase tracking-wider mb-2">Directory
                    </div>
                    <h2 class="font-headline text-4xl font-bold tracking-tight text-on-surface">Travelers Directory</h2>
                </div>
                <div class="flex gap-4">
                    <button
                        class="bg-secondary-container text-on-secondary-container px-6 py-2 font-label font-medium flex items-center gap-2 hover:bg-secondary-fixed-dim transition-colors">
                        <span class="material-symbols-outlined text-[18px]"
                            style="font-variation-settings: 'FILL' 0;">filter_list</span>
                        Filter
                    </button>
                    <button
                        class="bg-surface-container-high text-on-surface px-6 py-2 font-label font-medium flex items-center gap-2 hover:bg-surface-container-highest transition-colors ghost-border">
                        <span class="material-symbols-outlined text-[18px]"
                            style="font-variation-settings: 'FILL' 0;">download</span>
                        Export
                    </button>
                </div>
            </div>
        </div>
        <!-- Content Canvas -->
        <div class="flex-1 p-8 bg-surface-container-low">
            <!-- Table Container (Brutalist style, no rounded corners, tonal layering) -->
            <div class="bg-surface-container-lowest ghost-border">
                <!-- Table Header -->
                <div
                    class="grid grid-cols-[2fr_1fr_1fr_1fr_auto] gap-4 px-6 py-4 bg-surface-container text-xs font-label text-on-surface-variant uppercase tracking-wider font-semibold border-b border-surface-variant">
                    <div>Name</div>
                    <div>Traveler ID</div>
                    <div>Join Date</div>
                    <div class="text-right">Total Offset Contribution</div>
                    <div class="w-10"></div> <!-- Action column spacer -->
                </div>
                <!-- Table Rows -->
                <div class="flex flex-col">
                    <!-- Row 1 -->
                    <a class="grid grid-cols-[2fr_1fr_1fr_1fr_auto] gap-4 px-6 py-5 items-center bg-surface-container-lowest hover:bg-surface-container-high transition-colors group cursor-pointer border-b border-surface-container"
                        href="#">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-surface-container-high overflow-hidden">
                                <img alt="Sarah Jenkins"
                                    class="w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 transition-all"
                                    data-alt="Portrait of a young woman smiling outdoors, natural light, casual attire"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBywVaRHNzGq6_cdtXumuAYynlSLGWBy9RjIXCuXepIO5RpyPwiQqtVbIZ3de6ZahR9P8jV7VhsaqIymATHT0b4Ess0VwIuWU2od7MH6hsK1_pZ50QUNmAOFxhTlC2fHybf8V2AR5MjasqL-e3R9vUtqEFjudx7rH_rvgzdP98Ik2WRbP4q374ZHMdMdNDr7eenEXI7S-KPwYqdrtGoS7tbW0bOLutiH43MbQAMHPKAqntuEoBdTdeHkIwbfArltN-aMIDhujsKJ4c" />
                            </div>
                            <div>
                                <div class="font-body font-semibold text-on-surface text-base">Sarah Jenkins</div>
                                <div class="text-xs text-on-surface-variant font-label mt-1">sarah.j@example.com</div>
                            </div>
                        </div>
                        <div class="font-body text-sm text-on-surface-variant font-mono">TRV-8921-A</div>
                        <div class="font-body text-sm text-on-surface-variant">Oct 12, 2023</div>
                        <div class="text-right flex justify-end">
                            <div
                                class="bg-tertiary-container text-on-tertiary-container px-3 py-1 text-xs font-label font-bold flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]"
                                    style="font-variation-settings: 'FILL' 1;">eco</span>
                                450 kg CO2
                            </div>
                        </div>
                        <div
                            class="w-10 flex justify-end text-on-surface-variant group-hover:text-primary transition-colors">
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 0;">arrow_forward</span>
                        </div>
                    </a>
                    <!-- Row 2 -->
                    <a class="grid grid-cols-[2fr_1fr_1fr_1fr_auto] gap-4 px-6 py-5 items-center bg-surface-container-lowest hover:bg-surface-container-high transition-colors group cursor-pointer border-b border-surface-container"
                        href="#">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-surface-container-high overflow-hidden">
                                <img alt="Marcus Chen"
                                    class="w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 transition-all"
                                    data-alt="Portrait of a young man wearing glasses, urban background, casual professional"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC-4K2CWwbRI4y1Zu9LfoLAyUoRlaeF8cxW7ZYDrrZ8BRZcM134cVlez15D-jqDDu6sWZqG6SAQovi2k8yyWlgM-QluknOYtx_mqBL_UQTc_m_O6lxEo86wTP0JmFwXv3j0FLn8qeuq8FRsUJ_aPWUrkq_bJZSRHrxXpFvyYDAaKJXmglhFuEVuN5ZmI_eN_P4qJvTU3zWyS-6fMmFuDkM-HzHQgE2DiPXb0fDJ8lMyqhatR1FrZPxHv-eil5uA4C71tbvpWQbnc5E" />
                            </div>
                            <div>
                                <div class="font-body font-semibold text-on-surface text-base">Marcus Chen</div>
                                <div class="text-xs text-on-surface-variant font-label mt-1">m.chen.travels@domain.com
                                </div>
                            </div>
                        </div>
                        <div class="font-body text-sm text-on-surface-variant font-mono">TRV-7433-B</div>
                        <div class="font-body text-sm text-on-surface-variant">Nov 04, 2023</div>
                        <div class="text-right flex justify-end">
                            <div
                                class="bg-tertiary-container text-on-tertiary-container px-3 py-1 text-xs font-label font-bold flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]"
                                    style="font-variation-settings: 'FILL' 1;">eco</span>
                                120 kg CO2
                            </div>
                        </div>
                        <div
                            class="w-10 flex justify-end text-on-surface-variant group-hover:text-primary transition-colors">
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 0;">arrow_forward</span>
                        </div>
                    </a>
                    <!-- Row 3 -->
                    <a class="grid grid-cols-[2fr_1fr_1fr_1fr_auto] gap-4 px-6 py-5 items-center bg-surface-container-lowest hover:bg-surface-container-high transition-colors group cursor-pointer border-b border-surface-container"
                        href="#">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-10 h-10 bg-surface-container-high overflow-hidden flex items-center justify-center text-on-surface-variant font-headline font-bold">
                                EL
                            </div>
                            <div>
                                <div class="font-body font-semibold text-on-surface text-base">Elena Rodriguez</div>
                                <div class="text-xs text-on-surface-variant font-label mt-1">elena.r@example.org</div>
                            </div>
                        </div>
                        <div class="font-body text-sm text-on-surface-variant font-mono">TRV-9011-C</div>
                        <div class="font-body text-sm text-on-surface-variant">Dec 22, 2023</div>
                        <div class="text-right flex justify-end">
                            <div
                                class="bg-tertiary-container text-on-tertiary-container px-3 py-1 text-xs font-label font-bold flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]"
                                    style="font-variation-settings: 'FILL' 1;">eco</span>
                                850 kg CO2
                            </div>
                        </div>
                        <div
                            class="w-10 flex justify-end text-on-surface-variant group-hover:text-primary transition-colors">
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 0;">arrow_forward</span>
                        </div>
                    </a>
                    <!-- Row 4 -->
                    <a class="grid grid-cols-[2fr_1fr_1fr_1fr_auto] gap-4 px-6 py-5 items-center bg-surface-container-lowest hover:bg-surface-container-high transition-colors group cursor-pointer"
                        href="#">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-surface-container-high overflow-hidden">
                                <img alt="David Osei"
                                    class="w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 transition-all"
                                    data-alt="Portrait of a middle aged man with short hair, outdoors, natural lighting, looking thoughtful"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-QA1qO6vPVhz61FPggcKvlSuGTPu-A9qLf3R0KJCnULRGeG94-eoD9ux4LBQzv0wxJPOk3iOLKUGCIr7v5ZGPth9eNi_KxmWpbdGkf28q0-kbZy8qdaTK67W2877py9b-PvtONgydg_P1zjhR82-Qi2Nqw_-ClHq1zxbXeqvouIecrvVY-7ZTcMf2f8jfKHtrpmRniFGuCeoce791opDX5N1bkq4ujh4K4ZjbEhnfE1B52ocOct0NxZOKsfgqTa0pCP9QPKJTnUQ" />
                            </div>
                            <div>
                                <div class="font-body font-semibold text-on-surface text-base">David Osei</div>
                                <div class="text-xs text-on-surface-variant font-label mt-1">
                                    david.osei.adventures@email.net</div>
                            </div>
                        </div>
                        <div class="font-body text-sm text-on-surface-variant font-mono">TRV-1104-D</div>
                        <div class="font-body text-sm text-on-surface-variant">Jan 15, 2024</div>
                        <div class="text-right flex justify-end">
                            <div
                                class="bg-tertiary-container text-on-tertiary-container px-3 py-1 text-xs font-label font-bold flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]"
                                    style="font-variation-settings: 'FILL' 1;">eco</span>
                                55 kg CO2
                            </div>
                        </div>
                        <div
                            class="w-10 flex justify-end text-on-surface-variant group-hover:text-primary transition-colors">
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 0;">arrow_forward</span>
                        </div>
                    </a>
                </div>
                <!-- Pagination/Footer of Table -->
                <div
                    class="bg-surface-container-low px-6 py-4 flex justify-between items-center border-t border-surface-variant">
                    <div class="text-sm font-label text-on-surface-variant">Showing 1 to 4 of 248 entries</div>
                    <div class="flex gap-2">
                        <button
                            class="p-2 bg-surface-container-lowest text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors ghost-border disabled:opacity-50"
                            disabled="">
                            <span class="material-symbols-outlined text-[18px]"
                                style="font-variation-settings: 'FILL' 0;">chevron_left</span>
                        </button>
                        <button
                            class="w-8 h-8 flex items-center justify-center bg-primary text-on-primary font-label text-sm font-medium">1</button>
                        <button
                            class="w-8 h-8 flex items-center justify-center bg-surface-container-lowest text-on-surface hover:bg-surface-container-high font-label text-sm font-medium transition-colors ghost-border">2</button>
                        <button
                            class="w-8 h-8 flex items-center justify-center bg-surface-container-lowest text-on-surface hover:bg-surface-container-high font-label text-sm font-medium transition-colors ghost-border">3</button>
                        <span class="w-8 h-8 flex items-center justify-center text-on-surface-variant">...</span>
                        <button
                            class="p-2 bg-surface-container-lowest text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors ghost-border">
                            <span class="material-symbols-outlined text-[18px]"
                                style="font-variation-settings: 'FILL' 0;">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>