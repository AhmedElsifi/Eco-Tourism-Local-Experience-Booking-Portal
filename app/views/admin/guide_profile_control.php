<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Guide Details - EcoPortal Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@400;500;700;800&amp;display=swap"
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
                        "DEFAULT": "0rem",
                        "lg": "0rem",
                        "xl": "0rem",
                        "full": "0rem"
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body
    class="bg-background text-on-background font-body antialiased selection:bg-primary-container selection:text-on-primary-container min-h-screen flex flex-col md:flex-row">
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
                <a class="bg-[#163422] text-[#ffffff] rounded-none px-4 py-3 flex items-center gap-3 active:opacity-80"
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
    <!-- TopAppBar (Mobile Only - Suppressed per rules for deep details page, but adding a simplified top bar for back navigation as it's a detail page) -->
    <header
        class="md:hidden fixed top-0 right-0 left-0 h-16 bg-[#f8faf5] flex items-center justify-between px-6 z-50 border-b border-outline-variant/30">
        <a class="text-primary flex items-center gap-2" href="#">
            <span class="material-symbols-outlined" data-icon="arrow_back">arrow_back</span>
            <span class="font-headline font-bold text-sm">Back to Guides</span>
        </a>
    </header>
    <!-- Main Content Area -->
    <main class="flex-1 w-full md:pl-64 pt-16 md:pt-0 min-h-screen bg-surface-bright flex flex-col relative">
        <!-- Header Actions Area -->
        <div
            class="sticky top-0 z-30 bg-surface-bright/90 backdrop-blur-md px-8 py-6 flex flex-col md:flex-row md:items-end justify-between gap-4 outline-variant/15 outline outline-1 opacity-100 shadow-[0px_20px_40px_rgba(25,28,25,0.02)]">
            <div>
                <a class="hidden md:inline-flex text-on-surface-variant flex items-center gap-1 text-xs font-label mb-4 hover:text-primary transition-colors"
                    href="#">
                    <span class="material-symbols-outlined text-sm" data-icon="arrow_back">arrow_back</span>
                    Back to Guides List
                </a>
                <h1 class="font-headline font-bold text-3xl tracking-tight text-on-surface">Elena Rostova</h1>
                <p class="font-body text-on-surface-variant text-sm mt-1 flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm text-outline"
                        data-icon="location_on">location_on</span>
                    Kyoto, Japan • Guide ID: GD-88219-JP
                </p>
            </div>
            <div class="flex items-center gap-3">
                <button
                    class="bg-secondary-container text-on-secondary-container px-6 py-3 font-label font-medium text-sm hover:bg-secondary-fixed-dim transition-colors">
                    Suspend Account
                </button>
                <button
                    class="bg-primary text-on-primary px-6 py-3 font-label font-medium text-sm hover:bg-primary-fixed-dim transition-colors flex items-center gap-2">
                    <span class="material-symbols-outlined text-sm" data-icon="check_circle">check_circle</span>
                    Approve Guide
                </button>
            </div>
        </div>
        <div class="p-8 max-w-7xl mx-auto w-full flex-1 flex flex-col gap-8">
            <!-- Bento Grid Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column: Profile & Bio -->
                <div class="lg:col-span-1 flex flex-col gap-8">
                    <!-- Profile Card -->
                    <div class="bg-surface-container-lowest p-6 relative">
                        <!-- Ghost border approach via pseudo-element or outline -->
                        <div
                            class="absolute inset-0 outline outline-1 outline-outline-variant opacity-20 pointer-events-none">
                        </div>
                        <div class="flex flex-col items-center text-center gap-4">
                            <div class="w-32 h-32 bg-surface-container-high relative overflow-hidden">
                                <img alt="Profile photo of a female guide" class="w-full h-full object-cover"
                                    data-alt="professional headshot of female guide outdoors in natural lighting wearing earthy tones"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCxwW0d-Hd_EsWqdoHo8Iimbo3ztBJ2IfL7UL48tk8q8USDtiEuQYK0_3Cg-n5srR8gfF7h8XmryvIE0Nx1CCqtVRxed5ryF7uh7bwCss--cULf3eXbQevNG0k6T2R44J5JsUGSVLjmihiMLsWQTlgTVNste1xosyBuqiuo--IhUZa_9VlzQTljpIrBRkqYuZ8H8uaW3DeCP-tEFg89gDD-m0leT5-egWZGeNPRb9dB7wl-lu-WuNM4Ps59pwrvWmJ6r8ktrDZ3YUk" />
                                <div class="absolute bottom-0 right-0 bg-primary p-1">
                                    <span class="material-symbols-outlined text-on-primary text-sm"
                                        data-icon="verified">verified</span>
                                </div>
                            </div>
                            <div>
                                <h2 class="font-headline font-bold text-xl text-on-surface">Elena Rostova</h2>
                                <p class="font-label text-sm text-on-surface-variant mt-1">Senior Nature Guide</p>
                            </div>
                            <div class="flex gap-2 mt-2">
                                <span
                                    class="bg-tertiary-container text-on-tertiary-container px-3 py-1 font-label text-xs font-medium tracking-wide">
                                    Eco-Certified
                                </span>
                                <span
                                    class="bg-surface-container text-on-surface px-3 py-1 font-label text-xs font-medium">
                                    4.9 ★ (120)
                                </span>
                            </div>
                        </div>
                        <!-- Bio Section -->
                        <div class="mt-8 pt-6 border-t border-outline-variant/20">
                            <h3 class="font-headline font-bold text-sm text-on-surface mb-3 flex items-center gap-2">
                                <span class="material-symbols-outlined text-base" data-icon="person">person</span>
                                Biography
                            </h3>
                            <textarea
                                class="w-full bg-surface-container-lowest border-outline outline-none focus:border-primary focus:border-2 p-3 font-body text-sm text-on-surface-variant min-h-[150px] resize-y"
                                placeholder="Guide bio... ">Elena is a highly experienced nature guide with a deep passion for sustainable tourism in the Kyoto region. Specialized in hidden forest trails and traditional craft workshops. Fluent in English, Japanese, and Russian.</textarea>
                            <div class="mt-4 flex justify-end">
                                <button
                                    class="text-primary font-label text-sm font-medium hover:text-primary-fixed-dim transition-colors">Save
                                    Bio</button>
                            </div>
                        </div>
                    </div>
                    <!-- Contact & Settings -->
                    <div class="bg-surface-container-lowest p-6 relative">
                        <div
                            class="absolute inset-0 outline outline-1 outline-outline-variant opacity-20 pointer-events-none">
                        </div>
                        <h3
                            class="font-headline font-bold text-sm text-on-surface mb-6 uppercase tracking-wider text-xs">
                            Contact Information</h3>
                        <div class="flex flex-col gap-4">
                            <div>
                                <label class="font-label text-xs text-on-surface-variant mb-1 block">Email
                                    Address</label>
                                <input
                                    class="w-full bg-surface-container-lowest border-outline outline-none focus:border-primary focus:border-2 p-3 font-body text-sm text-on-surface"
                                    readonly="" type="email" value="elena.r@example.com" />
                            </div>
                            <div>
                                <label class="font-label text-xs text-on-surface-variant mb-1 block">Phone
                                    Number</label>
                                <input
                                    class="w-full bg-surface-container-lowest border-outline outline-none focus:border-primary focus:border-2 p-3 font-body text-sm text-on-surface"
                                    type="tel" value="+81 90-1234-5678" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Documents & Listings -->
                <div class="lg:col-span-2 flex flex-col gap-8">
                    <!-- Certifications & Documents (Asymmetric Card) -->
                    <div class="bg-surface-container-low p-8 relative overflow-hidden">
                        <!-- Abstract texture background hint -->
                        <div
                            class="absolute right-0 top-0 w-1/2 h-full bg-gradient-to-br from-primary/5 to-transparent pointer-events-none">
                        </div>
                        <div class="relative z-10">
                            <h2 class="font-headline font-bold text-2xl text-on-surface mb-6">Verification Documents
                            </h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- Doc Item 1 -->
                                <div
                                    class="bg-surface-container-lowest p-4 flex items-start gap-4 hover:bg-surface-container transition-colors cursor-pointer group">
                                    <div class="bg-surface-container-high p-3 shrink-0">
                                        <span class="material-symbols-outlined text-primary"
                                            data-icon="badge">badge</span>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h4 class="font-headline font-bold text-sm text-on-surface truncate">National
                                            Guide License</h4>
                                        <p class="font-body text-xs text-on-surface-variant mt-1">Uploaded: Oct 12, 2023
                                        </p>
                                        <div
                                            class="flex items-center gap-1 mt-2 text-primary font-label text-xs font-medium">
                                            <span class="material-symbols-outlined text-[14px]"
                                                data-icon="check_circle">check_circle</span>
                                            Verified
                                        </div>
                                    </div>
                                    <button
                                        class="text-outline hover:text-primary opacity-0 group-hover:opacity-100 transition-opacity">
                                        <span class="material-symbols-outlined" data-icon="download">download</span>
                                    </button>
                                </div>
                                <!-- Doc Item 2 -->
                                <div
                                    class="bg-surface-container-lowest p-4 flex items-start gap-4 hover:bg-surface-container transition-colors cursor-pointer group">
                                    <div class="bg-surface-container-high p-3 shrink-0">
                                        <span class="material-symbols-outlined text-primary"
                                            data-icon="health_and_safety">health_and_safety</span>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h4 class="font-headline font-bold text-sm text-on-surface truncate">Wilderness
                                            First Responder</h4>
                                        <p class="font-body text-xs text-on-surface-variant mt-1">Expires: May 2025</p>
                                        <div
                                            class="flex items-center gap-1 mt-2 text-primary font-label text-xs font-medium">
                                            <span class="material-symbols-outlined text-[14px]"
                                                data-icon="check_circle">check_circle</span>
                                            Verified
                                        </div>
                                    </div>
                                    <button
                                        class="text-outline hover:text-primary opacity-0 group-hover:opacity-100 transition-opacity">
                                        <span class="material-symbols-outlined" data-icon="download">download</span>
                                    </button>
                                </div>
                                <!-- Doc Item 3 (Pending) -->
                                <div
                                    class="bg-surface-container-lowest p-4 flex items-start gap-4 border border-secondary border-dashed">
                                    <div class="bg-secondary-container p-3 shrink-0">
                                        <span class="material-symbols-outlined text-secondary"
                                            data-icon="eco">eco</span>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h4 class="font-headline font-bold text-sm text-on-surface truncate">Local
                                            Eco-Tourism Cert</h4>
                                        <p class="font-body text-xs text-on-surface-variant mt-1">Uploaded: Today</p>
                                        <div
                                            class="flex items-center gap-1 mt-2 text-secondary font-label text-xs font-medium">
                                            <span class="material-symbols-outlined text-[14px]"
                                                data-icon="pending">pending</span>
                                            Needs Review
                                        </div>
                                    </div>
                                    <button
                                        class="bg-surface-container hover:bg-surface-container-high px-3 py-1 text-xs font-medium text-on-surface transition-colors">
                                        Review
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Active Listings (Brutalist List) -->
                    <div class="bg-surface-container-lowest p-8 relative">
                        <div
                            class="absolute inset-0 outline outline-1 outline-outline-variant opacity-20 pointer-events-none">
                        </div>
                        <div class="flex items-center justify-between mb-8">
                            <h2 class="font-headline font-bold text-xl text-on-surface">Active Tours (3)</h2>
                            <button
                                class="text-primary font-label text-sm font-medium flex items-center gap-1 hover:text-primary-fixed-dim">
                                View All
                                <span class="material-symbols-outlined text-sm"
                                    data-icon="arrow_forward">arrow_forward</span>
                            </button>
                        </div>
                        <div class="flex flex-col gap-6">
                            <!-- Listing Item -->
                            <div class="flex flex-col sm:flex-row gap-6 group">
                                <div
                                    class="w-full sm:w-48 h-32 bg-surface-container-high relative overflow-hidden shrink-0">
                                    <img alt="Bamboo forest trail"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                        data-alt="dense green bamboo forest path with dappled sunlight coming through"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0DLmBURQVSuh6rtq67vMON47miFJgIH19zRSP49Ue25kpK3Ri4QXD2zl7j0YL9uY_o0Ew5rumyWqksJ6qhJ1NaQF8aEohOVbUvOHKyB83kQHDiGWhS3h6Yiuvx1RS-E-ZW2U1d6H9fVWbb5CPj2DBxpc-2Gm2Tf7cspfIjTKDvIYOK2SweAYVZq48yyP0rETcFVhmvL9klABphUfEH0dpyG0YDoEZgYVvR-1VaR-16WehsV-NGG1E3u-dVRS0m1fIwir-TYY6v8k" />
                                </div>
                                <div class="flex-1 flex flex-col justify-center">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <span
                                                class="text-xs font-label text-primary font-bold tracking-wider uppercase mb-1 block">Trekking</span>
                                            <h3 class="font-headline font-bold text-lg text-on-surface mb-2">Hidden
                                                Bamboo Trails of Arashiyama</h3>
                                        </div>
                                        <span
                                            class="bg-surface-container px-2 py-1 text-xs font-medium text-on-surface flex items-center gap-1">
                                            <span class="w-2 h-2 bg-primary block"></span> Active
                                        </span>
                                    </div>
                                    <div class="flex gap-4 mt-2 font-body text-sm text-on-surface-variant">
                                        <span class="flex items-center gap-1"><span
                                                class="material-symbols-outlined text-sm"
                                                data-icon="schedule">schedule</span> 4 Hours</span>
                                        <span class="flex items-center gap-1"><span
                                                class="material-symbols-outlined text-sm" data-icon="group">group</span>
                                            Max 6</span>
                                        <span class="flex items-center gap-1"><span
                                                class="material-symbols-outlined text-sm"
                                                data-icon="payments">payments</span> ¥12,000</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Listing Item -->
                            <div class="flex flex-col sm:flex-row gap-6 group">
                                <div
                                    class="w-full sm:w-48 h-32 bg-surface-container-high relative overflow-hidden shrink-0">
                                    <img alt="Traditional tea ceremony"
                                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500"
                                        data-alt="minimalist japanese tea room with tatami mats and sunlight"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAI03ElSWaCCPoWMfbVSJ2WR6wi4DPkaiasVUhqwa2Wp-ybQI82Q6Vh10OeSSVCHKyNWjyYs0ms4-faeygZc2pjYec1IcXg03pxmJR-XXs-xbUP7COh5apHD1koCwnoMhuqQ3L32SgbGF4cB4fovxPsYqiy217SCvg57bCx12o7TkprA7k_HhiDOjGliNXBMxCOd8iMM_t1bFFjkIg3jSqhCAmBRC1yHaRagLx3HMwgvCLKy5VOnn7WJGgkM34Vc7YBuZQ58ORDE7w" />
                                </div>
                                <div class="flex-1 flex flex-col justify-center">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <span
                                                class="text-xs font-label text-outline font-bold tracking-wider uppercase mb-1 block">Culture</span>
                                            <h3
                                                class="font-headline font-bold text-lg text-on-surface mb-2 text-on-surface-variant">
                                                Silent Tea Ceremony &amp; Meditation</h3>
                                        </div>
                                        <span
                                            class="bg-surface-container px-2 py-1 text-xs font-medium text-on-surface-variant flex items-center gap-1">
                                            <span class="w-2 h-2 bg-outline-variant block"></span> Paused
                                        </span>
                                    </div>
                                    <div class="flex gap-4 mt-2 font-body text-sm text-outline">
                                        <span class="flex items-center gap-1"><span
                                                class="material-symbols-outlined text-sm"
                                                data-icon="schedule">schedule</span> 2 Hours</span>
                                        <span class="flex items-center gap-1"><span
                                                class="material-symbols-outlined text-sm" data-icon="group">group</span>
                                            Max 4</span>
                                        <span class="flex items-center gap-1"><span
                                                class="material-symbols-outlined text-sm"
                                                data-icon="payments">payments</span> ¥8,500</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom Actions (Mobile Sticky) -->
            <div
                class="md:hidden fixed bottom-0 left-0 right-0 bg-surface-bright p-4 border-t border-outline-variant/30 flex gap-4 z-50">
                <button class="flex-1 bg-surface-container text-on-surface py-3 font-label font-medium text-sm">
                    Suspend
                </button>
                <button class="flex-1 bg-primary text-on-primary py-3 font-label font-medium text-sm">
                    Approve
                </button>
            </div>
        </div>
    </main>
</body>

</html>