<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Terra Firma - Registration Portal</title>
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
                    "colors": {
                        "secondary": "#765934",
                        "primary": "#163422",
                        "inverse-primary": "#adcfb4",
                        "on-primary-fixed-variant": "#2f4d39",
                        "on-error": "#ffffff",
                        "on-surface-variant": "#424843",
                        "surface": "#f8faf5",
                        "outline-variant": "#c2c8c0",
                        "surface-bright": "#f8faf5",
                        "on-tertiary-fixed": "#241a03",
                        "on-primary-fixed": "#022110",
                        "secondary-container": "#fed6a7",
                        "on-tertiary-fixed-variant": "#534529",
                        "on-primary-container": "#99baa1",
                        "on-secondary-container": "#795b36",
                        "surface-container-low": "#f3f4ef",
                        "surface-container": "#edeee9",
                        "on-tertiary-container": "#c3b08c",
                        "background": "#f8faf5",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-high": "#e7e9e4",
                        "on-secondary": "#ffffff",
                        "on-primary": "#ffffff",
                        "surface-dim": "#d9dbd6",
                        "outline": "#727972",
                        "on-secondary-fixed": "#2a1800",
                        "tertiary-container": "#504327",
                        "on-surface": "#191c19",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed-dim": "#d8c49f",
                        "secondary-fixed-dim": "#e6c093",
                        "surface-variant": "#e1e3de",
                        "surface-container-highest": "#e1e3de",
                        "tertiary": "#392d13",
                        "primary-container": "#2d4b37",
                        "error-container": "#ffdad6",
                        "tertiary-fixed": "#f5e0ba",
                        "primary-fixed-dim": "#adcfb4",
                        "error": "#ba1a1a",
                        "secondary-fixed": "#ffddb6",
                        "primary-fixed": "#c8ebd0",
                        "on-secondary-fixed-variant": "#5c421f",
                        "inverse-on-surface": "#f0f1ec",
                        "on-error-container": "#93000a",
                        "surface-tint": "#466550",
                        "inverse-surface": "#2e312e",
                        "on-background": "#191c19"
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

        .brutal-shadow {
            box-shadow: 0px 20px 40px rgba(25, 28, 25, 0.06);
        }
    </style>
</head>

<body class="bg-surface text-on-surface min-h-screen flex flex-col">
    <!-- Main Content -->
    <main class="flex-grow pt-32 pb-20 px-6 max-w-7xl mx-auto w-full flex flex-col justify-center">
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-6xl font-extrabold text-primary mb-6 tracking-tight">Choose Your Path</h1>
            <p class="text-lg text-outline max-w-2xl mx-auto font-body">Join our ecosystem of sustainable exploration.
                Select your role to begin your journey with Terra Firma.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Register as Traveler -->
            <a class="group relative bg-surface-container-low border-0 p-10 flex flex-col justify-between aspect-square transition-all duration-300 hover:bg-surface-container-high hover:scale-[1.02] brutal-shadow"
                href="traveler_registration.php">
                <div class="absolute top-0 right-0 p-6 opacity-10 group-hover:opacity-20 transition-opacity">
                    <span class="material-symbols-outlined text-9xl">person</span>
                </div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-primary flex items-center justify-center mb-8">
                        <span class="material-symbols-outlined text-on-primary text-3xl"
                            data-icon="person">person</span>
                    </div>
                    <h3 class="text-3xl font-extrabold text-primary mb-4 leading-none">Register as Traveler</h3>
                    <p class="text-on-surface-variant font-body leading-relaxed">
                        Explore local hidden gems, book eco-conscious stays, and leave a positive footprint on the
                        world.
                    </p>
                </div>
                <div
                    class="flex items-center text-primary font-bold tracking-widest text-xs uppercase mt-8 group-hover:translate-x-2 transition-transform">
                    Get Started <span class="material-symbols-outlined ml-2 text-sm">arrow_forward</span>
                </div>
            </a>
            <!-- Register as Guide -->
            <a class="group relative bg-primary text-on-primary p-10 flex flex-col justify-between aspect-square transition-all duration-300 hover:bg-primary-container hover:scale-[1.02] brutal-shadow"
                href="guide_registration.php">
                <div class="absolute top-0 right-0 p-6 opacity-10 group-hover:opacity-20 transition-opacity">
                    <span class="material-symbols-outlined text-9xl">forest</span>
                </div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-surface-container-lowest flex items-center justify-center mb-8">
                        <span class="material-symbols-outlined text-primary text-3xl" data-icon="forest">forest</span>
                    </div>
                    <h3 class="text-3xl font-extrabold text-on-primary mb-4 leading-none">Register as Guide</h3>
                    <p class="text-on-primary-container font-body leading-relaxed opacity-90">
                        Share your local expertise, host meaningful experiences, and grow your sustainable tourism
                        business.
                    </p>
                </div>
                <div
                    class="flex items-center text-on-primary font-bold tracking-widest text-xs uppercase mt-8 group-hover:translate-x-2 transition-transform">
                    Host Now <span class="material-symbols-outlined ml-2 text-sm">arrow_forward</span>
                </div>
            </a>
            <!-- Register as Auditor -->
            <a class="group relative bg-surface-container-low border-0 p-10 flex flex-col justify-between aspect-square transition-all duration-300 hover:bg-surface-container-high hover:scale-[1.02] brutal-shadow"
                href="auditor_registration.php">
                <div class="absolute top-0 right-0 p-6 opacity-10 group-hover:opacity-20 transition-opacity">
                    <span class="material-symbols-outlined text-9xl">verified_user</span>
                </div>
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-secondary flex items-center justify-center mb-8">
                        <span class="material-symbols-outlined text-on-secondary text-3xl"
                            data-icon="verified_user">verified_user</span>
                    </div>
                    <h3 class="text-3xl font-extrabold text-primary mb-4 leading-none">Register as Auditor</h3>
                    <p class="text-on-surface-variant font-body leading-relaxed">
                        Verify sustainability standards, ensure ethical practices, and maintain the integrity of our
                        portal.
                    </p>
                </div>
                <div
                    class="flex items-center text-primary font-bold tracking-widest text-xs uppercase mt-8 group-hover:translate-x-2 transition-transform">
                    Apply Now <span class="material-symbols-outlined ml-2 text-sm">arrow_forward</span>
                </div>
            </a>
        </div>
    </main>
</body>

</html>