<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tour Rating - The Earth Architect</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@400;600;700;800&amp;display=swap"
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
                    fontFamily: {
                        "headline": ["Manrope", "sans-serif"],
                        "body": ["Inter", "sans-serif"],
                        "label": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0px",
                        "lg": "0px",
                        "xl": "0px",
                        "full": "0px"
                    }
                }
            }
        }
    </script>
    <style>
        /* Enforcement of Brutalist constraints */
        * {
            border-radius: 0px !important;
        }

        .eco-gradient {
            background: linear-gradient(135deg, #163422 0%, #2d4b37 100%);
        }

        .ambient-shadow {
            box-shadow: 0px 20px 40px rgba(25, 28, 25, 0.06);
        }
    </style>
</head>

<body class="bg-surface text-on-surface font-body min-h-screen flex selection:bg-primary selection:text-on-primary">
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
    <!-- Main Content Wrapper -->
    <main class="flex-1 md:ml-64 flex flex-col min-h-screen relative bg-surface">
        <!-- Canvas Content -->
        <div class="pt-24 pb-16 px-6 md:px-12 max-w-5xl mx-auto w-full flex-1">
            <!-- Page Header / Context -->
            <div class="mb-12 flex flex-col md:flex-row gap-8 items-start relative">
                <div class="w-full md:w-2/3 bg-surface-container-low p-8 relative z-10 mt-8 md:mt-0">
                    <div
                        class="inline-flex items-center gap-2 bg-tertiary-container text-on-tertiary-container px-3 py-1 mb-6 text-xs font-label uppercase tracking-widest font-bold">
                        <span class="material-symbols-outlined text-[14px]">check_circle</span>
                        Completed Journey
                    </div>
                    <h2
                        class="text-4xl md:text-5xl font-headline font-extrabold text-primary tracking-tighter mb-4 leading-none">
                        Rate Your Experience</h2>
                    <p class="text-xl font-headline text-on-surface-variant font-medium">Cloud Forest Canopy Expedition
                    </p>
                    <p class="text-sm font-body text-outline mt-2">Costa Rica • Oct 12 - Oct 14, 2023</p>
                </div>
                <!-- Asymmetric Image -->
                <div
                    class="w-full md:w-1/3 aspect-[4/5] bg-surface-container hidden md:block relative z-0 md:-ml-16 md:mt-16">
                    <img alt="Cloud forest canopy" class="w-full h-full object-cover"
                        data-alt="lush green cloud forest canopy bridge covered in mist, deep greens, natural light, dense vegetation"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDNGnPV9WS5zlPnBnsEw6TlR8tpplc7Q3ydeScTH6KNub2X66Q7js3ghYtm_cBz645YqEZkE2_7PpeNa7nU7CiQXV6dxFCzcNl8UenVMaPR_5B-rIuZmy97fXnJwhmDnqfNipZ5ryMQfC6FkRSw2E6SM4NYsx8T8jKK_VGL5PQDJe2U6k9t67U_7Ep0zFmkI9rM_v46qIVvFo9OeBd4cZE4iogRxMaLrlE3K1MoD-UijYZgKXsthWD_pz_Rz3MYjFYgT0uL1_4j3nw" />
                </div>
            </div>
            <!-- Rating Form -->
            <form class="space-y-12">
                <!-- Section: Overall -->
                <div class="bg-surface-container p-8 lg:p-12">
                    <h3 class="text-2xl font-headline font-bold text-primary mb-2">Overall Assessment</h3>
                    <p class="text-on-surface-variant text-sm mb-8 max-w-xl">How would you summarize your entire
                        experience with The Earth Architect on this expedition?</p>
                    <div class="flex gap-4">
                        <button class="text-primary hover:text-primary-fixed-dim transition-colors group" type="button">
                            <span class="material-symbols-outlined text-5xl"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                        </button>
                        <button class="text-primary hover:text-primary-fixed-dim transition-colors group" type="button">
                            <span class="material-symbols-outlined text-5xl"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                        </button>
                        <button class="text-primary hover:text-primary-fixed-dim transition-colors group" type="button">
                            <span class="material-symbols-outlined text-5xl"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                        </button>
                        <button class="text-primary hover:text-primary-fixed-dim transition-colors group" type="button">
                            <span class="material-symbols-outlined text-5xl"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                        </button>
                        <button class="text-outline-variant/40 hover:text-primary/50 transition-colors group"
                            type="button">
                            <span class="material-symbols-outlined text-5xl"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                        </button>
                    </div>
                </div>
                <!-- Bento Grid for Dimensions -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Dimension 1 -->
                    <div class="bg-surface-container-low p-8 outline outline-1 outline-outline-variant/20">
                        <div class="flex justify-between items-start mb-6">
                            <h4 class="text-lg font-headline font-bold text-primary">Eco-Friendliness</h4>
                            <span class="material-symbols-outlined text-primary/40">recycling</span>
                        </div>
                        <p class="text-xs text-on-surface-variant mb-6 min-h-[40px]">Did the tour adhere to "Leave No
                            Trace" principles and minimize environmental impact?</p>
                        <div class="flex gap-2">
                            <span class="material-symbols-outlined text-3xl text-primary"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                            <span class="material-symbols-outlined text-3xl text-primary"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                            <span class="material-symbols-outlined text-3xl text-primary"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                            <span class="material-symbols-outlined text-3xl text-primary"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                            <span class="material-symbols-outlined text-3xl text-outline-variant/40"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                        </div>
                    </div>
                    <!-- Dimension 2 -->
                    <div class="bg-surface-container-low p-8 outline outline-1 outline-outline-variant/20">
                        <div class="flex justify-between items-start mb-6">
                            <h4 class="text-lg font-headline font-bold text-primary">Cultural Respect</h4>
                            <span class="material-symbols-outlined text-primary/40">diversity_3</span>
                        </div>
                        <p class="text-xs text-on-surface-variant mb-6 min-h-[40px]">Were local communities engaged
                            authentically and respectfully?</p>
                        <div class="flex gap-2">
                            <span class="material-symbols-outlined text-3xl text-primary"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                            <span class="material-symbols-outlined text-3xl text-primary"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                            <span class="material-symbols-outlined text-3xl text-primary"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                            <span class="material-symbols-outlined text-3xl text-primary"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                            <span class="material-symbols-outlined text-3xl text-primary"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                        </div>
                    </div>
                    <!-- Dimension 3 -->
                    <div
                        class="bg-surface-container-low p-8 outline outline-1 outline-outline-variant/20 md:col-span-2 lg:col-span-1">
                        <div class="flex justify-between items-start mb-6">
                            <h4 class="text-lg font-headline font-bold text-primary">Guide Knowledge</h4>
                            <span class="material-symbols-outlined text-primary/40">menu_book</span>
                        </div>
                        <p class="text-xs text-on-surface-variant mb-6 min-h-[40px]">Did the guide demonstrate deep
                            understanding of the local ecosystem and history?</p>
                        <div class="flex gap-2">
                            <span class="material-symbols-outlined text-3xl text-primary"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                            <span class="material-symbols-outlined text-3xl text-primary"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                            <span class="material-symbols-outlined text-3xl text-primary"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                            <span class="material-symbols-outlined text-3xl text-outline-variant/40"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                            <span class="material-symbols-outlined text-3xl text-outline-variant/40"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                        </div>
                    </div>
                </div>
                <!-- Detailed Feedback -->
                <div class="bg-surface-container-lowest p-8 mt-12 outline outline-1 outline-outline-variant/20">
                    <label class="block text-lg font-headline font-bold text-primary mb-2" for="feedback">Field
                        Notes</label>
                    <p class="text-xs text-on-surface-variant mb-6">Share specific observations that could help future
                        travelers or improve our impact.</p>
                    <textarea
                        class="w-full bg-surface border border-outline text-on-surface font-body p-4 focus:border-primary focus:border-2 focus:ring-0 transition-all resize-none placeholder:text-outline-variant"
                        id="feedback"
                        placeholder="E.g., The guide's explanation of the symbiotic relationship between the fig trees and wasps was exceptional..."
                        rows="6"></textarea>
                </div>
                <!-- Submit Action -->
                <div class="flex justify-end pt-8">
                    <button
                        class="eco-gradient text-on-primary font-headline font-bold uppercase tracking-widest text-sm px-12 py-5 hover:opacity-90 transition-opacity flex items-center gap-3"
                        type="submit">
                        Submit Field Report
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>