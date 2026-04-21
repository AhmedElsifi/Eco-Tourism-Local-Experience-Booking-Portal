<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tour Management - Detail View</title>
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
                        "surface-tint": "#466550",
                        "surface-dim": "#d9dbd6",
                        "secondary-fixed-dim": "#e6c093",
                        "error-container": "#ffdad6",
                        "outline": "#727972",
                        "secondary-container": "#fed6a7",
                        "inverse-on-surface": "#f0f1ec",
                        "on-tertiary-fixed": "#241a03",
                        "error": "#ba1a1a",
                        "on-error": "#ffffff",
                        "on-secondary-container": "#795b36",
                        "on-primary": "#ffffff",
                        "primary": "#163422",
                        "on-secondary": "#ffffff",
                        "tertiary-fixed": "#f5e0ba",
                        "tertiary": "#392d13",
                        "on-tertiary": "#ffffff",
                        "surface-container-high": "#e7e9e4",
                        "outline-variant": "#c2c8c0",
                        "tertiary-container": "#504327",
                        "on-background": "#191c19",
                        "background": "#f8faf5",
                        "surface-variant": "#e1e3de",
                        "tertiary-fixed-dim": "#d8c49f",
                        "on-primary-fixed": "#022110",
                        "surface-bright": "#f8faf5",
                        "primary-fixed-dim": "#adcfb4",
                        "on-primary-container": "#99baa1",
                        "inverse-primary": "#adcfb4",
                        "on-tertiary-fixed-variant": "#534529",
                        "on-tertiary-container": "#c3b08c",
                        "on-surface": "#191c19",
                        "on-secondary-fixed-variant": "#5c421f",
                        "on-error-container": "#93000a",
                        "on-surface-variant": "#424843",
                        "primary-container": "#2d4b37",
                        "primary-fixed": "#c8ebd0",
                        "surface-container": "#edeee9",
                        "surface": "#f8faf5",
                        "on-primary-fixed-variant": "#2f4d39",
                        "surface-container-low": "#f3f4ef",
                        "on-secondary-fixed": "#2a1800",
                        "surface-container-highest": "#e1e3de",
                        "secondary": "#765934",
                        "secondary-fixed": "#ffddb6",
                        "inverse-surface": "#2e312e",
                        "surface-container-lowest": "#ffffff"
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
        h6,
        .font-headline {
            font-family: 'Manrope', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body
    class="bg-background text-on-background min-h-screen antialiased flex selection:bg-primary-container selection:text-on-primary-container">
    <!-- SideNavBar (JSON Derived) -->
    <aside
        class="fixed left-0 top-0 h-full flex flex-col z-40 bg-[#f8faf5] dark:bg-stone-950 rounded-none w-72 border-r border-[#727972]/15 shadow-none">
        <div class="p-6 flex flex-col gap-2">
            <div class="flex items-center gap-3 mb-6">
                <div
                    class="w-10 h-10 bg-primary-container rounded-none flex items-center justify-center overflow-hidden">
                    <span class="material-symbols-outlined text-on-primary-container">nature_people</span>
                </div>
                <div>
                    <h1
                        class="text-2xl font-black tracking-tighter text-[#163422] dark:text-emerald-400 font-headline uppercase">
                        EcoPortal</h1>
                    <p class="text-xs font-medium text-[#2d4b37] dark:text-stone-400 font-label">Certified Guide</p>
                </div>
            </div>
        </div>
        <nav class="flex-1 overflow-y-auto py-4">
            <ul class="flex flex-col font-['Manrope'] font-bold tracking-tight uppercase">
                <li>
                    <a class="bg-[#dbe7dd] dark:bg-stone-700 text-[#2d4b37] font-semibold px-6 py-4 flex items-center gap-4 border-l-4 border-[#2d4b37]"
                        href="guide_dashboard.php">
                        <span class="material-symbols-outlined">grid_view</span>
                        Overview
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="guide_schedule_management.php">
                        <span class="material-symbols-outlined">calendar_today</span>
                        <span>Schedule</span>
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="earnings_payouts.php">
                        <span class="material-symbols-outlined">payments</span>
                        Earnings
                    </a>
                </li>
            </ul>
        </nav>
        <div class="mt-auto border-t border-[#727972]/15 pt-4 pb-6">
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
    </aside>
    <!-- Main Content Canvas -->
    <div class="ml-72 flex-1 flex flex-col min-h-screen bg-surface-bright">
        <!-- Dynamic Content Area -->
        <main class="flex-1 p-12 max-w-[1400px] w-full mx-auto flex flex-col gap-12">
            <!-- Page Header Row -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div class="flex flex-col gap-3">
                    <p class="font-label text-sm text-primary font-bold tracking-widest uppercase">Field Operation •
                        TR-8842</p>
                    <h2
                        class="font-headline text-[3.5rem] leading-[1] tracking-[-0.02em] font-black text-on-background">
                        Nocturnal Canopy Expedition</h2>
                </div>
                <!-- Primary Action -->
                <button
                    class="bg-primary text-on-primary px-8 py-4 font-label font-bold text-sm tracking-wide uppercase hover:bg-primary-container transition-colors rounded-none flex items-center gap-3 shrink-0 group">
                    <span class="material-symbols-outlined group-hover:scale-110 transition-transform">add_notes</span>
                    Add Post-Field Report
                </button>
            </div>
            <!-- Brutalist Info Grid -->
            <div
                class="grid grid-cols-1 lg:grid-cols-12 gap-0 border border-outline-variant/20 shadow-[0px_20px_40px_rgba(25,28,25,0.04)]">
                <!-- Signature Gradient Status Block -->
                <div
                    class="col-span-1 lg:col-span-5 bg-gradient-to-br from-primary to-primary-container p-10 flex flex-col justify-between min-h-[320px]">
                    <div class="flex justify-between items-start">
                        <div
                            class="bg-secondary-container text-on-secondary-container px-4 py-1.5 font-label font-bold text-xs tracking-widest uppercase inline-block">
                            Scheduled
                        </div>
                        <span class="material-symbols-outlined text-on-primary/50 text-[48px]">forest</span>
                    </div>
                    <div class="mt-auto">
                        <p
                            class="font-label text-on-primary-container font-medium text-sm uppercase tracking-widest mb-2">
                            Operation Logistics</p>
                        <p class="font-headline text-3xl font-bold text-on-primary tracking-tight mb-1">Oct 24, 2023</p>
                        <p class="font-label text-on-primary-container font-medium text-lg">18:00 — 22:30 HKT</p>
                    </div>
                </div>
                <!-- Capacity Metric Block -->
                <div
                    class="col-span-1 lg:col-span-3 bg-surface-container-high p-10 flex flex-col justify-center items-start border-t lg:border-t-0 lg:border-l border-outline-variant/20">
                    <p class="font-label text-on-surface-variant font-bold text-sm uppercase tracking-widest mb-6">
                        Capacity Utilization</p>
                    <div class="flex items-baseline gap-2">
                        <span class="font-headline text-[5rem] leading-[0.8] font-black text-primary">8</span>
                        <span class="font-headline text-3xl font-bold text-outline">/ 10</span>
                    </div>
                    <p class="font-label text-on-surface text-sm mt-4 font-medium flex items-center gap-2">
                        <span class="w-2 h-2 bg-primary block rounded-none"></span>
                        Travelers Confirmed
                    </p>
                </div>
                <!-- Contextual Image Block (Asymmetric break) -->
                <div
                    class="col-span-1 lg:col-span-4 bg-surface-container-highest relative overflow-hidden hidden lg:block border-l border-outline-variant/20">
                    <img alt=""
                        class="w-full h-full object-cover mix-blend-luminosity opacity-80 hover:mix-blend-normal hover:opacity-100 transition-all duration-700"
                        data-alt="dense tropical rainforest canopy viewed from above at dusk with deep shadows and vibrant green leaves"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDFir89pa91HXIzrIiLJJ3iQZi2vnXcAEpos8CJh_7LOybQ_Ao2KWla3FzcSMU4ugq1izFqquwVKg4acgb-JETlNz4lkvu0vu7wFBCR8N1x4LSOAuCwuns2CNYie_aGJbdGvrDA5NZuYYyVwbsv4qxVUinLZ7FiZxaVwDPsWb-3Ntk0ZprYq_sdRl_ycbInjxBZzDu8j08Z54XINX5OJknDtV7rw2ls7tqpS3OEkJI3GjBxdiaVzFDmvisJ8ZvBL1xWUfIAFO3Skzk" />
                </div>
            </div>
            <!-- Spacer for "Breath of the landscape" -->
            <div class="h-4"></div>
            <!-- Traveler Roster Section -->
            <div class="flex flex-col gap-6">
                <div class="flex items-center justify-between border-b-4 border-primary pb-4">
                    <h3 class="font-headline text-2xl font-bold text-on-background tracking-tight">Traveler Roster</h3>
                    <p class="font-label text-on-surface-variant text-sm font-medium">8 Profiles Connected</p>
                </div>
                <!-- List Container (No internal lines, only background shifts) -->
                <div class="flex flex-col gap-4">
                    <!-- Roster Row 1 -->
                    <div
                        class="bg-surface-container-lowest p-6 grid grid-cols-1 md:grid-cols-12 gap-6 items-center shadow-sm">
                        <div class="md:col-span-4 flex items-center gap-5">
                            <div class="w-14 h-14 bg-surface-container-high shrink-0">
                                <img alt="" class="w-full h-full object-cover grayscale opacity-80"
                                    data-alt="portrait of a young woman with dark hair in outdoor hiking gear looking confidently off camera"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7XPgFWhqEVfkM4FTfGbe4Bkgrd-EDnP64VfuFtlI-2sHlNlm2sGhhI0LpeDBAF0N1-0O6z744HjeXhZggYY-sMN1CvdGj4UlVqARQBPfRYLSEQ_EHQpf8e6cZTQj3t_N7HyhNhD6cPMmdlyDfR60mDQ2q83QE6x3EKp6OGkN14Me8T7TIVeu7X7t4byaNzGZjzLJ5mQMGq4dLTft-VaOkxxrOW20hJRRllac-hyBwH0UBH3aE_oGucuUfQ7tXgl-0G24kxztHL6Y" />
                            </div>
                            <div>
                                <p class="font-label font-bold text-base text-on-background">Elena Rostova</p>
                                <p class="font-label text-xs text-on-surface-variant mt-0.5 tracking-wider">REF:
                                    BKG-992-A</p>
                            </div>
                        </div>
                        <div class="md:col-span-3">
                            <div
                                class="inline-flex items-center gap-2 bg-primary/10 text-primary px-3 py-1.5 font-label text-sm font-bold">
                                <span class="material-symbols-outlined text-[18px]">how_to_reg</span>
                                Checked In
                            </div>
                        </div>
                        <div class="md:col-span-5 flex flex-wrap gap-2 justify-start md:justify-end">
                            <!-- Impact Chip Example -->
                            <span
                                class="bg-tertiary-container text-on-tertiary-container px-3 py-1 text-xs font-label font-bold uppercase tracking-widest inline-flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[14px]">restaurant</span>
                                Vegan Meal
                            </span>
                            <span
                                class="bg-surface-container text-on-surface-variant px-3 py-1 text-xs font-label font-bold uppercase tracking-widest inline-flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[14px]">translate</span>
                                SPN/ENG
                            </span>
                        </div>
                    </div>
                    <!-- Roster Row 2 -->
                    <div
                        class="bg-surface-container-lowest p-6 grid grid-cols-1 md:grid-cols-12 gap-6 items-center shadow-sm">
                        <div class="md:col-span-4 flex items-center gap-5">
                            <div class="w-14 h-14 bg-surface-container-high shrink-0">
                                <img alt="" class="w-full h-full object-cover grayscale opacity-80"
                                    data-alt="portrait of a middle aged man with short hair wearing a grey fleece jacket against a neutral background"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBSIsPpHbq_80UUG2EfFD4hwKXRU_rWlVoNAi1SningymJ0En_D_7YcQ0ebd4jAQMVT1WvYdZWuyx_h8q3fw_x3cX5S4pQJ6OuOCwI4UrLHgEE15hWLJniqe4ODXCSd9afAbPQkkLf1bWryz_oWICjVnF261yUTtCaUG7q4kVMlsPirbBXOboblR6scyOnONwi4LNolNUSxR0WfqS1hg0A2zizgcL84W_FVNW4qvhlsfDnAu0tcqnE4WlBwuIImVhzl9l3dgUJf3fk" />
                            </div>
                            <div>
                                <p class="font-label font-bold text-base text-on-background">Marcus Thorne</p>
                                <p class="font-label text-xs text-on-surface-variant mt-0.5 tracking-wider">REF:
                                    BKG-992-B</p>
                            </div>
                        </div>
                        <div class="md:col-span-3">
                            <div
                                class="inline-flex items-center gap-2 bg-primary/10 text-primary px-3 py-1.5 font-label text-sm font-bold">
                                <span class="material-symbols-outlined text-[18px]">how_to_reg</span>
                                Checked In
                            </div>
                        </div>
                        <div class="md:col-span-5 flex flex-wrap gap-2 justify-start md:justify-end">
                            <span
                                class="bg-surface-container text-on-surface-variant px-3 py-1 text-xs font-label font-bold uppercase tracking-widest inline-flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[14px]">medical_information</span>
                                Asthma
                            </span>
                        </div>
                    </div>
                    <!-- Roster Row 3 (Pending Status) -->
                    <div
                        class="bg-surface-container p-6 grid grid-cols-1 md:grid-cols-12 gap-6 items-center border-l-4 border-outline-variant/40 opacity-75">
                        <div class="md:col-span-4 flex items-center gap-5">
                            <div
                                class="w-14 h-14 bg-surface-container-highest shrink-0 flex items-center justify-center">
                                <span class="material-symbols-outlined text-outline">person</span>
                            </div>
                            <div>
                                <p class="font-label font-bold text-base text-on-surface-variant">Sarah Jenkins</p>
                                <p class="font-label text-xs text-on-surface-variant mt-0.5 tracking-wider">REF:
                                    BKG-104-A</p>
                            </div>
                        </div>
                        <div class="md:col-span-3">
                            <div
                                class="inline-flex items-center gap-2 text-on-surface-variant px-3 py-1.5 font-label text-sm font-bold">
                                <span class="material-symbols-outlined text-[18px]">schedule</span>
                                Pending Arrival
                            </div>
                        </div>
                        <div class="md:col-span-5 flex flex-wrap gap-2 justify-start md:justify-end">
                            <span
                                class="bg-surface-container-high text-on-surface-variant px-3 py-1 text-xs font-label font-bold uppercase tracking-widest inline-flex items-center gap-1.5">
                                No Requirements
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>