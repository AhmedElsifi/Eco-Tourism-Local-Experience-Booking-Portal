<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Post-Field Report</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
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

    .material-symbols-outlined.filled {
      font-variation-settings: 'FILL' 1;
    }

    /* Custom scrollbar for textareas */
    ::-webkit-scrollbar {
      width: 8px;
    }

    ::-webkit-scrollbar-track {
      background: #f3f4ef;
    }

    ::-webkit-scrollbar-thumb {
      background: #c2c8c0;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #727972;
    }
  </style>
</head>

<body class="bg-background text-on-background min-h-screen flex flex-col">
  <!-- TopAppBar Shell (Suppressed Nav for Transactional Flow) -->
  <header
    class="bg-surface/80 backdrop-blur-md w-full border-none shadow-sm shadow-on-background/5 sticky top-0 z-30 h-20 flex justify-between items-center px-8">
    <div class="flex items-center gap-4">
      <a class="text-primary hover:bg-surface-container p-2 transition-colors duration-200 flex items-center justify-center"
        href="#">
        <span aria-hidden="true" class="material-symbols-outlined">arrow_back</span>
        <span class="sr-only">Go Back</span>
      </a>
      <div class="text-lg font-extrabold text-primary font-headline tracking-tighter uppercase">EcoPortal</div>
    </div>
    <div class="font-body font-medium text-sm text-on-surface-variant">Post-Field Report</div>
  </header>
  <!-- Main Canvas -->
  <main class="flex-grow flex justify-center items-start pt-12 pb-24 px-4 sm:px-8">
    <div
      class="w-full max-w-3xl bg-surface-container-lowest p-8 sm:p-12 shadow-[0px_20px_40px_rgba(25,28,25,0.06)] relative overflow-hidden">
      <!-- Decorative Accent -->
      <div
        class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-primary to-primary-container opacity-5 -z-10 transform translate-x-1/2 -translate-y-1/2">
      </div>
      <div class="mb-10">
        <h1 class="font-headline text-3xl font-bold tracking-tight text-primary mb-2">Field Report Submission</h1>
        <p class="font-body text-sm text-on-surface-variant">Document your recent expedition details for review and
          verification.</p>
      </div>
      <form action="#" class="space-y-8" method="POST">
        <!-- Report Details Section -->
        <div class="space-y-6 bg-surface-container-low p-6 sm:p-8 relative">
          <h2 class="font-headline text-lg font-bold text-on-surface flex items-center gap-2 mb-4">
            <span aria-hidden="true" class="material-symbols-outlined text-primary">edit_document</span>
            Report Details
          </h2>
          <!-- Text Area -->
          <div class="space-y-2">
            <label class="block font-label text-sm font-medium text-on-surface" for="report_content">Detailed
              Observations</label>
            <textarea
              class="w-full bg-surface-container-lowest border border-outline text-on-surface font-body text-sm p-4 focus:border-primary focus:ring-0 focus:outline-none transition-colors duration-200 placeholder-outline-variant"
              id="report_content" name="report_content"
              placeholder="Describe the ecological conditions, wildlife sightings, and any irregularities observed during the tour..."
              rows="8"></textarea>
          </div>
          <!-- Meta Data Grid -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="space-y-2">
              <label class="block font-label text-sm font-medium text-on-surface" for="location">Location Code</label>
              <input
                class="w-full bg-surface-container-lowest border border-outline text-on-surface font-body text-sm p-3 focus:border-primary focus:ring-0 focus:outline-none transition-colors duration-200"
                id="location" name="location" placeholder="e.g., ZN-442A" type="text" />
            </div>
            <div class="space-y-2">
              <label class="block font-label text-sm font-medium text-on-surface" for="duration">Expedition Duration
                (Hours)</label>
              <input
                class="w-full bg-surface-container-lowest border border-outline text-on-surface font-body text-sm p-3 focus:border-primary focus:ring-0 focus:outline-none transition-colors duration-200"
                id="duration" name="duration" placeholder="0" type="number" />
            </div>
          </div>
        </div>
        <!-- Media Upload Section -->
        <div class="space-y-6 bg-surface-container-low p-6 sm:p-8">
          <h2 class="font-headline text-lg font-bold text-on-surface flex items-center gap-2 mb-4">
            <span aria-hidden="true" class="material-symbols-outlined text-primary">photo_camera</span>
            Visual Evidence
          </h2>
          <!-- Upload Placeholder -->
          <div
            class="border-2 border-dashed border-outline-variant bg-surface-container-lowest p-10 flex flex-col items-center justify-center text-center cursor-pointer hover:bg-surface transition-colors duration-200 group">
            <div
              class="w-16 h-16 bg-surface-container flex items-center justify-center mb-4 group-hover:bg-primary-container transition-colors duration-200">
              <span aria-hidden="true"
                class="material-symbols-outlined text-3xl text-outline group-hover:text-on-primary-container">upload_file</span>
            </div>
            <h3 class="font-label text-sm font-medium text-on-surface mb-1">Click to upload photos</h3>
            <p class="font-body text-xs text-on-surface-variant">PNG, JPG, or HEIC up to 10MB.</p>
            <!-- Hidden File Input -->
            <input accept="image/png, image/jpeg, image/heic" class="hidden" id="file_upload" multiple=""
              name="file_upload" type="file" />
          </div>
        </div>
        <!-- Action Area -->
        <div class="pt-6 flex justify-end">
          <button
            class="bg-primary text-on-primary font-label text-sm font-bold uppercase tracking-wider px-8 py-4 hover:bg-primary-fixed-dim hover:text-on-primary-fixed transition-colors duration-200 flex items-center gap-2"
            type="submit">
            Submit Report
            <span aria-hidden="true" class="material-symbols-outlined text-sm">send</span>
          </button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>