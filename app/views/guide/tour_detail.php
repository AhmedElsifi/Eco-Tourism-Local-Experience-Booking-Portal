<?php
session_start();

if (!isset($connect)) {
    require_once dirname(__DIR__, 3) . '/core/connection.php';
}

$bookingId = $_GET['booking_id'] ?? 0;
$guideId = $_SESSION['guide_id'] ?? $_SESSION['user_id'] ?? 0;
$message = '';
$error = '';
$fieldErrors = [];

$booking = null;
if ($bookingId && $guideId) {
    $stmt = $connect->prepare("
        SELECT b.*, t.tour_id, t.tour_name, t.tour_type, l.location_name, l.country, l.region,
               tv.price_per_person, tv.max_capacity, u.name as traveler_name, u.email as traveler_email
        FROM booking b
        JOIN tour_version tv ON b.tour_version_id = tv.tour_version_id
        JOIN tour t ON tv.tour_id = t.tour_id
        LEFT JOIN location l ON t.location_id = l.location_id
        JOIN traveler tr ON b.traveler_id = tr.traveler_id
        JOIN users u ON tr.traveler_id = u.user_id
        WHERE b.booking_id = ? AND b.guide_id = ?
    ");
    $stmt->execute([$bookingId, $guideId]);
    $booking = $stmt->fetch();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'post_report') {
    $content = trim($_POST['report_content'] ?? '');
    
    if (empty($content)) {
        $fieldErrors['report_content'] = 'Please enter report content';
    } elseif (strlen($content) < 10) {
        $fieldErrors['report_content'] = 'Report must be at least 10 characters';
    } elseif ($booking) {
        $stmt = $connect->prepare("INSERT INTO field_reports (guide_id, tour_id, content_text) VALUES (?, ?, ?)");
        $stmt->execute([$guideId, $booking['tour_id'], $content]);
        $message = 'Field report posted successfully';
    }
}

$fieldReports = [];
if ($booking) {
    $stmt = $connect->prepare("
        SELECT * FROM field_reports 
        WHERE guide_id = ? AND tour_id = ?
        ORDER BY created_at DESC
    ");
    $stmt->execute([$guideId, $booking['tour_id']]);
    $fieldReports = $stmt->fetchAll();
}
?>

<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tour Details - EcoPortal</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script id="tailwind-config">
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
                        "surface-container": "#edeee9", "surface-container-high": "#e7e9e4", "surface-container-low": "#f3f4ef",
                        "outline": "#727972", "outline-variant": "#c2c8c0",
                        "background": "#f8faf5", "on-background": "#191c19"
                    },
                    fontFamily: { "headline": ["Manrope", "sans-serif"], "body": ["Inter", "sans-serif"], "label": ["Inter", "sans-serif"] }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    </style>
</head>
<body class="bg-surface text-on-surface font-body min-h-screen flex">
    <!-- Sidebar -->
    <aside class="fixed left-0 top-0 h-full flex flex-col z-40 bg-[#f8faf5] w-72 border-r border-[#727972]/15">
        <div class="p-6 flex flex-col gap-2">
            <div class="flex items-center gap-3 mb-6">
                <div class="w-10 h-10 bg-primary-container flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-primary-container">nature_people</span>
                </div>
                <div>
                    <h1 class="text-2xl font-black tracking-tighter text-[#163422] font-headline uppercase">EcoPortal</h1>
                    <p class="text-xs font-medium text-[#2d4b37] font-label">Certified Guide</p>
                </div>
            </div>
        </div>
        <nav class="flex-1 overflow-y-auto py-4">
            <ul class="flex flex-col font-['Manrope'] font-bold tracking-tight uppercase">
                <li>
                    <a class="text-[#2d4b37] font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] transition-colors" href="guide_dashboard.php">
                        <span class="material-symbols-outlined">grid_view</span>
                        Overview
                    </a>
                </li>
                <li>
                    <a class="bg-[#dbe7dd] text-[#2d4b37] font-semibold px-6 py-4 flex items-center gap-4 border-l-4 border-[#2d4b37]" href="#">
                        <span class="material-symbols-outlined">info</span>
                        Tour Details
                    </a>
                </li>
            </ul>
        </nav>
        <div class="mt-auto border-t border-[#727972]/15 pt-4 pb-6">
            <ul class="flex flex-col font-['Manrope'] font-bold tracking-tight uppercase">
                <li>
                    <a class="text-[#2d4b37] font-medium px-6 py-3 flex items-center gap-4 hover:bg-[#edeee9]" href="../../index.php?logout=1">
                        <span class="material-symbols-outlined">logout</span>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    
    <!-- Main Content -->
    <div class="flex-1 ml-72 p-8">
        <div class="flex items-center gap-4 mb-6">
            <a href="guide_dashboard.php" class="text-primary hover:underline">
                <span class="material-symbols-outlined">arrow_back</span>
            </a>
            <h1 class="font-headline text-3xl font-bold">Tour Details</h1>
        </div>
        
        <?php if ($message): ?>
        <div class="bg-primary-fixed text-on-primary-fixed p-4 mb-6 border-l-4 border-primary">
            <?php echo $message; ?>
        </div>
        <?php endif; ?>
        
        <?php if ($error): ?>
        <div class="bg-error-container text-on-error-container p-4 mb-6 border-l-4 border-error">
            <?php echo $error; ?>
        </div>
        <?php endif; ?>
        
        <?php if (!$booking): ?>
        <div class="bg-surface-container p-6">
            <p class="text-on-surface-variant">Booking not found or you don't have access.</p>
            <a href="guide_dashboard.php" class="text-primary hover:underline mt-4 inline-block">Back to Dashboard</a>
        </div>
        <?php else: ?>
        
        <!-- Booking Info -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
            <div class="bg-surface-container p-6">
                <h3 class="font-bold text-lg mb-4">Booking Information</h3>
                <div class="space-y-3">
                    <div class="flex justify-between">
                        <span class="text-on-surface-variant">Booking ID</span>
                        <span class="font-bold">#TR-<?php echo str_pad($booking['booking_id'], 4, '0', STR_PAD_LEFT); ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-on-surface-variant">Status</span>
                        <span class="px-2 py-1 text-xs font-bold uppercase <?php echo $booking['status'] === 'confirmed' ? 'bg-primary text-on-primary' : 'bg-secondary text-on-secondary'; ?>">
                            <?php echo $booking['status']; ?>
                        </span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-on-surface-variant">Start Time</span>
                        <span class="font-bold"><?php echo date('M d, Y H:i', strtotime($booking['start_time'])); ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-on-surface-variant">End Time</span>
                        <span class="font-bold"><?php echo date('M d, Y H:i', strtotime($booking['end_time'])); ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-on-surface-variant">Total Price</span>
                        <span class="font-bold text-primary">$<?php echo number_format($booking['total_price'], 2); ?></span>
                    </div>
                </div>
            </div>
            
            <div class="bg-surface-container p-6">
                <h3 class="font-bold text-lg mb-4">Tour Information</h3>
                <div class="space-y-3">
                    <div class="flex justify-between">
                        <span class="text-on-surface-variant">Tour Name</span>
                        <span class="font-bold"><?php echo htmlspecialchars($booking['tour_name']); ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-on-surface-variant">Category</span>
                        <span class="font-bold uppercase"><?php echo $booking['tour_type']; ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-on-surface-variant">Location</span>
                        <span class="font-bold"><?php echo htmlspecialchars($booking['location_name'] . ', ' . $booking['country']); ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-on-surface-variant">Price per Person</span>
                        <span class="font-bold">$<?php echo number_format($booking['price_per_person'], 2); ?></span>
                    </div>
                </div>
            </div>
            
            <div class="bg-surface-container p-6">
                <h3 class="font-bold text-lg mb-4">Traveler Information</h3>
                <div class="space-y-3">
                    <div class="flex justify-between">
                        <span class="text-on-surface-variant">Name</span>
                        <span class="font-bold"><?php echo htmlspecialchars($booking['traveler_name']); ?></span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-on-surface-variant">Email</span>
                        <span class="font-bold"><?php echo htmlspecialchars($booking['traveler_email']); ?></span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Post Field Report -->
        <div class="bg-surface-container p-6">
            <h3 class="font-bold text-lg mb-4">Post Field Report</h3>
            <form method="POST">
                <input type="hidden" name="action" value="post_report">
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2">Report Content</label>
                    <textarea name="report_content" rows="4" class="border <?php echo isset($fieldErrors['report_content']) ? 'border-error' : 'border-outline'; ?> p-3 w-full" placeholder="Describe conditions, wildlife sightings, weather updates..."><?php echo htmlspecialchars($_POST['report_content'] ?? ''); ?></textarea>
                    <?php if (isset($fieldErrors['report_content'])): ?>
                    <p class="text-error text-sm mt-1"><?php echo $fieldErrors['report_content']; ?></p>
                    <?php endif; ?>
                </div>
                <button type="submit" class="bg-primary text-on-primary px-6 py-3 font-bold">Post Field Report</button>
            </form>
        </div>
        
        <!-- Previous Field Reports -->
        <div class="mt-6">
            <h3 class="font-bold text-lg mb-4">Field Reports History</h3>
            <?php if (empty($fieldReports)): ?>
            <p class="text-on-surface-variant">No field reports yet.</p>
            <?php else: ?>
            <?php foreach ($fieldReports as $fr): ?>
            <div class="bg-surface-container p-4 mb-3">
                <p class="text-xs text-on-surface-variant"><?php echo date('M d, Y H:i', strtotime($fr['created_at'])); ?></p>
                <p class="mt-2"><?php echo htmlspecialchars($fr['content_text']); ?></p>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
        
        <?php endif; ?>
        
        <div class="mt-8">
            <a href="guide_dashboard.php" class="text-primary hover:underline">Back to Dashboard</a>
        </div>
    </div>
</body>
</html>