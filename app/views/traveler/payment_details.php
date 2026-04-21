<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Payment Details - The Earth Architect</title>
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
                    colors: {
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
                    borderRadius: {
                        "DEFAULT": "0px",
                        "lg": "0px",
                        "xl": "0px",
                        "full": "0px"
                    },
                    fontFamily: {
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

<body class="bg-surface text-on-surface font-body antialiased min-h-screen">
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <header class="mb-12">
            <h1 class="font-headline text-4xl font-extrabold tracking-tighter text-primary mb-2">Secure Checkout</h1>
            <p class="font-body text-on-surface-variant">Review your expedition details and complete your booking.</p>
        </header>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            <div class="lg:col-span-7 space-y-8">
                <section
                    class="bg-surface-container p-8 shadow-[0_20px_40px_rgba(25,28,25,0.06)] relative overflow-hidden">
                    <h2 class="font-headline text-2xl font-bold text-primary mb-6 flex items-center gap-2">
                        <span class="material-symbols-outlined">credit_card</span>
                        Payment Details
                    </h2>
                    <form class="space-y-6">
                        <div class="space-y-4">
                            <div>
                                <label class="block font-label text-sm font-medium text-on-surface-variant mb-1"
                                    for="card-name">Name on Card</label>
                                <input
                                    class="w-full bg-surface-container-lowest border border-outline text-on-surface focus:ring-2 focus:ring-primary focus:border-primary transition-colors py-3 px-4 outline-none"
                                    id="card-name" placeholder="Jane Doe" type="text" />
                            </div>
                            <div>
                                <label class="block font-label text-sm font-medium text-on-surface-variant mb-1"
                                    for="card-number">Card Number</label>
                                <div class="relative">
                                    <span
                                        class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">credit_score</span>
                                    <input
                                        class="w-full bg-surface-container-lowest border border-outline text-on-surface focus:ring-2 focus:ring-primary focus:border-primary transition-colors py-3 pl-12 pr-4 outline-none"
                                        id="card-number" placeholder="0000 0000 0000 0000" type="text" />
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block font-label text-sm font-medium text-on-surface-variant mb-1"
                                        for="expiry">Expiry Date</label>
                                    <input
                                        class="w-full bg-surface-container-lowest border border-outline text-on-surface focus:ring-2 focus:ring-primary focus:border-primary transition-colors py-3 px-4 outline-none"
                                        id="expiry" placeholder="MM/YY" type="text" />
                                </div>
                                <div>
                                    <label class="block font-label text-sm font-medium text-on-surface-variant mb-1"
                                        for="cvc">CVC</label>
                                    <div class="relative">
                                        <input
                                            class="w-full bg-surface-container-lowest border border-outline text-on-surface focus:ring-2 focus:ring-primary focus:border-primary transition-colors py-3 px-4 outline-none"
                                            id="cvc" placeholder="123" type="text" />
                                        <span
                                            class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-outline text-sm cursor-help"
                                            title="3 or 4 digits on back of card">help</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-6 mt-6 border-t border-surface-variant">
                            <h3 class="font-headline text-lg font-bold text-primary mb-4">Billing Address</h3>
                            <div class="space-y-4">
                                <div>
                                    <label class="block font-label text-sm font-medium text-on-surface-variant mb-1"
                                        for="address">Street Address</label>
                                    <input
                                        class="w-full bg-surface-container-lowest border border-outline text-on-surface focus:ring-2 focus:ring-primary focus:border-primary transition-colors py-3 px-4 outline-none"
                                        id="address" placeholder="123 Eco Way" type="text" />
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block font-label text-sm font-medium text-on-surface-variant mb-1"
                                            for="city">City</label>
                                        <input
                                            class="w-full bg-surface-container-lowest border border-outline text-on-surface focus:ring-2 focus:ring-primary focus:border-primary transition-colors py-3 px-4 outline-none"
                                            id="city" placeholder="Portland" type="text" />
                                    </div>
                                    <div>
                                        <label class="block font-label text-sm font-medium text-on-surface-variant mb-1"
                                            for="zip">ZIP / Postal Code</label>
                                        <input
                                            class="w-full bg-surface-container-lowest border border-outline text-on-surface focus:ring-2 focus:ring-primary focus:border-primary transition-colors py-3 px-4 outline-none"
                                            id="zip" placeholder="97204" type="text" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button
                            class="w-full bg-primary text-on-primary font-label font-bold py-4 px-6 hover:bg-primary-fixed-dim hover:text-on-primary-fixed transition-colors flex items-center justify-center gap-2 mt-8"
                            type="button">
                            <span class="material-symbols-outlined text-lg">lock</span>
                            Confirm Payment - $3,450.00
                        </button>
                        <p
                            class="text-center font-body text-xs text-on-surface-variant mt-3 flex items-center justify-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">verified_user</span> Payments are secure
                            and encrypted.
                        </p>
                    </form>
                </section>
            </div>
            <div class="lg:col-span-5 space-y-6">
                <section class="bg-surface-container-low p-6 shadow-[0_20px_40px_rgba(25,28,25,0.06)]">
                    <div class="aspect-[4/3] w-full bg-surface-variant mb-6 relative overflow-hidden">
                        <img alt="Lush green rainforest canopy from above" class="w-full h-full object-cover"
                            data-alt="aerial view of dense ancient rainforest canopy with misty atmosphere in deep emerald greens"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCy9WE82r5idvElgbLinDUxVkP01kcj_W_ymnk2RsfTOaulc3sTkxgyIWjhMffpblDTEvH1Gqf4Hz2EM8h0hyZUvNKcQHB8Z7u8lz4Cx67Y-LxD9RXBGAIGs_y6MuJAZIxxrmNUrKHgQTAiXWgL1TDxg4zqZT5aMOweICcyQr9zrdwu3ZirzRe5zJcwCB1aemKgMPfFzZ7RjpAQxBUN40ZYRfhnvrPJuQRfDHJIIbbYheqIpzXoVrRnZFFvIbBzFWmZ3dqiRyIadk" />
                        <div
                            class="absolute top-4 right-4 bg-tertiary-container text-on-tertiary-container font-label text-xs font-bold px-3 py-1 flex items-center gap-1 shadow-sm">
                            <span class="material-symbols-outlined text-sm"
                                style="font-variation-settings: 'FILL' 1;">eco</span>
                            Eco-Certified
                        </div>
                    </div>
                    <h3 class="font-headline text-2xl font-bold text-primary mb-2">Amazonian Canopy Tour</h3>
                    <p class="font-body text-sm text-on-surface-variant mb-6 flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm">calendar_month</span> Oct 12 - Oct 18, 2024
                    </p>
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between items-center py-2 border-b border-outline-variant/30">
                            <span class="font-body text-sm text-on-surface-variant">Expedition Cost (2 Adults)</span>
                            <span class="font-body text-sm font-semibold text-on-surface">$3,200.00</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-outline-variant/30">
                            <span class="font-body text-sm text-on-surface-variant">Local Guide Fee</span>
                            <span class="font-body text-sm font-semibold text-on-surface">$150.00</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-outline-variant/30">
                            <span class="font-body text-sm text-on-surface-variant">Carbon Offset Contribution</span>
                            <span class="font-body text-sm font-semibold text-on-surface">$45.00</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-outline-variant/30">
                            <span class="font-body text-sm text-on-surface-variant">Taxes &amp; Fees</span>
                            <span class="font-body text-sm font-semibold text-on-surface">$55.00</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-end pt-4">
                        <span class="font-headline text-lg font-bold text-primary">Total Amount</span>
                        <span class="font-headline text-3xl font-extrabold text-primary tracking-tight">$3,450.00</span>
                    </div>
                </section>
                <div class="bg-tertiary-container text-on-tertiary-container p-5 flex items-start gap-4 shadow-sm">
                    <span class="material-symbols-outlined text-2xl"
                        style="font-variation-settings: 'FILL' 1;">energy_savings_leaf</span>
                    <div>
                        <h4 class="font-label font-bold text-sm mb-1">Impact Chip</h4>
                        <p class="font-body text-xs opacity-90">This booking offsets 150kg of CO2 and supports local
                            indigenous conservation projects.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>