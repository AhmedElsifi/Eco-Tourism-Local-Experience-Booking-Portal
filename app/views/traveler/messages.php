<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>The Earth Architect - Messages</title>
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
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
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
        h6,
        .font-headline {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>

<body
    class="bg-surface text-on-surface min-h-screen flex selection:bg-primary-container selection:text-on-primary-container">
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
            <a class="flex items-center gap-4 px-4 py-3 text-emerald-900 dark:text-emerald-400 font-bold border-l-4 border-emerald-900 dark:border-emerald-400 bg-stone-200/50 dark:bg-stone-800/50 hover:bg-stone-200 dark:hover:bg-stone-800 transition-colors duration-200 opacity-90 transition-all duration-150"
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
    <!-- Main Content Area -->
    <main class="ml-64 pt-16 flex-1 bg-surface flex flex-col min-h-screen">
        <!-- Page Header & Local Search -->
        <div class="px-12 py-12 bg-surface-container-lowest">
            <div class="max-w-5xl mx-auto flex flex-col md:flex-row md:items-end justify-between gap-8">
                <div>
                    <h2
                        class="text-[3.5rem] leading-none font-headline font-extrabold text-on-surface tracking-[-0.02em]">
                        Messages</h2>
                    <p class="text-on-surface-variant font-body mt-4 text-lg">Direct communications with your local
                        guides and eco-architects.</p>
                </div>
                <!-- Square Search Bar (Requested) -->
                <div class="relative w-full md:w-96">
                    <span
                        class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">search</span>
                    <input
                        class="w-full pl-12 pr-4 py-4 bg-surface border border-outline focus:border-primary focus:border-b-2 font-body text-sm text-on-surface outline-none transition-all placeholder:text-outline placeholder:font-medium"
                        placeholder="Search guides or trips..." type="text" />
                </div>
            </div>
        </div>
        <!-- Chat List Canvas -->
        <div class="flex-1 bg-surface-container-low px-12 py-12">
            <div class="max-w-5xl mx-auto flex flex-col gap-6">
                <!-- Chat Item 1 (Unread) -->
                <div
                    class="group bg-surface-container-lowest hover:bg-surface transition-colors duration-300 p-6 flex items-start gap-6 relative cursor-pointer outline-variant/15 outline outline-1 border-l-4 border-l-primary">
                    <img alt="Guide Avatar" class="w-16 h-16 object-cover flex-shrink-0"
                        data-alt="Portrait of an experienced male wilderness guide wearing earthy tones against a forest background"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBuxCO1dFwRUT4gAm67sEvhkaz-Oa1UIfgrKgaSoiNUVERxXH2KKEtNRkf6TvgSmJavTPEhG1Tii4U8hr_HB49hjtlcGh-hK8DPReL4JZNvbWOA_OsFvBPPdR7lk-JBtiBdNtRhrpBEkIw_IM3Z3-DlliJN5VXNQ_ohwg8Rp_CP7B3EYAGvBWhRxJ6lFDsCKZmU0jPo6CBU2v2e1dXR7VKKc3cdn5eNaHyp2WeiKZ2CanOjXNd6gUFiBuK9TDScfITy6b2WqzEW9h8" />
                    <div class="flex-1 min-w-0">
                        <div class="flex justify-between items-baseline mb-1">
                            <h3 class="font-headline font-bold text-lg text-on-surface truncate">Elias Thorne</h3>
                            <span class="font-label text-xs font-semibold text-primary">10:42 AM</span>
                        </div>
                        <p class="font-label text-xs text-primary font-semibold tracking-widest uppercase mb-2">Highland
                            Trail Eco-Trek</p>
                        <p class="font-body text-sm text-on-surface-variant line-clamp-2 pr-8">
                            The weather is looking perfect for our ascent tomorrow. Make sure to pack the extra layer we
                            discussed. I've secured the permits for the northern ridge...
                        </p>
                    </div>
                    <div class="absolute right-6 top-1/2 -translate-y-1/2">
                        <div class="w-3 h-3 bg-primary"></div>
                    </div>
                </div>
                <!-- Chat Item 2 (Read) -->
                <div
                    class="group bg-surface-container-lowest hover:bg-surface transition-colors duration-300 p-6 flex items-start gap-6 relative cursor-pointer outline-variant/15 outline outline-1 border-l-4 border-l-transparent">
                    <img alt="Guide Avatar" class="w-16 h-16 object-cover flex-shrink-0"
                        data-alt="Portrait of a female marine biologist guide smiling warmly in natural sunlight"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbNUKkhcD1B9OU6Q-KoQdQL4v78eRcUl2JjbmzX_IKVJKXaIKtbYBhBm8AJTB1jUZk16TzKCx4vYEMwdoUNtzVKyeqX40Yp86SILwTdbFlb8avCHe2I3DMABJsmrmd0VhhtDZzo0_-A5PNZ0Ryt0VYaBmd3RoU9xFI_V5T2s-jsAyaXn-MbR4YAoBBIF_lmQTKIebCHx3Vcm0O3wo0QDx25sUByng8Iw57td2AxtM35KriXS6gHePMl3yh6BNjbYK-wIZpxCqGsLI" />
                    <div class="flex-1 min-w-0">
                        <div class="flex justify-between items-baseline mb-1">
                            <h3 class="font-headline font-bold text-lg text-on-surface truncate">Dr. Maya Lin</h3>
                            <span class="font-label text-xs text-outline">Yesterday</span>
                        </div>
                        <p
                            class="font-label text-xs text-on-surface-variant font-semibold tracking-widest uppercase mb-2">
                            Coastal Reef Restoration</p>
                        <p class="font-body text-sm text-on-surface-variant line-clamp-2">
                            Thank you for your hard work planting the coral fragments today. I've attached the species
                            identification guide you asked for. See you next season.
                        </p>
                    </div>
                </div>
                <!-- Chat Item 3 (Read) -->
                <div
                    class="group bg-surface-container-lowest hover:bg-surface transition-colors duration-300 p-6 flex items-start gap-6 relative cursor-pointer outline-variant/15 outline outline-1 border-l-4 border-l-transparent">
                    <div
                        class="w-16 h-16 bg-surface-container-high flex items-center justify-center flex-shrink-0 text-on-surface-variant font-headline font-bold text-xl">
                        JV
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex justify-between items-baseline mb-1">
                            <h3 class="font-headline font-bold text-lg text-on-surface truncate">Jonas Vang</h3>
                            <span class="font-label text-xs text-outline">Oct 12</span>
                        </div>
                        <p
                            class="font-label text-xs text-on-surface-variant font-semibold tracking-widest uppercase mb-2">
                            Valley Foraging Experience</p>
                        <p class="font-body text-sm text-on-surface-variant line-clamp-2">
                            Absolutely, we can accommodate the dietary restrictions. The wild mushrooms should be in
                            full bloom by the time you arrive.
                        </p>
                    </div>
                </div>
                <!-- Chat Item 4 (Read) -->
                <div
                    class="group bg-surface-container-lowest hover:bg-surface transition-colors duration-300 p-6 flex items-start gap-6 relative cursor-pointer outline-variant/15 outline outline-1 border-l-4 border-l-transparent">
                    <img alt="Guide Avatar" class="w-16 h-16 object-cover flex-shrink-0 filter grayscale contrast-125"
                        data-alt="Portrait of a rugged male guide with a beard in a slightly shaded outdoor setting"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfCtwIzGfnE4UX0uKFvVhWJG5TdoxJMPW2UyDh3XqgAMmHkG-qHuyUXtuPNmBcUG2bNB_O-Tz1kIrEf2L3oX6FPFU0tfj-FS_A-6DqjhTx_doZ8U_I-M57K-3-tPpuxcLqhVrfO56VH2AbXY9Olmw8hclg0QaAUZkLMicB426D0qCIJe0JRpS8VbYf7ilrxuMZRuYFe7hKk1XshZiqXVWqru0wMjNRQtSPeTgDisocUKn8Hpt6mN5W0BObXAEPPI3RF9JBJEJy6nU" />
                    <div class="flex-1 min-w-0">
                        <div class="flex justify-between items-baseline mb-1">
                            <h3 class="font-headline font-bold text-lg text-on-surface truncate">Arthur Pendelton</h3>
                            <span class="font-label text-xs text-outline">Sep 28</span>
                        </div>
                        <p
                            class="font-label text-xs text-on-surface-variant font-semibold tracking-widest uppercase mb-2">
                            Historical Ruins Walk</p>
                        <p class="font-body text-sm text-on-surface-variant line-clamp-2">
                            Your booking is confirmed. We meet at the south gate exactly at sunrise. Do not be late, the
                            light vanishes quickly in the canyon.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>