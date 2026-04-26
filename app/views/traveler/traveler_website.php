<?php
session_start();

require_once dirname(__DIR__, 3) . '/core/connection.php';
require_once dirname(__DIR__, 2) . '/controllers/TravelerController.php';

$isLoggedIn = isset($_SESSION['user_id']) && $_SESSION['role'] === 'traveler';
$travelerId = $_SESSION['user_id'] ?? 0;

$controller = new TravelerController($connect);
$message = '';
$errors = [];
$result = null;

$tab = $_GET['tab'] ?? 'home';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $isLoggedIn) {
    $action = $_POST['action'] ?? '';
    
    if ($action === 'book') {
        $result = $controller->bookTour();
        if (isset($result['success']) && $result['success']) {
            $message = 'Booking confirmed! Check your dashboard for details.';
        } else {
            $errors = $result['errors'] ?? [];
        }
    }
    
    if ($action === 'carbon_offset') {
        $result = $controller->carbonOffset();
        if (isset($result['success']) && $result['success']) {
            $message = 'Carbon offset purchased successfully!';
        } else {
            $errors = $result['errors'] ?? [];
        }
    }
    
    if ($action === 'join_waitlist') {
        $result = $controller->waitlist();
        if (isset($result['success']) && $result['success']) {
            $message = 'Added to waitlist!';
        }
    }
    
    if ($action === 'cancel_booking') {
        $result = $controller->cancelBooking();
        if (isset($result['success']) && $result['success']) {
            $message = 'Booking cancelled! Refund: $' . number_format($result['refund'] ?? 0, 2);
        } else {
            $errors = $result['errors'] ?? [];
        }
    }
}

$availableTours = $controller->getAvailableTours();
$topExperiences = $controller->topExperiences();
$policies = $controller->getPolicies();
$projects = $controller->getProjects();

$tourImages = [
    'https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=800&q=80',
    'https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=800&q=80',
    'https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?w=800&q=80',
    'https://images.unsplash.com/photo-1527049974997-c93572d6b2e1?w=800&q=80',
    'https://images.unsplash.com/photo-1439066615861-d1af74d74000?w=800&q=80',
    'https://images.unsplash.com/photo-1478827387698-1527a7d6-8e1d-8a0d4dbb3f95?w=800&q=80',
    'https://images.unsplash.com/photo-1469474968028-56623f02e42e?w=800&q=80',
    'https://images.unsplash.com/photo-1518709268805-4e9042af9f23?w=800&q=80',
    'https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?w=800&q=80',
    'https://images.unsplash.com/photo-1486870591958-9b9d0fd1d35b?w=800&q=80',
    'https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?w=800&q=80',
    'https://images.unsplash.com/photo-1501854140801-50d01698950b?w=800&q=80',
    'https://images.unsplash.com/photo-1520483691742-480e38a5a4b5?w=800&q=80',
    'https://images.unsplash.com/photo-1531761535209-180857e963b9?w=800&q=80',
    'https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?w=800&q=80',
    'https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=800&q=80',
];

$userBookings = [];
$userCarbonOffsets = [];
$userWaitlist = [];
$userReviews = [];
if ($isLoggedIn) {
    $dashboard = $controller->dashboard();
    $userBookings = $dashboard['bookings'] ?? [];
    $userCarbonOffsets = $dashboard['carbonOffsets'] ?? [];
    $userWaitlist = $dashboard['waitlist'] ?? [];
    $userReviews = $dashboard['reviews'] ?? [];
}
?>
<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>TerraBound | Eco-Tourism</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols-Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script src="https://cdn.qrcodejs.com/qrcode.min.js"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#163422", "on-primary": "#ffffff",
                        "primary-container": "#2d4b37", "on-primary-container": "#99baa1",
                        "secondary": "#765934", "on-secondary": "#ffffff",
                        "secondary-container": "#fed6a7", "on-secondary-container": "#795b36",
                        "tertiary": "#392d13", "on-tertiary": "#ffffff",
                        "tertiary-container": "#504327", "on-tertiary-container": "#c3b08c",
                        "error": "#ba1a1a", "on-error": "#ffffff",
                        "error-container": "#ffdad6", "on-error-container": "#93000a",
                        "surface": "#f8faf5", "on-surface": "#191c19",
                        "surface-container": "#edeee9", "surface-container-high": "#e7e9e4", "surface-container-low": "#f3f4ef", "surface-container-lowest": "#ffffff",
                        "outline": "#727972", "outline-variant": "#c2c8c0",
                        "background": "#f8faf5", "on-background": "#191c19"
                    },
                    fontFamily: { "headline": ["Manrope", "sans-serif"], "body": ["Inter", "sans-serif"] }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>
<body class="bg-surface text-on-surface font-body">
    <header class="bg-[#f8faf5] sticky top-0 z-50 border-b border-outline/15">
        <nav class="max-w-[1440px] mx-auto px-8 py-4 flex justify-between items-center">
            <a href="?tab=home" class="text-2xl font-black text-primary font-headline">TerraBound</a>
            <div class="hidden md:flex items-center gap-8">
                <a href="?tab=home" class="text-[#414941] font-bold hover:text-primary">Home</a>
                <a href="?tab=destinations" class="text-[#414941] font-bold hover:text-primary">Destinations</a>
                <a href="?tab=experiences" class="text-[#414941] font-bold hover:text-primary">Experiences</a>
                <a href="?tab=impact" class="text-[#414941] font-bold hover:text-primary">Our Impact</a>
                <a href="?tab=about" class="text-[#414941] font-bold hover:text-primary">About</a>
            </div>
            <div class="flex items-center gap-4">
                <?php if ($isLoggedIn): ?>
                <a href="?tab=account" class="px-4 py-2 font-bold hover:bg-surface-container">My Account</a>
                <a href="?tab=bookings" class="px-4 py-2 font-bold hover:bg-surface-container">Bookings</a>
                <a href="/eco_full/index.php" class="bg-primary text-on-primary px-6 py-2 font-bold">Logout</a>
                <?php else: ?>
                <a href="/eco_full/app/views/guest/login_page.php" class="px-6 py-2 text-primary font-bold hover:bg-surface-container">Login</a>
                <a href="/eco_full/app/views/guest/registration_selection.php" class="bg-primary text-on-primary px-6 py-2 font-bold">Register</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <?php if ($message): ?>
    <div class="bg-primary-container text-on-primary-container p-4 mx-8 mt-8 border-l-4 border-primary">
        <?php echo htmlspecialchars($message); ?>
    </div>
    <?php endif; ?>

    <?php if (isset($errors['login'])): ?>
    <div class="bg-error-container text-on-error-container p-4 mx-8 mt-8 border-l-4 border-error">
        <?php echo htmlspecialchars($errors['login']); ?><br>
        <a href="/eco_full/app/views/guest/login_page.php" class="underline">Click here to login</a>
    </div>
    <?php endif; ?>

    <main>
        <?php if ($tab === 'home' || $tab === ''): ?>
        <section class="relative h-[700px] flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0">
                <img src="https://images.unsplash.com/photo-1454496522488-7a8e488e8606?q=80&w=1920" class="w-full h-full object-cover" />
                <div class="absolute inset-0 bg-primary/50 mix-blend-multiply"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-surface via-transparent to-transparent"></div>
            </div>
            <div class="relative z-10 text-center text-white max-w-4xl px-8">
                <span class="text-sm font-bold tracking-[0.3em] uppercase opacity-80 mb-4 block">Sustainable Travel</span>
                <h1 class="text-6xl md:text-8xl font-black font-headline tracking-tighter mb-6">ARCHITECTS OF THE EARTH</h1>
                <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-10 opacity-90">We don't just visit landscapes; we preserve the structural integrity of our planet. Every expedition is designed with zero-waste principles and maximum positive impact.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="?tab=destinations" class="bg-white text-primary px-10 py-4 font-bold text-lg inline-block hover:bg-primary-container hover:text-on-primary-container transition-colors">EXPLORE EXPEDITIONS</a>
                    <a href="?tab=about" class="border-2 border-white text-white px-10 py-4 font-bold text-lg inline-block hover:bg-white hover:text-primary transition-colors">LEARN MORE</a>
                </div>
            </div>
        </section>

        <section class="py-24 px-8 max-w-[1440px] mx-auto">
            <div class="text-center mb-16">
                <span class="text-secondary font-bold tracking-[0.2em] text-xs uppercase">Why Choose Us</span>
                <h2 class="text-5xl font-black font-headline tracking-tighter text-primary mt-4">THE TERRABOUND DIFFERENCE</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-8 bg-surface-container">
                    <div class="w-30 h-20 bg-primary-container mx-auto mb-6 flex items-center justify-center">
                        <span class="material-symbols-outlined text-4xl text-on-primary-container">eco</span>
                    </div>
                    <h3 class="font-headline text-2xl font-bold mb-4">100% Carbon Neutral</h3>
                    <p class="text-on-surface-variant">Every booking automatically funds reforestation projects and renewable energy initiatives. Your journey leaves no carbon footprint.</p>
                </div>
                <div class="text-center p-8 bg-surface-container">
                    <div class="w-38 h-24 bg-secondary-container mx-auto mb-6 flex items-center justify-center">
                        <span class="material-symbols-outlined text-4xl text-on-secondary-container">volunteer_activism</span>
                    </div>
                    <h3 class="font-headline text-2xl font-bold mb-4">Local Community First</h3>
                    <p class="text-on-surface-variant">80% of every booking goes directly to local guides and communities. We invest in the people who protect these ecosystems.</p>
                </div>
                <div class="text-center p-8 bg-surface-container">
                    <div class="w-34 h-24 bg-tertiary-container mx-auto mb-6 flex items-center justify-center">
                        <span class="material-symbols-outlined text-4xl text-on-tertiary-container">science</span>
                    </div>
                    <h3 class="font-headline text-2xl font-bold mb-4">Scientific Conservation</h3>
                    <p class="text-on-surface-variant">Our expeditions support wildlife research and conservation programs. Your adventure contributes to real scientific discoveries.</p>
                </div>
            </div>
        </section>

        <section class="py-20 px-8 bg-surface-container">
            <div class="max-w-[1440px] mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <span class="text-secondary font-bold tracking-[0.2em] text-xs uppercase">Our Mission</span>
                        <h2 class="text-4xl font-black font-headline tracking-tighter text-primary mt-4 mb-6">TRAVEL WITH PURPOSE</h2>
                        <p class="text-lg text-on-surface-variant leading-relaxed mb-6">
                            TerraBound was founded on a simple belief: travel should restore, not deplete. Each expedition is carefully crafted to minimize environmental impact while maximizing benefit to local ecosystems and communities.
                        </p>
                        <p class="text-lg text-on-surface-variant leading-relaxed mb-6">
                            Our certified eco-guides are trained conservationists, researchers, and local experts who share an unwavering commitment to preserving the natural world for future generations.
                        </p>
                        <p class="text-lg text-on-surface-variant leading-relaxed">
                            From the Amazon rainforest to the Great Barrier Reef, we partner with communities and scientists to create experiences that transform both travelers and the territories they visit.
                        </p>
                    </div>
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=800&q=80" class="w-full" alt="Conservation" />
                        <div class="absolute -bottom-8 -left-8 bg-primary text-on-primary p-8">
                            <p class="text-4xl font-black font-headline">12,500+</p>
                            <p class="font-bold">Acres Protected</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 px-8 max-w-[1440px] mx-auto">
            <div class="text-center mb-16">
                <span class="text-secondary font-bold tracking-[0.2em] text-xs uppercase">Curated Expeditions</span>
                <h2 class="text-5xl font-black font-headline tracking-tighter text-primary mt-4">FEATURED EXPERIENCES</h2>
                <p class="text-lg text-outline mt-4">Handpicked journeys that embody sustainable travel</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach (array_slice($availableTours, 0, 6) as $index => $tour): ?>
                <?php $imgKey = $index % count($tourImages); ?>
                <a href="?tab=tour&id=<?php echo $tour['tour_version_id']; ?>" class="group block bg-surface-container hover:shadow-xl transition-shadow">
                    <div class="aspect-[4/3] relative overflow-hidden">
                        <img src="<?php echo $tourImages[$imgKey]; ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="<?php echo htmlspecialchars($tour['tour_name']); ?>" />
                        <div class="absolute top-4 left-4 bg-primary text-on-primary px-3 py-1 text-xs font-bold">
                            <?php echo strtoupper($tour['tour_type']); ?>
                        </div>
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-bold uppercase tracking-wider text-secondary"><?php echo htmlspecialchars($tour['tour_type']); ?></span>
                        <h3 class="font-headline text-xl font-bold mt-2 group-hover:text-primary"><?php echo htmlspecialchars($tour['tour_name']); ?></h3>
                        <p class="text-sm text-outline mt-1"><?php echo htmlspecialchars($tour['location_name'] . ', ' . $tour['country']); ?></p>
                        <div class="flex justify-between items-center mt-4">
                            <p class="text-primary font-bold text-lg">From $<?php echo number_format($tour['price_per_person'], 0); ?>/person</p>
                            <span class="material-symbols-outlined text-primary group-hover:translate-x-1 transition-transform">arrow_forward</span>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
            <div class="text-center mt-12">
                <a href="?tab=destinations" class="border-2 border-primary text-primary px-10 py-4 font-bold text-lg inline-block hover:bg-primary hover:text-on-primary transition-colors">VIEW ALL DESTINATIONS</a>
            </div>
        </section>

        <section class="py-24 px-8 bg-primary text-on-primary">
            <div class="max-w-[1440px] mx-auto text-center">
                <span class="text-sm font-bold tracking-[0.2em] uppercase opacity-80 mb-4 block">Take Action Today</span>
                <h2 class="text-5xl md:text-6xl font-black font-headline tracking-tighter mb-6">MAKE YOUR TRAVEL CARBON NEUTRAL</h2>
                <p class="text-xl max-w-3xl mx-auto mb-10 opacity-90">Every booking plants trees and funds conservation projects around the world. Your journey can offset more carbon than you produce.</p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="?tab=carbon" class="bg-white text-primary px-10 py-5 font-bold text-lg inline-block hover:bg-secondary hover:text-on-secondary transition-colors">OFFSET YOUR CARBON</a>
                    <a href="?tab=impact" class="border-2 border-white text-white px-10 py-5 font-bold text-lg inline-block hover:bg-white hover:text-primary transition-colors">SEE OUR IMPACT</a>
                </div>
            </div>
        </section>

        <section class="py-20 px-8 max-w-[1440px] mx-auto">
            <div class="text-center mb-16">
                <span class="text-secondary font-bold tracking-[0.2em] text-xs uppercase">Join the Movement</span>
                <h2 class="text-4xl font-black font-headline tracking-tighter text-primary mt-4">OUR IMPACT BY NUMBERS</h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <p class="text-5xl font-black font-headline text-primary">50K+</p>
                    <p class="font-bold mt-2">Trees Planted</p>
                </div>
                <div class="text-center">
                    <p class="text-5xl font-black font-headline text-primary">2,400+</p>
                    <p class="font-bold mt-2">Travelers Served</p>
                </div>
                <div class="text-center">
                    <p class="text-5xl font-black font-headline text-primary">150+</p>
                    <p class="font-bold mt-2">Local Guides</p>
                </div>
                <div class="text-center">
                    <p class="text-5xl font-black font-headline text-primary">35</p>
                    <p class="font-bold mt-2">Countries</p>
                </div>
            </div>
        </section>

        <section class="py-20 px-8 bg-surface-container">
            <div class="max-w-[1440px] mx-auto text-center">
                <h2 class="text-4xl font-black font-headline tracking-tighter text-primary mb-6">WHAT TRAVELERS SAY</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-surface p-8 text-left">
                        <div class="flex gap-1 mb-4">
                            <span class="material-symbols-outlined text-secondary">star</span>
                            <span class="material-symbols-outlined text-secondary">star</span>
                            <span class="material-symbols-outlined text-secondary">star</span>
                            <span class="material-symbols-outlined text-secondary">star</span>
                            <span class="material-symbols-outlined text-secondary">star</span>
                        </div>
                        <p class="text-on-surface-variant italic mb-4">"The Amazon expedition changed my perspective on travel forever. Zero waste, maximum impact. I've never felt so connected to nature."</p>
                        <p class="font-bold">Sarah M.</p>
                        <p class="text-sm text-outline">Amazon Explorer</p>
                    </div>
                    <div class="bg-surface p-8 text-left">
                        <div class="flex gap-1 mb-4">
                            <span class="material-symbols-outlined text-secondary">star</span>
                            <span class="material-symbols-outlined text-secondary">star</span>
                            <span class="material-symbols-outlined text-secondary">star</span>
                            <span class="material-symbols-outlined text-secondary">star</span>
                            <span class="material-symbols-outlined text-secondary">star</span>
                        </div>
                        <p class="text-on-surface-variant italic mb-4">"The Great Barrier Reef experience was incredible. Contributing to coral restoration while diving was a dream come true."</p>
                        <p class="font-bold">James K.</p>
                        <p class="text-sm text-outline">Reef Guardian</p>
                    </div>
                    <div class="bg-surface p-8 text-left">
                        <div class="flex gap-1 mb-4">
                            <span class="material-symbols-outlined text-secondary">star</span>
                            <span class="material-symbols-outlined text-secondary">star</span>
                            <span class="material-symbols-outlined text-secondary">star</span>
                            <span class="material-symbols-outlined text-secondary">star</span>
                            <span class="material-symbols-outlined text-secondary">star</span>
                        </div>
                        <p class="text-on-surface-variant italic mb-4">"From booking to completion, everything was seamless. The carbon offset calculator helped me make informed choices."</p>
                        <p class="font-bold">Maria L.</p>
                        <p class="text-sm text-outline">Eco Traveler</p>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <?php if ($tab === 'destinations'): ?>
        <section class="py-16 px-8 max-w-[1440px] mx-auto">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-black font-headline tracking-tighter text-primary">ALL DESTINATIONS</h1>
                <p class="text-lg text-outline mt-2">Discover eco-friendly experiences around the world</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($availableTours as $index => $tour): ?>
                <?php $imgKey = $index % count($tourImages); ?>
                <a href="?tab=tour&id=<?php echo $tour['tour_version_id']; ?>" class="group block bg-surface-container hover:shadow-xl transition-shadow">
                    <div class="aspect-[16/10] relative overflow-hidden">
                        <img src="<?php echo $tourImages[$imgKey]; ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="<?php echo htmlspecialchars($tour['tour_name']); ?>" />
                        <div class="absolute top-4 right-4 bg-primary text-on-primary px-3 py-1 text-xs font-bold">
                            <?php echo strtoupper($tour['tour_type']); ?>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-headline text-xl font-bold group-hover:text-primary"><?php echo htmlspecialchars($tour['tour_name']); ?></h3>
                        <p class="text-sm text-outline mt-1"><?php echo htmlspecialchars($tour['location_name'] . ', ' . $tour['country']); ?></p>
                        <p class="text-sm text-outline mt-1">by <?php echo htmlspecialchars($tour['guide_name']); ?></p>
                        <div class="flex justify-between items-center mt-4 pt-4 border-t border-outline/15">
                            <div>
                                <p class="text-xs text-outline">Starting from</p>
                                <p class="text-primary font-bold text-lg">$<?php echo number_format($tour['price_per_person'], 0); ?></p>
                            </div>
                            <div class="text-right">
                                <p class="text-xs text-outline">Max <?php echo $tour['max_capacity']; ?> guests</p>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endif; ?>

        <?php if ($tab === 'tour' && !empty($_GET['id'])): ?>
        <?php 
        $tourVersionId = intval($_GET['id']);
        $tour = $controller->getTourById($tourVersionId);
        $addons = $controller->getTourAddons($tourVersionId);
        ?>
        <?php if ($tour): ?>
        <section class="py-16 px-8 max-w-[1440px] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <div class="lg:col-span-2">
                    <div class="aspect-[16/9] relative overflow-hidden mb-8">
                        <?php 
                        $tourIndex = array_search($tourVersionId, array_column($availableTours, 'tour_version_id'));
                        if ($tourIndex === false) $tourIndex = 0;
                        ?>
                        <img src="<?php echo $tourImages[$tourIndex % count($tourImages)]; ?>" class="w-full h-full object-cover" alt="<?php echo htmlspecialchars($tour['tour_name']); ?>" />
                    </div>
                    <h1 class="text-4xl font-black font-headline tracking-tighter text-primary"><?php echo htmlspecialchars($tour['tour_name']); ?></h1>
                    <p class="text-lg text-outline mt-2"><?php echo htmlspecialchars($tour['location_name'] . ', ' . $tour['country']); ?></p>
                    
                    <div class="flex items-center gap-4 mt-6">
                        <span class="bg-secondary text-on-secondary px-3 py-1 text-sm font-bold uppercase"><?php echo $tour['tour_type']; ?></span>
                        <span class="flex items-center gap-1 text-primary"><span class="material-symbols-outlined text-sm">eco</span> Eco-Certified</span>
                    </div>
                    
                    <div class="mt-8 space-y-6">
                        <h2 class="text-2xl font-bold font-headline">About This Experience</h2>
                        <p class="text-on-surface-variant leading-relaxed"><?php echo htmlspecialchars($tour['waste_management'] ?? 'Experience sustainable travel with our certified eco-guides.'); ?></p>
                        <p class="text-sm text-outline">Carbon footprint: <?php echo number_format($tour['carbon_footprint'] ?? 0, 1); ?> kg CO2</p>
                    </div>
                    
                    <?php if (!empty($addons)): ?>
                    <div class="mt-8">
                        <h2 class="text-2xl font-bold font-headline mb-4">Add-on Services</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <?php foreach ($addons as $addon): ?>
                            <div class="bg-surface-container p-4">
                                <p class="font-bold"><?php echo htmlspecialchars($addon['name']); ?></p>
                                <p class="text-primary font-bold">$<?php echo number_format($addon['price'], 0); ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                
                <div class="lg:col-span-1">
                    <div class="bg-surface-container p-8 sticky top-24">
                        <p class="text-3xl font-black font-headline text-primary">$<?php echo number_format($tour['price_per_person'], 0); ?></p>
                        <p class="text-outline">per person</p>
                        
                        <form method="POST" class="mt-6 space-y-4">
                            <input type="hidden" name="action" value="book">
                            <input type="hidden" name="tour_version_id" value="<?php echo $tourVersionId; ?>">
                            
                            <div>
                                <label class="block text-sm font-bold mb-2">Number of Guests</label>
                                <select name="num_people" class="w-full border-2 border-outline p-3">
                                    <?php for ($i = 1; $i <= min($tour['max_capacity'], 10); $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?> <?php echo $i === 1 ? 'guest' : 'guests'; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-bold mb-2">Start Date</label>
                                <input type="datetime-local" name="start_date" class="w-full border-2 border-outline p-3" required>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-bold mb-2">End Date</label>
                                <input type="datetime-local" name="end_date" class="w-full border-2 border-outline p-3" required>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-bold mb-2">Booking Type</label>
                                <select name="booking_type" class="w-full border-2 border-outline p-3" id="bookingType" onchange="togglePayment()">
                                    <option value="instant">Instant Booking</option>
                                    <option value="request">Request to Book</option>
                                </select>
                            </div>
                            
                            <div id="paymentSection" class="border-t border-outline/15 pt-4 mt-4">
                                <h3 class="font-bold mb-4 flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary">credit_card</span>
                                    Payment Details
                                </h3>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-xs font-bold uppercase text-outline mb-1">Card Number</label>
                                        <input type="text" name="card_number" placeholder="1234 5678 9012 3456" class="w-full border-2 border-outline p-3" maxlength="19" oninput="formatCardNumber(this)">
                                    </div>
                                    <div class="grid grid-cols-2 gap-4">
                                        <div>
                                            <label class="block text-xs font-bold uppercase text-outline mb-1">Expiry Date</label>
                                            <input type="text" name="card_expiry" placeholder="MM/YY" class="w-full border-2 border-outline p-3" maxlength="5" oninput="formatExpiry(this)">
                                        </div>
                                        <div>
                                            <label class="block text-xs font-bold uppercase text-outline mb-1">CVV</label>
                                            <input type="text" name="card_cvv" placeholder="123" class="w-full border-2 border-outline p-3" maxlength="4">
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-bold uppercase text-outline mb-1">Cardholder Name</label>
                                        <input type="text" name="card_name" placeholder="John Doe" class="w-full border-2 border-outline p-3">
                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="w-full bg-primary text-on-primary py-4 font-bold text-lg mt-4">
                                <?php echo $isLoggedIn ? 'BOOK NOW' : 'LOGIN TO BOOK'; ?>
                            </button>
                        </form>
                        
                        <script>
                        function togglePayment() {
                            var bookingType = document.getElementById('bookingType').value;
                            var paymentSection = document.getElementById('paymentSection');
                            if (bookingType === 'request') {
                                paymentSection.style.display = 'none';
                            } else {
                                paymentSection.style.display = 'block';
                            }
                        }
                        function formatCardNumber(input) {
                            var value = input.value.replace(/\s/g, '').replace(/\D/g, '');
                            var formatted = value.match(/.{1,4}/g)?.join(' ') || '';
                            input.value = formatted;
                        }
                        function formatExpiry(input) {
                            var value = input.value.replace(/\D/g, '');
                            if (value.length >= 2) {
                                input.value = value.substring(0, 2) + '/' + value.substring(2, 4);
                            } else {
                                input.value = value;
                            }
                        }
                        togglePayment();
                        </script>
                        
                        <div class="mt-4">
                            <form method="POST">
                                <input type="hidden" name="action" value="join_waitlist">
                                <input type="hidden" name="tour_version_id" value="<?php echo $tourVersionId; ?>">
                                <input type="hidden" name="num_people" value="1">
                                <button type="submit" class="w-full border-2 border-secondary text-secondary py-3 font-bold">
                                    JOIN WAITLIST
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <?php endif; ?>

        <?php if ($tab === 'carbon'): ?>
        <section class="py-16 px-8 max-w-[1440px] mx-auto">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-black font-headline tracking-tighter text-primary">OFFSET YOUR CARBON</h1>
                <p class="text-lg text-outline mt-2">Make your travel carbon neutral</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-2xl font-bold font-headline mb-6">Choose a Project</h2>
                    <form method="POST" id="carbon-form">
                        <input type="hidden" name="action" value="carbon_offset">
                        <div class="space-y-4">
                            <?php foreach ($projects as $project): ?>
                            <label class="project-option block bg-surface-container p-6 border-2 border-outline hover:border-primary cursor-pointer transition-colors">
                                <input type="radio" name="project_id" value="<?php echo $project['project_id']; ?>" class="mr-3" required onchange="document.querySelectorAll('.project-option').forEach(l => { l.classList.remove('border-primary', 'bg-primary-fixed'); l.classList.add('border-outline'); }); this.closest('label').classList.remove('border-outline'); this.closest('label').classList.add('border-primary', 'bg-primary-fixed');">
                                <p class="font-bold text-lg"><?php echo htmlspecialchars($project['project_name']); ?></p>
                                <p class="text-sm text-outline"><?php echo htmlspecialchars($project['location']); ?></p>
                                <p class="text-sm text-outline mt-2"><?php echo htmlspecialchars($project['description']); ?></p>
                                <p class="text-primary font-bold mt-2">$<?php echo number_format($project['cost_per_ton'], 2); ?>/ton CO2</p>
                            </label>
                            <?php endforeach; ?>
                        </div>
                        
                        <div class="mt-6">
                            <label class="block text-sm font-bold mb-2">Amount (tons CO2)</label>
                            <input type="number" name="amount_tons" step="0.1" min="0.1" value="1" class="w-full border-2 border-outline p-3">
                        </div>
                        
                        <button type="submit" class="mt-6 bg-primary text-on-primary px-8 py-4 font-bold w-full">
                            <?php echo $isLoggedIn ? 'PURCHASE OFFSET' : 'LOGIN TO OFFSET'; ?>
                        </button>
                    </form>
                </div>
                
                <div>
                    <h2 class="text-2xl font-bold font-headline mb-6">Your Carbon Impact</h2>
                    <div class="bg-surface-container p-8">
                        <?php if ($isLoggedIn): ?>
                        <p class="text-sm text-outline">Total Offset</p>
                        <p class="text-4xl font-black font-headline text-primary"><?php echo number_format($userCarbonOffsets ? array_sum(array_column($userCarbonOffsets, 'amount_tons')) : 0, 2); ?> tons</p>
                        <p class="text-outline mt-2">Equivalent to <?php echo number_format(($userCarbonOffsets ? array_sum(array_column($userCarbonOffsets, 'amount_tons')) : 0) * 1000 / 2.5, 0); ?> trees planted</p>
                        
                        <?php if (!empty($userCarbonOffsets)): ?>
                        <div class="mt-6 space-y-4">
                            <?php foreach (array_slice($userCarbonOffsets, 0, 5) as $offset): ?>
                            <div class="border-t border-outline/15 pt-4">
                                <p class="font-bold"><?php echo htmlspecialchars($offset['project_name']); ?></p>
                                <p class="text-sm text-outline"><?php echo number_format($offset['amount_tons'], 2); ?> tons</p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php else: ?>
                        <p class="text-outline mt-4">No offsets yet. Start your journey!</p>
                        <?php endif; ?>
                        <?php else: ?>
                        <p class="text-outline">Login to see your carbon impact</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>

<?php if ($tab === 'experiences'): ?>
        <section class="py-16 px-8 max-w-[1440px] mx-auto">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-black font-headline tracking-tighter text-primary">TOP ECO-EXPERIENCES</h1>
                <p class="text-lg text-outline mt-2">Curated experiences based on sustainability and traveler reviews</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php 
                $expImages = [
                    'https://images.unsplash.com/photo-1439066615861-d1af74d74000?w=600&q=80',
                    'https://images.unsplash.com/photo-1478827387698-1527a7d6-8e1d-8a0d4dbb3f95?w=600&q=80',
                    'https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?w=600&q=80',
                    'https://images.unsplash.com/photo-1527049974997-c93572d6b2e1?w=600&q=80',
                    'https://images.unsplash.com/photo-1544551763-46a013bb70d5?w=600&q=80',
                    'https://images.unsplash.com/photo-1516026672322-bc52d61a55d5?w=600&q=80',
                ];
                foreach ($topExperiences as $index => $exp): ?>
                <a href="?tab=tour&id=<?php echo $exp['tour_id']; ?>" class="group block bg-surface-container hover:shadow-xl transition-shadow">
                    <div class="aspect-[4/3] relative overflow-hidden">
                        <img src="<?php echo $expImages[$index % count($expImages)]; ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="<?php echo htmlspecialchars($exp['tour_name']); ?>" />
                        <div class="absolute top-4 left-4 bg-primary text-on-primary px-3 py-1 text-xs font-bold">
                            <?php echo strtoupper($exp['tour_type']); ?>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="material-symbols-outlined text-primary text-sm">eco</span>
                            <span class="text-xs font-bold uppercase text-secondary"><?php echo htmlspecialchars($exp['tour_type']); ?></span>
                        </div>
                        <h3 class="font-headline text-xl font-bold group-hover:text-primary"><?php echo htmlspecialchars($exp['tour_name']); ?></h3>
                        <p class="text-sm text-outline mt-1"><?php echo htmlspecialchars($exp['location_name']); ?></p>
                        <div class="flex justify-between items-center mt-4 pt-4 border-t border-outline/15">
                            <p class="text-xs text-outline"><?php echo $exp['booking_count']; ?> bookings</p>
                            <p class="text-xs text-primary font-bold">Eco: <?php echo $exp['avg_eco_rating'] ? number_format($exp['avg_eco_rating'], 1) : 'N/A'; ?>/5</p>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endif; ?>

        <?php if ($tab === 'account' && $isLoggedIn): ?>
        <section class="py-16 px-8 max-w-[1440px] mx-auto">
            <h1 class="text-3xl font-black font-headline tracking-tighter text-primary mb-8">MY ACCOUNT</h1>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2">
                    <h2 class="text-xl font-bold font-headline mb-4">My Bookings</h2>
                    <div class="space-y-4">
                        <?php if (empty($userBookings)): ?>
                        <p class="text-outline">No bookings yet. <a href="?tab=destinations" class="text-primary underline">Explore tours</a></p>
                        <?php else: ?>
                        <?php foreach ($userBookings as $booking): ?>
                        <div class="bg-surface-container p-6 flex justify-between items-center">
                            <div>
                                <p class="font-bold text-lg"><?php echo htmlspecialchars($booking['tour_name']); ?></p>
                                <p class="text-sm text-outline"><?php echo date('M d, Y H:i', strtotime($booking['start_time'])); ?></p>
                                <p class="text-sm text-outline"><?php echo htmlspecialchars($booking['location_name']); ?></p>
                            </div>
                            <div class="text-right flex flex-col items-end gap-2">
                                <span class="px-3 py-1 text-xs font-bold uppercase <?php echo $booking['status'] === 'confirmed' ? 'bg-primary text-on-primary' : ($booking['status'] === 'pending' ? 'bg-secondary text-on-secondary' : 'bg-outline'); ?>">
                                    <?php echo $booking['status']; ?>
                                </span>
                                <p class="font-bold">$<?php echo number_format($booking['total_price'], 2); ?></p>
                                <?php if (in_array($booking['status'], ['confirmed', 'pending'])): ?>
                                <form method="POST" onsubmit="return confirm('Are you sure you want to cancel this booking?');">
                                    <input type="hidden" name="action" value="cancel_booking">
                                    <input type="hidden" name="booking_id" value="<?php echo $booking['booking_id']; ?>">
                                    <button type="submit" class="text-error text-sm underline">Cancel Booking</button>
                                </form>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div>
                    <h2 class="text-xl font-bold font-headline mb-4">My Impact</h2>
                    <div class="bg-surface-container p-6">
                        <p class="text-sm text-outline">Total Carbon Offset</p>
                        <p class="text-3xl font-black font-headline text-primary"><?php echo number_format($userCarbonOffsets ? array_sum(array_column($userCarbonOffsets, 'amount_tons')) : 0, 2); ?> tons</p>
                    </div>
                    
                    <h2 class="text-xl font-bold font-headline mb-4 mt-8">My Waitlist</h2>
                    <div class="bg-surface-container p-6">
                        <?php if (empty($userWaitlist)): ?>
                        <p class="text-outline">No waitlist entries</p>
                        <?php else: ?>
                        <?php foreach ($userWaitlist as $w): ?>
                        <div class="border-b border-outline/15 pb-2 mb-2">
                            <p class="font-bold"><?php echo htmlspecialchars($w['tour_name']); ?></p>
                            <p class="text-xs text-outline">Status: <?php echo $w['status']; ?></p>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <?php if ($tab === 'bookings' && $isLoggedIn): ?>
        <section class="py-16 px-8 max-w-[1440px] mx-auto">
            <h1 class="text-3xl font-black font-headline tracking-tighter text-primary mb-8">MY BOOKINGS</h1>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($userBookings as $booking): ?>
                <div class="bg-surface-container p-6">
                    <div class="flex justify-between items-start mb-4">
                        <span class="px-3 py-1 text-xs font-bold uppercase <?php echo $booking['status'] === 'confirmed' ? 'bg-primary text-on-primary' : ($booking['status'] === 'pending' ? 'bg-secondary text-on-secondary' : 'bg-outline'); ?>">
                            <?php echo $booking['status']; ?>
                        </span>
                        <p class="font-bold text-primary">$<?php echo number_format($booking['total_price'], 2); ?></p>
                    </div>
                    <h3 class="font-bold text-lg"><?php echo htmlspecialchars($booking['tour_name']); ?></h3>
                    <p class="text-sm text-outline"><?php echo htmlspecialchars($booking['location_name'] . ', ' . $booking['country']); ?></p>
                    <div class="mt-4 pt-4 border-t border-outline/15">
                        <p class="text-sm"><span class="text-outline">Start:</span> <?php echo date('M d, Y H:i', strtotime($booking['start_time'])); ?></p>
                        <p class="text-sm"><span class="text-outline">End:</span> <?php echo date('M d, Y H:i', strtotime($booking['end_time'])); ?></p>
                        <?php if (in_array($booking['status'], ['confirmed', 'pending'])): ?>
                        <form method="POST" class="mt-3" onsubmit="return confirm('Are you sure you want to cancel this booking?');">
                            <input type="hidden" name="action" value="cancel_booking">
                            <input type="hidden" name="booking_id" value="<?php echo $booking['booking_id']; ?>">
                            <button type="submit" class="bg-error text-on-error px-4 py-2 text-sm font-bold">Cancel Booking</button>
                        </form>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
</section>
        <?php endif; ?>

        <?php if ($tab === 'about'): ?>
        <section class="py-16 px-8 max-w-[1440px] mx-auto">
            <div class="max-w-4xl mx-auto">
                <span class="text-secondary font-bold tracking-[0.2em] text-xs uppercase">Our Story</span>
                <h1 class="text-5xl font-black font-headline tracking-tighter text-primary mt-4 mb-8">ABOUT TERRABOUND</h1>
                
                <div class="mb-12">
                    <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?w=1200&q=80" class="w-full" alt="Nature" />
                </div>
                
                <div class="prose max-w-none">
                    <h2 class="text-3xl font-bold font-headline mb-4">Our Mission</h2>
                    <p class="text-lg text-on-surface-variant leading-relaxed mb-6">
                        TerraBound was founded in 2020 with a bold vision: to transform travel from a consumptive force into a restorative one. We believe that every journey should leave the planet better than we found it.
                    </p>
                    
                    <h2 class="text-3xl font-bold font-headline mb-4">Who We Are</h2>
                    <p class="text-lg text-on-surface-variant leading-relaxed mb-6">
                        We are architects of the Earth—guides, conservationists, scientists, and dreamers united by a common purpose. Our team spans 35 countries, with local experts who know every trail, every ecosystem, and every community by heart.
                    </p>
                    
                    <h2 class="text-3xl font-bold font-headline mb-4">Our Approach</h2>
                    <p class="text-lg text-on-surface-variant leading-relaxed mb-6">
                        Every TerraBound expedition follows our Zero-Waste Protocol: carbon-neutral transportation, plastic-free experiences, local sourcing, and direct community investment. We don't just visit these places—we protect them.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
                        <div class="bg-surface-container p-8">
                            <span class="material-symbols-outlined text-4xl text-primary">eco</span>
                            <h3 class="font-headline text-xl font-bold mt-4 mb-2">Zero Carbon</h3>
                            <p class="text-on-surface-variant">Every gram of CO2 from your journey is offset through verified reforestation projects.</p>
                        </div>
                        <div class="bg-surface-container p-8">
                            <span class="material-symbols-outlined text-4xl text-primary">volunteer_activism</span>
                            <h3 class="font-headline text-xl font-bold mt-4 mb-2">80% Local</h3>
                            <p class="text-on-surface-variant">Most of your booking goes directly to local guides, lodges, and conservation efforts.</p>
                        </div>
                        <div class="bg-surface-container p-8">
                            <span class="material-symbols-outlined text-4xl text-primary">science</span>
                            <h3 class="font-headline text-xl font-bold mt-4 mb-2">Research Support</h3>
                            <p class="text-on-surface-variant">Your travels fund real scientific research and wildlife monitoring programs.</p>
                        </div>
                        <div class="bg-surface-container p-8">
                            <span class="material-symbols-outlined text-4xl text-primary">diversity_3</span>
                            <h3 class="font-headline text-xl font-bold mt-4 mb-2">Cultural Respect</h3>
                            <p class="text-on-surface-variant">We work with indigenous communities, respecting traditions and ensuring benefit-sharing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <?php if ($tab === 'impact'): ?>
        <section class="py-16 px-8 max-w-[1440px] mx-auto">
            <div class="text-center mb-16">
                <span class="text-secondary font-bold tracking-[0.2em] text-xs uppercase">Making a Difference</span>
                <h1 class="text-5xl font-black font-headline tracking-tighter text-primary mt-4">OUR IMPACT</h1>
                <p class="text-lg text-outline mt-4">Every booking creates ripples of positive change</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <div class="bg-primary text-on-primary p-8 text-center">
                    <p class="text-6xl font-black font-headline">50,000+</p>
                    <p class="font-bold mt-2">Trees Planted</p>
                </div>
                <div class="bg-primary-container text-on-primary-container p-8 text-center">
                    <p class="text-6xl font-black font-headline">2,400+</p>
                    <p class="font-bold mt-2">Travelers Served</p>
                </div>
                <div class="bg-secondary text-on-secondary p-8 text-center">
                    <p class="text-6xl font-black font-headline">150+</p>
                    <p class="font-bold mt-2">Local Guides</p>
                </div>
                <div class="bg-tertiary text-on-tertiary p-8 text-center">
                    <p class="text-6xl font-black font-headline">35</p>
                    <p class="font-bold mt-2">Countries</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-3xl font-black font-headline tracking-tighter text-primary mb-6">Environmental Impact</h2>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-16 h-16 bg-primary-container flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-2xl text-on-primary-container">park</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">Reforestation</h3>
                                <p class="text-on-surface-variant">We've planted over 50,000 trees in the Amazon, Borneo, and Madagascar through our partner organizations.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-16 h-16 bg-primary-container flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-2xl text-on-primary-container">water</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">Ocean Conservation</h3>
                                <p class="text-on-surface-variant">Funded 12 coral reef restoration projects protecting over 2,000 acres of marine ecosystems.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-16 h-16 bg-primary-container flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-2xl text-on-primary-container">solar_power</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">Renewable Energy</h3>
                                <p class="text-on-surface-variant">Installed solar panels in 25 remote communities, replacing diesel generators.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h2 class="text-3xl font-black font-headline tracking-tighter text-primary mb-6">Community Impact</h2>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-16 h-16 bg-secondary-container flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-2xl text-on-secondary-container">school</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">Education</h3>
                                <p class="text-on-surface-variant">Built 8 schools in rural areas and funded scholarships for 200+ students.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-16 h-16 bg-secondary-container flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-2xl text-on-secondary-container">payments</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">Economic Growth</h3>
                                <p class="text-on-surface-variant">80% of booking revenue stays in local communities, supporting small businesses.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-16 h-16 bg-secondary-container flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-2xl text-on-secondary-container">health_and_safety</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">Healthcare</h3>
                                <p class="text-on-surface-variant">Funded medical clinics serving 15,000+ patients annually in remote regions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>

    </main>

    <footer class="bg-primary text-on-primary py-12 px-8 mt-20">
        <div class="max-w-[1440px] mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-xl font-black font-headline">TerraBound</h3>
                <p class="text-sm opacity-80 mt-2">Architects of the Earth</p>
            </div>
            <div>
                <h4 class="font-bold mb-4">Explore</h4>
                <ul class="space-y-2 text-sm opacity-80">
                    <li><a href="?tab=destinations" class="hover:opacity-100">Destinations</a></li>
                    <li><a href="?tab=experiences" class="hover:opacity-100">Experiences</a></li>
                    <li><a href="?tab=carbon" class="hover:opacity-100">Carbon Offset</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Support</h4>
                <ul class="space-y-2 text-sm opacity-80">
                    <li><a href="#" class="hover:opacity-100">Help FAQ</a></li>
                    <li><a href="#" class="hover:opacity-100">Contact Us</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-4">Connect</h4>
                <ul class="space-y-2 text-sm opacity-80">
                    <li><a href="#" class="hover:opacity-100">About Us</a></li>
                    <li><a href="?tab=impact" class="hover:opacity-100">Our Impact</a></li>
                </ul>
            </div>
        </div>
        <div class="max-w-[1440px] mx-auto mt-8 pt-8 border-t border-white/20 text-sm text-center opacity-60">
            &copy; 2026 TerraBound Eco-Tourism. All rights reserved.
        </div>
    </footer>
    <script>
        document.querySelectorAll('.project-option').forEach(function(label) {
            label.addEventListener('click', function() {
                document.querySelectorAll('.project-option').forEach(function(l) {
                    l.classList.remove('border-primary', 'bg-primary-fixed');
                    l.classList.add('border-outline');
                });
                this.classList.remove('border-outline');
                this.classList.add('border-primary', 'bg-primary-fixed');
            });
        });
    </script>
</body>
</html>