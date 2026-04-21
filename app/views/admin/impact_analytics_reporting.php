<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Reports Generation | EcoPortal Admin</title>
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

        .material-symbols-outlined[data-weight="fill"] {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background text-on-background font-body antialiased min-h-screen flex">
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
                <a class="bg-[#163422] text-[#ffffff] rounded-none px-4 py-3 flex items-center gap-3 active:opacity-80"
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
    <!-- TopAppBar (Shared Component - Mobile Only for this layout) -->
    <header
        class="fixed top-0 right-0 left-0 h-16 flex items-center justify-between px-6 z-50 bg-[#f8faf5] dark:bg-[#1a1c18] border-b border-[#727972]/15 shadow-[0px_20px_40px_rgba(25,28,25,0.06)] md:hidden">
        <div class="flex items-center gap-4">
            <button class="text-[#163422] dark:text-[#d1e8d5]">
                <span class="material-symbols-outlined">menu</span>
            </button>
            <span
                class="text-xl font-black text-[#163422] dark:text-[#d1e8d5] uppercase tracking-tighter font-headline">EcoPortal
                Admin</span>
        </div>
        <div class="flex items-center gap-4">
            <button
                class="text-[#163422] dark:text-[#d1e8d5] hover:bg-[#edeee9] dark:hover:bg-[#3e4a40] p-2 transition-colors duration-200">
                <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
            </button>
            <button
                class="text-[#163422] dark:text-[#d1e8d5] hover:bg-[#edeee9] dark:hover:bg-[#3e4a40] p-2 transition-colors duration-200">
                <span class="material-symbols-outlined" data-icon="help_outline">help_outline</span>
            </button>
            <img alt="Super Admin Avatar" class="w-8 h-8 object-cover border border-outline/30"
                data-alt="Portrait of a professional man in a green natural setting, shallow depth of field"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3N-hPygvZz5uWya7IXKnIDbmubODL3cHdFsTqoLxUbkMZ89vMZvvuIMEx4i9Z2Myyb6HUvGrHZhWfYFPK3ivkA9BYLSZx7zWJM5jMRJXFC7lki0QWtr4u5_Aq-IxSLD-kSsVP4e6lLnlS2Un7s5ch-oXGZwiGoLmcnBVKZTlJBtW4BZ4MPu5aENtau9qwSWD-imAvEFtHwZ5Xy-rXjO_rln9tDrZlhYbzq9SpFnXvcegMhSbHZU6Tr1iW960Kt5hQgH9f9IdyT58" />
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="flex-1 md:ml-64 pt-16 md:pt-0 p-6 lg:p-10 lg:pr-12 bg-surface-bright min-h-screen">
        <!-- Page Header & Global Actions -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-12">
            <div>
                <h2 class="font-headline text-[3.5rem] leading-none font-bold text-primary tracking-[-0.02em]">Impact
                    Reports</h2>
                <p class="font-body text-on-surface-variant mt-4 max-w-2xl text-base">Aggregated sustainability data
                    workspace. Generate comprehensive environmental and community impact assessments.</p>
            </div>
            <div class="flex gap-3">
                <button
                    class="bg-secondary-container text-on-secondary-container px-6 py-3 font-label font-medium text-sm flex items-center gap-2 hover:bg-secondary-fixed-dim transition-colors">
                    <span class="material-symbols-outlined text-[20px]" data-icon="print">print</span>
                    Print
                </button>
                <button
                    class="bg-primary text-on-primary px-6 py-3 font-label font-medium text-sm flex items-center gap-2 hover:bg-primary-fixed-dim transition-colors relative overflow-hidden group">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-primary to-primary-container opacity-0 group-hover:opacity-100 transition-opacity z-0">
                    </div>
                    <span class="relative z-10 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[20px]"
                            data-icon="picture_as_pdf">picture_as_pdf</span>
                        Generate PDF
                    </span>
                </button>
            </div>
        </div>
        <!-- Filter Bar (Surface Container Low) -->
        <div class="bg-surface-container-low p-6 mb-12 flex flex-col md:flex-row gap-6 items-end">
            <div class="flex-1 w-full space-y-2">
                <label class="font-label text-xs font-semibold text-on-surface uppercase tracking-wider">Region
                    Focus</label>
                <div class="relative">
                    <select
                        class="w-full bg-surface-container-lowest border-outline text-on-surface p-3 pr-10 appearance-none focus:border-primary focus:ring-0 rounded-none font-body text-sm">
                        <option>Global Aggregation</option>
                        <option>South America (Amazonas)</option>
                        <option>Southeast Asia</option>
                        <option>Nordic Region</option>
                    </select>
                    <span
                        class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-outline pointer-events-none">expand_more</span>
                </div>
            </div>
            <div class="flex-1 w-full space-y-2">
                <label class="font-label text-xs font-semibold text-on-surface uppercase tracking-wider">Date
                    Range</label>
                <div class="relative">
                    <select
                        class="w-full bg-surface-container-lowest border-outline text-on-surface p-3 pr-10 appearance-none focus:border-primary focus:ring-0 rounded-none font-body text-sm">
                        <option>Q3 2023 (Jul - Sep)</option>
                        <option>Q2 2023 (Apr - Jun)</option>
                        <option>YTD 2023</option>
                        <option>Custom Range...</option>
                    </select>
                    <span
                        class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-outline pointer-events-none">calendar_month</span>
                </div>
            </div>
            <div class="flex-1 w-full space-y-2">
                <label class="font-label text-xs font-semibold text-on-surface uppercase tracking-wider">Report
                    Type</label>
                <div class="relative">
                    <select
                        class="w-full bg-surface-container-lowest border-outline text-on-surface p-3 pr-10 appearance-none focus:border-primary focus:ring-0 rounded-none font-body text-sm">
                        <option>Comprehensive Impact</option>
                        <option>Carbon Audit Only</option>
                        <option>Local Economy Impact</option>
                    </select>
                    <span
                        class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-outline pointer-events-none">summarize</span>
                </div>
            </div>
            <button
                class="bg-surface-container-high text-on-surface px-6 py-3 font-label font-medium text-sm hover:bg-surface-variant transition-colors border border-outline-variant h-[46px] w-full md:w-auto">
                Apply Filters
            </button>
        </div>
        <!-- Bento Grid Data Workspace -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <!-- Hero Metric Card (Glassmorphism / Tonal) -->
            <div
                class="lg:col-span-8 bg-surface-container relative p-8 md:p-12 overflow-hidden flex flex-col justify-between min-h-[360px]">
                <!-- Decorative subtle texture -->
                <div
                    class="absolute inset-0 bg-gradient-to-br from-primary-container/10 to-transparent z-0 pointer-events-none">
                </div>
                <div
                    class="absolute -right-20 -top-20 w-96 h-96 bg-primary-fixed opacity-20 blur-3xl z-0 pointer-events-none">
                </div>
                <div class="relative z-10 mb-8">
                    <div
                        class="bg-tertiary-container text-on-tertiary-container inline-flex items-center gap-2 px-3 py-1 mb-6">
                        <span class="material-symbols-outlined text-[16px]">eco</span>
                        <span class="font-label text-xs font-bold uppercase tracking-widest">Global Metric</span>
                    </div>
                    <h3 class="font-headline text-3xl font-bold text-on-surface">Total Carbon Offset Achieved</h3>
                    <p class="font-body text-on-surface-variant mt-2 max-w-md">Aggregated across all registered partner
                        tours and verified auditor submissions for the selected period.</p>
                </div>
                <div class="relative z-10 flex items-end gap-6">
                    <span
                        class="font-headline text-6xl md:text-[5rem] leading-none font-black text-primary tracking-tighter">14,280</span>
                    <span class="font-body text-xl font-medium text-on-surface-variant mb-2">Metric Tons</span>
                </div>
            </div>
            <!-- Secondary Metric Stack -->
            <div class="lg:col-span-4 flex flex-col gap-8">
                <!-- Data Card 1 -->
                <div class="bg-surface-container p-6 flex-1 flex flex-col justify-between">
                    <div class="flex justify-between items-start mb-6">
                        <h4 class="font-headline text-lg font-bold text-on-surface">Community Reinvestment</h4>
                        <span class="material-symbols-outlined text-secondary">payments</span>
                    </div>
                    <div>
                        <div class="font-headline text-3xl font-bold text-secondary mb-1">$2.4M</div>
                        <div class="font-label text-xs font-medium text-on-surface-variant flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px] text-primary">trending_up</span>
                            +12% vs last quarter
                        </div>
                    </div>
                </div>
                <!-- Data Card 2 -->
                <div
                    class="bg-surface-container-high p-6 flex-1 flex flex-col justify-between border-l-4 border-primary">
                    <div class="flex justify-between items-start mb-6">
                        <h4 class="font-headline text-lg font-bold text-on-surface">Verification Status</h4>
                        <span class="material-symbols-outlined text-primary">verified</span>
                    </div>
                    <div>
                        <div class="font-headline text-3xl font-bold text-primary mb-1">94%</div>
                        <div class="font-label text-xs font-medium text-on-surface-variant">Tours audited within 90 days
                        </div>
                    </div>
                </div>
            </div>
            <!-- Detailed Breakdown Table Area -->
            <div class="lg:col-span-12 mt-4">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="font-headline text-2xl font-bold text-on-surface">Regional Breakdown</h3>
                    <button
                        class="text-primary hover:text-primary-container font-label text-sm font-semibold flex items-center gap-1 transition-colors">
                        Download CSV
                        <span class="material-symbols-outlined text-[18px]">download</span>
                    </button>
                </div>
                <div class="bg-surface-container overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-surface-container-high border-b border-surface-variant/50">
                                <th class="p-4 font-label text-xs font-bold text-on-surface uppercase tracking-wider">
                                    Region</th>
                                <th class="p-4 font-label text-xs font-bold text-on-surface uppercase tracking-wider">
                                    Active Tours</th>
                                <th class="p-4 font-label text-xs font-bold text-on-surface uppercase tracking-wider">
                                    CO2 Offset (Tons)</th>
                                <th class="p-4 font-label text-xs font-bold text-on-surface uppercase tracking-wider">
                                    Local Impact Rating</th>
                                <th
                                    class="p-4 font-label text-xs font-bold text-on-surface uppercase tracking-wider text-right">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="font-body text-sm">
                            <tr
                                class="border-b border-surface-variant/50 hover:bg-surface-container-low transition-colors">
                                <td class="p-4 font-medium text-on-surface">South America (Amazonas)</td>
                                <td class="p-4 text-on-surface-variant">142</td>
                                <td class="p-4 text-on-surface-variant">5,230</td>
                                <td class="p-4">
                                    <div class="flex items-center gap-1 text-primary">
                                        <span class="material-symbols-outlined text-[16px]"
                                            data-weight="fill">eco</span>
                                        <span class="material-symbols-outlined text-[16px]"
                                            data-weight="fill">eco</span>
                                        <span class="material-symbols-outlined text-[16px]"
                                            data-weight="fill">eco</span>
                                        <span class="material-symbols-outlined text-[16px]"
                                            data-weight="fill">eco</span>
                                        <span class="material-symbols-outlined text-[16px] text-outline-variant/40"
                                            data-weight="fill">eco</span>
                                    </div>
                                </td>
                                <td class="p-4 text-right">
                                    <button class="text-outline hover:text-primary transition-colors">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </button>
                                </td>
                            </tr>
                            <tr
                                class="border-b border-surface-variant/50 hover:bg-surface-container-low transition-colors bg-surface-container-lowest">
                                <td class="p-4 font-medium text-on-surface">Southeast Asia</td>
                                <td class="p-4 text-on-surface-variant">89</td>
                                <td class="p-4 text-on-surface-variant">3,105</td>
                                <td class="p-4">
                                    <div class="flex items-center gap-1 text-primary">
                                        <span class="material-symbols-outlined text-[16px]"
                                            data-weight="fill">eco</span>
                                        <span class="material-symbols-outlined text-[16px]"
                                            data-weight="fill">eco</span>
                                        <span class="material-symbols-outlined text-[16px]"
                                            data-weight="fill">eco</span>
                                        <span class="material-symbols-outlined text-[16px] text-outline-variant/40"
                                            data-weight="fill">eco</span>
                                        <span class="material-symbols-outlined text-[16px] text-outline-variant/40"
                                            data-weight="fill">eco</span>
                                    </div>
                                </td>
                                <td class="p-4 text-right">
                                    <button class="text-outline hover:text-primary transition-colors">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </button>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface-container-low transition-colors">
                                <td class="p-4 font-medium text-on-surface">Nordic Region</td>
                                <td class="p-4 text-on-surface-variant">56</td>
                                <td class="p-4 text-on-surface-variant">2,840</td>
                                <td class="p-4">
                                    <div class="flex items-center gap-1 text-primary">
                                        <span class="material-symbols-outlined text-[16px]"
                                            data-weight="fill">eco</span>
                                        <span class="material-symbols-outlined text-[16px]"
                                            data-weight="fill">eco</span>
                                        <span class="material-symbols-outlined text-[16px]"
                                            data-weight="fill">eco</span>
                                        <span class="material-symbols-outlined text-[16px]"
                                            data-weight="fill">eco</span>
                                        <span class="material-symbols-outlined text-[16px]"
                                            data-weight="fill">eco</span>
                                    </div>
                                </td>
                                <td class="p-4 text-right">
                                    <button class="text-outline hover:text-primary transition-colors">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="h-24"></div> <!-- Bottom spacing -->
    </main>
</body>

</html>