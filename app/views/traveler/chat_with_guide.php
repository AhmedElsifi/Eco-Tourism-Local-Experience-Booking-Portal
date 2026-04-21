<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Chat - The Earth Architect</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Manrope:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Tailwind Configuration (Design System Tokens) -->
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
                        "sm": "0px",
                        "md": "0px",
                        "lg": "0px",
                        "xl": "0px",
                        "2xl": "0px",
                        "3xl": "0px",
                        "full": "0px"
                    },
                    "fontFamily": {
                        "headline": ["Manrope", "sans-serif"],
                        "body": ["Inter", "sans-serif"],
                        "label": ["Inter", "sans-serif"]
                    },
                    "boxShadow": {
                        'ambient': '0px 20px 40px rgba(25, 28, 25, 0.06)',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-background text-on-background font-body h-screen w-full flex overflow-hidden antialiased">
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
    <!-- Main Canvas Area -->
    <main class="flex-1 ml-64 mt-16 bg-surface flex flex-col h-[calc(100vh-4rem)] relative">
        <!-- Chat Context Header -->
        <div class="bg-surface-container-low px-8 py-6 flex items-center justify-between shrink-0">
            <div class="flex items-center gap-6">
                <div class="h-16 w-16 bg-surface-container-highest overflow-hidden">
                    <img alt="Local Guide" class="h-full w-full object-cover"
                        data-alt="Close up portrait of a rugged local mountain guide in forest environment"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBFGxE1hk6gCGAzQPxAUWwRdWdox--0W1QoE0t64Y7YfTOUlUxLgs_Crx8x_3WAh2JfQ-JwIpdv2pZW8uOtZZYbWIm9rtj_tTokM2Y18ARuYY9TVs-8gG3iF8TS7Zgc2Y3X2qlZUx5PSLwPVcVljL7fUVMHT4qOdPicj_OPXLYnlyHvpHUFnffP26Ooo3sszlu1MUbpkc-P38qh0-TaFftggQmcZ4IUC2uUHRvp8YwRF2nnK25nPYTB-9_gjcy7oIjKK3EgQLkBOso" />
                </div>
                <div>
                    <h2 class="font-headline font-bold text-xl text-on-surface">Elias Thorne</h2>
                    <p class="font-body text-sm text-on-surface-variant mt-1 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[16px]">location_on</span>
                        Patagonia Highland Trek
                    </p>
                </div>
            </div>
            <!-- Impact Chip -->
            <div
                class="bg-tertiary-container px-4 py-2 text-on-tertiary-container font-label text-xs font-semibold uppercase tracking-wider flex items-center gap-2">
                <span class="material-symbols-outlined text-[14px]">eco</span>
                Carbon Neutral Trip
            </div>
        </div>
        <!-- Message History -->
        <div class="flex-1 overflow-y-auto px-8 py-10 flex flex-col gap-8 bg-surface">
            <!-- Date Divider -->
            <div class="flex justify-center">
                <span
                    class="bg-surface-container text-on-surface-variant font-label text-xs px-4 py-1 uppercase tracking-widest">Today</span>
            </div>
            <!-- Guide Message (Receiver) -->
            <div class="flex flex-col items-start max-w-2xl">
                <div class="flex items-baseline gap-3 mb-2">
                    <span class="font-headline font-semibold text-sm text-on-surface">Elias Thorne</span>
                    <span class="font-label text-xs text-on-surface-variant">08:45 AM</span>
                </div>
                <div
                    class="bg-surface-container-high text-on-surface p-6 text-sm leading-relaxed border-l-4 border-outline-variant/40">
                    Good morning! I've checked the weather patterns for our ascent tomorrow. The front is moving out
                    faster than expected. We should have clear skies by 10 AM, but the temperature will drop
                    significantly near the ridge.
                </div>
            </div>
            <!-- Guide Message (Receiver) -->
            <div class="flex flex-col items-start max-w-2xl mt-[-16px]">
                <div
                    class="bg-surface-container-high text-on-surface p-6 text-sm leading-relaxed border-l-4 border-outline-variant/40">
                    Please ensure your base layers are strictly merino wool as discussed. Avoid synthetics for this
                    segment. Let me know if you need to rent an additional thermal shell from the outpost.
                </div>
            </div>
            <!-- Traveler Message (Sender) -->
            <div class="flex flex-col items-end max-w-2xl self-end">
                <div class="flex items-baseline gap-3 mb-2">
                    <span class="font-label text-xs text-on-surface-variant">09:12 AM</span>
                    <span class="font-headline font-semibold text-sm text-on-surface">You</span>
                </div>
                <div class="bg-primary text-on-primary p-6 text-sm leading-relaxed shadow-ambient">
                    Understood, Elias. I have the merino layers packed. I think I'm good on the thermal shell, but I'll
                    double-check my gear list tonight.
                </div>
            </div>
            <!-- Traveler Message (Sender) -->
            <div class="flex flex-col items-end max-w-2xl self-end mt-[-16px]">
                <div class="bg-primary text-on-primary p-6 text-sm leading-relaxed shadow-ambient">
                    What time are we meeting at the trailhead?
                </div>
            </div>
            <!-- Guide Message (Receiver) -->
            <div class="flex flex-col items-start max-w-2xl">
                <div class="flex items-baseline gap-3 mb-2">
                    <span class="font-headline font-semibold text-sm text-on-surface">Elias Thorne</span>
                    <span class="font-label text-xs text-on-surface-variant">Just now</span>
                </div>
                <div
                    class="bg-surface-container-high text-on-surface p-6 text-sm leading-relaxed border-l-4 border-outline-variant/40">
                    05:30 AM sharp at the North Gate. It will be dark, so have your headlamps ready.
                </div>
            </div>
        </div>
        <!-- Chat Input Area -->
        <div class="bg-surface-container-low p-6 shrink-0 relative">
            <!-- Ghost border simulation for separation without explicit line -->
            <div class="absolute top-0 left-0 w-full h-[1px] bg-outline-variant opacity-15"></div>
            <div class="flex items-end gap-4">
                <!-- Attachment Button -->
                <button
                    class="h-14 w-14 bg-surface-container flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high transition-colors focus:outline-none focus:ring-2 focus:ring-primary focus:ring-inset shrink-0">
                    <span class="material-symbols-outlined">add</span>
                </button>
                <!-- Text Input -->
                <div class="flex-grow relative">
                    <textarea
                        class="w-full bg-surface-container-lowest text-on-surface border border-outline p-4 pr-12 focus:outline-none focus:border-2 focus:border-primary focus:ring-0 resize-none overflow-hidden min-h-[56px] text-sm font-body"
                        placeholder="Type your message..." rows="1"></textarea>
                </div>
                <!-- Send Button -->
                <button
                    class="h-14 px-8 bg-primary text-on-primary hover:bg-primary-fixed-dim transition-colors flex items-center justify-center gap-2 font-headline font-bold text-sm tracking-wide focus:outline-none focus:ring-2 focus:ring-primary-fixed focus:ring-offset-2 shrink-0 shadow-ambient">
                    <span>Send</span>
                    <span class="material-symbols-outlined text-[18px]">send</span>
                </button>
            </div>
            <div class="mt-3 flex justify-between items-center text-xs text-on-surface-variant font-label">
                <span>Press Enter to send, Shift+Enter for new line</span>
                <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">lock</span>
                    End-to-end encrypted</span>
            </div>
        </div>
    </main>
</body>

</html>