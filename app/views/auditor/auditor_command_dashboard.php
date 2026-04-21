<!DOCTYPE html>

<html class="light" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Regional Auditor Dashboard</title>
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
            "tertiary": "#392d13",
            "inverse-surface": "#2e312e",
            "on-tertiary-fixed-variant": "#534529",
            "on-primary": "#ffffff",
            "secondary-fixed": "#ffddb6",
            "on-primary-fixed-variant": "#2f4d39",
            "on-tertiary-fixed": "#241a03",
            "on-primary-container": "#99baa1",
            "surface-container-low": "#f3f4ef",
            "surface-variant": "#e1e3de",
            "on-secondary-fixed-variant": "#5c421f",
            "surface-tint": "#466550",
            "on-error": "#ffffff",
            "surface-dim": "#d9dbd6",
            "tertiary-fixed": "#f5e0ba",
            "tertiary-fixed-dim": "#d8c49f",
            "on-surface-variant": "#424843",
            "on-primary-fixed": "#022110",
            "secondary-container": "#fed6a7",
            "on-secondary": "#ffffff",
            "outline": "#727972",
            "tertiary-container": "#504327",
            "surface-container-high": "#e7e9e4",
            "primary-fixed": "#c8ebd0",
            "secondary-fixed-dim": "#e6c093",
            "surface-container-highest": "#e1e3de",
            "outline-variant": "#c2c8c0",
            "surface-bright": "#f8faf5",
            "primary-container": "#2d4b37",
            "on-secondary-fixed": "#2a1800",
            "background": "#f8faf5",
            "surface-container-lowest": "#ffffff",
            "error-container": "#ffdad6",
            "on-background": "#191c19",
            "secondary": "#765934",
            "primary": "#163422",
            "on-surface": "#191c19",
            "on-error-container": "#93000a",
            "inverse-on-surface": "#f0f1ec",
            "error": "#ba1a1a",
            "on-tertiary": "#ffffff",
            "on-tertiary-container": "#c3b08c",
            "surface": "#f8faf5",
            "surface-container": "#edeee9",
            "on-secondary-container": "#795b36",
            "primary-fixed-dim": "#adcfb4",
            "inverse-primary": "#adcfb4"
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
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f8faf5;
      color: #191c19;
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

    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
  </style>
</head>

<body class="bg-background text-on-background flex h-screen overflow-hidden antialiased">
  <!-- SideNavBar -->
  <nav
    class="hidden md:flex fixed left-0 top-0 h-full flex-col bg-surface-bright dark:bg-stone-950 text-primary dark:text-[#f8faf5] font-headline tracking-tight w-64 rounded-none border-r-0 shadow-none z-50">
    <div class="p-6 pb-8 bg-surface-container-lowest flex items-center space-x-3 mb-4">
      <div class="w-10 h-10 bg-primary flex items-center justify-center text-on-primary font-bold text-xl">
        E
      </div>
      <div>
        <h1 class="text-xl font-bold text-primary dark:text-[#f8faf5] leading-tight">EcoPortal Auditor</h1>
        <p class="text-xs text-on-surface-variant">Regional Oversight</p>
      </div>
    </div>
    <div class="flex-1 flex flex-col px-3 space-y-2">
      <a class="flex items-center space-x-3 px-4 py-3 bg-surface-container dark:bg-stone-800 text-primary dark:text-white font-bold border-l-4 border-primary transition-colors duration-200 active:scale-[0.98]"
        href="auditor_command_dashboard.php">
        <span class="material-symbols-outlined fill" data-icon="dashboard">dashboard</span>
        <span class="font-medium text-sm">Dashboard</span>
      </a>
      <a class="flex items-center space-x-3 px-4 py-3 text-secondary dark:text-stone-400 opacity-80 hover:bg-surface-container-high dark:hover:bg-stone-800 transition-colors duration-200 active:scale-[0.98]"
        href="tours_review_queue.php">
        <span class="material-symbols-outlined" data-icon="fact_check">fact_check</span>
        <span class="font-medium text-sm">Review Tours</span>
      </a>
    </div>
    <div class="p-4 mt-auto border-t-0 bg-surface-container dark:bg-stone-900">
      <a class="flex items-center space-x-3 px-4 py-3 text-secondary dark:text-stone-400 opacity-80 hover:bg-surface-container-high dark:hover:bg-stone-800 transition-colors duration-200 active:scale-[0.98]"
        href="../../../index.php">
        <span class="material-symbols-outlined" data-icon="logout">logout</span>
        <span class="font-medium text-sm">Logout</span>
      </a>
    </div>
  </nav>
  <!-- Main Content Canvas -->
  <main class="ml-64 flex-1 h-full overflow-y-auto bg-surface-bright flex flex-col">
    <!-- Header Area -->
    <header class="px-12 pt-16 pb-8 bg-surface-container-low">
      <h1 class="font-headline font-extrabold text-5xl tracking-tighter text-primary mb-2">Hello, Alexander Thorne</h1>
      <p class="font-body text-lg font-medium text-on-surface-variant">Responsible for: South America Sector</p>
    </header>
    <!-- Data Grid -->
    <div class="p-12 flex-1">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
        <!-- Card 1 -->
        <div class="bg-surface-container p-8 hover:bg-surface-container-high transition-colors duration-300">
          <div class="flex flex-col h-full justify-between gap-6">
            <div class="flex items-start justify-between">
              <span class="material-symbols-outlined text-primary text-3xl" data-icon="book_online">book_online</span>
            </div>
            <div>
              <div class="font-headline font-bold text-4xl text-primary tracking-tight mb-3">1,240 Bookings</div>
              <p class="font-body text-base text-on-surface-variant leading-relaxed">Booking volume is stable for the
                current quarter.</p>
            </div>
          </div>
        </div>
        <!-- Card 2: Impact Chip Styling -->
        <div
          class="bg-tertiary-container text-on-tertiary-container p-8 hover:bg-tertiary transition-colors duration-300">
          <div class="flex flex-col h-full justify-between gap-6">
            <div class="flex items-start justify-between">
              <span class="material-symbols-outlined text-on-tertiary-container text-3xl" data-icon="eco">eco</span>
            </div>
            <div>
              <div class="font-headline font-bold text-4xl text-on-tertiary-container tracking-tight mb-3">45.2 Tons CO2
                Offset</div>
              <p class="font-body text-base opacity-90 leading-relaxed">Impact targets are being met across the sector.
              </p>
            </div>
          </div>
        </div>
        <!-- Card 3: Alert -->
        <div class="bg-error-container p-8">
          <div class="flex flex-col h-full justify-between gap-6">
            <div class="flex items-start justify-between">
              <span class="material-symbols-outlined text-error text-3xl" data-icon="warning">warning</span>
            </div>
            <div>
              <div class="font-headline font-bold text-4xl text-error tracking-tight mb-3">28 Complaints</div>
              <p class="font-body text-base text-on-error-container leading-relaxed font-medium">Complaints are too
                much, please consider reviewing them.</p>
            </div>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="bg-surface-container p-8 hover:bg-surface-container-high transition-colors duration-300">
          <div class="flex flex-col h-full justify-between gap-6">
            <div class="flex items-start justify-between">
              <span class="material-symbols-outlined text-primary text-3xl" data-icon="payments">payments</span>
            </div>
            <div>
              <div class="font-headline font-bold text-4xl text-primary tracking-tight mb-3">$145,000 Revenue</div>
              <p class="font-body text-base text-on-surface-variant leading-relaxed">Revenues are high, consider
                increasing the prices.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>