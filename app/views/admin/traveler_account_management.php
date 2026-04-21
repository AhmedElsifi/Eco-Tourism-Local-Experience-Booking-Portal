<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Traveler Details - EcoPortal Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800;900&amp;family=Inter:wght@400;500;600;700&amp;display=swap"
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
        body {
            font-family: 'Inter', sans-serif;
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
    </style>
</head>

<body class="bg-surface text-on-surface h-screen flex overflow-hidden">
    <!-- SideNavBar (Shared Component) -->
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
    <main class="flex-1 ml-0 md:ml-64 flex flex-col h-screen overflow-hidden bg-surface-bright">
        <!-- Page Content -->
        <div class="flex-1 overflow-y-auto p-6 md:p-12">
            <!-- Breadcrumbs & Actions -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
                <div>
                    <div class="flex items-center gap-2 text-sm text-on-surface-variant font-medium mb-2">
                        <a class="hover:text-primary transition-colors" href="#">Travelers</a>
                        <span class="material-symbols-outlined text-sm">chevron_right</span>
                        <span class="text-on-surface">Elena Rodriguez</span>
                    </div>
                    <h1 class="font-headline text-3xl font-bold tracking-tight text-on-surface uppercase">Traveler
                        Profile</h1>
                </div>
                <div class="flex gap-3">
                    <button
                        class="bg-secondary-container text-on-secondary-container px-6 py-2.5 font-bold text-sm rounded-none hover:bg-secondary-fixed-dim transition-colors flex items-center gap-2">
                        <span class="material-symbols-outlined text-[20px]">block</span>
                        Suspend
                    </button>
                    <button
                        class="bg-primary text-on-primary px-6 py-2.5 font-bold text-sm rounded-none hover:bg-primary-container transition-colors flex items-center gap-2">
                        <span class="material-symbols-outlined text-[20px]">edit</span>
                        Edit Details
                    </button>
                </div>
            </div>
            <!-- Bento Grid Layout -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                <!-- Profile Summary (Left Column) -->
                <div class="md:col-span-4 flex flex-col gap-8">
                    <!-- Identity Card -->
                    <div class="bg-surface-container-low p-8 relative overflow-hidden group">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-primary/5 translate-x-1/2 -translate-y-1/2 rotate-45 pointer-events-none">
                        </div>
                        <div class="relative z-10 flex flex-col items-center text-center">
                            <div
                                class="w-32 h-32 mb-6 border-4 border-surface-container-lowest shadow-[0px_20px_40px_rgba(25,28,25,0.06)]">
                                <img alt="Elena Rodriguez" class="w-full h-full object-cover"
                                    data-alt="Professional portrait of a young woman outdoors with natural lighting and blurred green background"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-ovZtDMJy6PfWTMhMGergHLBPJ9EaO2IJsrVqSZ23sWUEqHdnvF9chzNkCUAST7jm0KFc7aAG6-2tnQG7d_e4pkhR3Z0C3DEGqZuJjUgEqheQV25vjDRu0HFhvG5s3H0oGL_LrIAhXcgkVB_vQWB1TGTytFy3g5F-lse_fXdizgshsOD_saoTeDMCL3fdKyC30ldgrr9KSXIE2BBSElvhOmUotharw-dNR73LM2mAa0gth8SXGjYU3XHWeXbVvJdi2tmv1e1_jU0" />
                            </div>
                            <h2 class="font-headline text-2xl font-bold text-on-surface mb-1">Elena Rodriguez</h2>
                            <p class="text-sm text-on-surface-variant font-medium mb-6">ID: TRV-88392-ECO</p>
                            <div
                                class="inline-flex items-center gap-2 bg-[#e7e9e4] px-3 py-1.5 text-xs font-bold text-primary mb-8 border border-outline-variant/30">
                                <span class="material-symbols-outlined text-[16px] text-primary"
                                    style="font-variation-settings: 'FILL' 1;">verified</span>
                                Verified Identity
                            </div>
                            <div class="w-full space-y-4 text-left">
                                <div>
                                    <p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider mb-1">
                                        Email</p>
                                    <p class="text-sm font-medium text-on-surface">elena.r.eco@example.com</p>
                                </div>
                                <div>
                                    <p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider mb-1">
                                        Phone</p>
                                    <p class="text-sm font-medium text-on-surface">+1 (555) 019-2834</p>
                                </div>
                                <div>
                                    <p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider mb-1">
                                        Location</p>
                                    <p class="text-sm font-medium text-on-surface">Portland, OR, USA</p>
                                </div>
                                <div>
                                    <p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider mb-1">
                                        Member Since</p>
                                    <p class="text-sm font-medium text-on-surface">March 14, 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Impact Chip -->
                    <div
                        class="bg-tertiary-container text-on-tertiary-container p-6 shadow-[0px_20px_40px_rgba(25,28,25,0.06)] relative overflow-hidden">
                        <div class="absolute -right-4 -bottom-4 opacity-10">
                            <span class="material-symbols-outlined text-[120px]">eco</span>
                        </div>
                        <h3 class="font-headline font-bold text-lg mb-4 relative z-10">Sustainability Impact</h3>
                        <div class="space-y-3 relative z-10">
                            <div
                                class="flex justify-between items-center border-b border-on-tertiary-container/20 pb-2">
                                <span class="text-sm font-medium">CO2 Offset</span>
                                <span class="font-bold font-headline">142 kg</span>
                            </div>
                            <div
                                class="flex justify-between items-center border-b border-on-tertiary-container/20 pb-2">
                                <span class="text-sm font-medium">Local Econ Contribution</span>
                                <span class="font-bold font-headline">$4,250</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium">Eco-Rating Avg</span>
                                <div class="flex items-center text-primary">
                                    <span class="material-symbols-outlined text-[16px]"
                                        style="font-variation-settings: 'FILL' 1;">energy_savings_leaf</span>
                                    <span class="material-symbols-outlined text-[16px]"
                                        style="font-variation-settings: 'FILL' 1;">energy_savings_leaf</span>
                                    <span class="material-symbols-outlined text-[16px]"
                                        style="font-variation-settings: 'FILL' 1;">energy_savings_leaf</span>
                                    <span class="material-symbols-outlined text-[16px]"
                                        style="font-variation-settings: 'FILL' 1;">energy_savings_leaf</span>
                                    <span class="material-symbols-outlined text-[16px] text-outline-variant/40"
                                        style="font-variation-settings: 'FILL' 1;">energy_savings_leaf</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main Data (Right Column) -->
                <div class="md:col-span-8 flex flex-col gap-8">
                    <!-- Stats Grid -->
                    <div class="grid grid-cols-3 gap-1">
                        <div class="bg-surface-container p-6 flex flex-col justify-center border-l-4 border-primary">
                            <p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider mb-2">Total
                                Bookings</p>
                            <p class="font-headline text-3xl font-black text-on-surface">14</p>
                        </div>
                        <div class="bg-surface-container p-6 flex flex-col justify-center">
                            <p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider mb-2">Active
                                Trips</p>
                            <p class="font-headline text-3xl font-black text-on-surface">1</p>
                        </div>
                        <div class="bg-surface-container p-6 flex flex-col justify-center">
                            <p class="text-xs text-on-surface-variant font-bold uppercase tracking-wider mb-2">Reviews
                                Left</p>
                            <p class="font-headline text-3xl font-black text-on-surface">9</p>
                        </div>
                    </div>
                    <!-- Recent Bookings -->
                    <div
                        class="bg-surface-container-lowest p-8 border border-outline-variant/20 shadow-[0px_20px_40px_rgba(25,28,25,0.06)]">
                        <div class="flex justify-between items-center mb-8">
                            <h3 class="font-headline font-bold text-xl text-on-surface">Recent Journeys</h3>
                            <button
                                class="text-sm font-bold text-primary hover:text-primary-container transition-colors flex items-center gap-1">
                                View All
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </button>
                        </div>
                        <div class="space-y-6">
                            <!-- Booking Item 1 -->
                            <div
                                class="group flex flex-col sm:flex-row gap-6 p-4 bg-surface-container hover:bg-surface-container-high transition-colors duration-200">
                                <div class="w-full sm:w-32 h-32 shrink-0 relative overflow-hidden">
                                    <img alt="Costa Rica Rainforest"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                        data-alt="Lush dense tropical rainforest canopy viewed from above with mist hanging in the trees"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAtEtOi20heIemYlKS5t918aPYbXW7YRBwFnXjCzTKHT1OfQV1ub867YdeOPFlmJyhuIDnobXn31sZ5rko2-u91uAyFr6NsBBwLErTr2TVO3cNUIN6JrFf7LuYBih9zDYLpNUqBtDoxdxszvMoEJJ0M7Ixron7883wOugtpRemxHxmTLZIpANxHXDIChCQBa0OAf4houuSWm80kmMGY58DA_xI1VAo_GfodQiIq-f3w10cogPLqYwBaLU707TppZkmXKXpsX4rpcPQ" />
                                </div>
                                <div class="flex-1 flex flex-col justify-between py-1">
                                    <div>
                                        <div class="flex justify-between items-start mb-2">
                                            <h4 class="font-headline font-bold text-lg text-on-surface leading-tight">
                                                Osa Peninsula Biodiversty Trek</h4>
                                            <span
                                                class="bg-primary-container text-on-primary-container px-2 py-1 text-[10px] font-bold uppercase tracking-widest whitespace-nowrap">Upcoming</span>
                                        </div>
                                        <p class="text-sm text-on-surface-variant flex items-center gap-1 mb-4">
                                            <span class="material-symbols-outlined text-[16px]">location_on</span>
                                            Costa Rica
                                        </p>
                                    </div>
                                    <div class="flex flex-wrap gap-4 text-xs font-medium text-on-surface-variant">
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[14px]">calendar_month</span>
                                            Oct 12 - Oct 18, 2024
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[14px]">payments</span>
                                            $1,250
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Booking Item 2 -->
                            <div
                                class="group flex flex-col sm:flex-row gap-6 p-4 bg-surface-container hover:bg-surface-container-high transition-colors duration-200 opacity-80">
                                <div class="w-full sm:w-32 h-32 shrink-0 relative overflow-hidden">
                                    <img alt="Andes Mountains" class="w-full h-full object-cover filter grayscale-[20%]"
                                        data-alt="Rugged high altitude mountain landscape with rocky peaks and sparse vegetation under clear sky"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWejE9AMBecebnGZzYHorVrgm2l4aszLykuqaXQdlezkmpgQHEjtJG9dEzQb_q14MC5OEGRxbo5yIVii9yVBlrcy2cpsGgk5eSEDJQbd_DbVUTgMsZ3v4FG07GGgRP-5_cEjdjVxjFoGdDmlwjjyCHPYAcwvQIPvwnHFnPO3uE9I5jrSeW1gk9kd17-bUQoJe3yTmdFIdFdDbVjslIbflPqgFfHHpXdmM9Y-3ouNbRRVX-UKRGyuJd-rYbDEdTcAiOCr0pvKqr5CQ" />
                                </div>
                                <div class="flex-1 flex flex-col justify-between py-1">
                                    <div>
                                        <div class="flex justify-between items-start mb-2">
                                            <h4 class="font-headline font-bold text-lg text-on-surface leading-tight">
                                                Andean Community Weaving</h4>
                                            <span
                                                class="bg-surface-variant text-on-surface-variant px-2 py-1 text-[10px] font-bold uppercase tracking-widest whitespace-nowrap">Completed</span>
                                        </div>
                                        <p class="text-sm text-on-surface-variant flex items-center gap-1 mb-4">
                                            <span class="material-symbols-outlined text-[16px]">location_on</span>
                                            Peru
                                        </p>
                                    </div>
                                    <div class="flex flex-wrap gap-4 text-xs font-medium text-on-surface-variant">
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[14px]">calendar_month</span>
                                            Jul 05 - Jul 10, 2023
                                        </div>
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[14px]">rate_review</span>
                                            Reviewed (5/5)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Preferences & Notes Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-surface-container-low p-6 border border-outline-variant/20">
                            <h3 class="font-headline font-bold text-lg text-on-surface mb-6 flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary">tune</span>
                                Travel Preferences
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="bg-surface-container-highest px-3 py-1.5 text-xs font-medium text-on-surface">Small
                                    Groups (&lt; 8)</span>
                                <span
                                    class="bg-surface-container-highest px-3 py-1.5 text-xs font-medium text-on-surface">Wildlife
                                    Focus</span>
                                <span
                                    class="bg-surface-container-highest px-3 py-1.5 text-xs font-medium text-on-surface">Vegetarian</span>
                                <span
                                    class="bg-surface-container-highest px-3 py-1.5 text-xs font-medium text-on-surface">Moderate
                                    Physical</span>
                                <span
                                    class="bg-surface-container-highest px-3 py-1.5 text-xs font-medium text-on-surface">Homestays</span>
                            </div>
                        </div>
                        <div class="bg-surface-container-low p-6 border border-outline-variant/20 relative">
                            <div class="absolute top-0 left-0 w-1 h-full bg-secondary"></div>
                            <h3 class="font-headline font-bold text-lg text-on-surface mb-4 flex items-center gap-2">
                                <span class="material-symbols-outlined text-secondary">admin_panel_settings</span>
                                Admin Notes
                            </h3>
                            <p class="text-sm text-on-surface-variant leading-relaxed mb-4">
                                Reliable traveler, frequently engages with local communities respectfully. Requested
                                information on carbon offsetting programs for their next trip.
                            </p>
                            <p class="text-xs text-outline font-medium italic">Last updated by Admin J. Smith on Sep 12,
                                2023</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Padding -->
            <div class="h-12"></div>
        </div>
    </main>
</body>

</html>