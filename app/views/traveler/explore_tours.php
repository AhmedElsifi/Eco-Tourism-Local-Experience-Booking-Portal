<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tours Browsing - The Earth Architect</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600;700&amp;display=swap"
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
                        "headline": ["Manrope", "sans-serif"],
                        "body": ["Inter", "sans-serif"],
                        "label": ["Inter", "sans-serif"]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8faf5;
            color: #191c19;
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

        .material-symbols-outlined.fill {
            font-variation-settings: 'FILL' 1;
        }

        /* Subtle diffuse shadow for floating elements */
        .shadow-ambient {
            box-shadow: 0px 20px 40px rgba(25, 28, 25, 0.06);
        }

        /* Premium gradient for heroes/ctas */
        .bg-gradient-premium {
            background: linear-gradient(135deg, #163422 0%, #2d4b37 100%);
        }

        /* Zero radius enforced globally */
        * {
            border-radius: 0 !important;
        }

        /* Ghost border for subtle separation */
        .ghost-border {
            outline: 1px solid rgba(194, 200, 192, 0.15);
            outline-offset: -1px;
        }

        /* Hide scrollbar for clean horizontal scrolls */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-surface text-on-surface antialiased min-h-screen flex flex-col md:flex-row">
    <nav
        class="bg-stone-50 dark:bg-stone-950 text-emerald-900 dark:text-emerald-500 font-manrope font-medium tracking-tight h-screen w-64 fixed left-0 top-0 border-r-0 rounded-none flex flex-col py-8 px-4 z-50">
        <div class="mb-12 px-4">
            <h1 class="text-2xl font-bold text-emerald-900 dark:text-emerald-400 tracking-tighter">The Earth Architect
            </h1>
            <p class="text-xs text-stone-600 dark:text-stone-400 mt-1 uppercase tracking-widest font-bold">Eco-Tourism
                Portal</p>
        </div>
        <div class="flex-1 flex flex-col space-y-2">
            <a class="flex items-center gap-4 px-4 py-3 border-l-4 border-transparent text-stone-600 dark:text-stone-400 hover:text-emerald-800 dark:hover:text-emerald-200 hover:bg-stone-200 dark:hover:bg-stone-800 transition-colors duration-200"
                href="traveler_dashboard.php">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a class="flex items-center gap-4 px-4 py-3 text-emerald-900 dark:text-emerald-400 font-bold border-l-4 border-emerald-900 dark:border-emerald-400 bg-stone-200/50 dark:bg-stone-800/50 hover:bg-stone-200 dark:hover:bg-stone-800 transition-colors duration-200 opacity-90 transition-all duration-150"
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
    <!-- Main Content Canvas -->
    <main class="flex-grow pt-24 pb-20 md:pb-12 md:ml-64 px-4 md:px-12 max-w-[1600px] w-full mx-auto">
        <!-- Page Header & Filters Area -->
        <div class="mb-12 flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <h2 class="text-4xl md:text-5xl font-headline font-extrabold text-primary tracking-tight mb-2">Explore
                    Tours</h2>
                <p class="font-body text-on-surface-variant max-w-2xl">Discover verified sustainable experiences. Every
                    tour is vetted for environmental impact and local community support.</p>
            </div>
            <div class="flex gap-4">
                <button
                    class="px-4 py-2 border border-outline flex items-center gap-2 hover:bg-surface-container-low transition-colors text-sm font-label font-medium">
                    <span class="material-symbols-outlined text-[18px]">filter_list</span>
                    Filters
                </button>
                <div class="flex border border-outline">
                    <button
                        class="px-3 py-2 bg-surface-container-highest text-primary flex items-center justify-center">
                        <span class="material-symbols-outlined">grid_view</span>
                    </button>
                    <button
                        class="px-3 py-2 bg-surface-container-lowest text-on-surface-variant hover:bg-surface-container-low transition-colors flex items-center justify-center border-l border-outline">
                        <span class="material-symbols-outlined">view_list</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Featured / Top Pick (Asymmetric Layout) -->
        <section class="mb-16">
            <div
                class="relative bg-surface-container-low p-6 md:p-12 flex flex-col md:flex-row gap-8 items-center ghost-border">
                <div class="w-full md:w-1/2 relative z-10 md:-mr-12 md:mt-12 order-2 md:order-1">
                    <div class="bg-surface-container-lowest p-8 shadow-ambient">
                        <div class="flex items-center gap-2 mb-4">
                            <span
                                class="px-2 py-1 bg-tertiary-container text-on-tertiary-container text-xs font-bold tracking-wider uppercase font-label flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]">eco</span>
                                Top Rated Impact
                            </span>
                            <span class="text-xs font-label text-on-surface-variant flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]">location_on</span>
                                Costa Rica
                            </span>
                        </div>
                        <h3 class="text-3xl font-headline font-bold text-primary mb-4 leading-tight">Cloud Forest Canopy
                            Expedition</h3>
                        <p class="font-body text-sm text-on-surface-variant mb-6 leading-relaxed">Immerse yourself in
                            the Monteverde ecosystem. This carbon-negative trek supports local reforestation efforts and
                            provides exclusive access to suspended walkways above the canopy.</p>
                        <div class="flex items-center gap-1 mb-8">
                            <!-- Eco Leaf Rating -->
                            <span class="material-symbols-outlined fill text-primary">eco</span>
                            <span class="material-symbols-outlined fill text-primary">eco</span>
                            <span class="material-symbols-outlined fill text-primary">eco</span>
                            <span class="material-symbols-outlined fill text-primary">eco</span>
                            <span class="material-symbols-outlined fill text-primary">eco</span>
                            <span class="ml-2 text-sm font-label font-medium text-primary">5.0 Eco-Score</span>
                        </div>
                        <div class="flex items-center justify-between mt-auto pt-6 border-t border-outline-variant/30">
                            <div>
                                <span
                                    class="text-xs font-label text-on-surface-variant uppercase tracking-wider block mb-1">Starting
                                    from</span>
                                <span class="text-xl font-headline font-bold text-primary">$185</span>
                            </div>
                            <button
                                class="bg-primary text-on-primary px-6 py-3 font-label font-medium hover:bg-primary-fixed-dim transition-colors">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full md:w-2/3 h-[400px] md:h-[500px] bg-surface-container-highest overflow-hidden order-1 md:order-2">
                    <img alt="Costa Rica Cloud Forest" class="w-full h-full object-cover"
                        data-alt="dense lush green cloud forest canopy in costa rica with morning mist and dense vegetation"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWJr2ohGUY6UigEykU7yt_mqod4-4V5E_L4RORgIdpKtJLyTQ7hLTMCQbmYaL_AlttbzRX5aKI3aVj7E4BHr_NOhCLWcu7Kq9Ant6P4kP3p-eazY2CvCDTNbvAmyIg733X5FjOEdWEZFaWtWade77qr68AUhQSbHsL_yL6rkLtlMuI-NVxZJSi-Sy_zpIfwnK1NMn9K5knezrLfzXJO6YceF0QFR2w3KejzB26MgY2V4psnKQiJkutQ0_T-6piq4Nz8P8wGLjcCVs" />
                </div>
            </div>
        </section>
        <!-- Grid of Standard Tours -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-12">
            <!-- Tour Card 1 -->
            <article class="flex flex-col bg-surface-container-lowest ghost-border group">
                <div class="relative aspect-[4/5] overflow-hidden bg-surface-container-high">
                    <img alt="Patagonia Trek"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-in-out"
                        data-alt="dramatic jagged peaks of patagonia mountains with golden hour light and rugged terrain"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCuOPiIp9D8nFTem2mIOZRRBtC2bYHTDt3WjyzOHpYLdPRZDTkd2gFDMhLLN8LlLsEgkxZfAZJiK_FsNKMxR7Nv_9zSNgSZHXZmu1A9Ndn8xSTWtqlqknLvVTDx1DWrBN3adN-0HMnB8qrgHaoAtlf68qzEtKa__THQ7s0kbNpWfaPjtae-YT_vPcfe2Gd4pa0kNpd9LvIcsbkrENacsiPgunZNNp-9V4kQT9LQXKFNnv58QD3woW_Ir2QDMqai3OANmx6Xvc-mLXk" />
                    <div
                        class="absolute top-4 left-4 bg-surface-container-lowest/90 backdrop-blur-sm px-2 py-1 flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px] text-primary">eco</span>
                        <span class="text-xs font-bold font-label text-primary">4.8</span>
                    </div>
                </div>
                <div
                    class="p-6 flex flex-col flex-grow bg-surface-container-lowest relative z-10 -mt-8 mx-4 shadow-ambient">
                    <div class="flex items-center gap-1 text-xs font-label text-on-surface-variant mb-2">
                        <span class="material-symbols-outlined text-[14px]">location_on</span>
                        <span>Patagonia, Argentina</span>
                    </div>
                    <h4
                        class="text-xl font-headline font-bold text-on-surface mb-3 group-hover:text-primary transition-colors">
                        Glacial Valley Eco-Trek</h4>
                    <!-- Impact Chips -->
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span
                            class="px-2 py-1 bg-tertiary-container/10 text-tertiary text-[10px] font-bold uppercase tracking-wider font-label">Zero
                            Waste</span>
                        <span
                            class="px-2 py-1 bg-tertiary-container/10 text-tertiary text-[10px] font-bold uppercase tracking-wider font-label">Local
                            Guides</span>
                    </div>
                    <div class="mt-auto flex items-end justify-between">
                        <div class="flex flex-col">
                            <span class="text-sm font-headline font-bold text-primary">$320</span>
                            <span class="text-xs font-label text-on-surface-variant">per person</span>
                        </div>
                        <span
                            class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">arrow_forward</span>
                    </div>
                </div>
            </article>
            <!-- Tour Card 2 -->
            <article class="flex flex-col bg-surface-container-lowest ghost-border group">
                <div class="relative aspect-[4/5] overflow-hidden bg-surface-container-high">
                    <img alt="African Safari"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-in-out"
                        data-alt="wide shot of african savanna with acacia trees and elephants in the distance under a vast sky"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA2Hk95BV98hLdAqwNgkYAOBYche1PkYkW11XrdhsgaqCSKJf1QS3PZyKsm2CfS3CiwDecgrd3lWdBRFm3RCZW-nnuxMOQSLXH0vJkkfmcormc8GuG9Vupy-7W3eneUfGZ_vPYTGRwxbs0yF1V4JDMFkXkR4qQbDy45kF2i0cK3cSgD_iJFdOzSw7wabHbPMjAyRD19Pg99--yyFWLC9RnuqA7gcjssF1YRb5jJ-QFyIABVUHsCWLL2d7CG6bL1LOmRnzF5X1NRZXo" />
                    <div
                        class="absolute top-4 left-4 bg-surface-container-lowest/90 backdrop-blur-sm px-2 py-1 flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px] text-primary">eco</span>
                        <span class="text-xs font-bold font-label text-primary">4.9</span>
                    </div>
                </div>
                <div
                    class="p-6 flex flex-col flex-grow bg-surface-container-lowest relative z-10 -mt-8 mx-4 shadow-ambient">
                    <div class="flex items-center gap-1 text-xs font-label text-on-surface-variant mb-2">
                        <span class="material-symbols-outlined text-[14px]">location_on</span>
                        <span>Serengeti, Tanzania</span>
                    </div>
                    <h4
                        class="text-xl font-headline font-bold text-on-surface mb-3 group-hover:text-primary transition-colors">
                        Conservation Safari</h4>
                    <!-- Impact Chips -->
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span
                            class="px-2 py-1 bg-tertiary-container/10 text-tertiary text-[10px] font-bold uppercase tracking-wider font-label">Wildlife
                            Fund</span>
                        <span
                            class="px-2 py-1 bg-tertiary-container/10 text-tertiary text-[10px] font-bold uppercase tracking-wider font-label">Solar
                            Camp</span>
                    </div>
                    <div class="mt-auto flex items-end justify-between">
                        <div class="flex flex-col">
                            <span class="text-sm font-headline font-bold text-primary">$850</span>
                            <span class="text-xs font-label text-on-surface-variant">per person</span>
                        </div>
                        <span
                            class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">arrow_forward</span>
                    </div>
                </div>
            </article>
            <!-- Tour Card 3 -->
            <article class="flex flex-col bg-surface-container-lowest ghost-border group">
                <div class="relative aspect-[4/5] overflow-hidden bg-surface-container-high">
                    <img alt="Nordic Fjord"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-in-out"
                        data-alt="deep blue nordic fjord surrounded by steep rocky cliffs and moody dramatic skies"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWNkF5sLEv0azaqTRvy-6y_exeWXLaE4YSKgCvcDN153XRhraQDXp-dAx7j8e6fX43pWoO9F7TU3dSWUQJ-UJofnW7CqyVkf5zjsMT-h3P_Bkjzjy6-FCTwq3RSMw3Y-yaCOHqCGiEgGk5P8Bc5eOi7xC9x7crFxA8m2FvIaEqVFYCtc0GqJ4rCX7Ld5SBzfB4YsISddWEp3IBAyV1eruWwnDL1J4UT38MMwL5glXPnnDP4xiq-zbPSCYS1ZWvBfHTawlJ4eus84c" />
                    <div
                        class="absolute top-4 left-4 bg-surface-container-lowest/90 backdrop-blur-sm px-2 py-1 flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px] text-primary">eco</span>
                        <span class="text-xs font-bold font-label text-primary">4.7</span>
                    </div>
                </div>
                <div
                    class="p-6 flex flex-col flex-grow bg-surface-container-lowest relative z-10 -mt-8 mx-4 shadow-ambient">
                    <div class="flex items-center gap-1 text-xs font-label text-on-surface-variant mb-2">
                        <span class="material-symbols-outlined text-[14px]">location_on</span>
                        <span>Bergen, Norway</span>
                    </div>
                    <h4
                        class="text-xl font-headline font-bold text-on-surface mb-3 group-hover:text-primary transition-colors">
                        Electric Fjord Cruise</h4>
                    <!-- Impact Chips -->
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span
                            class="px-2 py-1 bg-tertiary-container/10 text-tertiary text-[10px] font-bold uppercase tracking-wider font-label">Zero
                            Emission</span>
                        <span
                            class="px-2 py-1 bg-tertiary-container/10 text-tertiary text-[10px] font-bold uppercase tracking-wider font-label">Quiet
                            Water</span>
                    </div>
                    <div class="mt-auto flex items-end justify-between">
                        <div class="flex flex-col">
                            <span class="text-sm font-headline font-bold text-primary">$145</span>
                            <span class="text-xs font-label text-on-surface-variant">per person</span>
                        </div>
                        <span
                            class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">arrow_forward</span>
                    </div>
                </div>
            </article>
        </div>
        <!-- Load More -->
        <div class="mt-16 flex justify-center">
            <button
                class="px-8 py-3 border-2 border-primary text-primary font-label font-bold hover:bg-surface-container-low transition-colors">
                Load More Experiences
            </button>
        </div>
    </main>
    <!-- BottomNavBar (Mobile Only) -->
    <nav
        class="md:hidden fixed bottom-0 w-full z-50 bg-surface border-t border-outline-variant/20 shadow-[0_-4px_20px_rgba(0,0,0,0.05)] pb-safe">
        <div class="flex justify-around items-center h-16">
            <a class="flex flex-col items-center justify-center w-full h-full text-on-surface-variant hover:text-primary transition-colors"
                href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="text-[10px] font-label mt-1">Home</span>
            </a>
            <a class="flex flex-col items-center justify-center w-full h-full text-primary font-medium" href="#">
                <span class="material-symbols-outlined fill">explore</span>
                <span class="text-[10px] font-label mt-1">Tours</span>
            </a>
            <a class="flex flex-col items-center justify-center w-full h-full text-on-surface-variant hover:text-primary transition-colors"
                href="#">
                <span class="material-symbols-outlined">event_available</span>
                <span class="text-[10px] font-label mt-1">Bookings</span>
            </a>
            <a class="flex flex-col items-center justify-center w-full h-full text-on-surface-variant hover:text-primary transition-colors"
                href="#">
                <span class="material-symbols-outlined">person</span>
                <span class="text-[10px] font-label mt-1">Profile</span>
            </a>
        </div>
    </nav>
</body>

</html>