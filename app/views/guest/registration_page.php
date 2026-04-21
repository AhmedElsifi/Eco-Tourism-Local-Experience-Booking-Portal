<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Register | Earth Architect</title>
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
                        "surface-container-lowest": "#ffffff",
                        "surface-bright": "#f8faf5",
                        "error-container": "#ffdad6",
                        "inverse-surface": "#2e312e",
                        "on-secondary-fixed-variant": "#5c421f",
                        "outline-variant": "#c2c8c0",
                        "on-primary-fixed": "#022110",
                        "tertiary": "#392d13",
                        "on-tertiary-fixed-variant": "#534529",
                        "primary-fixed": "#c8ebd0",
                        "surface-container": "#edeee9",
                        "on-primary-container": "#99baa1",
                        "surface-dim": "#d9dbd6",
                        "primary": "#163422",
                        "on-secondary": "#ffffff",
                        "surface-container-low": "#f3f4ef",
                        "on-error-container": "#93000a",
                        "tertiary-fixed-dim": "#d8c49f",
                        "on-surface": "#191c19",
                        "inverse-primary": "#adcfb4",
                        "surface-container-highest": "#e1e3de",
                        "secondary-fixed": "#ffddb6",
                        "primary-fixed-dim": "#adcfb4",
                        "outline": "#727972",
                        "on-background": "#191c19",
                        "on-error": "#ffffff",
                        "surface-tint": "#466550",
                        "secondary": "#765934",
                        "on-tertiary-container": "#c3b08c",
                        "inverse-on-surface": "#f0f1ec",
                        "on-primary-fixed-variant": "#2f4d39",
                        "on-tertiary-fixed": "#241a03",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed": "#f5e0ba",
                        "error": "#ba1a1a",
                        "tertiary-container": "#504327",
                        "primary-container": "#2d4b37",
                        "on-secondary-fixed": "#2a1800",
                        "secondary-container": "#fed6a7",
                        "surface-variant": "#e1e3de",
                        "on-surface-variant": "#424843",
                        "secondary-fixed-dim": "#e6c093",
                        "on-surface-variant": "#424843",
                        "background": "#f8faf5",
                        "on-primary": "#ffffff",
                        "surface": "#f8faf5",
                        "surface-container-high": "#e7e9e4"
                    },
                    "borderRadius": {
                        "none": "0px",
                        "DEFAULT": "0px",
                        "lg": "0px",
                        "xl": "0px",
                        "full": "9999px"
                    },
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8faf5;
        }

        h1,
        h2,
        h3,
        .brand-font {
            font-family: 'Manrope', sans-serif;
        }

        /* Strict square corner override for all elements */
        * {
            border-radius: 0 !important;
        }
    </style>
</head>

<body class="bg-surface text-on-surface min-h-screen">
    <main class="flex min-h-screen w-full flex-col md:flex-row">
        <!-- Left Section: Atmospheric Branding -->
        <section class="relative hidden md:flex md:w-1/2 lg:w-3/5 bg-primary overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img alt="Misty temperate rainforest" class="h-full w-full object-cover opacity-60 grayscale-[0.2]"
                    data-alt="Distant view of a misty ancient forest with towering evergreen trees shrouded in thick morning fog and soft atmospheric green light"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGMQGFFOX7ZQ0ngnsCpOnyfi1BmeMrDhDEhLDvMGcJmBnHF4piNzA9RJuhAYvWKEVeqOIjz60TU1tXXv64ReYs32uZWvLrflEJ51UxXIS6p2Wd6dQ6QN9WMv9eq7VjtkLZO5esuO6Ra5vIIOyX_3VNuqD9lPmNFfRuku3dXwzc6pesqXysD_zT_cTKm1aDrLMbD9xrfGS2QmWxn93PvctNwGW3sA0Sw_GBJ3Oui7F1IaRRkXSH98L0br2nhD5gLyzWetpf7ZYlgNM" />
            </div>
            <!-- Tonal Overlay for Text Legibility -->
            <div class="absolute inset-0 bg-gradient-to-br from-primary/80 via-primary/40 to-transparent z-10"></div>
            <div class="relative z-20 flex flex-col justify-between p-12 lg:p-20 h-full w-full">
                <div>
                    <span
                        class="brand-font text-surface-bright font-black text-2xl uppercase tracking-[0.3em] mb-4 block">Earth
                        Architect</span>
                    <div class="h-1 w-24 bg-on-primary-container mb-12"></div>
                </div>
                <div class="max-w-xl">
                    <h1
                        class="brand-font text-5xl lg:text-7xl font-extrabold text-surface-bright leading-tight mb-8 tracking-tighter">
                        Architecture <br />of the Earth.
                    </h1>
                    <p class="text-on-primary-container text-lg lg:text-xl font-medium leading-relaxed max-w-md">
                        Join a collective of travelers and guides dedicated to sustainable exploration and structural
                        precision in nature.
                    </p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 border border-on-primary-container flex items-center justify-center">
                        <span class="material-symbols-outlined text-on-primary-container">eco</span>
                    </div>
                    <span class="text-xs uppercase tracking-widest text-on-primary-container font-bold">EST. MMXXIV —
                        GLOBAL PRESERVATION NETWORK</span>
                </div>
            </div>
        </section>
        <!-- Right Section: Registration Form -->
        <section class="flex flex-col w-full md:w-1/2 lg:w-2/5 bg-surface-bright p-8 md:p-12 lg:p-20 justify-center">
            <div class="md:hidden mb-12">
                <span class="brand-font text-primary font-black text-xl uppercase tracking-widest">Earth
                    Architect</span>
            </div>
            <div class="w-full max-w-md mx-auto">
                <header class="mb-10">
                    <h2 class="brand-font text-3xl font-extrabold text-primary mb-2 tracking-tight">CREATE ACCOUNT</h2>
                    <p class="text-outline text-sm uppercase tracking-wide font-semibold">Define your role within the
                        ecosystem</p>
                </header>
                <form class="space-y-8">
                    <!-- Role Selection Tabs -->
                    <div class="flex w-full mb-8">
                        <button
                            class="flex-1 py-4 text-sm font-bold tracking-widest bg-primary text-on-primary transition-colors border border-primary"
                            type="button">
                            TRAVELER
                        </button>
                        <button
                            class="flex-1 py-4 text-sm font-bold tracking-widest bg-surface-container text-outline hover:text-primary transition-colors border border-surface-container"
                            type="button">
                            GUIDE
                        </button>
                    </div>
                    <!-- Input Fields -->
                    <div class="space-y-6">
                        <div class="relative group">
                            <label class="block text-[10px] font-black uppercase tracking-widest text-primary mb-2">Full
                                Name</label>
                            <input
                                class="w-full bg-surface-container-low border-outline/30 focus:border-primary focus:ring-0 text-sm font-medium p-4 uppercase tracking-tighter placeholder:text-outline/50 transition-all"
                                placeholder="ALEXANDER VANCE" type="text" />
                        </div>
                        <div class="relative group">
                            <label
                                class="block text-[10px] font-black uppercase tracking-widest text-primary mb-2">Email
                                Address</label>
                            <input
                                class="w-full bg-surface-container-low border-outline/30 focus:border-primary focus:ring-0 text-sm font-medium p-4 uppercase tracking-tighter placeholder:text-outline/50 transition-all"
                                placeholder="VANCE@ARCHITECT.EARTH" type="email" />
                        </div>
                    </div>
                    <!-- Guide-Specific Section (Simulation) -->
                    <div class="pt-6 border-t border-outline/10 space-y-6">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="material-symbols-outlined text-primary text-sm">verified_user</span>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-primary">Biometric
                                Identity Verification Simulation</span>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <!-- Upload ID -->
                            <div
                                class="border-2 border-dashed border-outline-variant bg-surface-container/30 h-32 flex flex-col items-center justify-center group cursor-pointer hover:bg-surface-container transition-colors">
                                <span
                                    class="material-symbols-outlined text-outline group-hover:text-primary mb-2">badge</span>
                                <span
                                    class="text-[9px] font-bold text-outline group-hover:text-primary uppercase tracking-tighter">Upload
                                    ID Document</span>
                            </div>
                            <!-- Selfie Scan -->
                            <div
                                class="border-2 border-dashed border-outline-variant bg-surface-container/30 h-32 flex flex-col items-center justify-center group cursor-pointer hover:bg-surface-container transition-colors">
                                <span
                                    class="material-symbols-outlined text-outline group-hover:text-primary mb-2">face_retouching_natural</span>
                                <span
                                    class="text-[9px] font-bold text-outline group-hover:text-primary uppercase tracking-tighter">Live
                                    Selfie Scan</span>
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <button
                        class="w-full bg-primary text-on-primary py-5 text-sm font-black tracking-[0.2em] uppercase hover:bg-primary/90 active:scale-[0.98] transition-all flex items-center justify-center gap-3 mt-8"
                        type="submit">
                        Initialize Account
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </button>
                </form>
                <footer class="mt-12 pt-8 border-t border-outline/10 text-center">
                    <p class="text-sm font-medium text-outline">
                        Already have an account?
                        <a class="text-primary font-bold underline underline-offset-4 hover:text-primary-container transition-colors ml-1 uppercase tracking-tighter"
                            href="#">Login</a>
                    </p>
                </footer>
            </div>
        </section>
    </main>
    <!-- Impact Chips / Floating Aesthetic Elements -->
    <div class="fixed top-8 right-8 pointer-events-none hidden lg:block">
        <div class="bg-tertiary-container text-on-tertiary-container px-4 py-2 flex items-center gap-3">
            <span class="w-2 h-2 bg-on-tertiary-container animate-pulse"></span>
            <span class="text-[10px] font-bold uppercase tracking-[0.15em]">System Secure // Latency: 12ms</span>
        </div>
    </div>
</body>

</html>