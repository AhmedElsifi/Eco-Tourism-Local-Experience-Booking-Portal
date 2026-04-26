<!doctype html>

<html class="light" lang="en">
<?php
$title = "TerraBound Eco-Tourism | The Earth Architect";
require_once("./app/views/components/head.php")
  ?>

<body class="bg-surface text-on-surface selection:bg-primary-fixed selection:text-on-primary-fixed">
  <header class="bg-[#f8faf5] dark:bg-[#1a1c18] border-b-0 sticky top-0 z-50 backdrop-blur-md bg-opacity-80">
    <nav class="flex justify-between items-center px-8 py-4 max-w-[1440px] mx-auto">
      <div class="text-2xl font-black text-[#163422] dark:text-[#d1e8d5] uppercase font-['Manrope'] tracking-tight">
        TerraBound
      </div>
      <div class="hidden md:flex items-center space-x-8">
        <a class="text-[#414941] dark:text-[#c1c9be] hover:text-[#163422] font-['Manrope'] tracking-tight font-bold transition-colors duration-200"
          href="app\views\guest\search_results.php">Destinations</a>
        <a class="text-[#414941] dark:text-[#c1c9be] hover:text-[#163422] font-['Manrope'] tracking-tight font-bold transition-colors duration-200"
          href="app\views\guest\guides_directory.php">Guides</a>
        <a class="text-[#414941] dark:text-[#c1c9be] hover:text-[#163422] font-['Manrope'] tracking-tight font-bold transition-colors duration-200"
          href="app\views\guest\help_faq.php">FAQ</a>
      </div>
      <div class="flex items-center gap-4">
        <a href="app\views\guest\login_page.php"><button
            class="px-6 py-2 text-[#163422] font-bold font-['Manrope'] hover:bg-[#e7e9e4] transition-colors duration-200 active:scale-[0.98]">
            Login
          </button></a>
        <a href="app\views\guest\registration_selection.php"><button
            class="px-6 py-2 bg-primary text-on-primary font-bold font-['Manrope'] active:scale-[0.98] transition-colors duration-200">
            Register
          </button></a>
      </div>
    </nav>
  </header>
  <main>
    <section class="relative h-[819px] flex items-center justify-center overflow-hidden">
      <div class="absolute inset-0 z-0">
        <img alt="Sustainable mountain landscape" class="w-full h-full object-cover"
          data-alt="Cinematic aerial view of lush tropical mountains veiled in morning mist with sharp limestone peaks and deep emerald green foliage"
          src="https://images.unsplash.com/photo-1454496522488-7a8e488e8606?q=80&w=1176&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        <div class="absolute inset-0 bg-primary/30 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
      </div>
      <div class="relative z-10 max-w-[1440px] w-full px-8 flex flex-col md:flex-row items-end justify-between gap-12">
        <div class="max-w-2xl mb-12">
          <h1 class="text-6xl md:text-8xl font-extrabold text-white leading-[0.9] tracking-tighter mb-6">
            ARCHITECTS <br />OF THE EARTH.
          </h1>
          <p class="text-xl text-white/90 font-medium max-w-lg">
            High-precision eco-tourism for the conscious voyager. We don't
            just visit landscapes; we preserve the structural integrity of our
            planet.
          </p>
        </div>
        <!-- Square Search Bar Component -->
        <div class="bg-surface-container-lowest p-1 shadow-2xl w-full max-w-md lg:max-w-4xl">
          <div class="grid grid-cols-1 md:grid-cols-4 items-center">
            <div class="p-4 border-r border-outline-variant/30">
              <label class="block text-[10px] font-bold uppercase tracking-widest text-outline mb-1">Location</label>
              <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-sm">location_on</span>
                <input class="w-full border-none p-0 focus:ring-0 text-sm font-semibold bg-transparent"
                  placeholder="Where to?" type="text" />
              </div>
            </div>
            <div class="p-4 border-r border-outline-variant/30">
              <label class="block text-[10px] font-bold uppercase tracking-widest text-outline mb-1">Date</label>
              <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-sm">calendar_today</span>
                <input class="w-full border-none p-0 focus:ring-0 text-sm font-semibold bg-transparent"
                  placeholder="Add dates" type="text" />
              </div>
            </div>
            <div class="p-4 border-r border-outline-variant/30">
              <label class="block text-[10px] font-bold uppercase tracking-widest text-outline mb-1">Experience</label>
              <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary text-sm">eco</span>
                <select
                  class="w-full border-none p-0 focus:ring-0 text-sm font-semibold bg-transparent appearance-none">
                  <option>Forest Rebirth</option>
                  <option>Coastal Shield</option>
                  <option>Arctic Vigil</option>
                </select>
              </div>
            </div>
            <div class="p-2">
              <button
                class="w-full bg-primary text-on-primary py-4 px-6 font-bold tracking-tight hover:bg-primary-container transition-colors">
                SEARCH EXPEDITION
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Featured Eco-Experiences Grid -->
    <section class="py-24 px-8 max-w-[1440px] mx-auto">
      <div class="flex justify-between items-baseline mb-16 border-b border-outline-variant/20 pb-8">
        <div>
          <span class="text-secondary font-bold tracking-[0.2em] text-xs uppercase">Curated Expeditions</span>
          <h2 class="text-5xl font-extrabold tracking-tighter mt-2">
            FEATURED EXPERIENCES
          </h2>
        </div>
        <a class="text-primary font-bold border-b-2 border-primary pb-1 hover:text-primary-container hover:border-primary-container transition-all"
          href="#">VIEW ALL DESTINATIONS</a>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Card 1 -->
        <div class="group cursor-pointer">
          <div class="relative aspect-[4/5] overflow-hidden mb-6">
            <img alt="Amazon Rainforest Canopy"
              class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
              data-alt="Atmospheric low angle shot of deep green forest canopy with rays of light piercing through dense foliage and misty air"
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6LRFQeCK0486c5rgcr0fLjr3sfJOmFmvLd4tk-qyWWTLwt9LKA38hcEfY2XQjo5vAT2i69TZllL-Fjk2F85OU6CQOSY8zbjLPO-fbm4C4lD6JMg7Up9ZLWI7qzX_-IcwGAtVDkZ-PtfiH8BZt4TGTQZtaqmg7OyCEuC1FWfhY9E7GEAsj-Flso_HJ7oiQW0Ea5ZXxtNOmbFI9gJqa4yKgzDwCi7CC994AxH5Qw_YpqHflT9n5ZuP8gjwVIfs9M9l6G_u0Oorz3CI" />
            <div
              class="absolute top-4 left-4 bg-tertiary-container/90 text-on-tertiary-container px-3 py-1 text-[10px] font-bold tracking-widest uppercase">
              CO2 Offset: 142kg
            </div>
          </div>
          <div class="flex justify-between items-start mb-2">
            <h3 class="text-xl font-bold tracking-tight">
              Amazon Canopy Vigil
            </h3>
            <div class="flex gap-0.5">
              <span class="material-symbols-outlined text-primary text-lg"
                style="font-variation-settings: &quot;FILL&quot; 1">eco</span>
              <span class="material-symbols-outlined text-primary text-lg"
                style="font-variation-settings: &quot;FILL&quot; 1">eco</span>
              <span class="material-symbols-outlined text-primary text-lg"
                style="font-variation-settings: &quot;FILL&quot; 1">eco</span>
              <span class="material-symbols-outlined text-primary text-lg"
                style="font-variation-settings: &quot;FILL&quot; 1">eco</span>
              <span class="material-symbols-outlined text-outline-variant text-lg">eco</span>
            </div>
          </div>
          <p class="text-outline text-sm mb-4 leading-relaxed">
            Structural observation and reforestation support in the heart of
            the Amazon.
          </p>
          <div class="flex items-center justify-between border-t border-outline-variant/20 pt-4">
            <span class="text-primary font-black text-lg">$2,450
              <span class="text-xs text-outline font-normal">/ person</span></span>
            <span
              class="text-[10px] font-bold text-secondary tracking-widest uppercase bg-secondary-container/20 px-2 py-1">Local
              Lead</span>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="group cursor-pointer">
          <div class="relative aspect-[4/5] overflow-hidden mb-6">
            <img alt="Swiss Alps Glacial Monitoring"
              class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
              data-alt="Sharp high-contrast landscape of blue glacial ice meets dark jagged rock under a clear cold morning sky"
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-rDM-5RPW8SFIPF1GG-0T6MDJLOPfAiqsyqrAmFbTpTCBOwYxP7YvXFqt8X6nYE6I_2gbNJlSDknKmLrfFdR2Sg5WD3jWw6ju90V3lCuhmJR4ailATXfGsT50V6CwW23NUQ-peK-SyHqjyqGSNIqze2qYLxFfp-dHibSDKXBNcd0M1XV2FgpNicYPH2w8GIsH08cu67oM4GUAVRafLB2PmRmz4Gh7jatatvcRErd0FoXdaqgMcO96uyt77SYkJWVP8aKpDNpJKbs" />
            <div
              class="absolute top-4 left-4 bg-tertiary-container/90 text-on-tertiary-container px-3 py-1 text-[10px] font-bold tracking-widest uppercase">
              CO2 Offset: 88kg
            </div>
          </div>
          <div class="flex justify-between items-start mb-2">
            <h3 class="text-xl font-bold tracking-tight">
              Glacial Integrity Study
            </h3>
            <div class="flex gap-0.5">
              <span class="material-symbols-outlined text-primary text-lg"
                style="font-variation-settings: &quot;FILL&quot; 1">eco</span>
              <span class="material-symbols-outlined text-primary text-lg"
                style="font-variation-settings: &quot;FILL&quot; 1">eco</span>
              <span class="material-symbols-outlined text-primary text-lg"
                style="font-variation-settings: &quot;FILL&quot; 1">eco</span>
              <span class="material-symbols-outlined text-primary text-lg"
                style="font-variation-settings: &quot;FILL&quot; 1">eco</span>
              <span class="material-symbols-outlined text-primary text-lg"
                style="font-variation-settings: &quot;FILL&quot; 1">eco</span>
            </div>
          </div>
          <p class="text-outline text-sm mb-4 leading-relaxed">
            Assisting Swiss environmental architects in documenting glacial
            shifts.
          </p>
          <div class="flex items-center justify-between border-t border-outline-variant/20 pt-4">
            <span class="text-primary font-black text-lg">$3,100
              <span class="text-xs text-outline font-normal">/ person</span></span>
            <span
              class="text-[10px] font-bold text-secondary tracking-widest uppercase bg-secondary-container/20 px-2 py-1">Carbon
              Neutral</span>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="group cursor-pointer">
          <div class="relative aspect-[4/5] overflow-hidden mb-6">
            <img alt="Bali Sustainable Farming"
              class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
              data-alt="Vibrant green terraced rice paddies in Bali at sunrise with soft golden light hitting the water levels"
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuAG8rnAzEZkM9uSSyYu8whZ8jQz8Q8hp5OifoUbFbLaCdwQRobGP1HgWZwAuMnvVxH3oPvoNUVbuMPQsCKCDsSld43rJCX6baazQXPxYCuRowC6shOumf9S7Fk4Cgw6ZTYVtSeGrMyhYc_AOOaxKoP2lGbOzsqAfDv8_1tUH3XPHzZyGMDk69NH613yNYDHEr-QwqY8YhVsAZyCOvKpNJTbtZO8E10ZbkJ2ATZNV-gDZ-K9CBDej7Okj4ddTYrS0-bnzgOBqcnsHU4" />
            <div
              class="absolute top-4 left-4 bg-tertiary-container/90 text-on-tertiary-container px-3 py-1 text-[10px] font-bold tracking-widest uppercase">
              CO2 Offset: 210kg
            </div>
          </div>
          <div class="flex justify-between items-start mb-2">
            <h3 class="text-xl font-bold tracking-tight">
              Terrace Bio-Design
            </h3>
            <div class="flex gap-0.5">
              <span class="material-symbols-outlined text-primary text-lg"
                style="font-variation-settings: &quot;FILL&quot; 1">eco</span>
              <span class="material-symbols-outlined text-primary text-lg"
                style="font-variation-settings: &quot;FILL&quot; 1">eco</span>
              <span class="material-symbols-outlined text-primary text-lg"
                style="font-variation-settings: &quot;FILL&quot; 1">eco</span>
              <span class="material-symbols-outlined text-outline-variant text-lg">eco</span>
              <span class="material-symbols-outlined text-outline-variant text-lg">eco</span>
            </div>
          </div>
          <p class="text-outline text-sm mb-4 leading-relaxed">
            Regenerative agriculture immersion in Balinese subak ecosystems.
          </p>
          <div class="flex items-center justify-between border-t border-outline-variant/20 pt-4">
            <span class="text-primary font-black text-lg">$1,890
              <span class="text-xs text-outline font-normal">/ person</span></span>
            <span
              class="text-[10px] font-bold text-secondary tracking-widest uppercase bg-secondary-container/20 px-2 py-1">Community
              Owned</span>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="group cursor-pointer">
          <div class="relative aspect-[4/5] overflow-hidden mb-6">
            <img alt="Namibian Desert Conservation"
              class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
              data-alt="Deep orange sand dunes of the Namib desert against a stark cobalt blue sky with sharp shadows on the ridges"
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQsQ4F9W11gzOYZe17_9CDbwyHWz-iH7swbEP61cIrLxO9K0W8P_OdBtPmU5VHU7ocWPs5OqxXQgk3o2risVMHJPumtEx4PuKkIw01-aLQx-kOeHOJ75gX2Wo9JpuCK2-c0Gd4kjEnOrbC1uPJH1L8--vV3kqbLfGUNqsXn4Yv58-UGTGR6h0PV-_cFvGQ8J5XRrH8vsCp8cOfglsP1kEXm5FQhPQ7uLP3aChl3J1AXggjjcotdh-aSCSNQ9XjYzkePe2g9-Rb5IY" />
            <div
              class="absolute top-4 left-4 bg-tertiary-container/90 text-on-tertiary-container px-3 py-1 text-[10px] font-bold tracking-widest uppercase">
              CO2 Offset: 124kg
            </div>
          </div>
          <div class="flex justify-between items-start mb-2">
            <h3 class="text-xl font-bold tracking-tight">
              Namib Arid Research
            </h3>
            <div class="flex gap-0.5">
              <span class="material-symbols-outlined text-primary text-lg"
                style="font-variation-settings: &quot;FILL&quot; 1">eco</span>
              <span class="material-symbols-outlined text-primary text-lg"
                style="font-variation-settings: &quot;FILL&quot; 1">eco</span>
              <span class="material-symbols-outlined text-primary text-lg"
                style="font-variation-settings: &quot;FILL&quot; 1">eco</span>
              <span class="material-symbols-outlined text-primary text-lg"
                style="font-variation-settings: &quot;FILL&quot; 1">eco</span>
              <span class="material-symbols-outlined text-outline-variant text-lg">eco</span>
            </div>
          </div>
          <p class="text-outline text-sm mb-4 leading-relaxed">
            Desert ecosystem protection and nocturnal wildlife tracking
            programs.
          </p>
          <div class="flex items-center justify-between border-t border-outline-variant/20 pt-4">
            <span class="text-primary font-black text-lg">$2,780
              <span class="text-xs text-outline font-normal">/ person</span></span>
            <span
              class="text-[10px] font-bold text-secondary tracking-widest uppercase bg-secondary-container/20 px-2 py-1">Conservation
              Led</span>
          </div>
        </div>
      </div>
    </section>
    <!-- Our Global Impact Section -->
    <section class="bg-surface-container py-32 px-8 overflow-hidden">
      <div class="max-w-[1440px] mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
          <div>
            <span class="text-primary font-bold tracking-[0.2em] text-xs uppercase">Measurable Change</span>
            <h2 class="text-6xl font-extrabold tracking-tighter mt-4 mb-8 leading-[0.9]">
              OUR GLOBAL <br />IMPACT REPORT
            </h2>
            <p class="text-outline-variant text-lg mb-12 max-w-md font-body">
              TerraBound operates with architectural precision. We track every
              gram of carbon and every dollar reinvested into local
              biodiversity.
            </p>
            <div class="space-y-8">
              <div class="flex items-center gap-6 group">
                <div class="w-16 h-16 bg-primary text-on-primary flex items-center justify-center">
                  <span class="material-symbols-outlined text-3xl">co2</span>
                </div>
                <div>
                  <h4 class="text-4xl font-black tracking-tight text-primary">
                    1.2M
                    <span class="text-base font-bold uppercase tracking-widest text-outline">kg</span>
                  </h4>
                  <p class="text-sm font-bold uppercase tracking-widest text-secondary mt-1">
                    CO2 Offset Verified
                  </p>
                </div>
              </div>
              <div class="flex items-center gap-6 group">
                <div class="w-16 h-16 bg-primary text-on-primary flex items-center justify-center">
                  <span class="material-symbols-outlined text-3xl">work</span>
                </div>
                <div>
                  <h4 class="text-4xl font-black tracking-tight text-primary">
                    4,850+
                  </h4>
                  <p class="text-sm font-bold uppercase tracking-widest text-secondary mt-1">
                    Local Jobs Supported
                  </p>
                </div>
              </div>
              <div class="flex items-center gap-6 group">
                <div class="w-16 h-16 bg-primary text-on-primary flex items-center justify-center">
                  <span class="material-symbols-outlined text-3xl">shield</span>
                </div>
                <div>
                  <h4 class="text-4xl font-black tracking-tight text-primary">
                    124
                  </h4>
                  <p class="text-sm font-bold uppercase tracking-widest text-secondary mt-1">
                    Communities Protected
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="relative">
            <!-- High density info graphic placeholder -->
            <div class="bg-surface-container-highest p-1 aspect-square relative z-10">
              <img alt="Eco impact visualization" class="w-full h-full object-cover"
                data-alt="Abstract aerial top-down view of a salt flat with intricate hexagonal cracks and subtle patterns of pink and white mineral deposits"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWu47ZtXzOCLQuTweSdAd9UkNWuPvwQtij3skTEzGMbG9fsHfxGscmRFNG25K5UjYJwLYxTvxQ249e3PKb-CL69gPxn-txFUG0aU7Z5WhdM2WEUe565JzEi4BgawtqpmSaarWyCriCcXjN9PKGHdraMZ2Rc518_RZMnHbJHltE9rmVhP0V8j7rWw-dWMFo5dd8HD0sKJM6k0x-Pe4BKsgaa5s9HAtSIKvWEm-ejaD3g4W69BlRI1TFW7E-RdE9mjSgqjEBm9zAgvY" />
            </div>
            <div class="absolute -top-12 -right-12 w-64 h-64 bg-secondary/10 -z-0"></div>
            <div class="absolute -bottom-12 -left-12 w-80 h-32 bg-primary/5 -z-0"></div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Footer -->
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