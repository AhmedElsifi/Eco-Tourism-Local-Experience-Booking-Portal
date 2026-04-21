<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manage Tours - EcoPortal Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800;900&amp;family=Inter:wght@400;500;600&amp;display=swap"
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
</head>

<body class="bg-background text-on-background font-body min-h-screen flex flex-col antialiased">

    <div class="flex flex-1 pt-16">
        <nav
            class="hidden md:flex bg-[#edeee9] dark:bg-[#1a1c18] text-[#163422] dark:text-[#d1e8d5] rounded-none w-64 h-full fixed left-0 top-0 flex-col py-8 border-r border-[#727972]/15 z-40">
            <div class="px-6 mb-8">
                <h1 class="font-headline font-black text-lg tracking-widest text-[#163422] dark:text-[#d1e8d5]">
                    EcoPortal
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
        <main class="flex-1 md:ml-64 p-8 bg-surface-bright min-h-[calc(100vh-4rem)]">
            <div class="max-w-7xl mx-auto">
                <header class="mb-12 flex flex-col md:flex-row md:items-end justify-between gap-6">
                    <div>
                        <h1 class="text-[3.5rem] leading-none font-headline font-black text-primary tracking-[-0.02em]">
                            Manage Tours</h1>
                        <p class="text-on-surface-variant font-body text-sm mt-4 max-w-2xl">Oversee all active and
                            pending tour listings. Ensure compliance with environmental guidelines before approval.</p>
                    </div>
                    <div class="flex gap-4">
                        <div class="relative bg-surface-container-low p-1">
                            <span
                                class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline"
                                data-icon="search">search</span>
                            <input
                                class="bg-surface-container-low border border-outline text-on-surface font-body text-sm px-10 py-3 w-64 focus:outline-none focus:border-primary focus:border-b-2 rounded-none transition-all"
                                placeholder="Search ID, Name, Guide..." type="text" />
                        </div>
                        <button
                            class="bg-surface-container-high text-on-surface p-3 border border-outline/15 hover:bg-surface-variant transition-colors flex items-center justify-center">
                            <span class="material-symbols-outlined" data-icon="filter_list">filter_list</span>
                        </button>
                    </div>
                </header>
                <div
                    class="bg-surface-container-low p-6 outline outline-1 outline-outline-variant/15 outline-offset-[-1px]">
                    <div class="grid grid-cols-[1fr_3fr_2fr_2fr_2fr] gap-4 pb-4 border-b border-outline/15 mb-4">
                        <div class="text-xs font-bold font-headline text-on-surface-variant uppercase tracking-wider">
                            Tour ID</div>
                        <div class="text-xs font-bold font-headline text-on-surface-variant uppercase tracking-wider">
                            Name</div>
                        <div class="text-xs font-bold font-headline text-on-surface-variant uppercase tracking-wider">
                            Guide</div>
                        <div class="text-xs font-bold font-headline text-on-surface-variant uppercase tracking-wider">
                            Location</div>
                        <div class="text-xs font-bold font-headline text-on-surface-variant uppercase tracking-wider">
                            Approval Status</div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <a class="grid grid-cols-[1fr_3fr_2fr_2fr_2fr] gap-4 py-4 px-2 hover:bg-surface-container-high transition-colors items-center bg-surface cursor-pointer group"
                            href="#">
                            <div class="font-body text-sm text-outline group-hover:text-primary transition-colors">
                                #TR-8042</div>
                            <div class="font-headline font-bold text-primary truncate">Canopy Walk &amp; Bird Watching
                            </div>
                            <div class="font-body text-sm text-on-surface flex items-center gap-2">
                                <img alt="Guide" class="w-6 h-6 object-cover rounded-none grayscale"
                                    data-alt="Portrait of a female guide outdoors."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_A6F1r_-5QbteejV69je39kVc_SzqFb84xNOEn_GOOIG_sZlg54sLWE9hWx4CdUT3rMCDLhA4HTenQ5TgjwZGxX80zv2_-0ehDn7RCbNtK_Wfk4TEAbFIMQFbijgpnkJ5zNJDRQrFLx-7zImWIsvpllixIASy8iCZjnQTGw9cIQDmQ3AyVuBj98o4EXGw4wjP28OZQemG33vdX5H6TNYVTEQpIaCebSdWq0si2OmfXC8c-bsZ10xAxeVqaFBkwmvdq6RQR9CjUh8" />
                                Elena R.
                            </div>
                            <div class="font-body text-sm text-on-surface flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px] text-secondary"
                                    data-icon="location_on">location_on</span>
                                Costa Rica
                            </div>
                            <div>
                                <span
                                    class="inline-flex items-center px-2 py-1 bg-primary-container text-on-primary-container text-xs font-bold font-headline uppercase tracking-wider">
                                    <span class="w-1.5 h-1.5 bg-primary mr-2"></span> Approved
                                </span>
                            </div>
                        </a>
                        <a class="grid grid-cols-[1fr_3fr_2fr_2fr_2fr] gap-4 py-4 px-2 hover:bg-surface-container-high transition-colors items-center bg-surface cursor-pointer group"
                            href="#">
                            <div class="font-body text-sm text-outline group-hover:text-primary transition-colors">
                                #TR-8043</div>
                            <div class="font-headline font-bold text-primary truncate">Alpine Glacier Trekking</div>
                            <div class="font-body text-sm text-on-surface flex items-center gap-2">
                                <img alt="Guide" class="w-6 h-6 object-cover rounded-none grayscale"
                                    data-alt="Portrait of a male guide."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAm-O5xGkFSWK15Yu1rjmvIvJ3LD-5dRC1WUOY4iGqPU-fziejSYj1ni-ZXGOD1OzolALn2ncNVErwysPu7vExfh2u1RXxRhSyJSKetkmsHVaIguBJNAFdqE3r1FbHHLlooVu3CCkOEKYcYLe6bfKZSy2G65jIPymVGU74bj4PaB5Gmrc-AJ0piT1g2pOq8xjDiRVxbbEpvTfHkrabyCFftKiEsia8NhZwKHzH5rJyp742Y2pERKHO0c3RLxZevlDorE4mblNsqzrI" />
                                Marcus V.
                            </div>
                            <div class="font-body text-sm text-on-surface flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px] text-secondary"
                                    data-icon="location_on">location_on</span>
                                Switzerland
                            </div>
                            <div>
                                <span
                                    class="inline-flex items-center px-2 py-1 bg-surface-variant text-on-surface-variant text-xs font-bold font-headline uppercase tracking-wider">
                                    <span class="w-1.5 h-1.5 bg-outline mr-2"></span> Pending Review
                                </span>
                            </div>
                        </a>
                        <a class="grid grid-cols-[1fr_3fr_2fr_2fr_2fr] gap-4 py-4 px-2 hover:bg-surface-container-high transition-colors items-center bg-surface cursor-pointer group"
                            href="#">
                            <div class="font-body text-sm text-outline group-hover:text-primary transition-colors">
                                #TR-8044</div>
                            <div class="font-headline font-bold text-primary truncate">Desert Night Safari</div>
                            <div class="font-body text-sm text-on-surface flex items-center gap-2">
                                <img alt="Guide" class="w-6 h-6 object-cover rounded-none grayscale"
                                    data-alt="Portrait of a female guide."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFM9llgERk6vfFnNCX3PszkOcWy5x1-9sQ6CLCKdveCzq1fQm865pkSrBuCI2txdIlbxJHaVlA9LeROa6_enJ1dmhXJYTsRMu2JFM-B7UqykaxcwICpaXSvPSDdKEvXWXRBXm6i2Wme0LlUTv7SqmKNuWfq2shTULCQP3EtLMXb2MgPyHVrk-x495mO7Cbe_58rJ1rEhyVhrBkV5Xxz5Bfu375NF-RIIlJIOpriS2GLjM-uBgyOd-HOVLhsEv7_03idzoFPIeYuXM" />
                                Amina K.
                            </div>
                            <div class="font-body text-sm text-on-surface flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px] text-secondary"
                                    data-icon="location_on">location_on</span>
                                Morocco
                            </div>
                            <div>
                                <span
                                    class="inline-flex items-center px-2 py-1 bg-error-container text-on-error-container text-xs font-bold font-headline uppercase tracking-wider">
                                    <span class="w-1.5 h-1.5 bg-error mr-2"></span> Rejected
                                </span>
                            </div>
                        </a>
                        <a class="grid grid-cols-[1fr_3fr_2fr_2fr_2fr] gap-4 py-4 px-2 hover:bg-surface-container-high transition-colors items-center bg-surface cursor-pointer group"
                            href="#">
                            <div class="font-body text-sm text-outline group-hover:text-primary transition-colors">
                                #TR-8045</div>
                            <div class="font-headline font-bold text-primary truncate">Sustainable Farm to Table</div>
                            <div class="font-body text-sm text-on-surface flex items-center gap-2">
                                <img alt="Guide" class="w-6 h-6 object-cover rounded-none grayscale"
                                    data-alt="Portrait of a male guide."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXYnXjMtw2hdlV7wQPXsCPtjIc1tcwTagwD6ty_9ubl7nUJPM4XCdbcN4RIEeuEUihjfippf4rhvQH7WK-dFWT2KHB76K3uELi_6C8Dyg2VLyboiZYHNaDt1YPrtqXPm8ckmsWjHDdSYLp-pU-h0C6xf9dT0XbqwSmDE9xvyD4bZEb4w6OHnzRVEtP7WVPeESy71n6taIGB_R3TuWCgng4ufHwEs2cxdJrfx6dwLmwykZVL2AjdHagiyW5z2eHof12CA74IvaDsdI" />
                                David L.
                            </div>
                            <div class="font-body text-sm text-on-surface flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px] text-secondary"
                                    data-icon="location_on">location_on</span>
                                Italy
                            </div>
                            <div>
                                <span
                                    class="inline-flex items-center px-2 py-1 bg-primary-container text-on-primary-container text-xs font-bold font-headline uppercase tracking-wider">
                                    <span class="w-1.5 h-1.5 bg-primary mr-2"></span> Approved
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>