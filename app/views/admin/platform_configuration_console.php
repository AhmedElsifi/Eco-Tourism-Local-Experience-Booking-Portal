<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Platform Settings - EcoPortal Admin</title>
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
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                }
            }
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
        h6 {
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
                <a class="bg-[#163422] text-[#ffffff] rounded-none px-4 py-3 flex items-center gap-3 active:opacity-80"
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
    <main class="flex-1 flex flex-col md:ml-64 h-full">
        <!-- Scrollable Content -->
        <div class="flex-1 overflow-y-auto pt-16 bg-surface p-6 md:p-8 lg:p-12">
            <div class="max-w-5xl mx-auto space-y-12">
                <!-- Header -->
                <div class="mb-8">
                    <h2 class="font-headline text-3xl font-extrabold text-on-surface tracking-tight mb-2">Global
                        Configuration</h2>
                    <p class="font-body text-on-surface-variant text-sm">Manage core platform mechanics, fee structures,
                        and sustainability algorithms.</p>
                </div>
                <!-- Bento Grid Layout for Settings -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Platform Fees Card -->
                    <div
                        class="col-span-1 lg:col-span-2 bg-surface-container-lowest border-none shadow-[0px_20px_40px_rgba(25,28,25,0.06)] p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-primary bg-primary/10 p-2">payments</span>
                            <h3 class="font-headline text-xl font-bold text-on-surface">Financial Parameters</h3>
                        </div>
                        <div class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block font-label text-sm font-medium text-on-surface mb-2">Standard
                                        Platform Fee (%)</label>
                                    <input
                                        class="w-full bg-surface border border-outline text-on-surface p-3 focus:border-primary focus:ring-0 transition-colors font-body text-sm rounded-none"
                                        type="number" value="12.5" />
                                </div>
                                <div>
                                    <label
                                        class="block font-label text-sm font-medium text-on-surface mb-2">Eco-Certified
                                        Discount (%)</label>
                                    <input
                                        class="w-full bg-surface border border-outline text-on-surface p-3 focus:border-primary focus:ring-0 transition-colors font-body text-sm rounded-none"
                                        type="number" value="2.0" />
                                </div>
                            </div>
                            <div class="bg-surface-container-low p-4 flex items-start gap-4">
                                <span class="material-symbols-outlined text-secondary mt-0.5">info</span>
                                <div>
                                    <h4 class="font-label text-sm font-medium text-on-surface mb-1">Effective Rate
                                        Calculation</h4>
                                    <p class="font-body text-xs text-on-surface-variant">Tours achieving a Level 3
                                        Eco-Leaf score automatically receive the defined discount applied to the
                                        standard fee.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Eco-Leaf Score Card -->
                    <div
                        class="col-span-1 bg-surface-container-lowest border-none shadow-[0px_20px_40px_rgba(25,28,25,0.06)] p-8">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-primary bg-primary/10 p-2">eco</span>
                            <h3 class="font-headline text-xl font-bold text-on-surface">Eco-Leaf Weights</h3>
                        </div>
                        <div class="space-y-5">
                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <label class="font-label text-sm font-medium text-on-surface">Carbon Offset</label>
                                    <span class="font-body text-xs text-primary font-bold">40%</span>
                                </div>
                                <div class="h-2 bg-surface-container w-full">
                                    <div class="h-full bg-primary" style="width: 40%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <label class="font-label text-sm font-medium text-on-surface">Local Economy
                                        Support</label>
                                    <span class="font-body text-xs text-primary font-bold">35%</span>
                                </div>
                                <div class="h-2 bg-surface-container w-full">
                                    <div class="h-full bg-primary" style="width: 35%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <label class="font-label text-sm font-medium text-on-surface">Wildlife
                                        Protection</label>
                                    <span class="font-body text-xs text-primary font-bold">25%</span>
                                </div>
                                <div class="h-2 bg-surface-container w-full">
                                    <div class="h-full bg-primary" style="width: 25%"></div>
                                </div>
                            </div>
                            <button
                                class="w-full mt-4 bg-surface-container hover:bg-surface-container-high text-on-surface py-2 px-4 font-label text-sm font-medium transition-colors">Adjust
                                Weights</button>
                        </div>
                    </div>
                    <!-- Flagged Keywords -->
                    <div
                        class="col-span-1 lg:col-span-3 bg-surface-container-lowest border-none shadow-[0px_20px_40px_rgba(25,28,25,0.06)] p-8">
                        <div class="flex justify-between items-start mb-6">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-error bg-error/10 p-2">gavel</span>
                                <div>
                                    <h3 class="font-headline text-xl font-bold text-on-surface">Content Moderation</h3>
                                    <p class="font-body text-xs text-on-surface-variant mt-1">Keywords triggering
                                        automatic listing suspension.</p>
                                </div>
                            </div>
                            <button
                                class="bg-primary text-on-primary py-2 px-4 font-label text-sm font-bold hover:bg-primary-fixed-dim transition-colors">Add
                                Keyword</button>
                        </div>
                        <div class="bg-surface-container-low p-4 flex flex-wrap gap-2">
                            <span
                                class="bg-surface border border-outline-variant px-3 py-1 font-body text-xs flex items-center gap-2">
                                guaranteed sighting
                                <button class="text-on-surface-variant hover:text-error"><span
                                        class="material-symbols-outlined text-[14px]">close</span></button>
                            </span>
                            <span
                                class="bg-surface border border-outline-variant px-3 py-1 font-body text-xs flex items-center gap-2">
                                pet the wildlife
                                <button class="text-on-surface-variant hover:text-error"><span
                                        class="material-symbols-outlined text-[14px]">close</span></button>
                            </span>
                            <span
                                class="bg-surface border border-outline-variant px-3 py-1 font-body text-xs flex items-center gap-2">
                                off-trail access
                                <button class="text-on-surface-variant hover:text-error"><span
                                        class="material-symbols-outlined text-[14px]">close</span></button>
                            </span>
                            <span
                                class="bg-surface border border-outline-variant px-3 py-1 font-body text-xs flex items-center gap-2">
                                feed animals
                                <button class="text-on-surface-variant hover:text-error"><span
                                        class="material-symbols-outlined text-[14px]">close</span></button>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Action Bar -->
                <div class="flex justify-end gap-4 pt-6 mt-8 border-t border-surface-container-high">
                    <button
                        class="bg-surface-container text-on-surface py-3 px-6 font-label font-bold hover:bg-surface-container-high transition-colors">Discard
                        Changes</button>
                    <button
                        class="bg-primary text-on-primary py-3 px-6 font-label font-bold hover:bg-primary-fixed-dim transition-colors shadow-[0px_4px_10px_rgba(22,52,34,0.2)]">Save
                        Configuration</button>
                </div>
            </div>
        </div>
    </main>
</body>

</html>