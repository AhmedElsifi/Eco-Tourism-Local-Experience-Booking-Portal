<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>The Earth Architect - Tour Detail</title>
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
                        "DEFAULT": "0rem",
                        "lg": "0rem",
                        "xl": "0rem",
                        "full": "0rem"
                    },
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body
    class="bg-background text-on-background font-body min-h-screen antialiased selection:bg-primary-container selection:text-on-primary-container flex">
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
    <!-- Main Canvas -->
    <main class="ml-64 mt-16 flex-1 bg-surface min-h-screen overflow-x-hidden">
        <!-- Hero Gallery Layering -->
        <div class="relative h-[614px] min-h-[500px] w-full bg-surface-container flex">
            <!-- Asymmetric Image Layout -->
            <div class="w-[65%] h-full relative">
                <img alt="Main Tour Image" class="w-full h-full object-cover"
                    data-alt="epic wide shot of a rugged mountain landscape with deep green valleys and a winding river under a moody overcast sky"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDDRcX9JPOwg3TY5vZXAkrX-zZ-14Ov4AMAgjRu4n6_Y3ajBTWDEVgukclZEErfsboglfMt-TypfcCu8FzKokwN9M99E2KoH4Oq0p741egD2AFXiSJxFn6ryFXSODRQb1u-e9HuuoNS5LOCyXw-bSyFt6KsLb3wcTgbRwrR8O2PJwjEMnbzC_4TD5E4u1EqPPdOqiUL_Z_UeIHMD0kd2c_ijeDrwH0VINLsCrBvXaOkQb00fyWMpkyUI4CbRVsYKG7KJA8eJPYBEks" />
                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-r from-primary/80 to-transparent mix-blend-multiply"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-surface to-transparent"></div>
            </div>
            <div class="w-[35%] h-full flex flex-col border-l border-outline-variant/15">
                <img alt="Detail 1" class="h-1/2 w-full object-cover"
                    data-alt="close up of hiking boots standing on a mossy rock edge overlooking a misty forest canopy"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBN0L5FNc2bRJHTUYdf6qCdBewlmBHDAoIT6MA2Ct2crGuOpQikPWo5kpO1DK0UzrPCueSF8yw0_5SbDEVZ32EPXbjdoe-P1EefH_9kfS6sV3IrRUX2tcncNMAXSLmBrs7qofUodTN0pUJwXomXuj2ZHyeJZuHgxKJoigUYQEdrAflMAx_vRuX5iKolapMg_sd5iMTF7phRT1QZm0vgOVR_ooITuPwOuoghQ0OWAbdFfpfapDEKFQfKiOzBI9gr1y2fgK7PDu8zWaM" />
                <img alt="Detail 2" class="h-1/2 w-full object-cover border-t border-outline-variant/15"
                    data-alt="detail shot of local flora with dew drops on broad green leaves in soft morning light"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9jvEzYGwUOq6i_eyLnUKV-71qZ9zVysn0LoRDQtiAIzcDIFrBNaSMiAdVxtNmwUErY8UDWqcaZWdq6KraC_vWr340aJZc6262R2z6T4yJiMeJfR2hnsYendYZjclr_1uNFI5sTn1bGtt_XG-Y-TCkfCRkZqHKowUrvI1hi_gkL68ims1AlIFKWkIp4ClfgKhrpAMC2ju9YjiG83_FuPf9dhUz9CFVCKf0D2y2ua4h-jICSH7kmxmVPytLajdtH6muUQYhhMM4V7k" />
            </div>
            <!-- Floating Title Block -->
            <div class="absolute bottom-0 left-0 w-full px-12 pb-12 z-10 flex justify-between items-end">
                <div class="max-w-3xl">
                    <div class="flex items-center gap-3 mb-4">
                        <span
                            class="bg-tertiary-container text-on-tertiary-container text-xs font-bold uppercase tracking-wider py-1 px-3">Expedition</span>
                        <span
                            class="flex items-center text-primary text-sm font-semibold bg-surface-container-lowest/80 backdrop-blur-sm py-1 px-2 border border-outline-variant/20">
                            <span class="material-symbols-outlined text-[16px] mr-1"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            4.9 (128 Reviews)
                        </span>
                    </div>
                    <h1
                        class="font-headline text-[3.5rem] leading-[1.1] tracking-[-0.02em] text-on-surface mb-2 bg-surface-bright/90 inline-block px-4 py-2 border-l-4 border-primary">
                        The Silent Valley Trek</h1>
                    <p
                        class="font-body text-body-lg text-on-surface-variant max-w-2xl mt-4 bg-surface-bright/90 inline-block px-4 py-2">
                        A 5-day immersive journey through ancient rainforests, focusing on minimal impact and deep
                        ecological connection.</p>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-12 py-16 flex gap-16 relative">
            <!-- Left Content Column -->
            <div class="w-2/3 flex flex-col gap-12">
                <!-- Quick Facts Bento -->
                <div class="grid grid-cols-3 gap-1">
                    <div class="bg-surface-container p-6 flex flex-col gap-2">
                        <span class="material-symbols-outlined text-primary text-[28px]">schedule</span>
                        <span
                            class="text-xs font-semibold text-on-surface-variant uppercase tracking-wider">Duration</span>
                        <span class="text-lg font-headline font-bold text-on-surface">5 Days, 4 Nights</span>
                    </div>
                    <div class="bg-surface-container p-6 flex flex-col gap-2">
                        <span class="material-symbols-outlined text-primary text-[28px]">terrain</span>
                        <span
                            class="text-xs font-semibold text-on-surface-variant uppercase tracking-wider">Difficulty</span>
                        <span class="text-lg font-headline font-bold text-on-surface">Moderate</span>
                    </div>
                    <div class="bg-surface-container p-6 flex flex-col gap-2">
                        <span class="material-symbols-outlined text-primary text-[28px]">group</span>
                        <span class="text-xs font-semibold text-on-surface-variant uppercase tracking-wider">Group
                            Size</span>
                        <span class="text-lg font-headline font-bold text-on-surface">Max 8 People</span>
                    </div>
                </div>
                <!-- Description -->
                <section>
                    <h2 class="font-headline text-2xl font-bold text-on-surface mb-6 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">eco</span>
                        The Experience
                    </h2>
                    <div class="prose max-w-none font-body text-on-surface-variant space-y-6 leading-relaxed">
                        <p>Venture into one of the last untouched wilderness areas on the continent. The Silent Valley
                            Trek is designed for those who seek to understand the intricate web of life within ancient
                            rainforests. Guided by local naturalists, you will trace the pathways of elusive wildlife
                            and learn traditional survival and foraging techniques.</p>
                        <p>We prioritize zero-trace travel. Every step is considered, from our solar-powered basecamps
                            to our locally sourced, plant-forward provisions. This isn't just a hike; it's a
                            recalibration of your relationship with the natural world.</p>
                    </div>
                </section>
                <!-- Impact Chips Section -->
                <section class="bg-surface-container-low p-8 border border-outline-variant/15">
                    <h3
                        class="font-headline text-xl font-bold text-on-surface mb-6 border-b border-outline-variant/20 pb-4">
                        Sustainability Metrics</h3>
                    <div class="flex flex-wrap gap-4">
                        <div
                            class="bg-tertiary-container text-on-tertiary-container px-4 py-2 text-sm font-semibold flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">co2</span>
                            Carbon Neutral Operation
                        </div>
                        <div
                            class="bg-tertiary-container text-on-tertiary-container px-4 py-2 text-sm font-semibold flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">volunteer_activism</span>
                            15% to Local Conservation
                        </div>
                        <div
                            class="bg-tertiary-container text-on-tertiary-container px-4 py-2 text-sm font-semibold flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">recycling</span>
                            Zero Single-Use Plastics
                        </div>
                    </div>
                </section>
                <!-- Itinerary Stub -->
                <section>
                    <h2 class="font-headline text-2xl font-bold text-on-surface mb-6">Itinerary Overview</h2>
                    <div class="space-y-4">
                        <div class="bg-surface-container-highest p-6 relative border-l-4 border-primary">
                            <h4 class="font-headline font-bold text-on-surface mb-2">Day 1: Basecamp Arrival</h4>
                            <p class="text-sm text-on-surface-variant">Orientation, eco-briefing, and a short sunset
                                acclimation hike.</p>
                        </div>
                        <div class="bg-surface-container p-6 relative border-l-4 border-outline-variant">
                            <h4 class="font-headline font-bold text-on-surface mb-2">Day 2: The Canopy Walk</h4>
                            <p class="text-sm text-on-surface-variant">Full day ascent through primary rainforest
                                layers.</p>
                        </div>
                        <!-- More days would go here -->
                    </div>
                </section>
            </div>
            <!-- Right Aside: Booking Engine (Functional Brutalism) -->
            <aside class="w-1/3">
                <div
                    class="sticky top-24 bg-surface-container-highest p-8 shadow-[0px_20px_40px_rgba(25,28,25,0.06)] border border-outline-variant/20">
                    <div class="mb-8 border-b border-outline-variant/20 pb-6">
                        <div class="text-sm text-on-surface-variant font-semibold uppercase tracking-wider mb-1">
                            Starting from</div>
                        <div class="text-4xl font-headline font-bold text-on-surface flex items-baseline gap-1">
                            $1,250 <span class="text-base font-normal text-on-surface-variant">/ person</span>
                        </div>
                    </div>
                    <form>
                        <!-- Date Selection -->
                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-on-surface mb-2">Select Date</label>
                            <div class="relative">
                                <input
                                    class="w-full bg-surface-container-lowest border border-outline focus:border-primary focus:ring-2 focus:ring-primary text-on-surface py-3 px-4 font-body text-sm rounded-none"
                                    type="date" />
                            </div>
                        </div>
                        <!-- Booking Type Radio Cards -->
                        <div class="mb-6 space-y-3">
                            <label class="block text-sm font-semibold text-on-surface mb-2">Experience Tier</label>
                            <label class="cursor-pointer">
                                <input checked="" class="peer sr-only" name="tier" type="radio" />
                                <div
                                    class="p-4 border border-outline bg-surface-container-lowest peer-checked:border-primary peer-checked:border-2 peer-checked:bg-primary-fixed/20 hover:bg-surface-container transition-colors flex justify-between items-start">
                                    <div>
                                        <div class="font-bold text-on-surface mb-1">Standard Trek</div>
                                        <div class="text-xs text-on-surface-variant">Shared group, standard gear</div>
                                    </div>
                                    <div class="font-semibold text-primary">+$0</div>
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input class="peer sr-only" name="tier" type="radio" />
                                <div
                                    class="p-4 border border-outline bg-surface-container-lowest peer-checked:border-primary peer-checked:border-2 peer-checked:bg-primary-fixed/20 hover:bg-surface-container transition-colors flex justify-between items-start">
                                    <div>
                                        <div class="font-bold text-on-surface mb-1">VIP Access</div>
                                        <div class="text-xs text-on-surface-variant">Private tent, premium meals</div>
                                    </div>
                                    <div class="font-semibold text-primary">+$450</div>
                                </div>
                            </label>
                        </div>
                        <!-- Add-ons Checkboxes -->
                        <div class="mb-8 space-y-4">
                            <label
                                class="block text-sm font-semibold text-on-surface mb-2 border-t border-outline-variant/20 pt-6">Optional
                                Enhancements</label>
                            <label class="flex items-start gap-3 cursor-pointer group">
                                <div class="relative flex items-center h-5">
                                    <input checked=""
                                        class="peer h-5 w-5 border border-outline text-primary focus:ring-primary focus:ring-2 rounded-none bg-surface-container-lowest"
                                        type="checkbox" />
                                </div>
                                <div class="flex-1 text-sm">
                                    <div
                                        class="font-semibold text-on-surface group-hover:text-primary transition-colors">
                                        Carbon Offset Contribution</div>
                                    <div class="text-on-surface-variant text-xs mt-1">Offset 200% of your travel
                                        footprint</div>
                                </div>
                                <div class="text-sm font-semibold text-on-surface-variant">+$25</div>
                            </label>
                            <label class="flex items-start gap-3 cursor-pointer group">
                                <div class="relative flex items-center h-5">
                                    <input
                                        class="peer h-5 w-5 border border-outline text-primary focus:ring-primary focus:ring-2 rounded-none bg-surface-container-lowest"
                                        type="checkbox" />
                                </div>
                                <div class="flex-1 text-sm">
                                    <div
                                        class="font-semibold text-on-surface group-hover:text-primary transition-colors">
                                        Photography Workshop</div>
                                    <div class="text-on-surface-variant text-xs mt-1">Evening session with guide</div>
                                </div>
                                <div class="text-sm font-semibold text-on-surface-variant">+$120</div>
                            </label>
                        </div>
                        <!-- CTA -->
                        <button
                            class="w-full bg-primary hover:bg-primary-container text-on-primary py-4 px-6 text-base font-bold tracking-wide transition-colors flex justify-center items-center gap-2"
                            type="button">
                            <span>Book Now</span>
                            <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                        </button>
                        <div
                            class="text-center text-xs text-on-surface-variant mt-4 flex items-center justify-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">lock</span>
                            Secure, encrypted booking
                        </div>
                    </form>
                </div>
            </aside>
        </div>
    </main>
</body>

</html>