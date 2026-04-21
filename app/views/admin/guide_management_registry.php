<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manage Guides - EcoPortal Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@400;700;800;900&amp;display=swap"
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
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        * {
            border-radius: 0px !important;
        }
    </style>
</head>

<body class="bg-background text-on-background font-body antialiased min-h-screen flex">
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
    <!-- Main Content Canvas -->
    <main class="flex-1 md:ml-64 mt-16 md:mt-0 p-6 md:p-12">
        <div class="max-w-7xl mx-auto">
            <header class="mb-12 flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div>
                    <h2 class="font-headline font-extrabold text-4xl text-primary tracking-tight mb-2">Guides Roster
                    </h2>
                    <p class="text-on-surface-variant font-body text-sm">Manage ecosystem stewards and specialized
                        terrain experts.</p>
                </div>
                <div class="flex gap-4 items-center">
                    <div class="relative bg-surface-container-low p-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-outline">search</span>
                        <input
                            class="bg-transparent border-none focus:ring-0 text-sm font-body text-on-surface outline-none w-48"
                            placeholder="Search ID or Name" type="text" />
                    </div>
                    <button
                        class="bg-primary text-on-primary px-6 py-3 font-headline font-bold text-sm hover:bg-primary-container transition-colors duration-200 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">filter_list</span> Filter
                    </button>
                </div>
            </header>
            <!-- Brutalist Table Replacement: High-Density List Cards -->
            <div class="flex flex-col gap-8">
                <!-- Table Header (Visual only for md+) -->
                <div
                    class="hidden md:grid grid-cols-12 gap-4 px-6 py-3 bg-surface-container border-l-4 border-primary text-xs font-headline font-bold tracking-wider text-on-surface uppercase">
                    <div class="col-span-4">Guide Identifier</div>
                    <div class="col-span-3">Specialty / Zone</div>
                    <div class="col-span-2">Eco-Rating</div>
                    <div class="col-span-2">Status</div>
                    <div class="col-span-1 text-right">Action</div>
                </div>
                <!-- Row Item 1 -->
                <div
                    class="group grid grid-cols-1 md:grid-cols-12 gap-4 md:items-center p-6 bg-surface-container-lowest hover:bg-surface-container-low transition-colors duration-200 cursor-pointer shadow-[0px_4px_12px_rgba(25,28,25,0.03)] border border-outline-variant/15 relative">
                    <div class="md:col-span-4 flex items-center gap-4">
                        <img class="w-12 h-12 object-cover bg-surface-variant"
                            data-alt="Portrait of a rugged male outdoors guide wearing a practical jacket"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOf8Whoy4EWmV27WzcVzcNJ6huCWBIi4YovB-VbrVpb_oHwWgnG8amp425upn7QfUdwnxsEWeEoYxmTR2I8r53uEKFtCwhIAc8_T6qf7o10x_LEOrTtRA4Xr6pH9_wIH8TcomFmdzI6qZWRpM-hTWQwNa2skp_3lifi-yleZTRP7ZoyVSGUmdAY0og_sadSFQZV26QJIxj9DpPfhmuO3KmcCX012f3L7PYc-oPqjN8qyACE_RQYgq0YoJOkcTETKDbPQCbVfDk9RA" />
                        <div>
                            <h3 class="font-headline font-bold text-lg text-primary leading-tight">Elias Thorne</h3>
                            <span class="font-body text-xs text-outline font-mono">ID: GD-8492-N</span>
                        </div>
                    </div>
                    <div class="md:col-span-3 font-body text-sm text-on-surface-variant flex flex-col">
                        <span class="font-medium text-on-surface">Alpine Tundra</span>
                        <span class="text-xs">Glacial Ecology</span>
                    </div>
                    <div class="md:col-span-2 flex items-center gap-1">
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-outline-variant/40 text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                    </div>
                    <div class="md:col-span-2 flex items-center">
                        <div
                            class="bg-primary/10 text-primary px-3 py-1 font-label text-xs font-bold uppercase tracking-wider">
                            Active
                        </div>
                    </div>
                    <div class="md:col-span-1 flex justify-end">
                        <span
                            class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">arrow_forward</span>
                    </div>
                </div>
                <!-- Row Item 2 -->
                <div
                    class="group grid grid-cols-1 md:grid-cols-12 gap-4 md:items-center p-6 bg-surface-container-lowest hover:bg-surface-container-low transition-colors duration-200 cursor-pointer shadow-[0px_4px_12px_rgba(25,28,25,0.03)] border border-outline-variant/15 relative">
                    <div class="md:col-span-4 flex items-center gap-4">
                        <img class="w-12 h-12 object-cover bg-surface-variant"
                            data-alt="Portrait of a female guide with a natural look and practical outdoor clothing"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAbIm50SGDTYd07SkszMfIfDUGCzrOKKSM_oDidaX7qG8ee7R-jdU0CInDb1-ToXtCAgXo_3PUfiRNS5OPdIsN7_LzoaKR3dUFCV4bp52nQP5sK6TzdJHPjT_mgbI4EdSTgFh3jcpwX9G7RfN8m8pafMTBPrKc0at1DxpoFjRiA892SqVhvl_b2KIoZNddx1NVlunDsj0C2ZNoe-vw84U1vLU72BEFG7BjZgFWE08bC_0ktFCKUIZClmnPZImYZ-O0yktzW5Ht5wQ4" />
                        <div>
                            <h3 class="font-headline font-bold text-lg text-primary leading-tight">Sarah Jenkins</h3>
                            <span class="font-body text-xs text-outline font-mono">ID: GD-7102-S</span>
                        </div>
                    </div>
                    <div class="md:col-span-3 font-body text-sm text-on-surface-variant flex flex-col">
                        <span class="font-medium text-on-surface">Coastal Rainforest</span>
                        <span class="text-xs">Mycology</span>
                    </div>
                    <div class="md:col-span-2 flex items-center gap-1">
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-outline-variant/40 text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-outline-variant/40 text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                    </div>
                    <div class="md:col-span-2 flex items-center">
                        <div
                            class="bg-secondary/10 text-secondary px-3 py-1 font-label text-xs font-bold uppercase tracking-wider border-l-2 border-secondary">
                            Awaiting Approval
                        </div>
                    </div>
                    <div class="md:col-span-1 flex justify-end">
                        <span
                            class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">arrow_forward</span>
                    </div>
                </div>
                <!-- Row Item 3 -->
                <div
                    class="group grid grid-cols-1 md:grid-cols-12 gap-4 md:items-center p-6 bg-surface-container-lowest hover:bg-surface-container-low transition-colors duration-200 cursor-pointer shadow-[0px_4px_12px_rgba(25,28,25,0.03)] border border-outline-variant/15 relative">
                    <div class="md:col-span-4 flex items-center gap-4">
                        <img class="w-12 h-12 object-cover bg-surface-variant"
                            data-alt="Portrait of a rugged male outdoors guide looking determined"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-lRTBqOGTrB9Hxi69d9bbBu_ciz1_yBTg4EcCN15NOVmItZguD88OFFiH7EqhvT_R4YbHHMs65XohPd0Yg8B5Sy45Bqyc7viw6kozZIhlJqiDgs32ji2aW6X66I_MJlD9wVmuMWGslHSmsaZo5caTDRCgvHbxHJy2HHNnx93Mxf9mVamBuDJt1uahQPLRkcEhAssz3-K0HTI96zCjDEP70-mq4ndBLOaIAvok5Y0XwvA1nkO2CU59sPpOMY4rz78AX57lqAkq9DI" />
                        <div>
                            <h3 class="font-headline font-bold text-lg text-primary leading-tight">Marcus Lin</h3>
                            <span class="font-body text-xs text-outline font-mono">ID: GD-9931-E</span>
                        </div>
                    </div>
                    <div class="md:col-span-3 font-body text-sm text-on-surface-variant flex flex-col">
                        <span class="font-medium text-on-surface">Desert Canyons</span>
                        <span class="text-xs">Geology Focus</span>
                    </div>
                    <div class="md:col-span-2 flex items-center gap-1">
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                    </div>
                    <div class="md:col-span-2 flex items-center">
                        <div
                            class="bg-primary/10 text-primary px-3 py-1 font-label text-xs font-bold uppercase tracking-wider">
                            Active
                        </div>
                    </div>
                    <div class="md:col-span-1 flex justify-end">
                        <span
                            class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">arrow_forward</span>
                    </div>
                </div>
            </div>
            <!-- Pagination Brutalist -->
            <div class="mt-12 flex justify-between items-center border-t border-outline-variant/20 pt-6">
                <span class="font-body text-sm text-on-surface-variant">Showing 1-3 of 142 Guides</span>
                <div class="flex gap-2">
                    <button
                        class="w-10 h-10 flex items-center justify-center bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors">
                        <span class="material-symbols-outlined text-sm">chevron_left</span>
                    </button>
                    <button
                        class="w-10 h-10 flex items-center justify-center bg-primary text-on-primary font-headline font-bold">1</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center bg-surface-container text-on-surface hover:bg-surface-container-high font-headline font-bold transition-colors">2</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center bg-surface-container text-on-surface hover:bg-surface-container-high font-headline font-bold transition-colors">3</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors">
                        <span class="material-symbols-outlined text-sm">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>

</html>