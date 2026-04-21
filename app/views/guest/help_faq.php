<!DOCTYPE html>

<html class="light" lang="en">

<?php
$title = "TerraBound | Help Center";
require_once("../components/head.php");
?>

<body class="bg-surface text-on-surface">
    <!-- Top Navigation Bar -->
    <header class="bg-[#f8faf5] dark:bg-[#1a1c18] border-b-0 sticky top-0 z-50 backdrop-blur-md bg-opacity-80">
        <nav class="flex justify-between items-center px-8 py-4 max-w-[1440px] mx-auto">
            <div
                class="text-2xl font-black text-[#163422] dark:text-[#d1e8d5] uppercase font-['Manrope'] tracking-tight">
                TerraBound
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <a class="text-[#414941] dark:text-[#c1c9be] hover:text-[#163422] font-['Manrope'] tracking-tight font-bold transition-colors duration-200"
                    href="search_results.php">Destinations</a>
                <a class="text-[#414941] dark:text-[#c1c9be] hover:text-[#163422] font-['Manrope'] tracking-tight font-bold transition-colors duration-200"
                    href="guides_directory.php">Guides</a>
                <a class="font-bold font-['Manrope'] text-[#163422] dark:text-white border-b-2 border-[#163422] pb-1"
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

    <main class="max-w-[1440px] mx-auto px-8 pb-24">
        <!-- Hero Section & Search -->
        <section class="py-20 flex flex-col md:flex-row items-end gap-12">
            <div class="w-full md:w-3/5">
                <h1 class="text-6xl md:text-8xl font-black text-primary tracking-tighter leading-[0.9] mb-8">
                    HOW CAN WE<br />GUIDE YOU?
                </h1>
                <p class="text-lg text-outline leading-relaxed max-w-xl mb-12">
                    Access our comprehensive knowledge base for the Earth Architect. From booking logistics to impact
                    reporting, find the precision you need for your next expedition.
                </p>
                <div class="relative max-w-2xl group">
                    <input
                        class="w-full bg-surface-container-low border-none focus:ring-2 focus:ring-primary py-6 px-8 text-xl font-medium placeholder:text-outline/50 outline-none"
                        placeholder="Search help topics..." type="text" />
                    <div class="absolute right-6 top-1/2 -translate-y-1/2 flex items-center gap-3 text-primary">
                        <span class="material-symbols-outlined" data-icon="search">search</span>
                    </div>
                </div>
            </div>
            <div class="hidden md:block w-2/5 h-[400px] bg-surface-container overflow-hidden">
                <img class="w-full h-full object-cover grayscale brightness-75 hover:grayscale-0 transition-all duration-700"
                    data-alt="Topographic mountain peaks with deep shadows and high contrast morning sunlight in an architectural style"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuANSLpbDKKMYsN13rhGv-ClgSYK-jrCmHp9RJh1dHzxnVTuJ25lhDqK_CrVfr9rjn0m_fW3fDsaOU22IZitw5shRhD8SXq9WNjH7Ee9fqVCt_WUZmkCndgRJAGGvvXOsBrQLAxFxUC6XvOfgnjnM_JfAQQz25q5Vil8VHeTkuisWtowm5E_VpWo9px3U32aXb1PE7fkVPlBdiPk8_dS9SphI_au3D7IN7O227WQPvu7zcY5qBCfL05-W5d-u4oo64EnTEwTZ71Jni4" />
            </div>
        </section>
        <!-- Category Grid -->
        <section class="grid grid-cols-1 md:grid-cols-4 gap-0 mb-24">
            <div
                class="bg-primary text-on-primary p-12 aspect-square flex flex-col justify-between group hover:bg-primary-container transition-colors cursor-pointer">
                <span class="material-symbols-outlined text-4xl" data-icon="calendar_month">calendar_month</span>
                <div>
                    <h3 class="text-2xl font-bold mb-2">Booking</h3>
                    <p class="text-sm opacity-70">Reservations, payments, and itinerary management tools.</p>
                </div>
            </div>
            <div
                class="bg-surface-container text-primary p-12 aspect-square flex flex-col justify-between group hover:bg-surface-container-high transition-colors cursor-pointer border-r border-outline/10">
                <span class="material-symbols-outlined text-4xl" data-icon="cancel">cancel</span>
                <div>
                    <h3 class="text-2xl font-bold mb-2">Cancellation</h3>
                    <p class="text-sm text-outline">Refund policies and flexible rescheduling guidelines.</p>
                </div>
            </div>
            <div
                class="bg-surface-container text-primary p-12 aspect-square flex flex-col justify-between group hover:bg-surface-container-high transition-colors cursor-pointer border-r border-outline/10">
                <span class="material-symbols-outlined text-4xl" data-icon="eco">eco</span>
                <div>
                    <h3 class="text-2xl font-bold mb-2">Sustainability</h3>
                    <p class="text-sm text-outline">Carbon offset tracking and environmental standards.</p>
                </div>
            </div>
            <div
                class="bg-surface-container text-primary p-12 aspect-square flex flex-col justify-between group hover:bg-surface-container-high transition-colors cursor-pointer">
                <span class="material-symbols-outlined text-4xl" data-icon="map">map</span>
                <div>
                    <h3 class="text-2xl font-bold mb-2">For Guides</h3>
                    <p class="text-sm text-outline">Portal management and local operator certification.</p>
                </div>
            </div>
        </section>
        <!-- FAQ Content -->
        <section class="grid grid-cols-1 lg:grid-cols-12 gap-16">
            <div class="lg:col-span-4">
                <div class="sticky top-28 space-y-12">
                    <div>
                        <h2 class="text-3xl font-black mb-6">FREQUENTLY ASKED</h2>
                        <div class="space-y-4">
                            <button
                                class="w-full text-left font-bold text-primary border-b-2 border-primary pb-2 flex justify-between items-center">
                                General Inquiries <span class="material-symbols-outlined">arrow_right_alt</span>
                            </button>
                            <button
                                class="w-full text-left font-bold text-outline hover:text-primary transition-colors pb-2 flex justify-between items-center">
                                Payment Security <span class="material-symbols-outlined">lock</span>
                            </button>
                            <button
                                class="w-full text-left font-bold text-outline hover:text-primary transition-colors pb-2 flex justify-between items-center">
                                Legal &amp; Privacy <span class="material-symbols-outlined">gavel</span>
                            </button>
                        </div>
                    </div>
                    <div class="bg-secondary-container p-8 text-on-secondary-container">
                        <h4 class="font-bold mb-4">Mediation Hub</h4>
                        <p class="text-sm mb-6 leading-relaxed">Having a dispute with a local experience operator? Our
                            mediation team is ready to assist within 24 hours.</p>
                        <a class="inline-flex items-center gap-2 font-black uppercase text-xs tracking-widest border-b-2 border-on-secondary-container"
                            href="#">Open Dispute <span class="material-symbols-outlined text-sm">open_in_new</span></a>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-8 space-y-px bg-outline/20">
                <!-- Accordion Item 1 -->
                <div class="bg-surface p-8 group">
                    <div class="flex justify-between items-start cursor-pointer">
                        <h3 class="text-xl font-bold max-w-2xl">What is the "Earth Architect" sustainability rating?
                        </h3>
                        <span class="material-symbols-outlined group-hover:rotate-45 transition-transform">add</span>
                    </div>
                    <div class="mt-6 text-outline leading-relaxed max-w-3xl">
                        Our proprietary rating system evaluates experiences based on three core pillars: carbon
                        footprint, local wealth distribution, and biodiversity preservation. Every listed guide must
                        maintain a minimum score of 7.5/10.
                    </div>
                </div>
                <!-- Accordion Item 2 -->
                <div class="bg-surface p-8 group">
                    <div class="flex justify-between items-start cursor-pointer">
                        <h3 class="text-xl font-bold max-w-2xl">How do I modify my booking dates after confirmation?
                        </h3>
                        <span class="material-symbols-outlined">add</span>
                    </div>
                    <div class="mt-6 text-outline leading-relaxed max-w-3xl hidden">
                        Modifications can be made through your user dashboard up to 72 hours before the scheduled
                        departure. Please note that date changes are subject to operator availability.
                    </div>
                </div>
                <!-- Accordion Item 3 -->
                <div class="bg-surface p-8 group">
                    <div class="flex justify-between items-start cursor-pointer">
                        <h3 class="text-xl font-bold max-w-2xl">Are there group discounts for institutional eco-tours?
                        </h3>
                        <span class="material-symbols-outlined">add</span>
                    </div>
                </div>
                <!-- Accordion Item 4 -->
                <div class="bg-surface p-8 group">
                    <div class="flex justify-between items-start cursor-pointer">
                        <h3 class="text-xl font-bold max-w-2xl">How does TerraBound handle guide verification?</h3>
                        <span class="material-symbols-outlined">add</span>
                    </div>
                </div>
                <!-- Accordion Item 5 -->
                <div class="bg-surface p-8 group">
                    <div class="flex justify-between items-start cursor-pointer">
                        <h3 class="text-xl font-bold max-w-2xl">What is the policy for extreme weather cancellations?
                        </h3>
                        <span class="material-symbols-outlined">add</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Support CTA -->
        <section class="mt-24 pt-24 border-t border-outline/10">
            <div class="bg-surface-container p-16 flex flex-col md:flex-row justify-between items-center gap-12">
                <div class="max-w-xl">
                    <h2 class="text-4xl font-black mb-4 tracking-tight">STILL SEEKING ANSWERS?</h2>
                    <p class="text-outline">Our global support team is available 24/7 to provide technical and
                        logistical assistance for your journey.</p>
                </div>
                <div class="flex gap-4 w-full md:w-auto">
                    <button
                        class="flex-1 md:flex-none px-12 py-5 bg-primary text-on-primary font-bold text-sm uppercase tracking-widest hover:bg-primary-container transition-all">
                        Contact Support
                    </button>
                    <button
                        class="flex-1 md:flex-none px-12 py-5 border-2 border-primary text-primary font-bold text-sm uppercase tracking-widest hover:bg-surface-container-high transition-all">
                        Live Chat
                    </button>
                </div>
            </div>
        </section>
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