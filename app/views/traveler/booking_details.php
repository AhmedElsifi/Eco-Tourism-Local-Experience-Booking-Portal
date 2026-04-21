<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<title>Booking Details - The Earth Architect</title>
	<link
		href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600;700&amp;display=swap"
		rel="stylesheet" />
	<link
		href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
		rel="stylesheet" />
	<link
		href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
		rel="stylesheet" />
	<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
						"DEFAULT": "0.25rem",
						"lg": "0.5rem",
						"xl": "0.75rem",
						"full": "9999px"
					},
					"spacing": {},
					"fontFamily": {
						"headline": [
							"Manrope"
						],
						"body": [
							"Inter"
						],
						"label": [
							"Inter"
						]
					}
				},
			},
		}
	</script>
	<style>
		body {
			background-color: theme('colors.surface');
			color: theme('colors.on-surface');
		}
	</style>
</head>

<body
	class="font-body antialiased selection:bg-primary-container selection:text-on-primary-container min-h-screen flex">
	<!-- SideNavBar -->
	<nav
		class="bg-stone-50 dark:bg-stone-950 text-emerald-900 dark:text-emerald-500 font-manrope font-medium tracking-tight h-screen w-64 fixed left-0 top-0 border-r-0 rounded-none flex flex-col py-8 px-4 z-50">
		<div class="mb-12 px-4">
			<h1 class="text-2xl font-bold text-emerald-900 dark:text-emerald-400 tracking-tighter">The Earth Architect
			</h1>
			<p class="text-xs text-stone-600 dark:text-stone-400 mt-1 uppercase tracking-widest font-bold">Eco-Tourism
				Portal</p>
		</div>
		<div class="flex-1 flex flex-col space-y-2">
			<a class="flex items-center gap-4 px-4 py-3 border-l-4 border-transparent text-stone-600 dark:text-stone-400 hover:text-emerald-800 dark:hover:text-emerald-200 hover:bg-stone-200 dark:hover:bg-stone-800 transition-colors duration-200"
				href="traveler_dashboard.php">
				<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
				<span>Dashboard</span>
			</a>
			<a class="flex items-center gap-4 px-4 py-3 border-l-4 border-transparent text-stone-600 dark:text-stone-400 hover:text-emerald-800 dark:hover:text-emerald-200 hover:bg-stone-200 dark:hover:bg-stone-800 transition-colors duration-200"
				href="explore_tours.php">
				<span class="material-symbols-outlined" data-icon="explore">explore</span>
				<span>Tours</span>
			</a>
			<a class="flex items-center gap-4 px-4 py-3 border-l-4 border-transparent text-stone-600 dark:text-stone-400 hover:text-emerald-800 dark:hover:text-emerald-200 hover:bg-stone-200 dark:hover:bg-stone-800 transition-colors duration-200"
				href="messages.php">
				<span class="material-symbols-outlined" data-icon="chat">chat</span>
				<span>Chat</span>
			</a>
		</div>
		<div class="mt-auto px-4">
			<button
				class="w-full bg-emerald-900 text-stone-50 py-3 font-bold hover:bg-emerald-800 transition-colors duration-200 focus:ring-2 focus:ring-emerald-900 dark:focus:ring-emerald-400 outline-none">
				Logout
			</button>
		</div>
	</nav>
	<!-- Main Content Canvas -->
	<main class="ml-64 pt-16 flex-1 bg-surface min-h-screen">
		<div class="p-8 max-w-7xl mx-auto">
			<!-- Page Header -->
			<div class="mb-10">
				<h2 class="font-headline text-[3.5rem] leading-none tracking-[-0.02em] text-primary font-bold mb-4">
					Patagonian Glaciers Trek</h2>
				<div class="flex flex-wrap items-center gap-4 text-on-surface-variant font-label text-sm font-medium">
					<span class="flex items-center gap-1"><span
							class="material-symbols-outlined text-base">calendar_month</span> Oct 12 - Oct 15,
						2024</span>
					<span class="flex items-center gap-1"><span
							class="material-symbols-outlined text-base">location_on</span> El Calafate, Argentina</span>
					<span
						class="bg-primary text-on-primary px-3 py-1 rounded-none uppercase tracking-wider text-xs">Confirmed</span>
				</div>
			</div>
			<!-- Asymmetric Grid Layout -->
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
				<!-- Left Column: Details (Spans 8) -->
				<div class="lg:col-span-8 flex flex-col gap-8">
					<!-- Hero Image & Impact -->
					<div class="relative bg-surface-container-low rounded-none">
						<img alt="Glacier Trek" class="w-full aspect-video object-cover rounded-none"
							data-alt="dramatic wide angle view of massive blue glacier in patagonia with dark rocky mountains in background and overcast moody sky"
							src="https://lh3.googleusercontent.com/aida-public/AB6AXuDhtxw4WgOfLh64YJ2AmRIeYWRo6Zjh-fRGl-Sr_1QGyMOXSnBvXk8WHeQoaDBZV4tw69BxW0CUsPzqsfykpBg7fu6SwwMZGhlOoHUVntNjNkO2iR-V4Kmj0l_4lifBCm4N2swKGE5hWpxgqeoRp3J0OEP4ZLnsWN0M8ik2017GQ5YX1-Jdob2JWCH0DksqYHwZFTS2vcpChaYRHXPGRvF1H9NzUbwga33gc2Vs9TJq9DyiV6hDfnIFqjjMnD_18X70JOvEGa_Rt5U" />
						<!-- Impact Chip Overlay -->
						<div
							class="absolute bottom-0 left-0 bg-tertiary-container text-on-tertiary-container p-4 rounded-none backdrop-blur-md bg-opacity-90 flex items-center gap-3 shadow-[0px_20px_40px_rgba(25,28,25,0.06)]">
							<span class="material-symbols-outlined"
								style="font-variation-settings: 'FILL' 1;">eco</span>
							<div>
								<p class="font-label text-xs uppercase tracking-wider opacity-80">Carbon Offset</p>
								<p class="font-headline font-bold text-lg">145 kg CO₂e</p>
							</div>
						</div>
					</div>
					<!-- Itinerary Base -->
					<div class="bg-surface-container-low p-8 rounded-none">
						<h3 class="font-headline text-2xl text-primary font-semibold mb-6">Booking Overview</h3>
						<div class="grid grid-cols-2 gap-y-6 gap-x-4">
							<div>
								<p class="text-xs font-label text-outline mb-1 uppercase tracking-wide">Lead Passenger
								</p>
								<p class="font-medium text-on-surface">Eleanor Vance</p>
							</div>
							<div>
								<p class="text-xs font-label text-outline mb-1 uppercase tracking-wide">Party Size</p>
								<p class="font-medium text-on-surface">2 Adults</p>
							</div>
							<div>
								<p class="text-xs font-label text-outline mb-1 uppercase tracking-wide">Accommodation
								</p>
								<p class="font-medium text-on-surface">Eco-Dome Refugio (3 Nights)</p>
							</div>
							<div>
								<p class="text-xs font-label text-outline mb-1 uppercase tracking-wide">Activity Level
								</p>
								<div class="flex items-center gap-1 text-primary">
									<span class="material-symbols-outlined text-sm"
										style="font-variation-settings: 'FILL' 1;">directions_walk</span>
									<span class="material-symbols-outlined text-sm"
										style="font-variation-settings: 'FILL' 1;">directions_walk</span>
									<span class="material-symbols-outlined text-sm"
										style="font-variation-settings: 'FILL' 1;">directions_walk</span>
									<span class="material-symbols-outlined text-sm text-outline-variant opacity-40"
										style="font-variation-settings: 'FILL' 1;">directions_walk</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Right Column: Voucher & Actions (Spans 4) -->
				<div class="lg:col-span-4 flex flex-col gap-8">
					<!-- Digital Voucher -->
					<div
						class="bg-surface-container-high p-8 rounded-none shadow-[0px_20px_40px_rgba(25,28,25,0.06)] relative overflow-hidden group">
						<div
							class="absolute top-0 right-0 w-16 h-16 bg-primary opacity-5 rounded-none transform rotate-45 translate-x-8 -translate-y-8">
						</div>
						<div class="flex justify-between items-start mb-8">
							<h3 class="font-headline text-xl text-primary font-bold">Digital Voucher</h3>
							<span class="material-symbols-outlined text-outline">qr_code_scanner</span>
						</div>
						<div
							class="bg-surface-container-lowest p-4 mb-6 rounded-none flex justify-center border border-outline-variant/30">
							<!-- QR Placeholder -->
							<img alt="QR Code" class="w-32 h-32 object-contain mix-blend-multiply"
								src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_OW-TvXKb7oFPMvRphLL2x1O0ArjiyFA2oaPGUcZoxLUl3EdiX6nBZhTQKpCXo5rf_tn_1jUuIuJ9l3_I_FbQsSslHht7t1kB7RqU5HJ330S3QDI-QCPcng0A6otRqEuicXwhZo_Q_9E9QbwgXGaYWCe_tuvlRjvLsbXDYTkyP4a7Z64cJYxSVboacpmU9v-Wi9bEpr2SbxUVx0qLwEjw0IcyGmuotUuOtXn9YhWHC5b7tzmb64bXc2lgxE1rJ94TOm-Sxwvl88U" />
						</div>
						<div class="space-y-4 font-label">
							<div class="flex justify-between items-center border-b border-surface-variant pb-2">
								<span class="text-sm text-on-surface-variant">Booking Ref</span>
								<span class="font-mono font-bold text-on-surface">GLC-992-K8</span>
							</div>
							<div class="flex justify-between items-center border-b border-surface-variant pb-2">
								<span class="text-sm text-on-surface-variant">Total Paid</span>
								<span class="font-bold text-on-surface">$1,450.00</span>
							</div>
							<button
								class="w-full mt-4 bg-primary text-on-primary py-3 px-4 rounded-none font-bold text-sm uppercase tracking-wider hover:bg-primary-fixed-dim transition-colors flex items-center justify-center gap-2">
								<span class="material-symbols-outlined text-sm">download</span> Download PDF
							</button>
						</div>
					</div>
					<!-- Management Actions -->
					<div class="bg-surface-container p-8 rounded-none">
						<h4 class="font-headline text-lg text-primary font-semibold mb-4">Manage Booking</h4>
						<p class="text-sm text-on-surface-variant mb-6 leading-relaxed">Changes to your itinerary must
							be made at least 14 days prior to departure. Review our cancellation policy for details.</p>
						<div class="space-y-3">
							<button
								class="w-full bg-transparent border-2 border-outline text-on-surface py-3 px-4 rounded-none font-label font-bold text-sm uppercase tracking-wider hover:border-primary hover:text-primary transition-colors">
								Contact Guide
							</button>
							<!-- Prominent Refund Button using Secondary Container -->
							<button
								class="w-full bg-secondary-container text-on-secondary-container py-3 px-4 rounded-none font-label font-bold text-sm uppercase tracking-wider hover:bg-secondary-fixed-dim transition-colors flex items-center justify-center gap-2">
								<span class="material-symbols-outlined text-sm">undo</span> Request Refund
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>

</html>