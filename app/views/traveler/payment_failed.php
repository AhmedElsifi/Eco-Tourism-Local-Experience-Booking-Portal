<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Payment Failed - The Earth Architect</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
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
        * {
            border-radius: 0 !important;
        }

        .shadow-brutal {
            box-shadow: 0px 20px 40px rgba(25, 28, 25, 0.06);
        }
    </style>
</head>

<body class="bg-surface text-on-surface font-body min-h-screen">
    <main class="mx-auto my-auto pt-12 min-h-[calc(100vh-4rem)] flex items-center justify-center bg-surface">
        <div
            class="w-full max-w-3xl bg-surface-container-lowest p-16 shadow-brutal flex flex-col items-start relative overflow-hidden">
            <div
                class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-bl from-error-container/30 to-transparent pointer-events-none">
            </div>
            <div class="mb-10 w-full">
                <span class="material-symbols-outlined text-[64px] text-error mb-6"
                    style="font-variation-settings: 'FILL' 1;">error</span>
                <h1 class="font-headline text-5xl font-extrabold text-on-surface tracking-tighter mb-4">Payment Failed
                </h1>
                <p class="font-body text-lg text-on-surface-variant max-w-xl">
                    We were unable to secure your reservation. Your selected payment method was declined by the
                    provider.
                </p>
            </div>
            <div class="w-full bg-error-container p-8 mb-12 border-l-4 border-error">
                <div class="flex items-start gap-4">
                    <span class="material-symbols-outlined text-on-error-container mt-1">info</span>
                    <div>
                        <h2 class="font-headline font-bold text-xl text-on-error-container mb-2 tracking-tight">Bank
                            Response: Insufficient Funds</h2>
                        <p class="font-body text-on-error-container/80 leading-relaxed">
                            The transaction of <strong>$2,450.00 USD</strong> for the "Andean Cloud Forest Expedition"
                            could not be authorized. Please check your account balance or contact your bank to ensure
                            international transactions are permitted.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-surface-container p-6 mb-12 flex flex-wrap gap-8 justify-between items-center">
                <div>
                    <span
                        class="font-body text-xs font-semibold text-outline tracking-widest uppercase block mb-1">Reservation
                        ID</span>
                    <span class="font-headline font-bold text-on-surface text-lg">#ECO-2024-AF89</span>
                </div>
                <div>
                    <span
                        class="font-body text-xs font-semibold text-outline tracking-widest uppercase block mb-1">Attempted
                        Amount</span>
                    <span class="font-headline font-bold text-on-surface text-lg">$2,450.00</span>
                </div>
                <div>
                    <span
                        class="font-body text-xs font-semibold text-outline tracking-widest uppercase block mb-1">Status</span>
                    <span
                        class="inline-block bg-surface-container-highest text-on-surface-variant px-3 py-1 font-label text-sm font-bold">Unconfirmed</span>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-6 w-full mt-auto">
                <button
                    class="flex-1 bg-primary text-on-primary py-5 px-8 font-label text-base font-bold tracking-wide hover:bg-primary-fixed-dim hover:text-on-primary-fixed transition-colors duration-200 flex justify-center items-center gap-3">
                    <span class="material-symbols-outlined text-xl">credit_card</span>
                    Try Another Payment Method
                </button>
                <button
                    class="flex-1 bg-surface-container-high text-on-surface py-5 px-8 font-label text-base font-bold tracking-wide hover:bg-surface-variant transition-colors duration-200 flex justify-center items-center gap-3">
                    <span class="material-symbols-outlined text-xl">arrow_back</span>
                    Return to Booking Details
                </button>
            </div>
        </div>
    </main>
</body>

</html>