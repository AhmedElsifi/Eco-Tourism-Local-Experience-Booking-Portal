<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Auditor Onboarding | EcoPortal</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&amp;family=Inter:wght@400;500;600;700&amp;display=swap"
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
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: 'Manrope', sans-serif;
        }

        .square-corners-transition {
            transition: all 0.2s ease-in-out;
        }
    </style>
</head>

<body class="bg-surface text-on-surface">
    <main class="min-h-screen flex flex-col md:flex-row">
        <!-- Left Side: Atmospheric Imagery (Asymmetric Layout) -->
        <section
            class="w-full md:w-1/2 bg-primary-container relative overflow-hidden flex flex-col justify-center p-12 lg:p-24">
            <div class="absolute inset-0 opacity-40 mix-blend-overlay">
                <img alt="Topographic precision" class="w-full h-full object-cover"
                    data-alt="high-angle shot of structured evergreen forest with precise topographic lines and misty atmosphere in muted green tones"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAPG8lX3hHH9v9ZuzVDiWw0dvyzz__J09utfckf_V8a-26A-UghK_FFvT5JHRpG6-grD8Eyh_fQpOtx_-iAVmJaJFg8fLJzKNo_d9CBi9GJth6HSfg8AV-ndBSu8o3PWwCy8DbmaLoiORmCAlrqDZFmqjfdHFdvH6Wc--5WaRDG2ZrzLQVVltMetrPrwTHB58beLSuoC6-F45zvFfQC1KjaC6BMVAcKFBMiB74nv1CwPvzPKrrIzdOWSRH3UlzAr_SFiMUdnsWoWf4" />
            </div>
            <div class="relative z-10 space-y-8 max-w-lg">
                <div
                    class="inline-block bg-tertiary-container text-on-tertiary-container px-4 py-2 font-label text-xs uppercase tracking-widest">
                    Internal Verification Portal
                </div>
                <h1 class="text-5xl lg:text-7xl font-extrabold text-on-primary tracking-tighter leading-none">
                    Architects of <br />Sustainability.
                </h1>
                <p class="text-on-primary-container text-lg max-w-md font-body leading-relaxed">
                    Auditors maintain the precision of our ecosystem. We ensure every destination meets the rigorous
                    Earth Architect standards for ecological integrity.
                </p>
                <div class="pt-12 grid grid-cols-2 gap-4">
                    <div class="bg-surface/10 backdrop-blur-md p-6 border border-white/10">
                        <span class="material-symbols-outlined text-on-primary mb-4"
                            data-icon="verified_user">verified_user</span>
                        <h3 class="text-on-primary font-bold mb-2">Verified Integrity</h3>
                        <p class="text-on-primary-container text-xs leading-tight">Objective analysis of environmental
                            impact metrics.</p>
                    </div>
                    <div class="bg-surface/10 backdrop-blur-md p-6 border border-white/10 mt-8">
                        <span class="material-symbols-outlined text-on-primary mb-4"
                            data-icon="query_stats">query_stats</span>
                        <h3 class="text-on-primary font-bold mb-2">Precision Data</h3>
                        <p class="text-on-primary-container text-xs leading-tight">Advanced reporting for sustainability
                            charters.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Right Side: Onboarding Info & Action -->
        <section class="w-full md:w-1/2 bg-surface flex flex-col justify-center p-12 lg:p-24">
            <div class="max-w-md mx-auto w-full space-y-12">
                <header class="space-y-4">
                    <h2 class="text-3xl font-bold tracking-tight text-primary">Auditor Onboarding</h2>
                    <p class="text-on-surface-variant font-body">
                        Welcome, Auditor. As this is a restricted administrative role, your account must be provisioned
                        manually by a Super Admin.
                    </p>
                </header>
                <!-- Process Steps -->
                <div class="space-y-8">
                    <div class="flex items-start gap-6">
                        <span class="text-2xl font-black text-primary/20 shrink-0 font-headline">01</span>
                        <div>
                            <h4 class="font-bold text-primary mb-1">Verify Credentials</h4>
                            <p class="text-sm text-on-surface-variant">Ensure you have your institutional certification
                                and digital ID ready for verification.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-6">
                        <span class="text-2xl font-black text-primary/20 shrink-0 font-headline">02</span>
                        <div>
                            <h4 class="font-bold text-primary mb-1">Request Access</h4>
                            <h4 class="font-bold text-primary mb-1"></h4>
                            <p class="text-sm text-on-surface-variant">Submit the administrative inquiry form below to
                                notify the regional Super Admin.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-6">
                        <span class="text-2xl font-black text-primary/20 shrink-0 font-headline">03</span>
                        <div>
                            <h4 class="font-bold text-primary mb-1">Secure Activation</h4>
                            <p class="text-sm text-on-surface-variant">Receive your hardware key and encrypted
                                credentials via secure internal mail.</p>
                        </div>
                    </div>
                </div>
                <!-- Form Section -->
                <form class="space-y-6 pt-6">
                    <div class="space-y-2">
                        <label class="block text-xs font-bold uppercase tracking-widest text-outline">Full Legal
                            Name</label>
                        <input
                            class="w-full bg-surface-container-low border-none focus:ring-2 focus:ring-primary p-4 font-body text-sm placeholder:text-outline-variant"
                            placeholder="Arch. Julian Sterling" type="text" />
                    </div>
                    <div class="space-y-2">
                        <label class="block text-xs font-bold uppercase tracking-widest text-outline">Institutional
                            Email</label>
                        <input
                            class="w-full bg-surface-container-low border-none focus:ring-2 focus:ring-primary p-4 font-body text-sm placeholder:text-outline-variant"
                            placeholder="j.sterling@eco-portal.int" type="email" />
                    </div>
                    <div class="space-y-2">
                        <label class="block text-xs font-bold uppercase tracking-widest text-outline">Regional
                            Assignment</label>
                        <select
                            class="w-full bg-surface-container-low border-none focus:ring-2 focus:ring-primary p-4 font-body text-sm text-on-surface">
                            <option>Northern Archipelago</option>
                            <option>Central Highlands</option>
                            <option>Sub-Tropical Basin</option>
                            <option>Trans-Continental Hub</option>
                        </select>
                    </div>
                    <div class="pt-4">
                        <button
                            class="w-full bg-primary text-on-primary font-bold py-5 px-8 flex items-center justify-center gap-3 hover:bg-primary-container transition-colors group"
                            type="submit">
                            Submit Access Request
                            <span
                                class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform"
                                data-icon="arrow_forward">arrow_forward</span>
                        </button>
                    </div>
                    <p class="text-[10px] text-center text-outline leading-tight uppercase tracking-wider">
                        By submitting, you agree to the Sustainability Charter and Confidentiality Mandate.
                    </p>
                </form>
            </div>
        </section>
    </main>
</body>

</html>