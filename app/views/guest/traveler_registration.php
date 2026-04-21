<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>EcoPortal | Traveler Registration</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Manrope:wght@700;800&amp;display=swap"
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

        /* Override any default rounding from Tailwind plugins */
        * {
            border-radius: 0px !important;
        }
    </style>
</head>

<body class="bg-background text-on-background font-body antialiased overflow-x-hidden">
    <!-- TopAppBar Suppressed for Registration Flow (Transactional) -->
    <main class="min-h-screen flex flex-col md:flex-row overflow-hidden">
        <!-- Left Side: Atmospheric Imagery -->
        <section class="relative w-full md:w-1/2 h-64 md:h-screen bg-primary overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center opacity-70 mix-blend-overlay"
                data-alt="Distant bird's eye view of a dense ancient evergreen forest shrouded in morning mist and ethereal soft sunlight filtering through the canopy"
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAim_xY5A7NWQPTjLKN69Ng5zYUggg5OcCJXnhEtZK0L_8X129YHRCws8abRDlDaZx3qiy4d3YmfT9B524yJvl6kA53SHok0mut1WJe_ZdUP-QY5ZhGiP_3mB6e3AeoAHBUC_-D6xg5vmHpsy-4MGRszR-zCH5c35il8oWK1X3Sbps8XBauVRxd_ozK8SWN9FN03QLTffsS2K8duVDefoDAd4DT2MkZNkU5HaxKfvC3s0CAxEqZAeLAHD56yXgTFdHGrykVJfVKFus')">
            </div>
            <!-- Branding Overlay -->
            <div class="absolute inset-0 flex flex-col justify-center items-start px-12 md:px-24 z-10">
                <div class="space-y-4 max-w-md">
                    <h1 class="font-headline font-black text-4xl md:text-6xl text-white tracking-tighter leading-none">
                        Earth Architect
                    </h1>
                    <div class="h-1 w-24 bg-white"></div>
                    <p class="font-body text-primary-fixed text-lg md:text-xl font-medium max-w-sm">
                        Design your legacy through sustainable exploration and conscious travel.
                    </p>
                </div>
                <!-- Secondary Contextual Info (Asymmetric Detail) -->
                <div class="mt-12 hidden md:block">
                    <div class="bg-primary-container/40 backdrop-blur-md p-6 border-l-4 border-primary-fixed-dim">
                        <span
                            class="font-label text-xs uppercase tracking-[0.2em] text-primary-fixed-dim block mb-2">Sustainable
                            Impact</span>
                        <p class="text-white text-sm font-medium italic">
                            "Every step taken in nature leaves a footprint on the soul. We ensure yours is light."
                        </p>
                    </div>
                </div>
            </div>
            <!-- Texture/Gradient Depth -->
            <div class="absolute inset-0 bg-gradient-to-tr from-primary via-transparent to-transparent opacity-60">
            </div>
        </section>
        <!-- Right Side: Registration Form -->
        <section class="w-full md:w-1/2 min-h-screen flex items-center justify-center bg-surface p-8 md:p-16">
            <div class="w-full max-w-md space-y-10">
                <!-- Header Section -->
                <div class="space-y-2">
                    <h2 class="font-headline font-extrabold text-3xl text-primary tracking-tight">
                        Traveler Registration
                    </h2>
                    <p class="text-on-surface-variant font-medium">
                        Join the global movement for architectural nature preservation.
                    </p>
                </div>
                <!-- Registration Form -->
                <form action="#" class="space-y-6">
                    <!-- Full Name -->
                    <div class="space-y-1.5">
                        <label class="block font-label text-xs font-bold uppercase tracking-widest text-primary"
                            for="name">
                            Full Name
                        </label>
                        <div class="relative">
                            <input
                                class="w-full px-4 py-3.5 bg-surface-container-lowest border border-outline focus:border-primary focus:ring-1 focus:ring-primary transition-all text-on-surface placeholder:text-outline-variant font-medium outline-none"
                                id="name" name="name" placeholder="Elias Thorne" type="text" />
                        </div>
                    </div>
                    <!-- Email Address -->
                    <div class="space-y-1.5">
                        <label class="block font-label text-xs font-bold uppercase tracking-widest text-primary"
                            for="email">
                            Email Address
                        </label>
                        <div class="relative">
                            <input
                                class="w-full px-4 py-3.5 bg-surface-container-lowest border border-outline focus:border-primary focus:ring-1 focus:ring-primary transition-all text-on-surface placeholder:text-outline-variant font-medium outline-none"
                                id="email" name="email" placeholder="elias@architect.earth" type="email" />
                        </div>
                    </div>
                    <!-- Password -->
                    <div class="space-y-1.5">
                        <label class="block font-label text-xs font-bold uppercase tracking-widest text-primary"
                            for="password">
                            Password
                        </label>
                        <div class="relative">
                            <input
                                class="w-full px-4 py-3.5 bg-surface-container-lowest border border-outline focus:border-primary focus:ring-1 focus:ring-primary transition-all text-on-surface placeholder:text-outline-variant font-medium outline-none"
                                id="password" name="password" placeholder="••••••••" type="password" />
                            <button class="absolute right-4 top-1/2 -translate-y-1/2 text-outline hover:text-primary"
                                type="button">
                                <span class="material-symbols-outlined text-xl">visibility</span>
                            </button>
                        </div>
                    </div>
                    <!-- CTA Actions -->
                    <div class="pt-4 space-y-4">
                        <button
                            class="w-full py-4 bg-primary text-white font-headline font-bold text-sm uppercase tracking-widest hover:bg-primary-container transition-colors active:scale-[0.99]"
                            type="submit">
                            Create Traveler Profile
                        </button>
                        <div class="flex items-center space-x-4">
                            <div class="flex-grow h-[1px] bg-outline-variant"></div>
                            <span class="text-xs font-bold text-outline uppercase tracking-tighter">Already a
                                member?</span>
                            <div class="flex-grow h-[1px] bg-outline-variant"></div>
                        </div>
                        <a class="block w-full text-center py-4 border border-outline text-primary font-headline font-bold text-sm uppercase tracking-widest hover:bg-surface-container-low transition-colors active:scale-[0.99]"
                            href="#">
                            Traveler Login
                        </a>
                    </div>
                </form>
                <!-- Impact Chip (Visual Reinforcement) -->
                <div class="pt-8">
                    <div class="bg-tertiary-container p-4 flex items-center space-x-4">
                        <div class="bg-primary-container p-2">
                            <span class="material-symbols-outlined text-white" data-weight="fill">verified_user</span>
                        </div>
                        <div>
                            <span
                                class="block text-[10px] uppercase tracking-widest text-on-tertiary-container font-bold">Certification</span>
                            <p class="text-white text-xs font-medium">All travelers receive a digital Sustainability
                                Passport upon registration.</p>
                        </div>
                    </div>
                </div>
                <!-- Footer Links (Transactional Minimal) -->
                <footer class="pt-8 border-t border-outline-variant/30 flex flex-wrap gap-x-6 gap-y-2">
                    <a class="text-[10px] font-bold text-outline uppercase tracking-widest hover:text-primary transition-colors"
                        href="#">Privacy Policy</a>
                    <a class="text-[10px] font-bold text-outline uppercase tracking-widest hover:text-primary transition-colors"
                        href="#">Terms of Service</a>
                    <a class="text-[10px] font-bold text-outline uppercase tracking-widest hover:text-primary transition-colors"
                        href="#">Data Protocol</a>
                </footer>
            </div>
        </section>
    </main>
    <!-- SideNavBar & BottomNavBar Suppressed for Transactional Screen -->
</body>

</html>