<!DOCTYPE html>

<html class="light" lang="en">

<?php
$title = "Destinations";
require_once("../components/head.php");
?>

<body class="bg-surface text-on-surface">
  <!-- Top Navigation Bar -->
  <header class="bg-[#f8faf5] dark:bg-[#1a1c18] border-b-0 sticky top-0 z-50 backdrop-blur-md bg-opacity-80">
    <nav class="flex justify-between items-center px-8 py-4 max-w-[1440px] mx-auto">
      <div class="text-2xl font-black text-[#163422] dark:text-[#d1e8d5] uppercase font-['Manrope'] tracking-tight">
        TerraBound
      </div>
      <div class="hidden md:flex items-center space-x-8">
        <a class="font-bold font-['Manrope'] text-[#163422] dark:text-white border-b-2 border-[#163422] pb-1"
          href="search_results.php">Destinations</a>
        <a class="text-[#414941] dark:text-[#c1c9be] hover:text-[#163422] font-['Manrope'] tracking-tight font-bold transition-colors duration-200"
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
  <main class="max-w-[1440px] mx-auto px-8 py-12 flex flex-col md:flex-row gap-12">
    <!-- Sidebar Filters -->
    <aside class="w-full md:w-80 flex-shrink-0">
      <div class="sticky top-8 space-y-10">
        <div>
          <h3 class="text-sm font-bold uppercase tracking-widest text-outline mb-6">Sustainability Tags</h3>
          <div class="space-y-3">
            <label class="flex items-center gap-3 cursor-pointer group">
              <input class="w-5 h-5 border-2 border-outline text-primary focus:ring-0 rounded-none" type="checkbox" />
              <span class="text-on-surface-variant group-hover:text-primary transition-colors">Plastic-Free</span>
            </label>
            <label class="flex items-center gap-3 cursor-pointer group">
              <input checked="" class="w-5 h-5 border-2 border-primary text-primary focus:ring-0 rounded-none"
                type="checkbox" />
              <span class="text-on-surface-variant group-hover:text-primary transition-colors">Organic Catering</span>
            </label>
            <label class="flex items-center gap-3 cursor-pointer group">
              <input class="w-5 h-5 border-2 border-outline text-primary focus:ring-0 rounded-none" type="checkbox" />
              <span class="text-on-surface-variant group-hover:text-primary transition-colors">Carbon Neutral</span>
            </label>
            <label class="flex items-center gap-3 cursor-pointer group">
              <input class="w-5 h-5 border-2 border-outline text-primary focus:ring-0 rounded-none" type="checkbox" />
              <span class="text-on-surface-variant group-hover:text-primary transition-colors">Zero-Waste
                Certified</span>
            </label>
          </div>
        </div>
        <div>
          <h3 class="text-sm font-bold uppercase tracking-widest text-outline mb-6">Price Range</h3>
          <div class="space-y-4">
            <input class="w-full accent-primary bg-surface-container h-1 rounded-none appearance-none" max="1000"
              min="50" type="range" />
            <div class="flex justify-between text-sm font-medium text-on-surface-variant">
              <span>$50</span>
              <span>$1,000+</span>
            </div>
          </div>
        </div>
        <div>
          <h3 class="text-sm font-bold uppercase tracking-widest text-outline mb-6">Guide Local Cred Score</h3>
          <div class="grid grid-cols-2 gap-2">
            <button
              class="py-2 border border-outline text-sm font-bold hover:bg-primary hover:text-on-primary transition-colors">80+
              Score</button>
            <button class="py-2 border border-primary bg-primary text-on-primary text-sm font-bold">95+ Score</button>
          </div>
        </div>
        <div>
          <h3 class="text-sm font-bold uppercase tracking-widest text-outline mb-6">Capacity</h3>
          <div class="space-y-2">
            <select
              class="w-full bg-surface-container border-0 py-3 px-4 font-bold text-on-surface focus:ring-2 focus:ring-primary">
              <option>Solo Traveler</option>
              <option>Small Group (2-5)</option>
              <option selected="">Medium Group (6-12)</option>
              <option>Private Charter</option>
            </select>
          </div>
        </div>
      </div>
    </aside>
    <!-- Main Content Area -->
    <section class="flex-grow">
      <!-- Header & Sorting -->
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
        <div>
          <h1 class="text-5xl font-extrabold tracking-tighter text-primary mb-2">Amazonian Canopy Trails</h1>
          <p class="text-on-surface-variant font-medium">Showing 12 sustainable experiences near Manaus, BR</p>
        </div>
        <div class="flex items-center gap-4 bg-surface-container px-6 py-3">
          <span class="text-xs font-bold uppercase text-outline">Sort By:</span>
          <select class="bg-transparent border-0 font-bold text-primary focus:ring-0 cursor-pointer">
            <option>Most Sustainable</option>
            <option>Price: Low-High</option>
            <option>Rating: Highest</option>
          </select>
        </div>
      </div>
      <!-- Experience Cards Grid -->
      <div class="grid grid-cols-1 gap-16">
        <!-- Card 1 -->
        <div class="group flex flex-col md:flex-row gap-8 items-start">
          <div class="relative w-full md:w-[400px] aspect-[4/5] overflow-hidden flex-shrink-0">
            <img class="object-cover w-full h-full grayscale-[20%] group-hover:grayscale-0 transition-all duration-700"
              data-alt="Distant shot of a wooden eco-lodge deep within a dense tropical rainforest with morning mist rising above the trees"
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuDp6B5SsqX45KrQUzCCAAWCB7erQhyzKMoosSp-Kd4-P0POB0sRaFFna9SJI8hikV4u_f7P0aDp2z10kmORFyHk4nLXNmns74jI6VbVplxLLmJv5cJ8qHdAO2AlTmhGm5Leoe8B8pt8SMxks_kFdtZ-7nxzPXF8qkd3j7tkKWFAzbxIpWPOHHLkFVasnErRnWOpyMB2onqnIUG3Hd0gexuu3nHq2JGd8Q5vqBPyQHjbl1L3rxCnOofLbHsBgLIgxACj8z3OtIOMLc4" />
            <div
              class="absolute top-0 right-0 bg-primary text-on-primary px-4 py-2 text-xs font-black uppercase tracking-tighter">
              Carbon Neutral
            </div>
          </div>
          <div class="flex-grow space-y-4">
            <div class="flex items-center gap-1 text-primary">
              <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">eco</span>
              <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">eco</span>
              <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">eco</span>
              <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">eco</span>
              <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">eco</span>
              <span class="ml-2 text-xs font-bold uppercase tracking-widest text-outline">5.0 Eco Rating</span>
            </div>
            <h2 class="text-3xl font-extrabold leading-none group-hover:text-primary transition-colors">Silent River
              Kayaking &amp; Native Botany</h2>
            <p class="text-on-surface-variant leading-relaxed max-w-2xl">Traverse the deep tributaries with a certified
              local guide from the Tupi community. Experience zero-impact navigation through flooded forests while
              cataloging rare medicinal flora.</p>
            <div class="flex flex-wrap gap-2 py-2">
              <span
                class="px-3 py-1 bg-tertiary-container text-on-tertiary-container text-[10px] font-bold uppercase">Plastic-Free</span>
              <span
                class="px-3 py-1 bg-tertiary-container text-on-tertiary-container text-[10px] font-bold uppercase">Solar
                Powered Base</span>
            </div>
            <div class="pt-6 flex items-center justify-between border-t border-outline-variant/30">
              <div class="space-y-1">
                <span class="block text-[10px] uppercase font-bold text-outline">From</span>
                <span class="text-2xl font-black text-primary">$180<span
                    class="text-sm font-normal text-on-surface-variant">/pp</span></span>
              </div>
              <div class="space-y-1 text-right">
                <span class="block text-[10px] uppercase font-bold text-outline">Capacity</span>
                <span class="text-sm font-bold">Max 6 Guests</span>
              </div>
              <button
                class="bg-primary text-on-primary px-8 py-3 font-bold hover:bg-primary-container transition-all">Secure
                Experience</button>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="group flex flex-col md:flex-row-reverse gap-8 items-start">
          <div class="relative w-full md:w-[400px] aspect-[4/5] overflow-hidden flex-shrink-0">
            <img class="object-cover w-full h-full grayscale-[20%] group-hover:grayscale-0 transition-all duration-700"
              data-alt="Lush green moss-covered tree trunks in a dense primordial jungle with soft light filtering through the high canopy"
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZ1QOJrXvCwl6P2DlGC-RRyGFrVY-o8xeJpFrknvBT0LsOjTR2yKOF5BEMDhF-fxGGHCTz8b7jHnkTx0HiGsvfN1cFNy5rHKQzLcLaiSqWGRtxfgpbA3SaFu11i7as-TJzYx4keMZpRaW0IOg1Q_infago07Jbb4jHD7wrdL-tSB9Jlc_bavXvsXoxE0JgbWMMOM50cQaunw1aiTgxM9f_ZVUajGSKttkgWTHCoN30yUUgqqLpkd-XvPz58mNoeuDW4pRMo9-aYYw" />
            <div
              class="absolute top-0 left-0 bg-secondary text-on-secondary px-4 py-2 text-xs font-black uppercase tracking-tighter">
              Local Heritage
            </div>
          </div>
          <div class="flex-grow space-y-4 md:text-right md:items-end flex flex-col">
            <div class="flex items-center gap-1 text-primary">
              <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">eco</span>
              <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">eco</span>
              <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">eco</span>
              <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">eco</span>
              <span class="material-symbols-outlined text-sm opacity-20">eco</span>
              <span class="ml-2 text-xs font-bold uppercase tracking-widest text-outline">4.2 Eco Rating</span>
            </div>
            <h2 class="text-3xl font-extrabold leading-none group-hover:text-primary transition-colors">Ancient
              Ethnobotany Trail</h2>
            <p class="text-on-surface-variant leading-relaxed max-w-2xl">A guided journey through historical migration
              paths, focusing on sustainable harvest techniques and the architectural geometry of tropical trees.</p>
            <div class="flex flex-wrap gap-2 py-2 justify-end">
              <span
                class="px-3 py-1 bg-tertiary-container text-on-tertiary-container text-[10px] font-bold uppercase">Indigenous
                Led</span>
              <span
                class="px-3 py-1 bg-tertiary-container text-on-tertiary-container text-[10px] font-bold uppercase">Organic
                Provisions</span>
            </div>
            <div class="pt-6 flex items-center justify-between w-full border-t border-outline-variant/30">
              <div class="space-y-1 text-left">
                <span class="block text-[10px] uppercase font-bold text-outline">From</span>
                <span class="text-2xl font-black text-primary">$125<span
                    class="text-sm font-normal text-on-surface-variant">/pp</span></span>
              </div>
              <div class="space-y-1 text-center">
                <span class="block text-[10px] uppercase font-bold text-outline">Capacity</span>
                <span class="text-sm font-bold">Max 12 Guests</span>
              </div>
              <button
                class="bg-primary text-on-primary px-8 py-3 font-bold hover:bg-primary-container transition-all">Secure
                Experience</button>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="group flex flex-col md:flex-row gap-8 items-start">
          <div class="relative w-full md:w-[400px] aspect-[4/5] overflow-hidden flex-shrink-0">
            <img class="object-cover w-full h-full grayscale-[20%] group-hover:grayscale-0 transition-all duration-700"
              data-alt="Sunlight streaming through tall trees in a dense forest with a floor covered in ferns and fallen leaves"
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0iuqW35hg1Z_rLgumUDmg5LP4HHfsQrSx8NVqwGK0qjeHgW7F11HJ2lAUkkuJkqBiK0icOh8dK67wl7A6qtbe6N0WIrk0h_7_4srK1fQwhPvRiWYuKh6_09KkZ1t2NfEicBLPskK8qfJuoMmFHzJMr3LBz0EAikDC2PvvJrcP_snKHNjdG9pRpiZQYYK3NK-BigRCgGZi_MxBKYExftyNQClpvGm747srQ2lJyfXqisGEKvSQtfUQRJTUKWDRxyxBuegv6lFdLsk" />
          </div>
          <div class="flex-grow space-y-4">
            <div class="flex items-center gap-1 text-primary">
              <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">eco</span>
              <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">eco</span>
              <span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">eco</span>
              <span class="material-symbols-outlined text-sm opacity-20">eco</span>
              <span class="material-symbols-outlined text-sm opacity-20">eco</span>
              <span class="ml-2 text-xs font-bold uppercase tracking-widest text-outline">3.8 Eco Rating</span>
            </div>
            <h2 class="text-3xl font-extrabold leading-none group-hover:text-primary transition-colors">Biodiversity
              Night Safari</h2>
            <p class="text-on-surface-variant leading-relaxed max-w-2xl">Witness the jungle's nocturnal transition using
              specialized night-vision gear that minimizes light pollution. Focus on amphibian and insect migration
              patterns.</p>
            <div class="flex flex-wrap gap-2 py-2">
              <span
                class="px-3 py-1 bg-tertiary-container text-on-tertiary-container text-[10px] font-bold uppercase">Minimal
                Light Usage</span>
              <span
                class="px-3 py-1 bg-tertiary-container text-on-tertiary-container text-[10px] font-bold uppercase">Citizen
                Science</span>
            </div>
            <div class="pt-6 flex items-center justify-between border-t border-outline-variant/30">
              <div class="space-y-1">
                <span class="block text-[10px] uppercase font-bold text-outline">From</span>
                <span class="text-2xl font-black text-primary">$95<span
                    class="text-sm font-normal text-on-surface-variant">/pp</span></span>
              </div>
              <div class="space-y-1 text-right">
                <span class="block text-[10px] uppercase font-bold text-outline">Capacity</span>
                <span class="text-sm font-bold">Max 4 Guests</span>
              </div>
              <button
                class="bg-primary text-on-primary px-8 py-3 font-bold hover:bg-primary-container transition-all">Secure
                Experience</button>
            </div>
          </div>
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