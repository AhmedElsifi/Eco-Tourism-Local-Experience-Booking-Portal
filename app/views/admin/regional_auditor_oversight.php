<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manage Regional Auditors - Earth Architect</title>
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

<body class="bg-surface text-on-surface font-body min-h-screen flex antialiased">
    <!-- SideNavBar (Web Only) -->
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
                <a class="bg-[#163422] text-[#ffffff] rounded-none px-4 py-3 flex items-center gap-3 active:opacity-80"
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
    <!-- Main Content Canvas -->
    <main class="flex-1 md:ml-64 pt-24 md:pt-12 px-6 md:px-12 pb-12 bg-surface-bright min-h-screen">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
            <div>
                <h1 class="font-headline text-5xl font-extrabold tracking-tight text-on-surface mb-2">Regional Auditors
                </h1>
                <p class="font-body text-outline font-medium">Manage certification personnel and regional assignments.
                </p>
            </div>
            <div class="flex items-center gap-4">
                <div class="relative w-full md:w-64">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline"
                        data-icon="search">search</span>
                    <input
                        class="w-full bg-surface-container-low border border-outline/30 focus:border-primary text-on-surface font-body pl-10 pr-4 py-2 outline-none rounded-none placeholder:text-outline/70 transition-all"
                        placeholder="Search auditors..." type="text" />
                </div>
                <button
                    class="bg-surface-container border border-outline/30 p-2 hover:bg-surface-container-high transition-colors flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-surface" data-icon="filter_list">filter_list</span>
                </button>
            </div>
        </div>
        <!-- Metric Summary Bento -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div
                class="bg-surface-container-lowest p-6 border-l-4 border-primary shadow-[0px_20px_40px_rgba(25,28,25,0.02)]">
                <p class="font-label text-sm text-outline uppercase tracking-wider mb-2">Total Auditors</p>
                <div class="text-4xl font-headline font-extrabold text-on-surface">142</div>
            </div>
            <div
                class="bg-surface-container-lowest p-6 border-l-4 border-tertiary-container shadow-[0px_20px_40px_rgba(25,28,25,0.02)]">
                <p class="font-label text-sm text-outline uppercase tracking-wider mb-2">Active Field Agents</p>
                <div class="text-4xl font-headline font-extrabold text-on-surface">118</div>
            </div>
            <div
                class="bg-surface-container p-6 bg-gradient-to-br from-primary to-primary-container text-on-primary shadow-[0px_20px_40px_rgba(25,28,25,0.06)] relative overflow-hidden">
                <div class="relative z-10">
                    <p class="font-label text-sm text-on-primary-container uppercase tracking-wider mb-2">Pending Review
                    </p>
                    <div class="text-4xl font-headline font-extrabold">24</div>
                </div>
                <span class="material-symbols-outlined absolute -right-4 -bottom-4 text-8xl text-on-primary/10"
                    data-icon="pending_actions">pending_actions</span>
            </div>
        </div>
        <!-- Auditor Grid List -->
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6">
            <!-- Card 1: Active -->
            <a class="group block bg-surface-container-lowest shadow-[0px_20px_40px_rgba(25,28,25,0.03)] hover:shadow-[0px_20px_40px_rgba(25,28,25,0.08)] transition-all duration-300 relative overflow-hidden border border-outline-variant/20"
                href="#">
                <div class="h-2 w-full bg-primary absolute top-0 left-0"></div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-6">
                        <div class="flex gap-4 items-center">
                            <img alt="Elena Rodriguez"
                                class="w-14 h-14 object-cover border border-outline-variant/30 grayscale hover:grayscale-0 transition-all"
                                data-alt="Professional headshot of a mature woman smiling slightly, blurred office background, neutral lighting"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmOwoNf7Q1JS6nEwpECBSvKm1IoU3D_16MX_hMcGdQ6V5Y-D6XSA77wL5bqOPSf3ypxwb49bdGbyVTeRUTWX0zF4xOo4TDQ274hGkUZVvTCU69djypJvc-RjO5q84dBWbvAnIxCV-fxgz3xACFC3FMN9R5XwwVIv7ZZLb-EkDzqFWDgHHOrpv7bWMs_xmk7VBQ2Lw7zgrb_CzBg1OMywbJPt8jXohLEyFnDOFh6cLdIM4Uv6W0F0speRij-hrnmNNf24Hjfz81E-g" />
                            <div>
                                <h3
                                    class="font-headline font-bold text-lg text-on-surface group-hover:text-primary transition-colors">
                                    Elena Rodriguez</h3>
                                <p class="font-body text-sm text-outline flex items-center gap-1 mt-0.5">
                                    <span class="material-symbols-outlined text-[16px]"
                                        data-icon="location_on">location_on</span> Central America
                                </p>
                            </div>
                        </div>
                        <span
                            class="bg-primary/10 text-primary font-label text-xs px-2 py-1 uppercase tracking-wider font-semibold">Active</span>
                    </div>
                    <div class="bg-surface-container-low p-4 mb-4 grid grid-cols-2 gap-4">
                        <div>
                            <p class="font-label text-xs text-outline mb-1">Audits YTD</p>
                            <p class="font-body font-semibold text-on-surface">34</p>
                        </div>
                        <div>
                            <p class="font-label text-xs text-outline mb-1">Success Rate</p>
                            <p class="font-body font-semibold text-on-surface">92%</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-outline font-body flex items-center gap-1">
                            <span class="material-symbols-outlined text-[18px]" data-icon="schedule">schedule</span>
                            Last active: 2h ago
                        </span>
                        <span
                            class="text-primary font-label font-medium flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                            View Details <span class="material-symbols-outlined text-[18px]"
                                data-icon="arrow_forward">arrow_forward</span>
                        </span>
                    </div>
                </div>
            </a>
            <!-- Card 2: Waiting Review -->
            <a class="group block bg-surface-container-lowest shadow-[0px_20px_40px_rgba(25,28,25,0.03)] hover:shadow-[0px_20px_40px_rgba(25,28,25,0.08)] transition-all duration-300 relative overflow-hidden border border-outline-variant/20"
                href="#">
                <div class="h-2 w-full bg-secondary absolute top-0 left-0"></div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-6">
                        <div class="flex gap-4 items-center">
                            <img alt="Marcus Chen"
                                class="w-14 h-14 object-cover border border-outline-variant/30 grayscale hover:grayscale-0 transition-all"
                                data-alt="Professional headshot of a middle-aged man with glasses, natural light, confident expression"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDTYFKyoMm00gZ42Yc2CKfnp1FJYAjEVd4AvPEb1bKM3MJ-UoeIADG9J8nGVOn4NZdyLcDeJ58xjq6jrcTPiHd3fsJ0wikRHN-6r5W-Uc2Cok_DQVqymMb4sMfun1BHGHYDEVDUeJvOX7dDGA6FM0MCEpuEEgpNep7JNNrZapVhWy_ovQnBZ9xcR8T2KSYlnZgM7OvULSjHrqv0kLsqBTatk534uzxavOY2wMtjk36hfYTN5RW1rcKL9yoRklrAt_6UoZP6Z66yjFg" />
                            <div>
                                <h3
                                    class="font-headline font-bold text-lg text-on-surface group-hover:text-secondary transition-colors">
                                    Marcus Chen</h3>
                                <p class="font-body text-sm text-outline flex items-center gap-1 mt-0.5">
                                    <span class="material-symbols-outlined text-[16px]"
                                        data-icon="location_on">location_on</span> Southeast Asia
                                </p>
                            </div>
                        </div>
                        <span
                            class="bg-secondary/10 text-secondary font-label text-xs px-2 py-1 uppercase tracking-wider font-semibold">Under
                            Review</span>
                    </div>
                    <div class="bg-surface-container-low p-4 mb-4 grid grid-cols-2 gap-4">
                        <div>
                            <p class="font-label text-xs text-outline mb-1">Audits YTD</p>
                            <p class="font-body font-semibold text-on-surface">12</p>
                        </div>
                        <div>
                            <p class="font-label text-xs text-outline mb-1">Issue Raised</p>
                            <p class="font-body font-semibold text-error flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px]" data-icon="warning">warning</span>
                                Flagged
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-outline font-body flex items-center gap-1">
                            <span class="material-symbols-outlined text-[18px]" data-icon="event_note">event_note</span>
                            Review due: Today
                        </span>
                        <span
                            class="text-secondary font-label font-medium flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                            View Case <span class="material-symbols-outlined text-[18px]"
                                data-icon="arrow_forward">arrow_forward</span>
                        </span>
                    </div>
                </div>
            </a>
            <!-- Card 3: Active -->
            <a class="group block bg-surface-container-lowest shadow-[0px_20px_40px_rgba(25,28,25,0.03)] hover:shadow-[0px_20px_40px_rgba(25,28,25,0.08)] transition-all duration-300 relative overflow-hidden border border-outline-variant/20"
                href="#">
                <div class="h-2 w-full bg-primary absolute top-0 left-0"></div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-6">
                        <div class="flex gap-4 items-center">
                            <img alt="Sarah Jenkins"
                                class="w-14 h-14 object-cover border border-outline-variant/30 grayscale hover:grayscale-0 transition-all"
                                data-alt="Professional headshot of a young woman with curly hair, natural sunlight outdoors, smiling"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjvloDmgczEDwjp3EO7foTPStbMVgYx3xTvJbvn5slKh_QqZbPKxq8LQ40j2SAD1ZrMceJ92ZFVSwq3psd_dbAh9EBKI48LRsx7M6snDmjZtnYsSTKNU1MUe0mbUC39M-q05Pove1PUWQkGqtfEieKItDxRjCJF6jP7eKl2mFEZchJQcE25hYoCWPnNaryC_Vj-huwsBiW_J_72b8z912o19JHc1BTyJg8Mq0UGMyG-zPoP73LHdfPDTRMx305_IH8IkuFwsbqGRA" />
                            <div>
                                <h3
                                    class="font-headline font-bold text-lg text-on-surface group-hover:text-primary transition-colors">
                                    Sarah Jenkins</h3>
                                <p class="font-body text-sm text-outline flex items-center gap-1 mt-0.5">
                                    <span class="material-symbols-outlined text-[16px]"
                                        data-icon="location_on">location_on</span> Western Europe
                                </p>
                            </div>
                        </div>
                        <span
                            class="bg-primary/10 text-primary font-label text-xs px-2 py-1 uppercase tracking-wider font-semibold">Active</span>
                    </div>
                    <div class="bg-surface-container-low p-4 mb-4 grid grid-cols-2 gap-4">
                        <div>
                            <p class="font-label text-xs text-outline mb-1">Audits YTD</p>
                            <p class="font-body font-semibold text-on-surface">45</p>
                        </div>
                        <div>
                            <p class="font-label text-xs text-outline mb-1">Success Rate</p>
                            <p class="font-body font-semibold text-on-surface">98%</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-outline font-body flex items-center gap-1">
                            <span class="material-symbols-outlined text-[18px]" data-icon="schedule">schedule</span>
                            Last active: 1d ago
                        </span>
                        <span
                            class="text-primary font-label font-medium flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                            View Details <span class="material-symbols-outlined text-[18px]"
                                data-icon="arrow_forward">arrow_forward</span>
                        </span>
                    </div>
                </div>
            </a>
            <!-- Card 4: Waiting Review -->
            <a class="group block bg-surface-container-lowest shadow-[0px_20px_40px_rgba(25,28,25,0.03)] hover:shadow-[0px_20px_40px_rgba(25,28,25,0.08)] transition-all duration-300 relative overflow-hidden border border-outline-variant/20"
                href="#">
                <div class="h-2 w-full bg-secondary absolute top-0 left-0"></div>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-6">
                        <div class="flex gap-4 items-center">
                            <img alt="David Osei"
                                class="w-14 h-14 object-cover border border-outline-variant/30 grayscale hover:grayscale-0 transition-all"
                                data-alt="Professional headshot of a young man, sharp focus, neutral background, serious expression"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1yRkucE60hjPdpXs1GHUrf7m-ZPPZf-xLPRbOBkPaxrkCJehygg6BEcLnWMa3bx-l2pffsMkOTTJ1YXOQ_Q29mbRIWaDwA8TPgPRYq5-w92Nea1ZMkl8cvx_vgbgF4b12ZjBs8hnyjUfYzVaApj0TlsLq2c6em1MMZ7qsWQ5MGwRvjvaSEIo4v1otqaBf4eRM3GTszQ1YbdS7-tRth7bOXwte-84tJUAWOFGH42jmGkrj4zIVsY04km184xEx1b9ofXjC7gIQQMc" />
                            <div>
                                <h3
                                    class="font-headline font-bold text-lg text-on-surface group-hover:text-secondary transition-colors">
                                    David Osei</h3>
                                <p class="font-body text-sm text-outline flex items-center gap-1 mt-0.5">
                                    <span class="material-symbols-outlined text-[16px]"
                                        data-icon="location_on">location_on</span> Sub-Saharan Africa
                                </p>
                            </div>
                        </div>
                        <span
                            class="bg-secondary/10 text-secondary font-label text-xs px-2 py-1 uppercase tracking-wider font-semibold">Under
                            Review</span>
                    </div>
                    <div class="bg-surface-container-low p-4 mb-4 grid grid-cols-2 gap-4">
                        <div>
                            <p class="font-label text-xs text-outline mb-1">Audits YTD</p>
                            <p class="font-body font-semibold text-on-surface">8</p>
                        </div>
                        <div>
                            <p class="font-label text-xs text-outline mb-1">Status</p>
                            <p class="font-body font-semibold text-secondary flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px]"
                                    data-icon="hourglass_empty">hourglass_empty</span> Pending Cert
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-outline font-body flex items-center gap-1">
                            <span class="material-symbols-outlined text-[18px]" data-icon="event_note">event_note</span>
                            Review due: Tomorrow
                        </span>
                        <span
                            class="text-secondary font-label font-medium flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                            View Case <span class="material-symbols-outlined text-[18px]"
                                data-icon="arrow_forward">arrow_forward</span>
                        </span>
                    </div>
                </div>
            </a>
        </div>
        <!-- Pagination / Load More -->
        <div class="mt-12 flex justify-center">
            <button
                class="bg-surface-container-high hover:bg-surface-variant text-on-surface font-label font-semibold py-3 px-8 transition-colors border border-outline/20">
                Load More Auditors
            </button>
        </div>
    </main>
</body>

</html>