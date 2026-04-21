<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Reviews Management - EcoPortal Admin</title>
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
                        "headline": ["Manrope", "sans-serif"],
                        "body": ["Inter", "sans-serif"],
                        "label": ["Inter", "sans-serif"]
                    }
                },
            },
        }
    </script>
</head>

<body class="bg-surface text-on-surface font-body min-h-screen">
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
                <a class="bg-[#163422] text-[#ffffff] rounded-none px-4 py-3 flex items-center gap-3 active:opacity-80"
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
    <!-- Main Content Canvas -->
    <main class="md:ml-64 pt-16 min-h-screen bg-surface flex flex-col">
        <div class="flex-1 p-8 max-w-7xl mx-auto w-full">
            <!-- Page Header (Editorial Precision) -->
            <div class="mb-12 flex justify-between items-end border-b-0">
                <div>
                    <h1 class="font-headline text-4xl font-extrabold tracking-tight text-primary mb-2">Reviews
                        Management</h1>
                    <p class="font-body text-outline text-sm font-medium">Monitor and moderate traveler feedback across
                        all verified experiences.</p>
                </div>
                <div class="flex gap-4">
                    <!-- Filters/Sort -->
                    <button
                        class="bg-surface-container border outline outline-outline/30 px-4 py-2 text-sm font-medium flex items-center gap-2 hover:bg-surface-container-high transition-colors">
                        <span class="material-symbols-outlined text-[18px]">filter_list</span>
                        Filter
                    </button>
                </div>
            </div>
            <!-- Content Area: The Reviews List (Brutalism approach, no lines, tonal layering) -->
            <div class="bg-surface-container-lowest p-6 shadow-[0px_20px_40px_rgba(25,28,25,0.02)]">
                <!-- Table Header (Tonal Shift, No border) -->
                <div
                    class="grid grid-cols-12 gap-4 bg-surface-container px-4 py-3 mb-4 font-label text-xs font-bold uppercase text-on-surface-variant tracking-wider">
                    <div class="col-span-3">Experience Name</div>
                    <div class="col-span-2">Traveler</div>
                    <div class="col-span-2">Rating &amp; Date</div>
                    <div class="col-span-4">Review Text</div>
                    <div class="col-span-1 text-right">Actions</div>
                </div>
                <!-- Review Items -->
                <div class="flex flex-col gap-6">
                    <!-- Item 1 -->
                    <div
                        class="grid grid-cols-12 gap-4 px-4 py-2 bg-surface-container-low hover:bg-surface-container transition-colors items-start">
                        <!-- Experience -->
                        <div class="col-span-3">
                            <h3 class="font-headline font-bold text-sm text-primary leading-tight">Rainforest Canopy
                                Walk</h3>
                            <p class="font-body text-xs text-outline mt-1">Costa Rica Central</p>
                        </div>
                        <!-- Traveler -->
                        <div class="col-span-2 flex items-center gap-3">
                            <div class="w-8 h-8 bg-surface-container-highest flex-shrink-0">
                                <img alt="Traveler Avatar" class="w-full h-full object-cover grayscale"
                                    data-alt="black and white portrait of a smiling woman"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBSnZAOK234g-KKVTDWVH77_VWocw7h3nj9U3w7Wfv35NCeyR7NgBcaYMF5BBKVGES1shD-WqZqyicWEnE76a2cYu-bAIMPg18amP2jMcH0xAaHMYDYuIgomcVj5IGUd4rBfiYsEvitUGMk7CxFDNcHh9gJdgQM9ailq0Z1y9VqixvLlbjxDifBl19R8E_tZYY7iYYZ_oXC8bjPe8peUBGarVZRriEEF5c764Nfcx_cudf_J7NTpKxtNV9kkmtAHvTf-UOHRjiieCo" />
                            </div>
                            <span class="font-body text-sm font-medium">Sarah Jenkins</span>
                        </div>
                        <!-- Rating & Date -->
                        <div class="col-span-2">
                            <div class="flex text-primary mb-1">
                                <span class="material-symbols-outlined text-base"
                                    style="font-variation-settings: 'FILL' 1;">eco</span>
                                <span class="material-symbols-outlined text-base"
                                    style="font-variation-settings: 'FILL' 1;">eco</span>
                                <span class="material-symbols-outlined text-base"
                                    style="font-variation-settings: 'FILL' 1;">eco</span>
                                <span class="material-symbols-outlined text-base"
                                    style="font-variation-settings: 'FILL' 1;">eco</span>
                                <span class="material-symbols-outlined text-base text-outline-variant/40"
                                    style="font-variation-settings: 'FILL' 1;">eco</span>
                            </div>
                            <span class="font-body text-xs text-outline">Oct 12, 2023</span>
                        </div>
                        <!-- Review Text -->
                        <div class="col-span-4">
                            <p class="font-body text-sm text-on-surface line-clamp-3">Incredible experience. The guide
                                was knowledgeable about the local flora, though the trail was a bit crowded near the
                                suspension bridge.</p>
                        </div>
                        <!-- Actions -->
                        <div class="col-span-1 flex justify-end gap-2">
                            <button class="text-outline hover:text-primary transition-colors p-1"
                                title="Mark as Verified">
                                <span class="material-symbols-outlined text-[20px]">verified</span>
                            </button>
                            <button class="text-outline hover:text-secondary transition-colors p-1" title="Hide">
                                <span class="material-symbols-outlined text-[20px]">visibility_off</span>
                            </button>
                            <button class="text-outline hover:text-error transition-colors p-1" title="Flag">
                                <span class="material-symbols-outlined text-[20px]">flag</span>
                            </button>
                        </div>
                    </div>
                    <!-- Item 2 (Flagged State Example) -->
                    <div
                        class="grid grid-cols-12 gap-4 px-4 py-2 bg-error-container/20 border-l-4 border-error items-start">
                        <!-- Experience -->
                        <div class="col-span-3">
                            <h3 class="font-headline font-bold text-sm text-primary leading-tight">Desert Night Safari
                            </h3>
                            <p class="font-body text-xs text-outline mt-1">Namib Desert</p>
                        </div>
                        <!-- Traveler -->
                        <div class="col-span-2 flex items-center gap-3">
                            <div class="w-8 h-8 bg-surface-container-highest flex-shrink-0">
                                <img alt="Traveler Avatar" class="w-full h-full object-cover grayscale"
                                    data-alt="black and white portrait of a middle aged man"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD0c2erOmYGHJXyeE6Ha30e3wM1ygzVXH8BUO7fsadbSeCULGdN8PlNxBHdCPc1p8ZQv-GSAOt4ERk5mTy6cV-1JbBi2wd-AcnQgbNnGdAiUY9YTX3jxkNpeJKsbKDfl_IrKlGWBrcghhypk2rA7h7QOb2hqpZYUM-_bWmP0MbdyELMxbUIw1dAPPo5Ea2lrH4KBxCX19DJk5nojhMk7BEx937bPwGwW7Vy9Js4Fu0XVi18izaSsgSM-XkONIimFvLNdvUknoyNJOA" />
                            </div>
                            <span class="font-body text-sm font-medium">Marcus Chen</span>
                        </div>
                        <!-- Rating & Date -->
                        <div class="col-span-2">
                            <div class="flex text-primary mb-1">
                                <span class="material-symbols-outlined text-base"
                                    style="font-variation-settings: 'FILL' 1;">eco</span>
                                <span class="material-symbols-outlined text-base"
                                    style="font-variation-settings: 'FILL' 1;">eco</span>
                                <span class="material-symbols-outlined text-base text-outline-variant/40"
                                    style="font-variation-settings: 'FILL' 1;">eco</span>
                                <span class="material-symbols-outlined text-base text-outline-variant/40"
                                    style="font-variation-settings: 'FILL' 1;">eco</span>
                                <span class="material-symbols-outlined text-base text-outline-variant/40"
                                    style="font-variation-settings: 'FILL' 1;">eco</span>
                            </div>
                            <span class="font-body text-xs text-outline">Oct 10, 2023</span>
                        </div>
                        <!-- Review Text -->
                        <div class="col-span-4">
                            <div class="bg-surface-container-low p-2 outline outline-outline-variant/30 mb-2">
                                <span
                                    class="text-[10px] font-bold text-error uppercase tracking-wider block mb-1">System
                                    Flag: Keyword "Refund"</span>
                                <p class="font-body text-sm text-on-surface">The jeep broke down halfway through. We
                                    waited 2 hours for a replacement. I expect a full refund for this massive
                                    inconvenience.</p>
                            </div>
                        </div>
                        <!-- Actions -->
                        <div class="col-span-1 flex justify-end gap-2">
                            <button class="text-outline hover:text-primary transition-colors p-1"
                                title="Mark as Verified">
                                <span class="material-symbols-outlined text-[20px]">verified</span>
                            </button>
                            <button class="text-outline hover:text-secondary transition-colors p-1" title="Hide">
                                <span class="material-symbols-outlined text-[20px]">visibility_off</span>
                            </button>
                            <button class="text-error hover:text-on-error-container transition-colors p-1" title="Flag">
                                <span class="material-symbols-outlined text-[20px]"
                                    style="font-variation-settings: 'FILL' 1;">flag</span>
                            </button>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div
                        class="grid grid-cols-12 gap-4 px-4 py-2 bg-surface-container-low hover:bg-surface-container transition-colors items-start">
                        <!-- Experience -->
                        <div class="col-span-3">
                            <h3 class="font-headline font-bold text-sm text-primary leading-tight">Glacier Kayaking
                                Expedition</h3>
                            <p class="font-body text-xs text-outline mt-1">Patagonia</p>
                        </div>
                        <!-- Traveler -->
                        <div class="col-span-2 flex items-center gap-3">
                            <div class="w-8 h-8 bg-surface-container-highest flex-shrink-0">
                                <img alt="Traveler Avatar" class="w-full h-full object-cover grayscale"
                                    data-alt="black and white portrait of a young woman with glasses"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDRVtVBIeRL-_Citjju4NixMSiHOxrUQi_IAgKMc7MezyGcxziQnVsM8tQYcpX_twZvedstt4Qc_3k2JCO3ws1K3Q7uVrBvRG_q285aTX_CBHoajY5P0haRmPD2TKNurN3O-VhPkK2RMLfWFtFTfVHwfCDu2mVNsA7I-A8emBHOBhtISDK1t0wmOB-9ekK-6C0aEYlcdQOrxuwXZwkcVRyBzM0NgKbISNEOBGr5II5-V3WHkVe512NXT9DVCXVjVL4Zl6odubivnZk" />
                            </div>
                            <span class="font-body text-sm font-medium">Elena Rostova</span>
                        </div>
                        <!-- Rating & Date -->
                        <div class="col-span-2">
                            <div class="flex text-primary mb-1">
                                <span class="material-symbols-outlined text-base"
                                    style="font-variation-settings: 'FILL' 1;">eco</span>
                                <span class="material-symbols-outlined text-base"
                                    style="font-variation-settings: 'FILL' 1;">eco</span>
                                <span class="material-symbols-outlined text-base"
                                    style="font-variation-settings: 'FILL' 1;">eco</span>
                                <span class="material-symbols-outlined text-base"
                                    style="font-variation-settings: 'FILL' 1;">eco</span>
                                <span class="material-symbols-outlined text-base"
                                    style="font-variation-settings: 'FILL' 1;">eco</span>
                            </div>
                            <span class="font-body text-xs text-outline">Oct 05, 2023</span>
                        </div>
                        <!-- Review Text -->
                        <div class="col-span-4">
                            <p class="font-body text-sm text-on-surface line-clamp-3">Absolutely breathtaking. The
                                silence of the ice was moving. The operators were incredibly strict about leaving no
                                trace, which I deeply appreciated. Worth every penny.</p>
                        </div>
                        <!-- Actions -->
                        <div class="col-span-1 flex justify-end gap-2">
                            <button class="text-primary p-1" title="Verified">
                                <span class="material-symbols-outlined text-[20px]"
                                    style="font-variation-settings: 'FILL' 1;">verified</span>
                            </button>
                            <button class="text-outline hover:text-secondary transition-colors p-1" title="Hide">
                                <span class="material-symbols-outlined text-[20px]">visibility_off</span>
                            </button>
                            <button class="text-outline hover:text-error transition-colors p-1" title="Flag">
                                <span class="material-symbols-outlined text-[20px]">flag</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Pagination (Editorial style) -->
                <div
                    class="mt-8 pt-4 border-t border-outline/10 flex justify-between items-center text-sm font-body font-medium text-outline">
                    <span>Showing 1-3 of 142 Reviews</span>
                    <div class="flex gap-2">
                        <button
                            class="px-3 py-1 bg-surface hover:bg-surface-container-high transition-colors text-on-surface">Prev</button>
                        <button class="px-3 py-1 bg-primary text-on-primary">1</button>
                        <button
                            class="px-3 py-1 bg-surface hover:bg-surface-container-high transition-colors text-on-surface">2</button>
                        <button
                            class="px-3 py-1 bg-surface hover:bg-surface-container-high transition-colors text-on-surface">3</button>
                        <span class="px-2 py-1">...</span>
                        <button
                            class="px-3 py-1 bg-surface hover:bg-surface-container-high transition-colors text-on-surface">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>