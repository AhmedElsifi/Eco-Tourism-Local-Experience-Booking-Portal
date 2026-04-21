<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tour Assessment Detail</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Manrope:wght@400;500;600;700;800&amp;display=swap"
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
                    colors: {
                        "tertiary": "#392d13",
                        "inverse-surface": "#2e312e",
                        "on-tertiary-fixed-variant": "#534529",
                        "on-primary": "#ffffff",
                        "secondary-fixed": "#ffddb6",
                        "on-primary-fixed-variant": "#2f4d39",
                        "on-tertiary-fixed": "#241a03",
                        "on-primary-container": "#99baa1",
                        "surface-container-low": "#f3f4ef",
                        "surface-variant": "#e1e3de",
                        "on-secondary-fixed-variant": "#5c421f",
                        "surface-tint": "#466550",
                        "on-error": "#ffffff",
                        "surface-dim": "#d9dbd6",
                        "tertiary-fixed": "#f5e0ba",
                        "tertiary-fixed-dim": "#d8c49f",
                        "on-surface-variant": "#424843",
                        "on-primary-fixed": "#022110",
                        "secondary-container": "#fed6a7",
                        "on-secondary": "#ffffff",
                        "outline": "#727972",
                        "tertiary-container": "#504327",
                        "surface-container-high": "#e7e9e4",
                        "primary-fixed": "#c8ebd0",
                        "secondary-fixed-dim": "#e6c093",
                        "surface-container-highest": "#e1e3de",
                        "outline-variant": "#c2c8c0",
                        "surface-bright": "#f8faf5",
                        "primary-container": "#2d4b37",
                        "on-secondary-fixed": "#2a1800",
                        "background": "#f8faf5",
                        "surface-container-lowest": "#ffffff",
                        "error-container": "#ffdad6",
                        "on-background": "#191c19",
                        "secondary": "#765934",
                        "primary": "#163422",
                        "on-surface": "#191c19",
                        "on-error-container": "#93000a",
                        "inverse-on-surface": "#f0f1ec",
                        "error": "#ba1a1a",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-container": "#c3b08c",
                        "surface": "#f8faf5",
                        "surface-container": "#edeee9",
                        "on-secondary-container": "#795b36",
                        "primary-fixed-dim": "#adcfb4",
                        "inverse-primary": "#adcfb4"
                    },
                    borderRadius: {
                        "DEFAULT": "0px",
                        "sm": "0px",
                        "md": "0px",
                        "lg": "0px",
                        "xl": "0px",
                        "2xl": "0px",
                        "3xl": "0px",
                        "full": "0px"
                    },
                    fontFamily: {
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

        .material-symbols-outlined.fill-icon {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .ghost-border {
            outline: 1px solid theme('colors.outline-variant');
            outline-color: rgba(194, 200, 192, 0.15);
        }
    </style>
</head>

<body class="bg-background text-on-background font-body antialiased flex h-screen overflow-hidden">
    <!-- Side Navigation Shell -->
    <nav
        class="hidden md:flex fixed left-0 top-0 h-full flex-col bg-surface-bright dark:bg-stone-950 text-primary dark:text-[#f8faf5] font-headline tracking-tight w-64 rounded-none border-r-0 shadow-none z-50">
        <div class="p-6 pb-8 bg-surface-container-lowest flex items-center space-x-3 mb-4">
            <div class="w-10 h-10 bg-primary flex items-center justify-center text-on-primary font-bold text-xl">
                E
            </div>
            <div>
                <h1 class="text-xl font-bold text-primary dark:text-[#f8faf5] leading-tight">EcoPortal Auditor</h1>
                <p class="text-xs text-on-surface-variant">Regional Oversight</p>
            </div>
        </div>
        <div class="flex-1 flex flex-col px-3 space-y-2">
            <a class="flex items-center space-x-3 px-4 py-3 text-secondary dark:text-stone-400 opacity-80 hover:bg-surface-container-high dark:hover:bg-stone-800 transition-colors duration-200 active:scale-[0.98]"
                href="auditor_command_dashboard.php">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-medium text-sm">Dashboard</span>
            </a>
            <a class="flex items-center space-x-3 px-4 py-3 bg-surface-container dark:bg-stone-800 text-primary dark:text-white font-bold border-l-4 border-primary transition-colors duration-200 active:scale-[0.98]"
                href="tours_review_queue.php">
                <span class="material-symbols-outlined fill" data-icon="fact_check">fact_check</span>
                <span class="font-medium text-sm">Review Tours</span>
            </a>
        </div>
        <div class="p-4 mt-auto border-t-0 bg-surface-container dark:bg-stone-900">
            <a class="flex items-center space-x-3 px-4 py-3 text-secondary dark:text-stone-400 opacity-80 hover:bg-surface-container-high dark:hover:bg-stone-800 transition-colors duration-200 active:scale-[0.98]"
                href="../../../index.php">
                <span class="material-symbols-outlined" data-icon="logout">logout</span>
                <span class="font-medium text-sm">Logout</span>
            </a>
        </div>
    </nav>
    <!-- Main Content Canvas -->
    <main class="flex-1 ml-64 h-full overflow-y-auto bg-surface-bright pb-24">
        <!-- Header Section -->
        <header
            class="pt-12 px-12 pb-8 flex justify-between items-end bg-surface-container-low shadow-[0px_20px_40px_rgba(25,28,25,0.06)] relative z-10">
            <div>
                <div class="flex items-center gap-2 mb-2">
                    <span
                        class="px-2 py-1 bg-tertiary-container text-on-tertiary-container text-xs font-label uppercase tracking-wider font-semibold">EXP-9021</span>
                    <span
                        class="px-2 py-1 bg-surface-variant text-on-surface-variant text-xs font-label uppercase tracking-wider font-semibold flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">location_on</span> Manaus
                    </span>
                    <span
                        class="px-2 py-1 bg-secondary-container text-on-secondary-container text-xs font-label uppercase tracking-wider font-semibold flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">pending_actions</span> Pending Review
                    </span>
                </div>
                <h2 class="font-headline text-5xl font-extrabold tracking-tight text-primary leading-tight">Amazonian
                    Canopy Walk</h2>
            </div>
            <div class="flex gap-4">
                <button
                    class="px-8 py-4 bg-error text-on-error font-label font-bold uppercase tracking-wider hover:bg-[#a01616] transition-colors flex items-center gap-2">
                    <span class="material-symbols-outlined">close</span>
                    Disapprove Tour
                </button>
                <button
                    class="px-8 py-4 bg-primary text-on-primary font-label font-bold uppercase tracking-wider hover:bg-primary-container transition-colors flex items-center gap-2"
                    style="background: linear-gradient(135deg, #163422, #2d4b37);">
                    <span class="material-symbols-outlined">check</span>
                    Approve Tour
                </button>
            </div>
        </header>
        <!-- Content Grid -->
        <div class="p-12 @container">
            <div class="grid grid-cols-1 @4xl:grid-cols-12 gap-8">
                <!-- Left Column: Details & Documents -->
                <div class="@4xl:col-span-7 flex flex-col gap-12">
                    <!-- Hero Image Area (Asymmetric) -->
                    <div class="relative w-full h-[400px] bg-surface-container overflow-hidden ml-[-20px]">
                        <img alt="Dense lush green amazon rainforest canopy viewed from above on a bright sunny day"
                            class="w-full h-full object-cover opacity-90 mix-blend-multiply"
                            data-alt="Dense lush green amazon rainforest canopy viewed from above on a bright sunny day"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA24jpVBx3PA7cIJJoL4En_Z2IAg1VgfRo0YLtrH_Lu7UDBqKrxk7cGZefmTWRzAqA5RaTNcAJOpwDC7rdZkpptUPdMZv5rTjJ7oloYZ6oGMlST4PgE76vbiKO7FhxlGCjf-TtLzbIVkGAPYBp4ncsaKuXoAI5UqxZ9m9hm_iV4f4pV6kJDINR8MT3manOTLbfluN1UxRXKy1ikwZC3gvYkFURkmjD1afqK92iKFFM55_cPofETMczovvPGRuKv6fViCTGbhZza5Wk" />
                    </div>
                    <!-- Certification Documents -->
                    <section class="bg-surface-container p-8">
                        <h3 class="font-headline text-2xl font-bold text-on-surface mb-6 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">folder_open</span>
                            Certification Documents
                        </h3>
                        <div class="flex flex-col gap-4">
                            <div
                                class="bg-surface-container-lowest p-4 flex items-center justify-between hover:bg-surface-container-high transition-colors cursor-pointer ghost-border">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 bg-primary-container text-on-primary-container flex items-center justify-center">
                                        <span class="material-symbols-outlined">description</span>
                                    </div>
                                    <div>
                                        <p class="font-label font-semibold text-on-surface">Local Indigenous Partnership
                                            Agreement.pdf</p>
                                        <p class="font-body text-sm text-on-surface-variant">Uploaded: 12 Oct 2023 • 2.4
                                            MB</p>
                                    </div>
                                </div>
                                <span class="material-symbols-outlined text-outline">download</span>
                            </div>
                            <div
                                class="bg-surface-container-lowest p-4 flex items-center justify-between hover:bg-surface-container-high transition-colors cursor-pointer ghost-border">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 bg-primary-container text-on-primary-container flex items-center justify-center">
                                        <span class="material-symbols-outlined">energy_savings_leaf</span>
                                    </div>
                                    <div>
                                        <p class="font-label font-semibold text-on-surface">Carbon Offset Calculation
                                            Report 2023.pdf</p>
                                        <p class="font-body text-sm text-on-surface-variant">Uploaded: 14 Oct 2023 • 1.1
                                            MB</p>
                                    </div>
                                </div>
                                <span class="material-symbols-outlined text-outline">download</span>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Right Column: Sustainability Score -->
                <div class="@4xl:col-span-5 flex flex-col gap-8 mt-12 @4xl:mt-0">
                    <section class="bg-surface-container-low p-8 h-full">
                        <h3 class="font-headline text-2xl font-bold text-on-surface mb-8">Sustainability Score</h3>
                        <!-- Overall Score -->
                        <div class="flex items-end gap-4 mb-10 pb-10 border-b-2 border-surface-container-highest"
                            style="border-bottom: 2px solid theme('colors.surface-container-highest')">
                            <span class="font-headline text-7xl font-extrabold text-primary leading-none">8.4</span>
                            <span class="font-label text-xl text-on-surface-variant font-medium mb-1">/ 10</span>
                        </div>
                        <!-- Breakdown -->
                        <div class="flex flex-col gap-8">
                            <!-- Metric 1 -->
                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="font-label font-semibold text-on-surface">Ecological Footprint</span>
                                    <span class="font-label font-bold text-primary">9.0</span>
                                </div>
                                <div class="w-full bg-surface-container-highest h-2">
                                    <div class="bg-primary h-2" style="width: 90%;"></div>
                                </div>
                                <p class="font-body text-sm text-on-surface-variant mt-2">Zero-impact walkway
                                    construction verified.</p>
                            </div>
                            <!-- Metric 2 -->
                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="font-label font-semibold text-on-surface">Local Community
                                        Benefit</span>
                                    <span class="font-label font-bold text-primary">8.5</span>
                                </div>
                                <div class="w-full bg-surface-container-highest h-2">
                                    <div class="bg-primary h-2" style="width: 85%;"></div>
                                </div>
                                <p class="font-body text-sm text-on-surface-variant mt-2">70% of staff hired from local
                                    tribes.</p>
                            </div>
                            <!-- Metric 3 -->
                            <div>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="font-label font-semibold text-on-surface">Waste Management</span>
                                    <span class="font-label font-bold text-secondary">6.0</span>
                                </div>
                                <div class="w-full bg-surface-container-highest h-2">
                                    <div class="bg-secondary h-2" style="width: 60%;"></div>
                                </div>
                                <p class="font-body text-sm text-on-surface-variant mt-2">Needs improvement on plastic
                                    water bottle alternatives.</p>
                            </div>
                        </div>
                        <!-- Impact Chips -->
                        <div class="mt-12 flex flex-wrap gap-2">
                            <span
                                class="px-3 py-2 bg-tertiary-container text-on-tertiary-container font-label text-sm font-semibold flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px]">co2</span> CO2 Offset: 45kg/tour
                            </span>
                            <span
                                class="px-3 py-2 bg-tertiary-container text-on-tertiary-container font-label text-sm font-semibold flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px]">water_drop</span> Water Usage:
                                Minimal
                            </span>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
</body>

</html>