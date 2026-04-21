<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Booking Voucher - The Earth Architect</title>
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
                        "headline": ["Manrope", "sans-serif"],
                        "body": ["Inter", "sans-serif"],
                        "label": ["Inter", "sans-serif"]
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

        .gradient-primary {
            background: linear-gradient(135deg, #163422 0%, #2d4b37 100%);
        }
    </style>
</head>

<body class="bg-surface text-on-surface min-h-screen flex items-center justify-center p-4 md:p-8 antialiased">
    <!-- Main Content Canvas - Focused Journey (Navigation Suppressed) -->
    <main class="w-full max-w-4xl mx-auto flex flex-col md:flex-row gap-0 shadow-[0px_20px_40px_rgba(25,28,25,0.06)]">
        <!-- Left Column: Success Message & Imagery -->
        <section
            class="flex-1 bg-surface-container-lowest p-8 md:p-12 flex flex-col justify-between border-b md:border-b-0 md:border-r border-outline-variant/15 relative overflow-hidden">
            <!-- Background Image overlay -->
            <div class="absolute inset-0 z-0 opacity-20 bg-cover bg-center"
                data-alt="close up of textured green leaves in a dense tropical rainforest with subtle light filtering through"
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDlrtbvD-1wjTX2utsvl2m3_Lyk8rN0YZZzpAcfIYQqrDjs06bk9rQzBHOnCiv8x_DyknXIf9wZrrjLZsKMPOb1n6z3X4IovAqE8HVyseYLy5Tri1WFMkH510KlW3JBAG6RGVPV_1HAewAltngZtXiQAvNKyBsFV_jdcp-NzyamTUqjsV5nPXfhBJYJBqbrq8myJQ_JS0lOXL4jTKm65cAOdaHWVwIdjCUFSfUSTQz5O_ib1npAkQQoZJ-sA7Tk7-b24lcLcExbNBQ');">
            </div>
            <div class="relative z-10">
                <div class="w-16 h-16 bg-primary text-on-primary flex items-center justify-center mb-8">
                    <span class="material-symbols-outlined text-4xl" data-icon="check_circle" data-weight="fill"
                        style="font-variation-settings: 'FILL' 1;">check_circle</span>
                </div>
                <h1 class="font-headline text-5xl md:text-6xl font-bold tracking-tight text-primary mb-4">
                    Payment<br />Successful</h1>
                <p class="font-body text-on-surface-variant text-lg max-w-md leading-relaxed">
                    Your journey with The Earth Architect is confirmed. Prepare for an immersive experience rooted in
                    nature's precision.
                </p>
            </div>
            <div class="relative z-10 mt-16">
                <div class="bg-surface/80 backdrop-blur-md p-6 border border-outline-variant/15">
                    <h3 class="font-headline text-xl font-bold text-primary mb-2">Next Steps</h3>
                    <ul class="font-body text-sm text-on-surface-variant space-y-3">
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary text-lg" data-icon="mail">mail</span>
                            <span>A detailed itinerary has been sent to your email.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-primary text-lg"
                                data-icon="luggage">luggage</span>
                            <span>Review the required packing list for this terrain.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Right Column: Voucher Details -->
        <section class="w-full md:w-[400px] bg-surface-container-low p-8 flex flex-col relative">
            <div class="flex justify-between items-start mb-12">
                <h2 class="font-headline text-2xl font-bold text-on-surface tracking-tight">Booking Voucher</h2>
                <button
                    class="text-primary hover:text-primary-container transition-colors flex items-center gap-2 font-label text-sm font-medium">
                    <span class="material-symbols-outlined text-xl" data-icon="download">download</span>
                    Save PDF
                </button>
            </div>
            <div class="bg-surface-container-lowest p-6 shadow-sm mb-8 border border-outline-variant/15 relative">
                <!-- Corner accents for brutalist feel -->
                <div class="absolute top-0 left-0 w-2 h-2 bg-primary"></div>
                <div class="absolute top-0 right-0 w-2 h-2 bg-primary"></div>
                <div class="absolute bottom-0 left-0 w-2 h-2 bg-primary"></div>
                <div class="absolute bottom-0 right-0 w-2 h-2 bg-primary"></div>
                <div class="text-center mb-6">
                    <div
                        class="w-48 h-48 mx-auto bg-surface-container flex items-center justify-center border border-outline-variant/30 mb-4">
                        <!-- Placeholder for actual QR code image -->
                        <img alt="QR Code" class="w-full h-full object-cover grayscale contrast-125"
                            data-alt="black and white high contrast qr code pattern filling the frame perfectly square"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCn-cdzDQq-spVhwShbTJZMFQE8EqGyeVvRgEEck_4roikeUe7oXBKoXMxQPKDnqv2S7tfORS3DQiXOIUwfg4Xo5bT_UhwgTnyD1W63W8w4Cqtb8KDKS9MwNJEuHdYIJbvE1NIr8M84S44JCg7erLfznbbg5QHmCqFGMeMpk0A2blJkMpKS8EyeTf_s8NbyenfIuDP3XNlJJ3pHI2fFjxUUzyyTbsdVJ413aCLRPRjrbpzndFSSHZnFjX-vqLwRjaKFOAbG6HM9ZFk" />
                    </div>
                    <p class="font-label text-xs text-on-surface-variant tracking-widest uppercase">Scan at Arrival</p>
                </div>
                <div class="space-y-4 font-body text-sm">
                    <div class="flex justify-between items-baseline border-b border-outline-variant/15 pb-2">
                        <span class="text-on-surface-variant">Tour Name</span>
                        <span class="font-medium text-on-surface text-right max-w-[150px] truncate">Canopy Walk
                            Expedition</span>
                    </div>
                    <div class="flex justify-between items-baseline border-b border-outline-variant/15 pb-2">
                        <span class="text-on-surface-variant">Booking ID</span>
                        <span class="font-medium text-on-surface font-mono">EA-8890-CV</span>
                    </div>
                    <div class="flex justify-between items-baseline border-b border-outline-variant/15 pb-2">
                        <span class="text-on-surface-variant">Traveler ID</span>
                        <span class="font-medium text-on-surface font-mono">TRV-442-99</span>
                    </div>
                    <div class="flex justify-between items-baseline pb-2">
                        <span class="text-on-surface-variant">Guide ID</span>
                        <span class="font-medium text-on-surface font-mono">GD-014-X</span>
                    </div>
                </div>
            </div>
            <!-- Impact Chip -->
            <div class="mt-auto bg-tertiary-container text-on-tertiary-container p-4 flex items-center gap-4">
                <div class="bg-on-tertiary-container/10 p-2">
                    <span class="material-symbols-outlined text-2xl" data-icon="eco">eco</span>
                </div>
                <div>
                    <h4 class="font-headline font-bold text-sm">Sustainability Impact</h4>
                    <p class="font-body text-xs opacity-90">Carbon Offset Confirmed: 25kg CO2e</p>
                </div>
            </div>
            <button
                class="w-full mt-6 gradient-primary text-on-primary py-4 font-label font-medium tracking-wide hover:opacity-90 transition-opacity">
                Return to Dashboard
            </button>
        </section>
    </main>
</body>

</html>