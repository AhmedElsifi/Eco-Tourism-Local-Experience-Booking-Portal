<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;family=Inter:wght@300..700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "secondary": "#765934",
                    "surface-container": "#edeee9",
                    "primary-fixed": "#c8ebd0",
                    "tertiary-fixed": "#f5e0ba",
                    "surface": "#f8faf5",
                    "on-background": "#191c19",
                    "error-container": "#ffdad6",
                    "on-tertiary": "#ffffff",
                    "on-secondary": "#ffffff",
                    "background": "#f8faf5",
                    "surface-container-low": "#f3f4ef",
                    "inverse-on-surface": "#f0f1ec",
                    "on-primary": "#ffffff",
                    "tertiary": "#392d13",
                    "inverse-surface": "#2e312e",
                    "on-secondary-fixed": "#2a1800",
                    "inverse-primary": "#adcfb4",
                    "surface-variant": "#e1e3de",
                    "surface-bright": "#f8faf5",
                    "on-primary-fixed-variant": "#2f4d39",
                    "on-surface-variant": "#424843",
                    "secondary-fixed": "#ffddb6",
                    "on-error": "#ffffff",
                    "outline-variant": "#c2c8c0",
                    "surface-container-high": "#e7e9e4",
                    "outline": "#727972",
                    "on-error-container": "#93000a",
                    "surface-container-highest": "#e1e3de",
                    "primary-fixed-dim": "#adcfb4",
                    "secondary-container": "#fed6a7",
                    "on-tertiary-fixed-variant": "#534529",
                    "on-primary-fixed": "#022110",
                    "surface-tint": "#466550",
                    "primary": "#163422",
                    "surface-dim": "#d9dbd6",
                    "surface-container-lowest": "#ffffff",
                    "primary-container": "#2d4b37",
                    "on-surface": "#191c19",
                    "on-tertiary-container": "#c3b08c",
                    "tertiary-fixed-dim": "#d8c49f",
                    "tertiary-container": "#504327",
                    "error": "#ba1a1a",
                    "on-secondary-container": "#795b36",
                    "on-secondary-fixed-variant": "#5c421f",
                    "secondary-fixed-dim": "#e6c093",
                    "on-primary-container": "#99baa1",
                    "on-tertiary-fixed": "#241a03"
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
        }
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, .font-headline { font-family: 'Manrope', sans-serif; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        /* Strictly Zero-Radius Overrides for Tailwind Defaults */
        * { border-radius: 0px !important; }
    </style>
</head>
<body class="bg-surface text-on-surface">
<!-- TopNavBar -->
<header class="bg-[#f8faf5] dark:bg-[#1a1c18] border-b-0">
<nav class="flex justify-between items-center px-8 py-4 max-w-[1440px] mx-auto">
<div class="text-2xl font-black text-[#163422] dark:text-[#d1e8d5] uppercase font-headline tracking-tight">TerraBound</div>
<div class="hidden md:flex items-center space-x-8">
<a class="font-['Manrope'] tracking-tight font-bold text-[#163422] border-b-2 border-[#163422] pb-1" href="#">Experiences</a>
<a class="font-['Manrope'] tracking-tight font-bold text-[#414941] dark:text-[#c1c9be] hover:text-[#163422] transition-colors duration-200" href="#">Destinations</a>
<a class="font-['Manrope'] tracking-tight font-bold text-[#414941] dark:text-[#c1c9be] hover:text-[#163422] transition-colors duration-200" href="#">Impact</a>
<a class="font-['Manrope'] tracking-tight font-bold text-[#414941] dark:text-[#c1c9be] hover:text-[#163422] transition-colors duration-200" href="#">Guides</a>
</div>
<div class="flex items-center space-x-6">
<button class="text-on-surface font-bold text-sm tracking-tight hover:bg-[#e7e9e4] px-4 py-2 transition-colors">Login</button>
<button class="bg-primary text-on-primary px-6 py-2 font-bold text-sm tracking-tight scale-100 active:scale-[0.98] transition-all">Register</button>
</div>
</nav>
</header>
<main class="max-w-[1440px] mx-auto px-8 py-12">
<!-- Hero Header -->
<div class="grid grid-cols-1 md:grid-cols-12 gap-12 mb-16">
<div class="md:col-span-7 flex flex-col justify-end">
<div class="flex items-center gap-2 mb-4">
<span class="bg-tertiary-container text-on-tertiary-container px-3 py-1 text-xs font-bold uppercase tracking-widest">Premium Eco-Route</span>
<div class="flex items-center gap-1 ml-4 text-primary">
<span class="material-symbols-outlined text-lg" style="font-variation-settings: 'FILL' 1;">eco</span>
<span class="material-symbols-outlined text-lg" style="font-variation-settings: 'FILL' 1;">eco</span>
<span class="material-symbols-outlined text-lg" style="font-variation-settings: 'FILL' 1;">eco</span>
<span class="material-symbols-outlined text-lg" style="font-variation-settings: 'FILL' 1;">eco</span>
<span class="material-symbols-outlined text-lg opacity-40">eco</span>
<span class="text-sm font-bold ml-2">4.2 Eco-Rating</span>
</div>
</div>
<h1 class="text-5xl md:text-7xl font-black tracking-tighter leading-[1.1] mb-6 text-primary">High-Alpine Mist Expedition</h1>
<p class="text-xl font-medium text-outline flex items-center gap-2">
<span class="material-symbols-outlined">location_on</span>
                    Dolomites, Northern Italy • 4-Day Immersive Guide
                </p>
</div>
<div class="md:col-span-5 relative">
<div class="aspect-[4/5] bg-surface-container-high overflow-hidden shadow-2xl">
<img class="w-full h-full object-cover" data-alt="dramatic jagged limestone mountain peaks of the Dolomites partially obscured by swirling morning mist with deep green pine forests in foreground" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAnqYIcZz2Ml4sctbEsvyjJ6U6b5yHLEgYwf1H1nyPYfBvsRRfhVQhxZB7HzqrtOKnZeiz0hdGXB4Mgf4O0OUzg1_b6KBV4mlc0S-z530UOOV1RuwTzXQH231_Cr7Yg52kwal37wATWXGfRE57bontp0GLU-eskd9k1YWtXNd9PAyxrLXX9se1eWX_-2yEr8Oz8pzinT2cWLhwMd9y9QbUoBYbBzuiGbAwzLw3CkfBq0S1_mwx_tuC187LC9cVLLmUHFtWO-hTtbxE"/>
</div>
<!-- Floating Asymmetrical Detail -->
<div class="absolute -bottom-6 -left-12 bg-primary text-on-primary p-8 hidden lg:block shadow-xl">
<span class="block text-4xl font-black mb-1">98%</span>
<span class="text-xs uppercase tracking-widest opacity-80 font-bold">Plastic Free Experience</span>
</div>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
<!-- Left Column: Content -->
<div class="lg:col-span-8 space-y-20">
<!-- Itinerary Section -->
<section>
<h2 class="text-3xl font-black tracking-tight mb-10 uppercase border-l-4 border-primary pl-6">The Journey Architecture</h2>
<div class="space-y-12">
<div class="flex gap-8 group">
<div class="flex-none w-16 h-16 bg-surface-container-highest flex items-center justify-center font-black text-2xl text-primary border border-outline/10">01</div>
<div class="space-y-4">
<h3 class="text-xl font-bold uppercase tracking-tight">The Valley Awakening</h3>
<p class="text-on-surface-variant leading-relaxed">Begin your ascent from the lowlands of Val di Funes. We engage with local agriculturalists to understand high-altitude biodiversity before heading to our first sustainable mountain lodge.</p>
<div class="grid grid-cols-2 gap-4">
<div class="h-48 bg-surface-container">
<img class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500" data-alt="vibrant green alpine meadow with a small rustic wooden chapel and towering grey peaks in the background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrrexBgSYyslTd3N_4yJbKRnWxltZxkLn4gOtvwfbVjM7-YF8OyxFAqcN2CkWCRaKW1yOhecj_POQ3HRVeu3mwfbAbl-GMv87Gt4mPQUiBh9jno_RlMj3-qWKxGpfD0WGxpx5UYK1m9MhWiwmWC7KSXubJ3Zeuo_O5-E7_6qALQHFySB8KnMyPHOKxtbuqqlupc6eQUQSAPNApBUSfidhDz8cpN8o9Ee76aUieaL8aYX5j04dESi1Ux9y4X0xSoFvT74Yzr8p_Txc"/>
</div>
<div class="h-48 bg-surface-container">
<img class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500" data-alt="close up of local mountain wildflowers and small herbs used in traditional dolomite cuisine" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-LFA8EEIAFk-W38i1-QF2lzxGUqTmP3Bz_Wcbd6C6rrUNBg8smMQ9ZkaOaYRDoa9nqRciFbzEJV13jJWWAgjJCBO1SPUb-zBnJt-ijgvMP-CNg_d21kBaqk3SNxbbG7g-kjDbQZBDtEOYm84YpKKyI30n4uvp7S4b8ciGKoKvgFFdA_gzyNq5E9bfwsat7-ayx1RpnrWMQYpe6savSTE0pwSAY7mcgMijTA-5BERuCLBjaF5HdgIcST32oyoo4zhAObwCIY39nts"/>
</div>
</div>
</div>
</div>
<div class="flex gap-8">
<div class="flex-none w-16 h-16 bg-surface-container-highest flex items-center justify-center font-black text-2xl text-primary border border-outline/10">02</div>
<div class="space-y-4">
<h3 class="text-xl font-bold uppercase tracking-tight">Granite Slumber</h3>
<p class="text-on-surface-variant leading-relaxed">A high-intensity climb towards the Drei Zinnen. This day focuses on geology and the preservation of rock ecosystems. Evening spent in a zero-emission refuge with panoramic star-gazing.</p>
</div>
</div>
<div class="flex gap-8">
<div class="flex-none w-16 h-16 bg-surface-container-highest flex items-center justify-center font-black text-2xl text-primary border border-outline/10">03</div>
<div class="space-y-4">
<h3 class="text-xl font-bold uppercase tracking-tight">Mist Descent</h3>
<p class="text-on-surface-variant leading-relaxed">Navigating through the clouds. A focus on hydrological systems and glacial retreat awareness. Closing with a community feast featuring locally foraged ingredients.</p>
</div>
</div>
</div>
</section>
<!-- Sustainability Section -->
<section class="bg-primary text-on-primary p-12">
<h2 class="text-2xl font-black tracking-tight mb-8 uppercase">Impact Blueprint</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<div class="space-y-2">
<span class="text-xs font-bold uppercase tracking-widest text-on-primary-container">Carbon Offset</span>
<div class="text-3xl font-black">124kg CO₂</div>
<p class="text-xs opacity-70">Calculated per traveler based on local transit and lodge operations.</p>
</div>
<div class="space-y-2">
<span class="text-xs font-bold uppercase tracking-widest text-on-primary-container">Local Impact</span>
<div class="text-3xl font-black">85% Revenue</div>
<p class="text-xs opacity-70">Percentage of booking costs staying directly within the local valley economy.</p>
</div>
<div class="space-y-2">
<span class="text-xs font-bold uppercase tracking-widest text-on-primary-container">Bio-Protection</span>
<div class="text-3xl font-black">2.4 Acres</div>
<p class="text-xs opacity-70">Of alpine tundra protected through our conservation partnership.</p>
</div>
</div>
</section>
<!-- Map Section -->
<section>
<div class="flex justify-between items-end mb-6">
<h2 class="text-2xl font-black tracking-tight uppercase">Terrain Analysis</h2>
<span class="text-xs font-bold uppercase tracking-widest opacity-60">Expedition Route 4.0</span>
</div>
<div class="aspect-video bg-surface-container border border-outline/10 relative overflow-hidden">
<img class="w-full h-full object-cover opacity-60" data-alt="stylized satellite map view of mountain peaks and valley trails with topographic lines" data-location="Dolomites, Italy" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBEUB8hZ9dnOhGjDehJPpwTtqEVdRRE6mkpgMgEvNdfWkUBmKV3rImeG9mNkK_RITBWSka-oCSWsSmkFMnJOmLibOu1-2vtWu4YokZljQFiBRKoBE5Ikk0NM-JrQoYLD4POhHdikldi_0DpROK4gPw9HVRrsKidVdZl0PoD3ngk8W98qZBip22fYhjOdYd8M3J1jGxd5SCV6P-42BqsW9F_1H6G6y3oFRCmpg3VMQatNr9nRyC_bnP-1wxSlB5n2F1EbtzNdHt8-9g"/>
<div class="absolute inset-0 flex items-center justify-center">
<div class="w-full h-full p-12 flex flex-col justify-between">
<div class="flex justify-start"><div class="w-4 h-4 bg-primary ring-8 ring-primary/20"></div></div>
<div class="flex justify-end"><div class="w-4 h-4 bg-primary ring-8 ring-primary/20"></div></div>
<div class="flex justify-center -mb-8"><div class="w-4 h-4 bg-primary ring-8 ring-primary/20"></div></div>
</div>
<svg class="absolute inset-0 w-full h-full pointer-events-none" viewbox="0 0 800 450">
<path d="M100,50 L700,150 L400,400" fill="none" stroke="#163422" stroke-dasharray="8,8" stroke-width="2"></path>
</svg>
</div>
</div>
</section>
<!-- Reviews Section -->
<section class="space-y-12">
<h2 class="text-2xl font-black tracking-tight uppercase">Expedition Reports</h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-12">
<div class="space-y-6">
<div class="flex items-center gap-4">
<div class="w-12 h-12 bg-secondary-container flex items-center justify-center font-bold text-on-secondary-container">MK</div>
<div>
<div class="font-bold text-sm uppercase tracking-tight">Marcus K.</div>
<div class="text-xs text-outline">September 2023</div>
</div>
</div>
<p class="italic text-on-surface-variant">"The architectural precision of the itinerary was unmatched. Every stop felt intentional, connecting us to the land without the usual tourist noise."</p>
<div class="space-y-2">
<div class="flex justify-between text-[10px] font-bold uppercase tracking-widest text-outline">
<span>Sustainability</span>
<span>5.0</span>
</div>
<div class="h-1 bg-surface-container">
<div class="h-full bg-primary w-full"></div>
</div>
<div class="flex justify-between text-[10px] font-bold uppercase tracking-widest text-outline">
<span>Authenticity</span>
<span>4.8</span>
</div>
<div class="h-1 bg-surface-container">
<div class="h-full bg-primary w-[96%]"></div>
</div>
</div>
</div>
<div class="space-y-6">
<div class="flex items-center gap-4">
<div class="w-12 h-12 bg-tertiary-container flex items-center justify-center font-bold text-on-tertiary-container">EL</div>
<div>
<div class="font-bold text-sm uppercase tracking-tight">Elena L.</div>
<div class="text-xs text-outline">August 2023</div>
</div>
</div>
<p class="italic text-on-surface-variant">"Challenging but incredibly rewarding. The focus on zero-waste was impressive and truly lived up to the TerraBound standard."</p>
<div class="space-y-2">
<div class="flex justify-between text-[10px] font-bold uppercase tracking-widest text-outline">
<span>Sustainability</span>
<span>4.9</span>
</div>
<div class="h-1 bg-surface-container">
<div class="h-full bg-primary w-[98%]"></div>
</div>
<div class="flex justify-between text-[10px] font-bold uppercase tracking-widest text-outline">
<span>Authenticity</span>
<span>5.0</span>
</div>
<div class="h-1 bg-surface-container">
<div class="h-full bg-primary w-full"></div>
</div>
</div>
</div>
</div>
</section>
</div>
<!-- Right Column: Booking Widget -->
<div class="lg:col-span-4">
<div class="sticky top-12 bg-white border border-outline/10 shadow-2xl p-8 space-y-8">
<div>
<div class="text-xs font-bold uppercase tracking-widest text-outline mb-2">Investment Starts At</div>
<div class="flex items-baseline gap-2">
<span class="text-4xl font-black text-primary">€1,240</span>
<span class="text-sm font-medium text-outline">/ person</span>
</div>
</div>
<!-- Date Selection -->
<div class="space-y-3">
<label class="text-[10px] font-black uppercase tracking-widest text-primary">Expedition Start Date</label>
<div class="relative">
<input class="w-full border-outline px-4 py-3 focus:ring-primary focus:border-primary text-sm font-bold" type="date"/>
</div>
</div>
<!-- Tier Selection -->
<div class="space-y-3">
<label class="text-[10px] font-black uppercase tracking-widest text-primary">Service Tier</label>
<div class="grid grid-cols-1 gap-2">
<button class="flex justify-between items-center px-4 py-3 border-2 border-primary bg-primary-fixed/20 text-sm font-bold text-primary">
<span>Standard Group</span>
<span>+ €0</span>
</button>
<button class="flex justify-between items-center px-4 py-3 border border-outline hover:border-primary text-sm font-bold">
<span>Private Guide</span>
<span class="text-outline-variant">+ €450</span>
</button>
</div>
</div>
<!-- Add-ons -->
<div class="space-y-3">
<label class="text-[10px] font-black uppercase tracking-widest text-primary">Expedition Add-ons</label>
<div class="space-y-2">
<label class="flex items-center justify-between p-3 bg-surface-container-low cursor-pointer hover:bg-surface-container-high transition-colors">
<div class="flex items-center gap-3">
<input class="text-primary focus:ring-0 w-4 h-4" type="checkbox"/>
<span class="text-sm font-bold">Ultra-Light Gear Rental</span>
</div>
<span class="text-xs font-bold">€120</span>
</label>
<label class="flex items-center justify-between p-3 bg-surface-container-low cursor-pointer hover:bg-surface-container-high transition-colors">
<div class="flex items-center gap-3">
<input checked="" class="text-primary focus:ring-0 w-4 h-4" type="checkbox"/>
<span class="text-sm font-bold">Bio-Dynamic Lunch Pack</span>
</div>
<span class="text-xs font-bold">€85</span>
</label>
</div>
</div>
<!-- Summary -->
<div class="pt-6 border-t border-outline/10 space-y-4">
<div class="flex justify-between text-sm font-medium">
<span class="text-outline">Expedition Subtotal</span>
<span class="font-bold">€1,240</span>
</div>
<div class="flex justify-between text-sm font-medium">
<span class="text-outline">Add-ons (Lunch Pack)</span>
<span class="font-bold">€85</span>
</div>
<div class="flex justify-between items-end pt-2">
<span class="text-xs font-black uppercase tracking-widest">Total Total</span>
<span class="text-3xl font-black text-primary">€1,325</span>
</div>
</div>
<button class="w-full bg-primary text-on-primary py-5 font-black uppercase tracking-widest text-sm hover:bg-[#2f4d39] transition-all transform active:scale-[0.99]">
                        Initialize Booking
                    </button>
<div class="text-[10px] text-center text-outline uppercase font-bold tracking-widest">
                        Zero Cancellation Fees within 48h
                    </div>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-[#edeee9] dark:bg-[#1a1c18] border-t border-[#727972]/10 mt-32">
<div class="grid grid-cols-1 md:grid-cols-4 gap-12 px-8 py-16 max-w-[1440px] mx-auto">
<div class="space-y-6">
<div class="text-xl font-bold text-[#163422] dark:text-[#d1e8d5] uppercase font-headline">TerraBound</div>
<p class="font-['Inter'] text-sm leading-relaxed text-[#414941] dark:text-[#c1c9be]">Engineering the future of travel through a lens of absolute environmental accountability.</p>
</div>
<div class="space-y-4">
<div class="text-xs font-black uppercase tracking-widest text-[#163422]">Exploration</div>
<ul class="space-y-2">
<li><a class="font-['Inter'] text-sm text-[#414941] dark:text-[#c1c9be] hover:text-[#163422]" href="#">Sitemap</a></li>
<li><a class="font-['Inter'] text-sm text-[#414941] dark:text-[#c1c9be] hover:text-[#163422]" href="#">Guides</a></li>
<li><a class="font-['Inter'] text-sm text-[#414941] dark:text-[#c1c9be] hover:text-[#163422]" href="#">FAQ</a></li>
</ul>
</div>
<div class="space-y-4">
<div class="text-xs font-black uppercase tracking-widest text-[#163422]">Accountability</div>
<ul class="space-y-2">
<li><a class="font-['Inter'] text-sm text-[#414941] dark:text-[#c1c9be] hover:text-[#163422]" href="#">Sustainability Report</a></li>
<li><a class="font-['Inter'] text-sm text-[#414941] dark:text-[#c1c9be] hover:text-[#163422]" href="#">Newsletter</a></li>
<li><a class="font-['Inter'] text-sm text-[#414941] dark:text-[#c1c9be] hover:text-[#163422]" href="#">Privacy Policy</a></li>
</ul>
</div>
<div class="space-y-4">
<div class="text-xs font-black uppercase tracking-widest text-[#163422]">Newsletter</div>
<div class="flex">
<input class="bg-surface-container-lowest border-outline w-full px-4 text-xs" placeholder="Email" type="email"/>
<button class="bg-primary text-on-primary px-4 py-2 font-bold text-xs uppercase">Join</button>
</div>
</div>
</div>
<div class="px-8 py-8 max-w-[1440px] mx-auto border-t border-outline/10">
<div class="font-['Inter'] text-[10px] uppercase tracking-widest text-[#414941] dark:text-[#c1c9be]">© 2024 TerraBound Eco-Tourism. Built for the Earth Architect.</div>
</div>
</footer>
</body></html>