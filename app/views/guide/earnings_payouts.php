<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Earnings &amp; Payouts - EcoPortal</title>
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
                        "surface-tint": "#466550",
                        "surface-dim": "#d9dbd6",
                        "secondary-fixed-dim": "#e6c093",
                        "error-container": "#ffdad6",
                        "outline": "#727972",
                        "secondary-container": "#fed6a7",
                        "inverse-on-surface": "#f0f1ec",
                        "on-tertiary-fixed": "#241a03",
                        "error": "#ba1a1a",
                        "on-error": "#ffffff",
                        "on-secondary-container": "#795b36",
                        "on-primary": "#ffffff",
                        "primary": "#163422",
                        "on-secondary": "#ffffff",
                        "tertiary-fixed": "#f5e0ba",
                        "tertiary": "#392d13",
                        "on-tertiary": "#ffffff",
                        "surface-container-high": "#e7e9e4",
                        "outline-variant": "#c2c8c0",
                        "tertiary-container": "#504327",
                        "on-background": "#191c19",
                        "background": "#f8faf5",
                        "surface-variant": "#e1e3de",
                        "tertiary-fixed-dim": "#d8c49f",
                        "on-primary-fixed": "#022110",
                        "surface-bright": "#f8faf5",
                        "primary-fixed-dim": "#adcfb4",
                        "on-primary-container": "#99baa1",
                        "inverse-primary": "#adcfb4",
                        "on-tertiary-fixed-variant": "#534529",
                        "on-tertiary-container": "#c3b08c",
                        "on-surface": "#191c19",
                        "on-secondary-fixed-variant": "#5c421f",
                        "on-error-container": "#93000a",
                        "on-surface-variant": "#424843",
                        "primary-container": "#2d4b37",
                        "primary-fixed": "#c8ebd0",
                        "surface-container": "#edeee9",
                        "surface": "#f8faf5",
                        "on-primary-fixed-variant": "#2f4d39",
                        "surface-container-low": "#f3f4ef",
                        "on-secondary-fixed": "#2a1800",
                        "surface-container-highest": "#e1e3de",
                        "secondary": "#765934",
                        "secondary-fixed": "#ffddb6",
                        "inverse-surface": "#2e312e",
                        "surface-container-lowest": "#ffffff"
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
                }
            }
        }
    </script>
    <style>
        .gradient-cta {
            background: linear-gradient(135deg, #163422 0%, #2d4b37 100%);
        }
    </style>
</head>

<body class="bg-background text-on-background font-body min-h-screen">
    <aside
        class="fixed left-0 top-0 h-full flex flex-col z-40 bg-[#f8faf5] dark:bg-stone-950 rounded-none w-72 border-r border-[#727972]/15 shadow-none">
        <div class="p-6 flex flex-col gap-2">
            <div class="flex items-center gap-3 mb-6">
                <div
                    class="w-10 h-10 bg-primary-container rounded-none flex items-center justify-center overflow-hidden">
                    <span class="material-symbols-outlined text-on-primary-container">nature_people</span>
                </div>
                <div>
                    <h1
                        class="text-2xl font-black tracking-tighter text-[#163422] dark:text-emerald-400 font-headline uppercase">
                        EcoPortal</h1>
                    <p class="text-xs font-medium text-[#2d4b37] dark:text-stone-400 font-label">Certified Guide</p>
                </div>
            </div>
        </div>
        <nav class="flex-1 overflow-y-auto py-4">
            <ul class="flex flex-col font-['Manrope'] font-bold tracking-tight uppercase">
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="guide_dashboard.php">
                        <span class="material-symbols-outlined">grid_view</span>
                        Overview
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=schedule">
                        <span class="material-symbols-outlined">calendar_today</span>
                        Schedule
                    </a>
                </li>
                <li>
                    <a class="bg-[#dbe7dd] dark:bg-stone-700 text-[#2d4b37] font-semibold px-6 py-4 flex items-center gap-4 border-l-4 border-[#2d4b37]"
                        href="all_functions.php?tab=earnings">
                        <span class="material-symbols-outlined">payments</span>
                        Earnings
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=reports">
                        <span class="material-symbols-outlined">article</span>
                        Field Reports
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=certs">
                        <span class="material-symbols-outlined">verified</span>
                        Certifications
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=tags">
                        <span class="material-symbols-outlined">sell</span>
                        Impact Tags
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=badges">
                        <span class="material-symbols-outlined">workspace_premium</span>
                        Badges
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=identity">
                        <span class="material-symbols-outlined">badge</span>
                        Identity
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="all_functions.php?tab=vouchers">
                        <span class="material-symbols-outlined">qr_code</span>
                        Vouchers
                    </a>
                </li>
            </ul>
        </nav>
        <div class="mt-auto border-t border-[#727972]/15 pt-4 pb-6">
            <ul class="flex flex-col font-['Manrope'] font-bold tracking-tight uppercase">
                <li>
                    <a class="text-[#2d4b37] dark:text-stone-400 font-medium px-6 py-3 flex items-center gap-4 hover:bg-[#edeee9] dark:hover:bg-stone-800 transition-colors duration-200 active:brightness-90"
                        href="/eco_full/index.php?logout=1">
                        <span class="material-symbols-outlined">logout</span>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <header
        class="sticky top-0 right-0 w-[calc(100%-18rem)] ml-72 flex justify-between items-center px-8 h-20 z-30 bg-[#f8faf5]/80 backdrop-blur-md text-[#163422] font-['Inter'] font-medium text-sm rounded-none border-b border-[#727972]/15 shadow-sm shadow-[#191c19]/5">
        <div class="text-lg font-extrabold text-[#163422] font-headline">
            Guide Dashboard
        </div>
        <div class="flex items-center gap-8">
            <nav class="flex gap-6">
                <a class="text-[#727972] hover:text-[#163422] transition-colors" href="#">Analytics</a>
                <a class="text-[#727972] hover:text-[#163422] transition-colors" href="#">Resource Hub</a>
            </nav>
            <div class="flex items-center gap-4 border-l border-outline-variant/30 pl-6">
                <button
                    class="bg-[#163422] text-[#ffffff] px-5 py-2 font-bold rounded-none hover:bg-primary-fixed-dim hover:text-on-primary-fixed transition-colors">
                    Go Live
                </button>
                <div class="flex items-center gap-3 text-[#163422]">
                    <button class="p-2 hover:bg-[#edeee9] rounded-none transition-colors"><span
                            class="material-symbols-outlined">notifications</span></button>
                    <button class="p-2 hover:bg-[#edeee9] rounded-none transition-colors"><span
                            class="material-symbols-outlined">mail</span></button>
                    <button class="p-2 hover:bg-[#edeee9] rounded-none transition-colors"><span
                            class="material-symbols-outlined">account_circle</span></button>
                </div>
            </div>
        </div>
    </header>
    <main
        class="w-[calc(100%-18rem)] ml-72 p-10 lg:p-16 min-h-[calc(100vh-5rem)] bg-surface-bright flex flex-col gap-12">
        <section class="flex justify-between items-end">
            <div>
                <h2 class="font-headline text-5xl text-primary tracking-tight -ml-1">Earnings &amp; Payouts</h2>
                <p class="text-on-surface-variant font-body mt-3 max-w-xl leading-relaxed">Manage your revenue from
                    completed tours, track pending clearances, and withdraw funds to your connected accounts.</p>
            </div>
            <button
                class="gradient-cta text-on-primary px-8 py-4 font-headline font-bold text-sm tracking-wide uppercase shadow-lg shadow-primary/10 hover:brightness-110 active:scale-95 transition-all">
                Create Withdrawal Request
            </button>
        </section>
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div
                class="bg-surface-container-low p-8 relative overflow-hidden group hover:bg-surface-container transition-colors">
                <div class="absolute -right-6 -top-6 text-primary/5 group-hover:text-primary/10 transition-colors">
                    <span class="material-symbols-outlined text-9xl">account_balance_wallet</span>
                </div>
                <p class="font-label text-sm text-on-surface-variant uppercase tracking-widest font-semibold mb-2">
                    Available to Withdraw</p>
                <p class="font-headline text-5xl text-primary font-bold">$4,250.00</p>
                <div
                    class="mt-6 inline-flex items-center gap-2 bg-surface px-3 py-1 text-xs font-label text-on-surface-variant outline outline-1 outline-outline-variant/30">
                    <span class="material-symbols-outlined text-base">check_circle</span> Ready for transfer
                </div>
            </div>
            <div class="bg-surface-container-lowest p-8 outline outline-1 outline-outline-variant/15">
                <p class="font-label text-sm text-on-surface-variant uppercase tracking-widest font-semibold mb-2">
                    Pending Clearance</p>
                <p class="font-headline text-4xl text-on-surface">$840.00</p>
                <p class="font-body text-sm text-outline mt-2">From 3 recent tours.</p>
            </div>
            <div class="bg-surface-container-lowest p-8 outline outline-1 outline-outline-variant/15">
                <p class="font-label text-sm text-on-surface-variant uppercase tracking-widest font-semibold mb-2">
                    Lifetime Earnings</p>
                <p class="font-headline text-4xl text-on-surface">$28,945.00</p>
                <p class="font-body text-sm text-outline mt-2">Since joining EcoPortal.</p>
            </div>
        </section>
        <section class="flex flex-col gap-6 mt-4">
            <h3 class="font-headline text-2xl text-primary font-bold tracking-tight">Recent Transactions</h3>
            <div class="bg-surface-container-low p-1">
                <div
                    class="grid grid-cols-12 gap-4 px-6 py-4 text-xs font-label text-on-surface-variant uppercase tracking-widest font-semibold">
                    <div class="col-span-2">Date</div>
                    <div class="col-span-5">Tour Name</div>
                    <div class="col-span-3 text-right">Amount</div>
                    <div class="col-span-2 text-right">Status</div>
                </div>
                <div class="flex flex-col gap-1">
                    <div
                        class="grid grid-cols-12 gap-4 px-6 py-5 bg-surface-container-lowest items-center hover:bg-surface-bright transition-colors">
                        <div class="col-span-2 font-body text-sm text-on-surface">Oct 24, 2023</div>
                        <div class="col-span-5 font-headline font-bold text-primary">Redwood Canopy Walk</div>
                        <div class="col-span-3 text-right font-body font-semibold text-on-surface">+$320.00</div>
                        <div class="col-span-2 flex justify-end">
                            <span
                                class="bg-surface-container px-3 py-1 text-xs font-label text-on-surface-variant font-medium">Cleared</span>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-12 gap-4 px-6 py-5 bg-surface-container-lowest items-center hover:bg-surface-bright transition-colors">
                        <div class="col-span-2 font-body text-sm text-on-surface">Oct 22, 2023</div>
                        <div class="col-span-5 font-headline font-bold text-primary">Coastal Foraging Masterclass</div>
                        <div class="col-span-3 text-right font-body font-semibold text-on-surface">+$450.00</div>
                        <div class="col-span-2 flex justify-end">
                            <span
                                class="bg-primary-container/20 text-primary-container px-3 py-1 text-xs font-label font-medium">Pending</span>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-12 gap-4 px-6 py-5 bg-surface-container-lowest items-center hover:bg-surface-bright transition-colors">
                        <div class="col-span-2 font-body text-sm text-on-surface">Oct 18, 2023</div>
                        <div class="col-span-5 font-headline font-bold text-primary">Withdrawal to Bank ****4092</div>
                        <div class="col-span-3 text-right font-body font-semibold text-on-surface-variant">-$1,200.00
                        </div>
                        <div class="col-span-2 flex justify-end">
                            <span
                                class="bg-surface-container px-3 py-1 text-xs font-label text-on-surface-variant font-medium">Completed</span>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-12 gap-4 px-6 py-5 bg-surface-container-lowest items-center hover:bg-surface-bright transition-colors">
                        <div class="col-span-2 font-body text-sm text-on-surface">Oct 15, 2023</div>
                        <div class="col-span-5 font-headline font-bold text-primary">Alpine Ridge Hike</div>
                        <div class="col-span-3 text-right font-body font-semibold text-on-surface">+$280.00</div>
                        <div class="col-span-2 flex justify-end">
                            <span
                                class="bg-surface-container px-3 py-1 text-xs font-label text-on-surface-variant font-medium">Cleared</span>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-12 gap-4 px-6 py-5 bg-surface-container-lowest items-center hover:bg-surface-bright transition-colors">
                        <div class="col-span-2 font-body text-sm text-on-surface">Oct 12, 2023</div>
                        <div class="col-span-5 font-headline font-bold text-primary">Night Photography Workshop</div>
                        <div class="col-span-3 text-right font-body font-semibold text-on-surface">+$190.00</div>
                        <div class="col-span-2 flex justify-end">
                            <span
                                class="bg-surface-container px-3 py-1 text-xs font-label text-on-surface-variant font-medium">Cleared</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-4">
                <button
                    class="text-primary font-headline font-bold text-sm uppercase tracking-wide hover:underline underline-offset-4 decoration-2">
                    Load More Transactions
                </button>
            </div>
        </section>
    </main>
</body>

</html>