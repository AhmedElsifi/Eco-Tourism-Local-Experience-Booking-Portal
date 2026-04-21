<!DOCTYPE html>

<html class="light" lang="en">


<?php
$title = "Guides Directory - Earth Architect";
require_once("../components/head.php");
?>

<body class="bg-surface text-on-surface flex flex-col min-h-screen">
    <!-- TopNavBar Component -->
    <header class="bg-[#f8faf5] dark:bg-[#1a1c18] border-b-0 sticky top-0 z-50 backdrop-blur-md bg-opacity-80">
        <nav class="flex justify-between items-center px-8 py-4 max-w-[1440px] mx-auto">
            <div
                class="text-2xl font-black text-[#163422] dark:text-[#d1e8d5] uppercase font-['Manrope'] tracking-tight">
                TerraBound
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <a class="text-[#414941] dark:text-[#c1c9be] hover:text-[#163422] font-['Manrope'] tracking-tight font-bold transition-colors duration-200"
                    href="search_results.php">Destinations</a>
                <a class="font-bold font-['Manrope'] text-[#163422] dark:text-white border-b-2 border-[#163422] pb-1"
                    href="guides_directory.php">Guides</a>
                <a class="text-[#414941] dark:text-[#c1c9be] hover:text-[#163422] font-['Manrope'] tracking-tight font-bold transition-colors duration-200"
                    href="help_faq.php">FAQ</a>
            </div>
            <div class="flex items-center gap-4">
                <a href="login_page.php"><button
                        class="px-6 py-2 text-[#163422] font-bold font-['Manrope'] hover:bg-[#e7e9e4] transition-colors duration-200 active:scale-[0.98]">
                        Login
                    </button></a>
                <a href="registration_selection.php"><button
                        class="px-6 py-2 bg-primary text-on-primary font-bold font-['Manrope'] active:scale-[0.98] transition-colors duration-200">
                        Register
                    </button></a>
            </div>
        </nav>
    </header>
    <!-- Main Content Shell -->
    <main class="flex-grow max-w-screen-2xl w-full mx-auto px-8 py-12">
        <header class="mb-12">
            <h1 class="text-5xl font-extrabold text-primary tracking-tighter mb-4">Our Local Experts</h1>
            <p class="text-on-surface-variant max-w-2xl text-lg font-body">Connect with guardians of the land. Every
                guide is vetted for ecological expertise and local stewardship.</p>
        </header>
        <div class="flex flex-col md:flex-row gap-12">
            <!-- Side Filters -->
            <aside class="w-full md:w-64 flex-shrink-0 space-y-8">
                <section>
                    <h3 class="font-['Manrope'] font-bold uppercase tracking-widest text-xs text-primary mb-4">Expertise
                    </h3>
                    <div class="space-y-2">
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input class="w-4 h-4 border-outline text-primary focus:ring-primary" type="checkbox" />
                            <span class="text-sm font-medium group-hover:text-primary">Botanist</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input checked="" class="w-4 h-4 border-outline text-primary focus:ring-primary"
                                type="checkbox" />
                            <span class="text-sm font-medium group-hover:text-primary">Re-wilding Specialist</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input class="w-4 h-4 border-outline text-primary focus:ring-primary" type="checkbox" />
                            <span class="text-sm font-medium group-hover:text-primary">Marine Ecologist</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input class="w-4 h-4 border-outline text-primary focus:ring-primary" type="checkbox" />
                            <span class="text-sm font-medium group-hover:text-primary">Geologist</span>
                        </label>
                    </div>
                </section>
                <section>
                    <h3 class="font-['Manrope'] font-bold uppercase tracking-widest text-xs text-primary mb-4">Language
                    </h3>
                    <div class="space-y-2">
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input checked="" class="w-4 h-4 border-outline text-primary focus:ring-primary"
                                type="checkbox" />
                            <span class="text-sm font-medium group-hover:text-primary">English</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input class="w-4 h-4 border-outline text-primary focus:ring-primary" type="checkbox" />
                            <span class="text-sm font-medium group-hover:text-primary">Spanish</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <input class="w-4 h-4 border-outline text-primary focus:ring-primary" type="checkbox" />
                            <span class="text-sm font-medium group-hover:text-primary">French</span>
                        </label>
                    </div>
                </section>
                <section>
                    <h3 class="font-['Manrope'] font-bold uppercase tracking-widest text-xs text-primary mb-4">Min.
                        Local Cred Score</h3>
                    <div class="mt-4">
                        <input
                            class="w-full h-1 bg-surface-container-high appearance-none cursor-pointer accent-primary"
                            max="10" min="0" step="0.1" type="range" value="8.5" />
                        <div class="flex justify-between mt-2 text-[10px] font-bold text-outline">
                            <span>0.0</span>
                            <span class="text-primary">8.5+</span>
                            <span>10.0</span>
                        </div>
                    </div>
                </section>
            </aside>
            <!-- Grid Content -->
            <div class="flex-grow">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-px bg-outline-variant">
                    <!-- Guide Card 1 -->
                    <div class="bg-surface p-8 group">
                        <div class="flex gap-6 flex-col sm:flex-row">
                            <div class="w-32 h-40 flex-shrink-0 bg-surface-container overflow-hidden">
                                <img alt="Guide portrait" class="w-full h-full object-cover"
                                    data-alt="Close-up portrait of a woman in her 40s wearing outdoor gear, sun-kissed skin, standing in a forest with soft dappled sunlight."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBw1wQbcYu4G12jzRDyO6LjwlqP7pcEWJYJGVYKE1mD1WeXA7DW01C2vLTQWWQEFxfq7Vs2VdqmbiHoSQi_0aBci9NPtlyfkmP0O8-H-o5AVJZSCP06m8CPXm1HbEW7SlnvE16XeBx0nVipFnP2i6WZzcq1xRydMO_IxYHxoYoYrHajtsekZk3odWr8PuR7Qut5QgvEQANfAe7Dgogsfnyi6QJS48o1lPRH74uBTRy9353uyuQll9rw52sMsbePd-gahYSdcwe9Pdk" />
                            </div>
                            <div class="flex-grow flex flex-col">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h2 class="text-2xl font-bold tracking-tight text-primary leading-none">Elena
                                            Thorne</h2>
                                        <p
                                            class="text-xs font-bold text-on-secondary-container mt-1 uppercase tracking-tighter">
                                            Senior Botanist</p>
                                    </div>
                                    <div class="bg-primary text-on-primary px-2 py-1 flex items-center gap-1">
                                        <span class="text-lg font-black tracking-tighter">9.8</span>
                                        <span class="text-[10px] font-medium leading-none opacity-80">/10</span>
                                    </div>
                                </div>
                                <div class="mt-4 flex flex-wrap gap-2">
                                    <span
                                        class="bg-tertiary-container text-on-tertiary-container text-[10px] px-2 py-0.5 font-bold flex items-center gap-1 uppercase">
                                        <span class="material-symbols-outlined text-[12px]"
                                            style="font-variation-settings: 'FILL' 1;">verified</span>
                                        Verified
                                    </span>
                                    <span
                                        class="bg-surface-container-high text-on-surface-variant text-[10px] px-2 py-0.5 font-bold uppercase">Alpine
                                        Specialist</span>
                                </div>
                                <div class="mt-auto pt-6 flex items-center justify-between">
                                    <div class="text-[10px] text-outline font-bold uppercase tracking-widest">
                                        EN • FR • IT
                                    </div>
                                    <button
                                        class="border border-primary text-primary hover:bg-primary hover:text-on-primary px-4 py-2 text-xs font-bold transition-all uppercase tracking-widest">
                                        View Profile
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Guide Card 2 -->
                    <div class="bg-surface p-8 group">
                        <div class="flex gap-6 flex-col sm:flex-row">
                            <div class="w-32 h-40 flex-shrink-0 bg-surface-container overflow-hidden">
                                <img alt="Guide portrait" class="w-full h-full object-cover"
                                    data-alt="Professional portrait of a man with grey beard wearing a khaki field shirt, background of mountain peaks in soft blue morning light."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIntV2k2GLM6uDUNAJg1GlTm11xrJyTVfBGKNqLuv48dqLDY0WZhImU6AOgoFyo-cPfubVyJdhkLiKEcs-k7WfExHBF66zrwFj_Cfk1Xlf_PUW7m8_cFFMbn9i-wJT4IylqNZ7wjHvkvtVNmHdmbv6yjcGuPX7jxuWQhyMawyRaRtCJf92wIO-ErPGU5uQxm7XS9mGwvqjyFjmUL9KwrmFX4MEiU5zs9gJj1X7sx_xGOBbv5qkP5XPCdN4SXwrPnt1tw7QRxOX4qo" />
                            </div>
                            <div class="flex-grow flex flex-col">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h2 class="text-2xl font-bold tracking-tight text-primary leading-none">Marcus
                                            Vane</h2>
                                        <p
                                            class="text-xs font-bold text-on-secondary-container mt-1 uppercase tracking-tighter">
                                            Re-wilding Specialist</p>
                                    </div>
                                    <div class="bg-primary text-on-primary px-2 py-1 flex items-center gap-1">
                                        <span class="text-lg font-black tracking-tighter">9.5</span>
                                        <span class="text-[10px] font-medium leading-none opacity-80">/10</span>
                                    </div>
                                </div>
                                <div class="mt-4 flex flex-wrap gap-2">
                                    <span
                                        class="bg-tertiary-container text-on-tertiary-container text-[10px] px-2 py-0.5 font-bold flex items-center gap-1 uppercase">
                                        <span class="material-symbols-outlined text-[12px]"
                                            style="font-variation-settings: 'FILL' 1;">verified</span>
                                        Verified
                                    </span>
                                    <span
                                        class="bg-surface-container-high text-on-surface-variant text-[10px] px-2 py-0.5 font-bold uppercase">Land
                                        Management</span>
                                </div>
                                <div class="mt-auto pt-6 flex items-center justify-between">
                                    <div class="text-[10px] text-outline font-bold uppercase tracking-widest">
                                        EN • DE • ES
                                    </div>
                                    <button
                                        class="border border-primary text-primary hover:bg-primary hover:text-on-primary px-4 py-2 text-xs font-bold transition-all uppercase tracking-widest">
                                        View Profile
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Guide Card 3 -->
                    <div class="bg-surface p-8 group">
                        <div class="flex gap-6 flex-col sm:flex-row">
                            <div class="w-32 h-40 flex-shrink-0 bg-surface-container overflow-hidden">
                                <img alt="Guide portrait" class="w-full h-full object-cover"
                                    data-alt="Portrait of a young woman with braided hair, wearing a waterproof jacket, standing in front of a misty waterfall background."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAzW2RjxUHp8Uv2SU6ZVZ4kpnJv-BWBptmgvMIXzJu5lSCKlk-JwkWUWzSEw-YAme6GKzff6wDHXV0jqUrP9QQgOpEHxaOUwvwMx2VVrOYM3M_TMvcU-U1fBw7y21VNq1b1-8x7KSijZEaaC9HSea87R8xZdXqmArq0N7hFvFbu3DJ_9OcrTtwhJg72nADaNolKujvRG8-sD2zjmhwJILjR-sPX1QltgeWN92y5GIM9pDRmM2xXSXpzYKMNyFI_L1BerHlF8kexUj8" />
                            </div>
                            <div class="flex-grow flex flex-col">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h2 class="text-2xl font-bold tracking-tight text-primary leading-none">Sarah
                                            Chen</h2>
                                        <p
                                            class="text-xs font-bold text-on-secondary-container mt-1 uppercase tracking-tighter">
                                            Geologist</p>
                                    </div>
                                    <div class="bg-primary text-on-primary px-2 py-1 flex items-center gap-1">
                                        <span class="text-lg font-black tracking-tighter">9.2</span>
                                        <span class="text-[10px] font-medium leading-none opacity-80">/10</span>
                                    </div>
                                </div>
                                <div class="mt-4 flex flex-wrap gap-2">
                                    <span
                                        class="bg-tertiary-container text-on-tertiary-container text-[10px] px-2 py-0.5 font-bold flex items-center gap-1 uppercase">
                                        <span class="material-symbols-outlined text-[12px]"
                                            style="font-variation-settings: 'FILL' 1;">verified</span>
                                        Verified
                                    </span>
                                    <span
                                        class="bg-surface-container-high text-on-surface-variant text-[10px] px-2 py-0.5 font-bold uppercase">Canyon
                                        Guide</span>
                                </div>
                                <div class="mt-auto pt-6 flex items-center justify-between">
                                    <div class="text-[10px] text-outline font-bold uppercase tracking-widest">
                                        EN • MANDARIN
                                    </div>
                                    <button
                                        class="border border-primary text-primary hover:bg-primary hover:text-on-primary px-4 py-2 text-xs font-bold transition-all uppercase tracking-widest">
                                        View Profile
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Guide Card 4 -->
                    <div class="bg-surface p-8 group">
                        <div class="flex gap-6 flex-col sm:flex-row">
                            <div class="w-32 h-40 flex-shrink-0 bg-surface-container overflow-hidden">
                                <img alt="Guide portrait" class="w-full h-full object-cover"
                                    data-alt="Man in his 30s with camera gear, wearing a dark green utility vest, against a backdrop of a lush river ecosystem."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDX3kqwOBVwEauWvyNsIfXiRybZtdhg_BxawU-QhKF36oB1Ek7IjaTJH86e-bInJ3iXFH9K3aAcvjV9-V1lonIO-LvBzCRTQuhEZyqdp7DQt8qxqAr1n37_b3EdTPZVNnsSNRByQCvOOd44LVhhBlo5nI2w-aFJaa-HPuLdbsPLGX1zNX_nyd4phclot2Y63IL5-YZH-9yTPlu6ZUdADL1hvkwgrpiPEG18Zcqq3FuCiw_GrnZPrCQdVdf4fKOnQJbrb8iOf_pCKWc" />
                            </div>
                            <div class="flex-grow flex flex-col">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h2 class="text-2xl font-bold tracking-tight text-primary leading-none">Jameson
                                            Holt</h2>
                                        <p
                                            class="text-xs font-bold text-on-secondary-container mt-1 uppercase tracking-tighter">
                                            Birding Specialist</p>
                                    </div>
                                    <div class="bg-primary text-on-primary px-2 py-1 flex items-center gap-1">
                                        <span class="text-lg font-black tracking-tighter">8.9</span>
                                        <span class="text-[10px] font-medium leading-none opacity-80">/10</span>
                                    </div>
                                </div>
                                <div class="mt-4 flex flex-wrap gap-2">
                                    <span
                                        class="bg-surface-container-high text-on-surface-variant text-[10px] px-2 py-0.5 font-bold uppercase">Ornithology</span>
                                    <span
                                        class="bg-surface-container-high text-on-surface-variant text-[10px] px-2 py-0.5 font-bold uppercase">Photography</span>
                                </div>
                                <div class="mt-auto pt-6 flex items-center justify-between">
                                    <div class="text-[10px] text-outline font-bold uppercase tracking-widest">
                                        EN • PT
                                    </div>
                                    <button
                                        class="border border-primary text-primary hover:bg-primary hover:text-on-primary px-4 py-2 text-xs font-bold transition-all uppercase tracking-widest">
                                        View Profile
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination Placeholder -->
                <div class="mt-12 flex justify-center gap-2">
                    <button
                        class="w-10 h-10 flex items-center justify-center bg-primary text-on-primary font-bold">1</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center bg-surface-container hover:bg-surface-container-high font-bold">2</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center bg-surface-container hover:bg-surface-container-high font-bold">3</button>
                    <button
                        class="w-10 h-10 flex items-center justify-center bg-surface-container hover:bg-surface-container-high font-bold">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-[#edeee9] dark:bg-[#1a1c18] border-t border-[#727972]/10">
    <div class="max-w-[1440px] mx-auto px-8 py-20 text-center font-['Inter']">
      <div class="text-2xl font-black text-[#163422] dark:text-[#d1e8d5] uppercase tracking-tight mb-6">
        TerraBound
      </div>
      <p class="text-[#414941] dark:text-[#c1c9be] max-w-xl mx-auto leading-relaxed mb-10">
        Designing sustainable travel experiences through innovation, cultural respect,
        and environmental responsibility. Built for explorers who care about the Earth.
      </p>
      <div class="w-24 h-[2px] bg-[#163422]/20 dark:bg-[#d1e8d5]/20 mx-auto mb-10"></div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-sm text-[#414941] dark:text-[#c1c9be]">
        <div>
          <h4 class="uppercase tracking-widest text-xs font-bold text-[#163422] dark:text-[#d1e8d5] mb-3">
            Philosophy
          </h4>
          <p>
            Travel should leave a positive footprint — on people, places, and the planet.
          </p>
        </div>
        <div>
          <h4 class="uppercase tracking-widest text-xs font-bold text-[#163422] dark:text-[#d1e8d5] mb-3">
            Vision
          </h4>
          <p>
            A world where tourism empowers local communities and preserves natural ecosystems.
          </p>
        </div>
        <div>
          <h4 class="uppercase tracking-widest text-xs font-bold text-[#163422] dark:text-[#d1e8d5] mb-3">
            Presence
          </h4>
          <p>
            Operating globally with a focus on eco-conscious destinations and authentic experiences.
          </p>
        </div>
      </div>
      <div
        class="mt-16 pt-8 border-t border-[#727972]/10 text-[11px] uppercase tracking-widest font-semibold text-[#727972] dark:text-[#8a9388]">
        © 2026 TerraBound · Eco-Tourism Platform · All Rights Reserved
      </div>

    </div>
  </footer>
</body>

</html>