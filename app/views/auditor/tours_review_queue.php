<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tours Review - EcoPortal Auditor</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
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
                        "lg": "0px",
                        "xl": "0px",
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
            font-variation-settings: 'FILL' 0;
        }

        .material-symbols-outlined.fill {
            font-variation-settings: 'FILL' 1;
        }
    </style>
</head>

<body class="bg-background text-on-background antialiased flex h-screen overflow-hidden">
    <!-- SideNavBar -->
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
    <main class="flex-1 md:ml-64 bg-surface h-full overflow-y-auto">
        <!-- Header Area -->
        <header class="px-8 py-10 bg-surface-container-lowest sticky top-0 z-40">
            <div class="max-w-7xl mx-auto flex justify-between items-end">
                <div>
                    <h2 class="font-headline text-4xl font-extrabold text-primary tracking-tight mb-2">Pending Audits
                    </h2>
                    <p class="text-on-surface-variant text-sm font-medium">Review and certify regional eco-tourism
                        experiences.</p>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-sm">search</span>
                        <input
                            class="pl-10 pr-4 py-2 bg-surface border border-outline text-sm text-on-surface focus:border-primary focus:ring-0 placeholder-outline-variant w-64 rounded-none transition-colors"
                            placeholder="Search ID or Destination..." type="text" />
                    </div>
                    <button
                        class="bg-surface border border-outline text-primary px-4 py-2 text-sm font-medium hover:bg-surface-container-low transition-colors flex items-center space-x-2">
                        <span class="material-symbols-outlined text-sm">filter_list</span>
                        <span>Filter</span>
                    </button>
                </div>
            </div>
        </header>
        <!-- Content Area -->
        <div class="max-w-7xl mx-auto px-8 py-8">
            <!-- Brutalist Table/List View -->
            <div class="bg-surface-container-low flex flex-col gap-1 w-full">
                <!-- Headers -->
                <div
                    class="grid grid-cols-12 gap-4 px-6 py-4 bg-surface-container-highest text-xs font-bold text-on-surface tracking-wider uppercase">
                    <div class="col-span-3">Destination</div>
                    <div class="col-span-3">Operator / Guide</div>
                    <div class="col-span-2">Tour ID</div>
                    <div class="col-span-2">Sustainability</div>
                    <div class="col-span-2 text-right">Status</div>
                </div>
                <!-- Row 1: Amazonian -->
                <div
                    class="grid grid-cols-12 gap-4 px-6 py-6 bg-surface-container-lowest hover:bg-surface-bright transition-colors items-center group cursor-pointer border-l-4 border-transparent hover:border-primary">
                    <div class="col-span-3 flex flex-col">
                        <span class="font-headline font-bold text-primary text-base leading-tight">Amazonian Canopy
                            Walk</span>
                        <span class="text-xs text-on-surface-variant mt-1">Manaus, Brazil</span>
                    </div>
                    <div class="col-span-3 flex items-center space-x-3">
                        <div class="w-8 h-8 bg-surface-container-high flex items-center justify-center overflow-hidden">
                            <img alt="Guide Avatar"
                                class="w-full h-full object-cover grayscale opacity-80 mix-blend-multiply"
                                data-alt="Close up portrait of a serious male tour guide in a green uniform, natural lighting"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUb1wvwkuK0Glhr4lsyGbbPLzvVHX5kd7b_z8zGKpLyG0mMN2Y2mceVOBQ0NaLteAmn8xwFCsnrVnmn2rOZo-sHwbd6bcu4m1RhNCk88Iu9dIuIN26h2hld16Cx82KjCmw7dgeRaB04O10Wo5FRe-5deqiNpHru3lNbvwjPV6aCkKwBqTowX0OJEyCMFiG_I3W4JzXl_0diFGB29yb_Dzj2JucupTxVHOp850COz82CpKP_iRWW0HkdREoahJ7ikszyi_Lx7jD328" />
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm font-medium text-on-surface">Manaus Eco-Tours</span>
                            <span class="text-xs text-on-surface-variant">Primary Operator</span>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <span
                            class="font-mono text-xs bg-surface-container px-2 py-1 text-on-surface-variant">EXP-9021</span>
                    </div>
                    <div class="col-span-2 flex items-center space-x-1">
                        <span class="text-sm font-bold text-primary">4.2</span>
                        <div class="flex">
                            <span class="material-symbols-outlined text-sm text-primary fill">eco</span>
                            <span class="material-symbols-outlined text-sm text-primary fill">eco</span>
                            <span class="material-symbols-outlined text-sm text-primary fill">eco</span>
                            <span class="material-symbols-outlined text-sm text-primary fill">eco</span>
                            <span class="material-symbols-outlined text-sm text-outline-variant opacity-40">eco</span>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-center">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium bg-surface-container text-on-surface-variant border border-outline-variant/30">
                            <span class="w-1.5 h-1.5 bg-outline mr-1.5"></span>
                            Pending Review
                        </span>
                        <button class="ml-4 text-primary opacity-0 group-hover:opacity-100 transition-opacity">
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </div>
                </div>
                <!-- Row 2: Galapagos -->
                <div
                    class="grid grid-cols-12 gap-4 px-6 py-6 bg-surface-container-lowest hover:bg-surface-bright transition-colors items-center group cursor-pointer border-l-4 border-transparent hover:border-primary">
                    <div class="col-span-3 flex flex-col">
                        <span class="font-headline font-bold text-primary text-base leading-tight">Galapagos Marine
                            Trail</span>
                        <span class="text-xs text-on-surface-variant mt-1">Ecuador</span>
                    </div>
                    <div class="col-span-3 flex items-center space-x-3">
                        <div class="w-8 h-8 bg-surface-container-high flex items-center justify-center overflow-hidden">
                            <img alt="Guide Avatar"
                                class="w-full h-full object-cover grayscale opacity-80 mix-blend-multiply"
                                data-alt="Portrait of a female marine guide wearing sunglasses on her head, bright sunlight"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAs_v5x3lmnZfSlh-nOPgXpiQMRaarnmmQVFS_57XB9eAiA5jZTKVKOPhjvU8TkMIoy074JOX1obVTU9-iQpDmKc3b4CRgkTUSCEgcZjOT3OjYjQQ-i0One1swDWw4SQUbkL1XHe8xYGMSOAgnU1VOK_oVrUzX8O8Kgk9P7R_vdgOz4PpXyR1FYN8fcGemjJo-T0h9FxX4azQP6Olb4iOHTlyFFQ7VWFmGyD9a3BybhV6E5GFSlVOEGTpik1ffsxSNaSto_mlAzAs4" />
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm font-medium text-on-surface">Darwin Guides</span>
                            <span class="text-xs text-on-surface-variant">Certified Agency</span>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <span
                            class="font-mono text-xs bg-surface-container px-2 py-1 text-on-surface-variant">EXP-8842</span>
                    </div>
                    <div class="col-span-2 flex items-center space-x-1">
                        <span class="text-sm font-bold text-primary">4.8</span>
                        <div class="flex">
                            <span class="material-symbols-outlined text-sm text-primary fill">eco</span>
                            <span class="material-symbols-outlined text-sm text-primary fill">eco</span>
                            <span class="material-symbols-outlined text-sm text-primary fill">eco</span>
                            <span class="material-symbols-outlined text-sm text-primary fill">eco</span>
                            <span class="material-symbols-outlined text-sm text-primary fill">eco</span>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-center">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium bg-primary-fixed-dim/20 text-primary border border-primary/20">
                            <span class="w-1.5 h-1.5 bg-primary mr-1.5"></span>
                            Approved
                        </span>
                        <button class="ml-4 text-primary opacity-0 group-hover:opacity-100 transition-opacity">
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </div>
                </div>
                <!-- Row 3: Andean -->
                <div
                    class="grid grid-cols-12 gap-4 px-6 py-6 bg-surface-container-lowest hover:bg-surface-bright transition-colors items-center group cursor-pointer border-l-4 border-transparent hover:border-primary">
                    <div class="col-span-3 flex flex-col">
                        <span class="font-headline font-bold text-primary text-base leading-tight">Andean Ridge
                            Trek</span>
                        <span class="text-xs text-on-surface-variant mt-1">Peru</span>
                    </div>
                    <div class="col-span-3 flex items-center space-x-3">
                        <div
                            class="w-8 h-8 bg-surface-container-high flex items-center justify-center text-primary font-bold text-xs">
                            MV
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm font-medium text-on-surface">Mateo Vargas</span>
                            <span class="text-xs text-on-surface-variant">Independent Guide</span>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <span
                            class="font-mono text-xs bg-surface-container px-2 py-1 text-on-surface-variant">EXP-742A</span>
                    </div>
                    <div class="col-span-2 flex items-center space-x-1">
                        <span class="text-sm font-bold text-secondary">3.1</span>
                        <div class="flex">
                            <span class="material-symbols-outlined text-sm text-secondary fill">eco</span>
                            <span class="material-symbols-outlined text-sm text-secondary fill">eco</span>
                            <span class="material-symbols-outlined text-sm text-secondary fill">eco</span>
                            <span class="material-symbols-outlined text-sm text-outline-variant opacity-40">eco</span>
                            <span class="material-symbols-outlined text-sm text-outline-variant opacity-40">eco</span>
                        </div>
                    </div>
                    <div class="col-span-2 flex justify-end items-center">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium bg-error-container text-on-error-container border border-error/20">
                            <span class="w-1.5 h-1.5 bg-error mr-1.5"></span>
                            Disapproved
                        </span>
                        <button class="ml-4 text-primary opacity-0 group-hover:opacity-100 transition-opacity">
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>