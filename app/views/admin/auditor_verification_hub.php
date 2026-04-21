<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Auditor Detail View - EcoPortal Admin</title>
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
        h6 {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>

<body class="bg-background text-on-background min-h-screen flex flex-col md:flex-row">
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
    <!-- Main Content -->
    <main class="flex-1 mt-16 md:ml-64 p-6 md:p-12 bg-surface-bright">
        <!-- Breadcrumb & Actions Header -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
            <div>
                <a class="text-outline hover:text-primary flex items-center gap-2 text-sm font-label mb-4 w-fit"
                    href="#">
                    <span class="material-symbols-outlined text-sm">arrow_back</span>
                    Back to Auditors
                </a>
                <h2 class="font-headline font-extrabold text-4xl text-on-surface tracking-tight mb-2">Elena Rodriguez
                </h2>
                <div class="flex items-center gap-3">
                    <span
                        class="bg-surface-container-high text-on-surface-variant px-3 py-1 text-xs font-bold uppercase tracking-wider font-label">Pending
                        Verification</span>
                    <span class="text-outline text-sm font-body flex items-center gap-1">
                        <span class="material-symbols-outlined text-sm">location_on</span>
                        Andes Region, South America
                    </span>
                </div>
            </div>
            <div class="flex gap-4">
                <button
                    class="px-6 py-3 bg-surface-container text-on-surface font-label font-bold text-sm hover:bg-surface-container-high transition-colors outline outline-1 outline-outline-variant">
                    Reject Application
                </button>
                <button
                    class="px-6 py-3 bg-primary text-on-primary font-label font-bold text-sm hover:bg-primary-fixed-dim transition-colors shadow-[0px_10px_20px_rgba(22,52,34,0.15)] flex items-center gap-2">
                    <span class="material-symbols-outlined">check_circle</span>
                    Accept Auditor
                </button>
            </div>
        </div>
        <!-- Bento Grid Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <!-- Left Column: Profile & Summary -->
            <div class="lg:col-span-4 flex flex-col gap-8">
                <!-- Profile Image Card -->
                <div class="bg-surface-container-lowest shadow-[0px_20px_40px_rgba(25,28,25,0.06)] overflow-hidden">
                    <div class="aspect-w-4 aspect-h-5 bg-surface-variant relative">
                        <img alt="Auditor Portrait" class="w-full h-full object-cover"
                            data-alt="professional portrait of woman in outdoor rugged setting with natural lighting"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6iLc6goC-4pH8Aq3nMV2z8Mee9-Q7JFWuDlezR0dCmJetJtrVhA48hL_PUFyI3zm5O6v9ftM8H2QqMtd3a-QwC5CnaDw9OKAo7CY9tdCMxV9v748rc7Eudv33fy-WxGwVLsjydHRVoj-QjdZZEd3IyjgeydYVFYElQHMu3Nbc4PofnfgqyR-wDCbanLBr0O9ZAw82TELaRNSmRg4GLkoDuEIoo8CzG_ST_B9ROvjRZ3hQLjq_61cP7-amW5RGC3jrXefiht-Gb9k" />
                        <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/80 to-transparent">
                            <p class="text-white font-label font-bold text-sm uppercase tracking-widest">ID: AUD-8472-ER
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Contact Info Card -->
                <div class="bg-surface-container-low p-6">
                    <h3 class="font-headline font-bold text-lg mb-6 border-b border-outline-variant/30 pb-4">Contact
                        Information</h3>
                    <div class="space-y-4">
                        <div>
                            <p class="text-xs font-label text-outline uppercase tracking-wider mb-1">Email</p>
                            <p class="font-body text-sm text-on-surface">elena.rodriguez@eco-andes.org</p>
                        </div>
                        <div>
                            <p class="text-xs font-label text-outline uppercase tracking-wider mb-1">Phone</p>
                            <p class="font-body text-sm text-on-surface">+51 987 654 321</p>
                        </div>
                        <div>
                            <p class="text-xs font-label text-outline uppercase tracking-wider mb-1">Based In</p>
                            <p class="font-body text-sm text-on-surface">Cusco, Peru</p>
                        </div>
                    </div>
                </div>
                <!-- Expertise Chips -->
                <div class="bg-surface-container-low p-6">
                    <h3 class="font-headline font-bold text-lg mb-6 border-b border-outline-variant/30 pb-4">
                        Specializations</h3>
                    <div class="flex flex-wrap gap-2">
                        <span
                            class="bg-surface-container text-on-surface px-3 py-1.5 text-xs font-label font-medium outline outline-1 outline-outline-variant/50">High-Altitude
                            Trekking</span>
                        <span
                            class="bg-surface-container text-on-surface px-3 py-1.5 text-xs font-label font-medium outline outline-1 outline-outline-variant/50">Biodiversity
                            Conservation</span>
                        <span
                            class="bg-surface-container text-on-surface px-3 py-1.5 text-xs font-label font-medium outline outline-1 outline-outline-variant/50">Indigenous
                            Communities</span>
                        <span
                            class="bg-surface-container text-on-surface px-3 py-1.5 text-xs font-label font-medium outline outline-1 outline-outline-variant/50">Waste
                            Management</span>
                    </div>
                </div>
            </div>
            <!-- Right Column: Details & Documents -->
            <div class="lg:col-span-8 flex flex-col gap-8">
                <!-- Background & Biography -->
                <div
                    class="bg-surface-container-lowest p-8 shadow-[0px_20px_40px_rgba(25,28,25,0.06)] relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-primary/5 -translate-y-1/2 translate-x-1/2 rotate-45 pointer-events-none">
                    </div>
                    <h3 class="font-headline font-bold text-2xl mb-6">Professional Background</h3>
                    <div class="prose prose-sm font-body text-on-surface-variant max-w-none leading-relaxed">
                        <p class="mb-4">Elena brings over 12 years of experience in environmental auditing and
                            sustainable tourism development in the Andean region. Formerly a lead researcher at the
                            South American Environmental Protection Agency, she has conducted over 200 field assessments
                            focusing on high-impact tourist trails and remote lodge operations.</p>
                        <p>Her expertise lies in evaluating water usage in arid high-altitude environments and ensuring
                            equitable community engagement in local tourism initiatives. She holds an MSc in
                            Environmental Science from the University of Lima.</p>
                    </div>
                </div>
                <!-- Region Assignments & Impact -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Proposed Region -->
                    <div class="bg-surface-container-low p-6 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2 mb-4">
                                <span class="material-symbols-outlined text-primary">map</span>
                                <h4 class="font-headline font-bold text-lg">Proposed Region</h4>
                            </div>
                            <p class="font-body text-sm text-on-surface-variant mb-6">Primary jurisdiction covering the
                                Sacred Valley, Inca Trail, and surrounding high-altitude conservation zones.</p>
                        </div>
                        <div class="bg-surface-container-high p-4 flex items-center justify-between">
                            <span class="font-label text-sm font-bold text-on-surface">Active Tours in Region</span>
                            <span class="font-headline text-xl font-bold text-primary">42</span>
                        </div>
                    </div>
                    <!-- Impact Metrics (Impact Chip Pattern) -->
                    <div
                        class="bg-tertiary-container text-on-tertiary-container p-6 flex flex-col justify-between relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent pointer-events-none">
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-4">
                                <span class="material-symbols-outlined text-tertiary-fixed">eco</span>
                                <h4 class="font-headline font-bold text-lg text-tertiary-fixed">Historical Impact</h4>
                            </div>
                            <p class="font-body text-sm text-on-tertiary-container/80 mb-6">Metrics from previous
                                independent audits submitted with application.</p>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-xs font-label uppercase tracking-wider opacity-70">Audits Completed</p>
                                <p class="font-headline text-2xl font-bold text-tertiary-fixed mt-1">128</p>
                            </div>
                            <div>
                                <p class="text-xs font-label uppercase tracking-wider opacity-70">Certifications Revoked
                                </p>
                                <p class="font-headline text-2xl font-bold text-tertiary-fixed mt-1">3</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Verification Documents -->
                <div class="bg-surface-container-lowest p-8 shadow-[0px_20px_40px_rgba(25,28,25,0.06)]">
                    <h3 class="font-headline font-bold text-xl mb-6">Verification Documents</h3>
                    <div class="space-y-4">
                        <!-- Document Item -->
                        <div
                            class="flex items-center justify-between p-4 bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer group">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 bg-surface-container-highest flex items-center justify-center text-outline group-hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">description</span>
                                </div>
                                <div>
                                    <p class="font-label font-bold text-sm text-on-surface">Curriculum Vitae</p>
                                    <p class="font-body text-xs text-outline mt-0.5">PDF • 2.4 MB • Uploaded Oct 12</p>
                                </div>
                            </div>
                            <span
                                class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">download</span>
                        </div>
                        <!-- Document Item -->
                        <div
                            class="flex items-center justify-between p-4 bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer group">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 bg-surface-container-highest flex items-center justify-center text-outline group-hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">workspace_premium</span>
                                </div>
                                <div>
                                    <p class="font-label font-bold text-sm text-on-surface">ISO 14001 Auditor
                                        Certificate</p>
                                    <p class="font-body text-xs text-outline mt-0.5">PDF • 1.1 MB • Uploaded Oct 12</p>
                                </div>
                            </div>
                            <span
                                class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">download</span>
                        </div>
                        <!-- Document Item -->
                        <div
                            class="flex items-center justify-between p-4 bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer group">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 bg-surface-container-highest flex items-center justify-center text-outline group-hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined">badge</span>
                                </div>
                                <div>
                                    <p class="font-label font-bold text-sm text-on-surface">Government ID Verification
                                    </p>
                                    <p class="font-body text-xs text-outline mt-0.5">Verified via Third Party</p>
                                </div>
                            </div>
                            <span class="material-symbols-outlined text-primary"
                                style="font-variation-settings: 'FILL' 1;">check_circle</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>