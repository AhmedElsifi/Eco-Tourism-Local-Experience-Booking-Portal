<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>The Earth Architect - Traveler Dashboard</title>
    <!-- Google Fonts: Manrope (Display) & Inter (Body) -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Manrope:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Tailwind Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface": "#f8faf5",
                        "on-primary-container": "#99baa1",
                        "primary-fixed-dim": "#adcfb4",
                        "surface-dim": "#d9dbd6",
                        "primary-container": "#2d4b37",
                        "tertiary-fixed": "#f5e0ba",
                        "error-container": "#ffdad6",
                        "inverse-surface": "#2e312e",
                        "background": "#f8faf5",
                        "secondary": "#765934",
                        "on-tertiary-fixed-variant": "#534529",
                        "secondary-fixed-dim": "#e6c093",
                        "outline-variant": "#c2c8c0",
                        "inverse-primary": "#adcfb4",
                        "on-error": "#ffffff",
                        "surface-bright": "#f8faf5",
                        "surface-container-lowest": "#ffffff",
                        "on-primary-fixed": "#022110",
                        "on-error-container": "#93000a",
                        "surface-tint": "#466550",
                        "primary-fixed": "#c8ebd0",
                        "on-surface": "#191c19",
                        "on-tertiary-container": "#c3b08c",
                        "on-primary-fixed-variant": "#2f4d39",
                        "inverse-on-surface": "#f0f1ec",
                        "tertiary-container": "#504327",
                        "on-tertiary-fixed": "#241a03",
                        "surface-variant": "#e1e3de",
                        "on-surface-variant": "#424843",
                        "error": "#ba1a1a",
                        "on-secondary-container": "#795b36",
                        "on-primary": "#ffffff",
                        "on-background": "#191c19",
                        "tertiary-fixed-dim": "#d8c49f",
                        "tertiary": "#392d13",
                        "outline": "#727972",
                        "on-secondary-fixed-variant": "#5c421f",
                        "on-secondary": "#ffffff",
                        "surface-container-highest": "#e1e3de",
                        "surface-container-high": "#e7e9e4",
                        "secondary-fixed": "#ffddb6",
                        "primary": "#163422",
                        "secondary-container": "#fed6a7",
                        "surface-container-low": "#f3f4ef",
                        "on-tertiary": "#ffffff",
                        "on-secondary-fixed": "#2a1800",
                        "surface-container": "#edeee9"
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
        /* Base typography defaults based on design system */
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

        /* Enforce absolute zero radius globally as a fallback */
        * {
            border-radius: 0 !important;
        }
    </style>
</head>

<body class="bg-surface text-on-surface antialiased min-h-screen">
    <nav
        class="bg-stone-50 dark:bg-stone-950 text-emerald-900 dark:text-emerald-500 font-manrope font-medium tracking-tight h-screen w-64 fixed left-0 top-0 border-r-0 rounded-none flex flex-col py-8 px-4 z-50">
        <div class="mb-12 px-4">
            <h1 class="text-2xl font-bold text-emerald-900 dark:text-emerald-400 tracking-tighter">The Earth Architect
            </h1>
            <p class="text-xs text-stone-600 dark:text-stone-400 mt-1 uppercase tracking-widest font-bold">Eco-Tourism
                Portal</p>
        </div>
        <div class="flex-1 flex flex-col space-y-2">
            <a class="flex items-center gap-4 px-4 py-3 text-emerald-900 dark:text-emerald-400 font-bold border-l-4 border-emerald-900 dark:border-emerald-400 bg-stone-200/50 dark:bg-stone-800/50 hover:bg-stone-200 dark:hover:bg-stone-800 transition-colors duration-200 opacity-90 transition-all duration-150"
                href="traveler_dashboard.php">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 border-l-4 border-transparent text-stone-600 dark:text-stone-400 hover:text-emerald-800 dark:hover:text-emerald-200 hover:bg-stone-200 dark:hover:bg-stone-800 transition-colors duration-200"
                href="explore_tours.php">
                <span class="material-symbols-outlined" data-icon="explore">explore</span>
                <span>Tours</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 border-l-4 border-transparent text-stone-600 dark:text-stone-400 hover:text-emerald-800 dark:hover:text-emerald-200 hover:bg-stone-200 dark:hover:bg-stone-800 transition-colors duration-200"
                href="messages.php">
                <span class="material-symbols-outlined" data-icon="chat">chat</span>
                <span>Chat</span>
            </a>
        </div>
        <div class="mt-auto px-4">
            <button
                class="w-full bg-emerald-900 text-stone-50 py-3 font-bold hover:bg-emerald-800 transition-colors duration-200 focus:ring-2 focus:ring-emerald-900 dark:focus:ring-emerald-400 outline-none">
                Logout
            </button>
        </div>
    </nav>
    <main class="ml-64 mt-16 p-10 lg:p-14 max-w-7xl mx-auto">
        <!-- Welcome Section -->
        <div class="mb-12 flex justify-between items-end">
            <div>
                <h2 class="font-headline text-5xl font-extrabold tracking-tight text-on-surface mb-2">Welcome, Traveler
                    Name</h2>
                <p class="font-body text-lg text-on-surface-variant font-medium">Ready to explore the world?</p>
            </div>
            <!-- Quick Stat Block (Asymmetric Brutalist accent) -->
            <div
                class="bg-primary text-on-primary p-6 w-64 shadow-[0px_20px_40px_rgba(25,28,25,0.06)] relative overflow-hidden">
                <div class="absolute -right-4 -top-4 opacity-10">
                    <span class="material-symbols-outlined text-8xl" data-icon="public">public</span>
                </div>
                <p class="font-label text-xs uppercase tracking-widest text-primary-fixed-dim mb-1">Impact Status</p>
                <p class="font-headline text-3xl font-bold">142kg</p>
                <p class="font-body text-sm mt-1">CO2 Offset YTD</p>
            </div>
        </div>
        <!-- Section Hierarchy Gap -->
        <div class="h-8"></div>
        <!-- Bookings Section Header -->
        <div class="mb-6 flex justify-between items-center">
            <h3 class="font-headline text-2xl font-bold text-on-surface">Your Expeditions</h3>
        </div>
        <!-- 
            Bookings Data Structure 
            Using Tonal Layering and Grid instead of traditional <table> to adhere to "No-Line" rule
        -->
        <div class="bg-surface-container-low p-8 shadow-[0px_20px_40px_rgba(25,28,25,0.06)]">
            <!-- Header Row -->
            <div
                class="grid grid-cols-12 gap-4 pb-4 text-xs font-bold uppercase tracking-wider text-on-surface-variant">
                <div class="col-span-2">Booking ID</div>
                <div class="col-span-4">Tour Name</div>
                <div class="col-span-3">Guide Name</div>
                <div class="col-span-2">Sustainability Score</div>
                <div class="col-span-1 text-right">Status</div>
            </div>
            <!-- Data Row 1: Scheduled -->
            <div
                class="grid grid-cols-12 gap-4 items-center py-5 px-4 bg-surface-container-lowest mt-2 hover:bg-surface-container transition-colors group">
                <div class="col-span-2 font-label text-sm text-outline font-mono">#EA-992A</div>
                <div
                    class="col-span-4 font-headline font-bold text-base text-on-surface group-hover:text-primary transition-colors">
                    Patagonia Glacier Trek</div>
                <div class="col-span-3 flex items-center gap-3">
                    <div class="h-8 w-8 bg-surface-dim overflow-hidden">
                        <img alt="Guide Avatar"
                            class="w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 transition-all"
                            data-alt="portrait of smiling rugged outdoor guide in green jacket"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCMixk9viO23ZvH2bCsWaYDYswWn5fVM7kpCeNJ5FTgRS0KnxS8IdOIKkZNJViPFpFGy3sP0s4Xt0bRrHLuDOioSbBtaegh_UtNIT5xE-MLvVG5MiysxlfQSx-m6bi1XKC8ESo1EkdOSRVSYtU_Rz7CU_85zp8d9ystn-02-cFhXx-pgVwEJ3PYaFIky5Isch49MfpsDhTbTpDpRNnPJLIvZpkXmPQ706V4RIRk9X5AarIyOrmnaLnJST26PhUmTByRgd5El9w0J2A" />
                    </div>
                    <span class="font-body text-sm text-on-surface">Mateo R.</span>
                </div>
                <div class="col-span-2">
                    <div
                        class="inline-flex items-center gap-1 bg-tertiary-container text-on-tertiary-container px-2 py-1 text-xs font-bold">
                        <span class="material-symbols-outlined text-sm" data-icon="eco" data-weight="fill"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        Tier 1
                    </div>
                </div>
                <div class="col-span-1 text-right flex justify-end">
                    <div
                        class="bg-primary-container text-on-primary-container text-xs font-bold px-3 py-1 text-center w-24">
                        Scheduled
                    </div>
                </div>
            </div>
            <!-- Data Row 2: Waitlist -->
            <div
                class="grid grid-cols-12 gap-4 items-center py-5 px-4 bg-surface-container-lowest mt-3 hover:bg-surface-container transition-colors group">
                <div class="col-span-2 font-label text-sm text-outline font-mono">#EA-441B</div>
                <div
                    class="col-span-4 font-headline font-bold text-base text-on-surface group-hover:text-primary transition-colors">
                    Costa Rica Canopy Study</div>
                <div class="col-span-3 flex items-center gap-3">
                    <div class="h-8 w-8 bg-surface-dim overflow-hidden">
                        <img alt="Guide Avatar"
                            class="w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 transition-all"
                            data-alt="portrait of female field researcher in natural jungle lighting"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCMNvYVPaojUM-kDN9vovTBFX5hCl15rQpxK6WTCEJgtoWj_xFGre3-QIL8EsAfbzs-ecwFP9odf7wC6eIovNKL17L_miZ5guR_9TiIJOIlXUkGgF5bbuLkrt3JZLzOMWLF-r2PO47fWX1X1fL4K01u2HsxtClbfYOPhnQ9feCI2wJsYeDpXAOa0VgS3sQeOh604512m77y-m0S6DNsZgt0J2hTgrgKc_ToJFyHwOgKhbWmIE1AtLy8IjXn48QrAsdNj3HDKA654rc" />
                    </div>
                    <span class="font-body text-sm text-on-surface">Elena G.</span>
                </div>
                <div class="col-span-2">
                    <div
                        class="inline-flex items-center gap-1 bg-tertiary-container/50 text-on-tertiary-container px-2 py-1 text-xs font-bold">
                        <span class="material-symbols-outlined text-sm" data-icon="eco">eco</span>
                        Tier 2
                    </div>
                </div>
                <div class="col-span-1 text-right flex justify-end">
                    <div
                        class="bg-secondary-container text-on-secondary-container text-xs font-bold px-3 py-1 text-center w-24">
                        Waitlist
                    </div>
                </div>
            </div>
            <!-- Data Row 3: Finished -->
            <div
                class="grid grid-cols-12 gap-4 items-center py-5 px-4 bg-surface-container-lowest mt-3 hover:bg-surface-container transition-colors group opacity-75 hover:opacity-100">
                <div class="col-span-2 font-label text-sm text-outline font-mono">#EA-118C</div>
                <div
                    class="col-span-4 font-headline font-bold text-base text-on-surface group-hover:text-primary transition-colors">
                    Icelandic Geo-Thermal Tour</div>
                <div class="col-span-3 flex items-center gap-3">
                    <div class="h-8 w-8 bg-surface-dim overflow-hidden">
                        <img alt="Guide Avatar"
                            class="w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 transition-all"
                            data-alt="portrait of male guide with beard in cold dramatic lighting"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCuSROl8QGX8IT4CnP5nApX2mCdRmHgqZ0cxc2x-L1CvneRNzmR-4heR0lmylXS-mOoJFlTeCu_YifMr9XVtgqWgZXQRWP-RKTSaUWi1GKCgeHDxDPjdaDnDcBzVGR-64XDj338P1kg_J0qIUhtmZOI1f72U2iJNuLJecEQl0dsnpgY7xZhN6K95TLkqgb2xlHbBZl3KFgPGGtFtboCF7DwdCKCF4QVoRR8J_G-PAeiP1-d_dgkf4EIyeNjTOjH7_BxXZfgCXR7k-s" />
                    </div>
                    <span class="font-body text-sm text-on-surface">Lars V.</span>
                </div>
                <div class="col-span-2">
                    <div
                        class="inline-flex items-center gap-1 bg-tertiary-container text-on-tertiary-container px-2 py-1 text-xs font-bold">
                        <span class="material-symbols-outlined text-sm" data-icon="eco" data-weight="fill"
                            style="font-variation-settings: 'FILL' 1;">eco</span>
                        Tier 1
                    </div>
                </div>
                <div class="col-span-1 text-right flex justify-end">
                    <div
                        class="bg-surface-variant text-on-surface-variant text-xs font-bold px-3 py-1 text-center w-24">
                        Finished
                    </div>
                </div>
            </div>
            <!-- Data Row 4: Cancelled -->
            <div
                class="grid grid-cols-12 gap-4 items-center py-5 px-4 bg-surface-container-lowest mt-3 hover:bg-surface-container transition-colors group opacity-60">
                <div class="col-span-2 font-label text-sm text-outline font-mono line-through">#EA-880D</div>
                <div class="col-span-4 font-headline font-bold text-base text-on-surface transition-colors">Swiss Alps
                    Rewilding</div>
                <div class="col-span-3 flex items-center gap-3">
                    <div class="h-8 w-8 bg-surface-dim overflow-hidden flex items-center justify-center text-outline">
                        <span class="material-symbols-outlined text-sm" data-icon="person_off">person_off</span>
                    </div>
                    <span class="font-body text-sm text-on-surface italic text-outline">Unassigned</span>
                </div>
                <div class="col-span-2">
                    <div
                        class="inline-flex items-center gap-1 text-outline px-2 py-1 text-xs font-bold border border-outline-variant/30">
                        N/A
                    </div>
                </div>
                <div class="col-span-1 text-right flex justify-end">
                    <div
                        class="bg-error-container text-on-error-container text-xs font-bold px-3 py-1 text-center w-24">
                        Cancelled
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>