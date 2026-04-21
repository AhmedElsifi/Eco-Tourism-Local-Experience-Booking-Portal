<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tour Detailed View &amp; Emergency Controls - EcoPortal Admin</title>
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
            font-family: 'Inter', sans-serif;
            background-color: #f8faf5;
            color: #191c19;
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

<body class="bg-background text-on-background antialiased flex h-screen overflow-hidden">
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
                <a class="bg-[#163422] text-[#ffffff] rounded-none px-4 py-3 flex items-center gap-3 active:opacity-80"
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
    <div class="ml-64 flex-1 flex flex-col h-full bg-surface">
        <!-- Canvas -->
        <main class="flex-1 overflow-y-auto pt-16 p-8">
            <div class="max-w-7xl mx-auto space-y-8">
                <!-- Hero Section & Header -->
                <div class="flex justify-between items-start">
                    <div>
                        <div class="flex items-center gap-3 mb-2">
                            <span
                                class="bg-surface-container-high text-on-surface-variant text-xs font-bold uppercase tracking-widest px-2 py-1">ID:
                                TR-8924-M</span>
                            <span
                                class="bg-primary-container text-on-primary-container text-xs font-bold uppercase tracking-widest px-2 py-1 flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]" data-icon="verified">verified</span>
                                Active Tour
                            </span>
                        </div>
                        <h2 class="font-headline text-4xl font-extrabold text-primary tracking-tight mb-2">Amazon Canopy
                            Expedition</h2>
                        <p class="font-body text-outline flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]"
                                data-icon="location_on">location_on</span> Manaus, Brazil • Guided by <a
                                class="text-primary font-semibold underline decoration-primary/30 underline-offset-4"
                                href="#">Elena Silva</a>
                        </p>
                    </div>
                    <button
                        class="bg-error text-on-error font-bold px-6 py-4 flex items-center gap-2 hover:bg-[#93000a] transition-colors">
                        <span class="material-symbols-outlined" data-icon="warning">warning</span>
                        Emergency Stop &amp; Refund
                    </button>
                </div>
                <!-- Main Bento Grid -->
                <div class="grid grid-cols-12 gap-8">
                    <!-- Left Column: Tour Details & Media -->
                    <div class="col-span-8 space-y-8">
                        <!-- Hero Image -->
                        <div class="aspect-video bg-surface-container-low relative group overflow-hidden">
                            <img alt="Amazon Canopy" class="w-full h-full object-cover"
                                data-alt="Dense green amazon rainforest canopy from above with morning mist"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBswHpjeaMY7RqGSWPZwVI6V1rAS2O6Bgyd78sDFgVK9pwUQccjjbRUsV-y0rQBf6X6-Y1M5LutWmw0bAB5ukpk-jqwru7JcHX2w70RiRVKNRlmsz20Oy3JlQQL4l_FcDkSp06UD-gybLf95HyTHvHsPHFg6DdCo_Aphx7S8sAN79rguPn74I6ay9JbS0Q1-BEqKkA1HwyOvLMHj84XkTOBP2Ej70BdllIyCqmUpGqx56HbCH5vSR_DliXJDt6hh_dIDnlLBBC14y0" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                                <button class="bg-surface text-primary font-bold px-4 py-2 text-sm">View Full
                                    Gallery</button>
                            </div>
                        </div>
                        <!-- Data Cards -->
                        <div class="grid grid-cols-2 gap-8">
                            <div class="bg-surface-container p-6">
                                <h3 class="font-headline text-lg font-bold text-primary mb-4 flex items-center gap-2">
                                    <span class="material-symbols-outlined" data-icon="info">info</span> General Info
                                </h3>
                                <dl class="space-y-4">
                                    <div class="flex justify-between border-b border-outline/10 pb-2">
                                        <dt class="font-body text-sm text-on-surface-variant">Duration</dt>
                                        <dd class="font-body font-medium text-on-surface">5 Days, 4 Nights</dd>
                                    </div>
                                    <div class="flex justify-between border-b border-outline/10 pb-2">
                                        <dt class="font-body text-sm text-on-surface-variant">Group Size</dt>
                                        <dd class="font-body font-medium text-on-surface">Max 8 (Current: 6)</dd>
                                    </div>
                                    <div class="flex justify-between border-b border-outline/10 pb-2">
                                        <dt class="font-body text-sm text-on-surface-variant">Difficulty</dt>
                                        <dd class="font-body font-medium text-on-surface">Moderate</dd>
                                    </div>
                                    <div class="flex justify-between">
                                        <dt class="font-body text-sm text-on-surface-variant">Price per person</dt>
                                        <dd class="font-body font-bold text-primary">$1,250 USD</dd>
                                    </div>
                                </dl>
                            </div>
                            <div class="bg-surface-container p-6">
                                <h3 class="font-headline text-lg font-bold text-primary mb-4 flex items-center gap-2">
                                    <span class="material-symbols-outlined"
                                        data-icon="energy_savings_leaf">energy_savings_leaf</span> Impact Metrics
                                </h3>
                                <div class="space-y-3">
                                    <div
                                        class="bg-tertiary-container text-on-tertiary-container p-3 flex justify-between items-center">
                                        <span class="font-label text-sm font-medium">CO2 Offset</span>
                                        <span class="font-headline font-bold">120 kg</span>
                                    </div>
                                    <div
                                        class="bg-tertiary-container text-on-tertiary-container p-3 flex justify-between items-center">
                                        <span class="font-label text-sm font-medium">Local Economy Contribution</span>
                                        <span class="font-headline font-bold">65%</span>
                                    </div>
                                    <div
                                        class="bg-tertiary-container text-on-tertiary-container p-3 flex justify-between items-center">
                                        <span class="font-label text-sm font-medium">Wildlife Encounters</span>
                                        <span class="font-headline font-bold">Non-Invasive</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right Column: Approvals & Certificates -->
                    <div class="col-span-4 space-y-8">
                        <!-- Status Panel -->
                        <div class="bg-surface-container-high p-6 border-l-4 border-primary">
                            <h3 class="font-headline text-lg font-bold text-primary mb-4">Tour Status</h3>
                            <div class="flex items-center gap-3 mb-6">
                                <span class="relative flex h-3 w-3">
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3 w-3 bg-primary"></span>
                                </span>
                                <span class="font-body font-medium text-on-surface">Currently Operating</span>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <span class="font-label text-sm text-on-surface-variant">Listing Approval</span>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input checked="" class="sr-only peer" type="checkbox" value="" />
                                        <div
                                            class="w-11 h-6 bg-outline-variant peer-focus:outline-none rounded-none peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-outline-variant after:border after:rounded-none after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                        </div>
                                    </label>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="font-label text-sm text-on-surface-variant">Booking Enabled</span>
                                    <label class="relative inline-flex items-center cursor-pointer">
                                        <input checked="" class="sr-only peer" type="checkbox" value="" />
                                        <div
                                            class="w-11 h-6 bg-outline-variant peer-focus:outline-none rounded-none peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-outline-variant after:border after:rounded-none after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Certificates -->
                        <div class="bg-surface-container p-6">
                            <h3 class="font-headline text-lg font-bold text-primary mb-4 flex items-center gap-2">
                                <span class="material-symbols-outlined"
                                    data-icon="workspace_premium">workspace_premium</span> Certificates
                            </h3>
                            <div class="space-y-4">
                                <div
                                    class="bg-surface p-4 flex items-start gap-4 shadow-[0px_10px_20px_rgba(25,28,25,0.03)] border border-outline/5">
                                    <span class="material-symbols-outlined text-primary text-[28px]"
                                        data-icon="policy">policy</span>
                                    <div>
                                        <h4 class="font-headline font-bold text-sm text-on-surface mb-1">Global
                                            Eco-Tourism Standard</h4>
                                        <p class="font-body text-xs text-outline mb-2">Verified: Oct 2023 • Valid till:
                                            Oct 2025</p>
                                        <a class="font-label text-xs font-bold text-primary uppercase tracking-wider hover:underline"
                                            href="#">View Document</a>
                                    </div>
                                </div>
                                <div
                                    class="bg-surface p-4 flex items-start gap-4 shadow-[0px_10px_20px_rgba(25,28,25,0.03)] border border-outline/5">
                                    <span class="material-symbols-outlined text-secondary text-[28px]"
                                        data-icon="local_hospital">local_hospital</span>
                                    <div>
                                        <h4 class="font-headline font-bold text-sm text-on-surface mb-1">Wilderness
                                            First Responder</h4>
                                        <p class="font-body text-xs text-outline mb-2">Guide: Elena Silva • Verified</p>
                                        <a class="font-label text-xs font-bold text-primary uppercase tracking-wider hover:underline"
                                            href="#">View Document</a>
                                    </div>
                                </div>
                            </div>
                            <button
                                class="mt-6 w-full border-2 border-outline text-on-surface-variant font-bold py-2 hover:border-primary hover:text-primary transition-colors text-sm">
                                Upload New Certificate
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>