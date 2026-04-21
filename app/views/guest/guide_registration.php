<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Guide Registration | EcoPortal</title>
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;family=Inter:wght@100..900&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "inverse-surface": "#2e312e",
                        "tertiary": "#392d13",
                        "on-secondary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "secondary-container": "#fed6a7",
                        "outline": "#727972",
                        "on-surface": "#191c19",
                        "surface-container-low": "#f3f4ef",
                        "surface": "#f8faf5",
                        "tertiary-fixed-dim": "#d8c49f",
                        "on-error-container": "#93000a",
                        "surface-container-high": "#e7e9e4",
                        "tertiary-fixed": "#f5e0ba",
                        "surface-container-highest": "#e1e3de",
                        "surface-tint": "#466550",
                        "surface-dim": "#d9dbd6",
                        "primary-fixed": "#c8ebd0",
                        "primary": "#163422",
                        "on-primary-container": "#99baa1",
                        "secondary": "#765934",
                        "primary-fixed-dim": "#adcfb4",
                        "inverse-on-surface": "#f0f1ec",
                        "secondary-fixed": "#ffddb6",
                        "on-secondary-fixed-variant": "#5c421f",
                        "surface-container": "#edeee9",
                        "on-tertiary-fixed": "#241a03",
                        "on-secondary-container": "#795b36",
                        "on-primary-fixed": "#022110",
                        "on-tertiary-container": "#c3b08c",
                        "background": "#f8faf5",
                        "on-secondary-fixed": "#2a1800",
                        "surface-bright": "#f8faf5",
                        "inverse-primary": "#adcfb4",
                        "outline-variant": "#c2c8c0",
                        "tertiary-container": "#504327",
                        "on-background": "#191c19",
                        "on-error": "#ffffff",
                        "on-tertiary-fixed-variant": "#534529",
                        "error-container": "#ffdad6",
                        "primary-container": "#2d4b37",
                        "secondary-fixed-dim": "#e6c093",
                        "on-primary-fixed-variant": "#2f4d39",
                        "on-primary": "#ffffff",
                        "surface-variant": "#e1e3de",
                        "on-tertiary": "#ffffff",
                        "error": "#ba1a1a",
                        "on-surface-variant": "#424843"
                    },
                    "borderRadius": {
                        "DEFAULT": "0px",
                        "lg": "0px",
                        "xl": "0px",
                        "full": "0px"
                    },
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

        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: 'Manrope', sans-serif;
        }

        /* Precision Brutalism: No Radius */
        * {
            border-radius: 0px !important;
        }
    </style>
</head>

<body
    class="bg-surface text-on-surface min-h-screen selection:bg-primary-container selection:text-on-primary-container">
    <main class="flex min-h-screen">
        <!-- Left: Atmospheric Forest Imagery (Visual Anchor) -->
        <section class="hidden lg:flex lg:w-1/2 relative overflow-hidden bg-primary">
            <img class="absolute inset-0 object-cover w-full h-full opacity-80 grayscale-[20%] contrast-[110%]"
                data-alt="Deep moody forest scene with ancient mossy trees, light rays filtering through dense canopy, ethereal mist and vibrant green foliage, cinematic 8k photography"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBSeqah-sUkmJjVgo_T1CkifB8cmQeSTHydwj666_QQnEstxRPFjPk_CIe6hjKYeJl6uQY8u18xF2ymht6qGsV-L38BCrDs1YNc2l19eHaFPi_CPfGyRkrB6Ktz8n8snn1Fb8wRQeeCFwEXeO3Ave5epes8diiWYeD3WybQzNtvX7W84xDFGK-8a-qBr6Rv1V0lxYwqNCyR_STSBfBuBOmIfVAuOWWlMGKuvUbr6D63S_ivVCVAt26AGMhij6ngCEHb_81HXCBKLh8" />
            <div
                class="relative z-10 p-16 flex flex-col justify-between h-full w-full bg-gradient-to-b from-primary/40 to-primary/80">
                <div class="flex items-center space-x-3">
                    <span class="material-symbols-outlined text-4xl text-on-primary">explore</span>
                    <span class="text-2xl font-black text-on-primary tracking-tighter font-headline">EcoPortal</span>
                </div>
                <div class="max-w-md">
                    <h1 class="text-5xl font-extrabold text-on-primary font-headline leading-tight mb-6">ARCHITECT THE
                        FUTURE OF TRAVEL.</h1>
                    <p class="text-lg text-on-primary-container font-medium leading-relaxed">
                        Join a global network of elite guides dedicated to ecological preservation and precision
                        experiences. Your journey as an Earth Architect begins with rigorous verification.
                    </p>
                </div>
                <div class="flex flex-col space-y-4">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-[1px] bg-on-primary-container"></div>
                        <span class="text-xs uppercase tracking-[0.3em] text-on-primary-container font-label">Precision
                            in Nature</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Right: Registration Form (Functional Shell) -->
        <section class="w-full lg:w-1/2 bg-surface-bright flex flex-col p-8 md:p-16 lg:p-24 overflow-y-auto">
            <div class="mb-12 flex justify-between items-center">
                <div class="lg:hidden flex items-center space-x-2">
                    <span class="material-symbols-outlined text-2xl text-primary">explore</span>
                    <span class="text-xl font-black text-primary tracking-tighter font-headline">EcoPortal</span>
                </div>
                <div class="text-sm font-label uppercase tracking-widest text-on-surface-variant">
                    Step 01 / Registration
                </div>
            </div>
            <div class="max-w-xl">
                <header class="mb-12">
                    <h2 class="text-4xl font-bold tracking-tight text-primary font-headline mb-4">Guide Registration
                    </h2>
                    <p class="text-on-surface-variant font-body">Create your professional profile and begin the
                        biometric security clearance.</p>
                </header>
                <form class="space-y-10">
                    <!-- Basic Information Section -->
                    <div class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex flex-col space-y-2">
                                <label class="text-xs font-bold uppercase tracking-wider text-primary font-label"
                                    for="full_name">Full Legal Name</label>
                                <input
                                    class="bg-surface-container-low border border-outline/30 px-4 py-3 focus:border-primary focus:ring-0 transition-all outline-none text-on-surface"
                                    id="full_name" name="full_name" placeholder="John Doe" type="text" />
                            </div>
                            <div class="flex flex-col space-y-2">
                                <label class="text-xs font-bold uppercase tracking-wider text-primary font-label"
                                    for="email">Professional Email</label>
                                <input
                                    class="bg-surface-container-low border border-outline/30 px-4 py-3 focus:border-primary focus:ring-0 transition-all outline-none text-on-surface"
                                    id="email" name="email" placeholder="architect@eco.portal" type="email" />
                            </div>
                        </div>
                    </div>
                    <!-- Biometric Identity Verification Simulation -->
                    <div class="bg-surface-container p-8 space-y-6">
                        <div class="flex items-center space-x-3 mb-2">
                            <span class="material-symbols-outlined text-primary"
                                style="font-variation-settings: 'FILL' 1;">verified_user</span>
                            <h3 class="text-sm font-bold uppercase tracking-widest text-primary font-headline">Biometric
                                Identity Verification</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- ID Upload -->
                            <div class="space-y-4">
                                <span class="text-xs font-medium text-on-surface-variant block">Government Issued
                                    ID</span>
                                <div
                                    class="aspect-video bg-surface-container-high border-2 border-dashed border-outline-variant flex flex-col items-center justify-center p-6 text-center group hover:border-primary transition-colors cursor-pointer">
                                    <span
                                        class="material-symbols-outlined text-3xl text-outline mb-2 group-hover:text-primary transition-colors">credit_card</span>
                                    <p class="text-[10px] font-bold uppercase tracking-tighter text-on-surface-variant">
                                        Click to Upload Document</p>
                                    <p class="text-[9px] text-outline mt-1">PDF, JPG, PNG (Max 5MB)</p>
                                </div>
                            </div>
                            <!-- Selfie Scan -->
                            <div class="space-y-4">
                                <span class="text-xs font-medium text-on-surface-variant block">Face Recognition
                                    Scan</span>
                                <div
                                    class="aspect-video bg-inverse-surface flex flex-col items-center justify-center p-6 text-center relative group overflow-hidden">
                                    <!-- Decorative scanning line simulation -->
                                    <div
                                        class="absolute top-0 left-0 w-full h-[1px] bg-primary-fixed-dim/40 shadow-[0_0_15px_rgba(173,207,180,0.8)] animate-pulse">
                                    </div>
                                    <span
                                        class="material-symbols-outlined text-3xl text-surface-bright mb-2">face</span>
                                    <p class="text-[10px] font-bold uppercase tracking-tighter text-surface-bright">
                                        Initialize Camera</p>
                                    <p class="text-[9px] text-surface-variant mt-1">Real-time Liveness Check</p>
                                    <!-- Scan Status -->
                                    <div class="absolute bottom-4 right-4">
                                        <div class="flex items-center space-x-1">
                                            <div class="w-1.5 h-1.5 bg-error animate-pulse"></div>
                                            <span
                                                class="text-[8px] text-surface-bright font-mono uppercase tracking-tighter">Standby</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-surface-container-highest p-4 flex items-start space-x-3">
                            <span class="material-symbols-outlined text-primary text-sm">info</span>
                            <p class="text-[11px] leading-relaxed text-on-surface-variant">
                                Security Protocol: All biometric data is encrypted using AES-256 and processed through
                                the Earth Architect localized node. No raw imagery is stored on central servers.
                            </p>
                        </div>
                    </div>
                    <!-- Impact Chip Simulation -->
                    <div class="flex flex-wrap gap-3">
                        <div class="bg-tertiary-container px-4 py-2 flex items-center space-x-2">
                            <span
                                class="text-[10px] font-bold text-on-tertiary-container uppercase tracking-widest">Trust
                                Score: Pending</span>
                        </div>
                        <div class="bg-primary-container px-4 py-2 flex items-center space-x-2">
                            <span
                                class="text-[10px] font-bold text-on-primary-container uppercase tracking-widest">Secure
                                Node 4.2.1</span>
                        </div>
                    </div>
                    <div class="pt-6 space-y-6">
                        <button
                            class="w-full bg-primary text-on-primary font-bold py-5 text-sm uppercase tracking-[0.2em] hover:bg-primary-container transition-all active:scale-[0.99] flex items-center justify-center space-x-2"
                            type="submit">
                            <span>Submit Registration</span>
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </button>
                        <div
                            class="flex flex-col md:flex-row md:items-center md:justify-between space-y-4 md:space-y-0">
                            <a class="text-xs font-bold text-primary hover:text-on-surface transition-colors flex items-center space-x-1 font-label"
                                href="#">
                                <span>Already a Guide?</span>
                                <span class="underline">Login here</span>
                            </a>
                            <div class="flex space-x-4">
                                <a class="text-[10px] uppercase tracking-widest text-outline hover:text-primary transition-colors"
                                    href="#">Sustainability Charter</a>
                                <a class="text-[10px] uppercase tracking-widest text-outline hover:text-primary transition-colors"
                                    href="#">Legal</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Footer-style simple credit at bottom -->
            <div class="mt-auto pt-20 border-t border-outline/10">
                <p class="text-[10px] uppercase tracking-[0.4em] text-outline font-label">© 2024 The Earth Architect.
                    Precision in Nature.</p>
            </div>
        </section>
    </main>
    <!-- TopAppBar (Floating Shell Logic - Contextually Suppressed on split-screen but kept for Brand Consistency if needed as an overlay) -->
    <header class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-8 h-16 pointer-events-none">
        <div class="pointer-events-auto">
            <!-- Brand name from JSON - visible on mobile/tablets if needed -->
        </div>
        <div
            class="flex space-x-6 pointer-events-auto bg-surface-bright/80 backdrop-blur-md px-6 py-2 border border-outline-variant/10">
            <span
                class="material-symbols-outlined text-primary cursor-pointer hover:opacity-70 transition-opacity">language</span>
            <span
                class="material-symbols-outlined text-primary cursor-pointer hover:opacity-70 transition-opacity">help_outline</span>
        </div>
    </header>
</body>

</html>