<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($connect)) {
    require_once dirname(__DIR__, 3) . '/core/connection.php';
}

require_once 'D:/xam/htdocs/eco_full/app/controllers/GuideController.php';

$controller = new GuideController();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'guide') {
    header("Location: /eco_full/app/views/guest/login_page.php");
    exit;
}

$guideId = $_SESSION['guide_id'] ?? $_SESSION['user_id'] ?? 0;
$message = '';
$error = '';
$fieldErrors = [];
$activeTab = $_GET['tab'] ?? 'schedule';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $result = $controller->processAction();
    $message = $result['message'] ?? '';
    $fieldErrors = $result['errors'] ?? [];
    $error = $result['error'] ?? '';
}

$guide = $controller->getGuideData();
$wallet = $controller->getGuideWallet();
$bookings = $controller->getGuideBookings();
$tours = $controller->getGuideTours();

$withdrawals = [];
$fieldReports = [];
$certifications = [];
$langCerts = [];
$languages = [];
$badges = [];
$shadowings = [];

if ($guideId) {
    $stmt = $connect->prepare("SELECT * FROM withdrawal_requests WHERE guide_id = ? ORDER BY requested_at DESC LIMIT 10");
    $stmt->execute([$guideId]);
    $withdrawals = $stmt->fetchAll();
    $stmt = $connect->prepare("SELECT fr.*, t.tour_name FROM field_reports fr LEFT JOIN tour t ON fr.tour_id = t.tour_id WHERE fr.guide_id = ? ORDER BY fr.created_at DESC LIMIT 10");
    $stmt->execute([$guideId]);
    $fieldReports = $stmt->fetchAll();
    $stmt = $connect->prepare("SELECT * FROM eco_certifications WHERE guide_id = ? ORDER BY issue_date DESC");
    $stmt->execute([$guideId]);
    $certifications = $stmt->fetchAll();
    $stmt = $connect->prepare("SELECT lc.*, l.language_name FROM language_certifications lc JOIN languages l ON lc.language_id = l.language_id WHERE lc.guide_id = ? ORDER BY lc.issue_date DESC");
    $stmt->execute([$guideId]);
    $langCerts = $stmt->fetchAll();
    $stmt = $connect->query("SELECT * FROM languages");
    $languages = $stmt->fetchAll();
    $stmt = $connect->prepare("SELECT * FROM guide_badges WHERE guide_id = ? ORDER BY awarded_at DESC");
    $stmt->execute([$guideId]);
    $badges = $stmt->fetchAll();
    $stmt = $connect->prepare("SELECT gs.*, t.tour_name, u1.name as senior_name, u2.name as trainee_name FROM guide_shadowing gs JOIN tour t ON gs.tour_id = t.tour_id JOIN users u1 ON gs.senior_guide_id = u1.user_id JOIN users u2 ON gs.trainee_guide_id = u2.user_id WHERE gs.senior_guide_id = ? OR gs.trainee_guide_id = ? ORDER BY gs.start_time DESC LIMIT 10");
    $stmt->execute([$guideId, $guideId]);
    $shadowings = $stmt->fetchAll();
}

$stmt = $connect->prepare("SELECT g.*, u.name FROM guide g JOIN users u ON g.guide_id = u.user_id WHERE g.guide_id = ?");
$stmt->execute([$guideId]);
$guideInfo = $stmt->fetch();

$badgeTypes = ['Expert Guide', 'Conservation Champion', 'First Aid Certified', 'Language Pro', 'Senior Guide', 'Eco-Tourism Pioneer'];
?>

<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Guide Panel - EcoPortal</title>
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
    <!-- SideNavBar -->
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
                    <a class="text-[#2d4b37] font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] transition-colors <?php echo $activeTab === 'overview' ? 'bg-[#dbe7dd] border-l-4 border-[#2d4b37]' : ''; ?>"
                        href="guide_dashboard.php">
                        <span class="material-symbols-outlined">grid_view</span>
                        Overview
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] transition-colors <?php echo $activeTab === 'schedule' ? 'bg-[#dbe7dd] border-l-4 border-[#2d4b37]' : ''; ?>"
                        href="all_functions.php?tab=schedule">
                        <span class="material-symbols-outlined">calendar_today</span>
                        Schedule
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] transition-colors <?php echo $activeTab === 'earnings' ? 'bg-[#dbe7dd] border-l-4 border-[#2d4b37]' : ''; ?>"
                        href="all_functions.php?tab=earnings">
                        <span class="material-symbols-outlined">payments</span>
                        Earnings
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] transition-colors <?php echo $activeTab === 'reports' ? 'bg-[#dbe7dd] border-l-4 border-[#2d4b37]' : ''; ?>"
                        href="all_functions.php?tab=reports">
                        <span class="material-symbols-outlined">article</span>
                        Field Reports
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] transition-colors <?php echo $activeTab === 'certs' ? 'bg-[#dbe7dd] border-l-4 border-[#2d4b37]' : ''; ?>"
                        href="all_functions.php?tab=certs">
                        <span class="material-symbols-outlined">verified</span>
                        Certifications
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] transition-colors <?php echo $activeTab === 'languages' ? 'bg-[#dbe7dd] border-l-4 border-[#2d4b37]' : ''; ?>"
                        href="all_functions.php?tab=languages">
                        <span class="material-symbols-outlined">translate</span>
                        Languages
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] transition-colors <?php echo $activeTab === 'tags' ? 'bg-[#dbe7dd] border-l-4 border-[#2d4b37]' : ''; ?>"
                        href="all_functions.php?tab=tags">
                        <span class="material-symbols-outlined">sell</span>
                        Impact Tags
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] transition-colors <?php echo $activeTab === 'itinerary' ? 'bg-[#dbe7dd] border-l-4 border-[#2d4b37]' : ''; ?>"
                        href="all_functions.php?tab=itinerary">
                        <span class="material-symbols-outlined">map</span>
                        Itinerary
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] transition-colors <?php echo $activeTab === 'badges' ? 'bg-[#dbe7dd] border-l-4 border-[#2d4b37]' : ''; ?>"
                        href="all_functions.php?tab=badges">
                        <span class="material-symbols-outlined">workspace_premium</span>
                        Badges
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] transition-colors <?php echo $activeTab === 'shadowing' ? 'bg-[#dbe7dd] border-l-4 border-[#2d4b37]' : ''; ?>"
                        href="all_functions.php?tab=shadowing">
                        <span class="material-symbols-outlined">group</span>
                        Shadowing
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] transition-colors <?php echo $activeTab === 'identity' ? 'bg-[#dbe7dd] border-l-4 border-[#2d4b37]' : ''; ?>"
                        href="all_functions.php?tab=identity">
                        <span class="material-symbols-outlined">badge</span>
                        Identity
                    </a>
                </li>
                <li>
                    <a class="text-[#2d4b37] font-medium px-6 py-4 flex items-center gap-4 hover:bg-[#edeee9] transition-colors <?php echo $activeTab === 'vouchers' ? 'bg-[#dbe7dd] border-l-4 border-[#2d4b37]' : ''; ?>"
                        href="all_functions.php?tab=vouchers">
                        <span class="material-symbols-outlined">qr_code</span>
                        Vouchers
                    </a>
                </li>
            </ul>
        </nav>
        <div class="mt-auto border-t border-[#727972]/15 pt-4 pb-6">
            <ul class="flex flex-col font-['Manrope'] font-bold tracking-tight uppercase">
                <li>
                    <a class="text-[#2d4b37] font-medium px-6 py-3 flex items-center gap-4 hover:bg-[#edeee9]" href="/eco_full/index.php?logout=1">
                        <span class="material-symbols-outlined">logout</span>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    
    <!-- Main Content -->
    <div class="flex-1 ml-72 p-8">
        <!-- Messages -->
    <div class="p-4">
        <?php if ($message): ?>
            <div class="bg-primary-fixed text-on-primary-fixed p-4 mb-4 border-l-4 border-primary">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        <?php if ($error): ?>
            <div class="bg-error-container text-on-error-container p-4 mb-4 border-l-4 border-error">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>
    </div>

    <!-- Content -->
    <main class="p-6 max-w-6xl mx-auto">
        
        <!-- SCHEDULE TAB -->
        <?php if ($activeTab === 'schedule'): ?>
        <section>
            <h2 class="font-headline text-2xl font-bold mb-6">Schedule & Bookings</h2>
            
            <?php if (empty($bookings)): ?>
                <p class="text-on-surface-variant">No upcoming bookings.</p>
            <?php else: ?>
                <div class="space-y-4">
                    <?php foreach ($bookings as $booking): ?>
                        <div class="bg-surface-container p-4 border-l-4 <?php echo $booking['status'] === 'confirmed' ? 'border-primary' : 'border-secondary'; ?>">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h3 class="font-bold"><?php echo htmlspecialchars($booking['tour_name']); ?></h3>
                                    <p class="text-sm text-on-surface-variant">
                                        <?php echo htmlspecialchars($booking['traveler_name']); ?> | 
                                        <?php echo date('M d, Y H:i', strtotime($booking['start_time'])); ?> - 
                                        <?php echo date('M d, Y H:i', strtotime($booking['end_time'])); ?>
                                    </p>
                                </div>
                                <div class="text-right">
                                    <span class="px-3 py-1 text-xs font-bold uppercase bg-<?php echo $booking['status'] === 'confirmed' ? 'primary text-on-primary' : 'secondary text-on-secondary'; ?>">
                                        <?php echo $booking['status']; ?>
                                    </span>
                                    <p class="text-sm font-bold mt-2">$<?php echo number_format($booking['total_price'], 2); ?></p>
                                </div>
                            </div>
                            <div class="mt-2 text-xs text-on-surface-variant">Booking ID: #<?php echo $booking['booking_id']; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>
        <?php endif; ?>

        <!-- EARNINGS TAB -->
        <?php if ($activeTab === 'earnings'): ?>
        <section>
            <h2 class="font-headline text-2xl font-bold mb-6">Earnings & Withdrawals</h2>
            
            <div class="grid grid-cols-3 gap-4 mb-8">
                <div class="bg-surface-container p-6">
                    <p class="text-sm text-on-surface-variant uppercase">Available Balance</p>
                    <p class="text-4xl font-headline font-bold text-primary">$<?php echo number_format($wallet['available_balance'] ?? 0, 2); ?></p>
                </div>
                <div class="bg-surface-container p-6">
                    <p class="text-sm text-on-surface-variant uppercase">Pending</p>
                    <p class="text-4xl font-headline font-bold text-secondary">$<?php echo number_format($wallet['pending_balance'] ?? 0, 2); ?></p>
                </div>
                <div class="bg-surface-container p-6">
                    <p class="text-sm text-on-surface-variant uppercase">Withdrawn</p>
                    <p class="text-4xl font-headline font-bold text-tertiary">$<?php echo number_format($wallet['withdrawn_balance'] ?? 0, 2); ?></p>
                </div>
            </div>
            
            <div class="bg-surface-container p-6 mb-6">
                <h3 class="font-bold mb-4">Request Withdrawal</h3>
                <form method="POST" class="flex gap-4 items-end">
                    <input type="hidden" name="action" value="withdraw">
                    <div>
                        <label class="block text-sm font-bold mb-2">Amount ($)</label>
                        <input type="number" name="amount" step="0.01" class="border <?php echo isset($fieldErrors['amount']) ? 'border-error' : 'border-outline'; ?> p-3 w-40" placeholder="0.00" value="<?php echo htmlspecialchars($_POST['amount'] ?? ''); ?>">
                        <?php if (isset($fieldErrors['amount'])): ?>
                        <p class="text-error text-sm mt-1"><?php echo $fieldErrors['amount']; ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="bg-primary text-on-primary px-6 py-3 font-bold">Request Withdrawal</button>
                </form>
            </div>
            
            <div>
                <h3 class="font-bold mb-4">Withdrawal History</h3>
                <?php if (empty($withdrawals)): ?>
                    <p class="text-on-surface-variant">No withdrawal requests.</p>
                <?php else: ?>
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="border-b border-outline-variant">
                                <th class="text-left p-3 font-bold">Date</th>
                                <th class="text-left p-3 font-bold">Amount</th>
                                <th class="text-left p-3 font-bold">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($withdrawals as $w): ?>
                            <tr class="border-b border-outline-variant/30">
                                <td class="p-3"><?php echo date('M d, Y', strtotime($w['requested_at'])); ?></td>
                                <td class="p-3 font-bold">$<?php echo number_format($w['amount'], 2); ?></td>
                                <td class="p-3">
                                    <span class="px-2 py-1 text-xs font-bold uppercase 
                                        <?php echo $w['status'] === 'approved' ? 'bg-primary text-on-primary' : 
                                            ($w['status'] === 'pending' ? 'bg-secondary text-on-secondary' : 'bg-error text-on-error'); ?>">
                                        <?php echo $w['status']; ?>
                                    </span>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>

        <!-- FIELD REPORTS TAB -->
        <?php if ($activeTab === 'reports'): ?>
        <section>
            <h2 class="font-headline text-2xl font-bold mb-6">Field Reports</h2>
            
            <div class="bg-surface-container p-6 mb-6">
                <h3 class="font-bold mb-4">Post New Report</h3>
                <form method="POST">
                    <input type="hidden" name="action" value="post_report">
                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2">Related Tour (optional)</label>
                        <select name="tour_id" class="border border-outline p-3 w-full">
                            <option value="">No specific tour</option>
                            <?php foreach ($tours as $t): ?>
                            <option value="<?php echo $t['tour_id']; ?>"><?php echo htmlspecialchars($t['tour_name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2">Report Content</label>
                        <textarea name="report_content" rows="5" class="border <?php echo isset($fieldErrors['report_content']) ? 'border-error' : 'border-outline'; ?> p-3 w-full" placeholder="Describe conditions, wildlife sightings, etc..."><?php echo htmlspecialchars($_POST['report_content'] ?? ''); ?></textarea>
                        <?php if (isset($fieldErrors['report_content'])): ?>
                        <p class="text-error text-sm mt-1"><?php echo $fieldErrors['report_content']; ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="bg-primary text-on-primary px-6 py-3 font-bold">Post Report</button>
                </form>
            </div>
            
            <div>
                <h3 class="font-bold mb-4">Previous Reports</h3>
                <?php if (empty($fieldReports)): ?>
                    <p class="text-on-surface-variant">No field reports yet.</p>
                <?php else: ?>
                    <?php foreach ($fieldReports as $fr): ?>
                        <div class="bg-surface-container p-4 mb-3">
                            <p class="text-xs text-on-surface-variant"><?php echo $fr['tour_name'] ?? 'General'; ?> | <?php echo date('M d, Y H:i', strtotime($fr['created_at'])); ?></p>
                            <p class="mt-2"><?php echo htmlspecialchars($fr['content_text']); ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>

        <!-- CERTIFICATIONS TAB -->
        <?php if ($activeTab === 'certs'): ?>
        <section>
            <h2 class="font-headline text-2xl font-bold mb-6">Eco Certifications</h2>
            
            <div class="bg-surface-container p-6 mb-6">
                <h3 class="font-bold mb-4">Upload Certification</h3>
                <form method="POST">
                    <input type="hidden" name="action" value="upload_cert">
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-bold mb-2">Certificate Name</label>
                            <input type="text" name="certificate_name" class="border <?php echo isset($fieldErrors['certificate_name']) ? 'border-error' : 'border-outline'; ?> p-3 w-full" placeholder="e.g., Eco Guide Level 1" value="<?php echo htmlspecialchars($_POST['certificate_name'] ?? ''); ?>">
                            <?php if (isset($fieldErrors['certificate_name'])): ?>
                            <p class="text-error text-sm mt-1"><?php echo $fieldErrors['certificate_name']; ?></p>
                            <?php endif; ?>
                        </div>
                        <div>
                            <label class="block text-sm font-bold mb-2">Expiry Date</label>
                            <input type="date" name="expiry_date" class="border border-outline p-3 w-full" value="<?php echo htmlspecialchars($_POST['expiry_date'] ?? ''); ?>">
                        </div>
                    </div>
                    <button type="submit" class="bg-primary text-on-primary px-6 py-3 font-bold">Upload Certification</button>
                </form>
            </div>
            
            <div>
                <h3 class="font-bold mb-4">My Certifications</h3>
                <?php if (empty($certifications)): ?>
                    <p class="text-on-surface-variant">No certifications uploaded.</p>
                <?php else: ?>
                    <?php foreach ($certifications as $cert): ?>
                        <div class="bg-surface-container p-4 mb-3 flex justify-between">
                            <div>
                                <p class="font-bold"><?php echo htmlspecialchars($cert['certificate_name']); ?></p>
                                <p class="text-sm text-on-surface-variant">Issued: <?php echo $cert['issue_date']; ?> | Expires: <?php echo $cert['expiry_date'] ?? 'N/A'; ?></p>
                            </div>
                            <span class="px-3 py-1 text-xs font-bold uppercase <?php echo $cert['status'] === 'verified' ? 'bg-primary text-on-primary' : 'bg-secondary text-on-secondary'; ?>">
                                <?php echo $cert['status']; ?>
                            </span>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>

        <!-- LANGUAGES TAB -->
        <?php if ($activeTab === 'languages'): ?>
        <section>
            <h2 class="font-headline text-2xl font-bold mb-6">Language Certifications</h2>
            
            <div class="bg-surface-container p-6 mb-6">
                <h3 class="font-bold mb-4">Upload Language Certificate</h3>
                <form method="POST">
                    <input type="hidden" name="action" value="upload_lang_cert">
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-bold mb-2">Language</label>
                            <select name="language_id" class="border <?php echo isset($fieldErrors['language_id']) ? 'border-error' : 'border-outline'; ?> p-3 w-full">
                                <?php foreach ($languages as $lang): ?>
                                <option value="<?php echo $lang['language_id']; ?>" <?php echo (isset($_POST['language_id']) && $_POST['language_id'] == $lang['language_id']) ? 'selected' : ''; ?>><?php echo htmlspecialchars($lang['language_name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php if (isset($fieldErrors['language_id'])): ?>
                            <p class="text-error text-sm mt-1"><?php echo $fieldErrors['language_id']; ?></p>
                            <?php endif; ?>
                        </div>
                        <div>
                            <label class="block text-sm font-bold mb-2">Certificate Name</label>
                            <input type="text" name="certificate_name" class="border <?php echo isset($fieldErrors['lang_certificate_name']) ? 'border-error' : 'border-outline'; ?> p-3 w-full" placeholder="e.g., DELE B2" value="<?php echo htmlspecialchars($_POST['certificate_name'] ?? ''); ?>">
                            <?php if (isset($fieldErrors['lang_certificate_name'])): ?>
                            <p class="text-error text-sm mt-1"><?php echo $fieldErrors['lang_certificate_name']; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <button type="submit" class="bg-primary text-on-primary px-6 py-3 font-bold">Upload</button>
                </form>
            </div>
            
            <div>
                <h3 class="font-bold mb-4">My Language Certifications</h3>
                <?php if (empty($langCerts)): ?>
                    <p class="text-on-surface-variant">No language certifications.</p>
                <?php else: ?>
                    <?php foreach ($langCerts as $lc): ?>
                        <div class="bg-surface-container p-4 mb-3 flex justify-between">
                            <div>
                                <p class="font-bold"><?php echo htmlspecialchars($lc['language_name']); ?></p>
                                <p class="text-sm text-on-surface-variant"><?php echo htmlspecialchars($lc['certificate_name']); ?></p>
                            </div>
                            <span class="px-3 py-1 text-xs font-bold uppercase <?php echo $lc['status'] === 'verified' ? 'bg-primary text-on-primary' : 'bg-secondary text-on-secondary'; ?>">
                                <?php echo $lc['status']; ?>
                            </span>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>

        <!-- IMPACT TAGS TAB -->
        <?php if ($activeTab === 'tags'): ?>
        <section>
            <h2 class="font-headline text-2xl font-bold mb-6">Impact Tags</h2>
            
            <div class="bg-surface-container p-6 mb-6">
                <h3 class="font-bold mb-4">Add Impact Tag to Tour</h3>
                <form method="POST">
                    <input type="hidden" name="action" value="add_impact_tag">
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-bold mb-2">Select Tour</label>
                            <select name="tour_id" class="border <?php echo isset($fieldErrors['tag_tour_id']) ? 'border-error' : 'border-outline'; ?> p-3 w-full">
                                <?php foreach ($tours as $t): ?>
                                <option value="<?php echo $t['tour_id']; ?>"><?php echo htmlspecialchars($t['tour_name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php if (isset($fieldErrors['tag_tour_id'])): ?>
                            <p class="text-error text-sm mt-1"><?php echo $fieldErrors['tag_tour_id']; ?></p>
                            <?php endif; ?>
                        </div>
                        <div>
                            <label class="block text-sm font-bold mb-2">Impact Tag</label>
                            <select name="tag_name" class="border <?php echo isset($fieldErrors['tag_name']) ? 'border-error' : 'border-outline'; ?> p-3 w-full">
                                <option value="">Select a tag</option>
                                <option value="Wildlife Conservation">Wildlife Conservation</option>
                                <option value="Zero Waste">Zero Waste</option>
                                <option value="Carbon Neutral">Carbon Neutral</option>
                                <option value="Local Hiring">Local Hiring</option>
                                <option value="Native Species">Native Species</option>
                                <option value="Water Conservation">Water Conservation</option>
                                <option value="Education">Education</option>
                            </select>
                            <?php if (isset($fieldErrors['tag_name'])): ?>
                            <p class="text-error text-sm mt-1"><?php echo $fieldErrors['tag_name']; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <button type="submit" class="bg-primary text-on-primary px-6 py-3 font-bold">Add Tag</button>
                </form>
            </div>
            
            <div>
                <h3 class="font-bold mb-4">Tour Impact Tags</h3>
                <?php if (empty($tours)): ?>
                    <p class="text-on-surface-variant">No tours created yet.</p>
                <?php else: ?>
                    <?php foreach ($tours as $t): 
                        $stmt = $connect->prepare("SELECT * FROM tour_impact_tag WHERE tour_id = ?");
                        $stmt->execute([$t['tour_id']]);
                        $tags = $stmt->fetchAll();
                    ?>
                        <div class="bg-surface-container p-4 mb-3">
                            <p class="font-bold"><?php echo htmlspecialchars($t['tour_name']); ?></p>
                            <div class="flex gap-2 mt-2">
                                <?php if (empty($tags)): ?>
                                    <span class="text-sm text-on-surface-variant">No tags</span>
                                <?php else: ?>
                                    <?php foreach ($tags as $tag): ?>
                                        <span class="px-2 py-1 text-xs font-bold bg-tertiary-container text-on-tertiary-container">
                                            <?php echo $tag['tag_name']; ?>
                                        </span>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>

        <!-- ITINERARY TAB -->
        <?php if ($activeTab === 'itinerary'): ?>
        <section>
            <h2 class="font-headline text-2xl font-bold mb-6">Itinerary Management</h2>
            
            <div class="bg-surface-container p-6 mb-6">
                <h3 class="font-bold mb-4">Update Itinerary Content</h3>
                <form method="POST">
                    <input type="hidden" name="action" value="update_itinerary">
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-bold mb-2">Select Tour</label>
                            <select name="tour_id" class="border <?php echo isset($fieldErrors['itin_tour_id']) ? 'border-error' : 'border-outline'; ?> p-3 w-full">
                                <?php foreach ($tours as $t): ?>
                                <option value="<?php echo $t['tour_id']; ?>"><?php echo htmlspecialchars($t['tour_name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php if (isset($fieldErrors['itin_tour_id'])): ?>
                            <p class="text-error text-sm mt-1"><?php echo $fieldErrors['itin_tour_id']; ?></p>
                            <?php endif; ?>
                        </div>
                        <div>
                            <label class="block text-sm font-bold mb-2">Language</label>
                            <select name="language_id" class="border border-outline p-3 w-full">
                                <?php foreach ($languages as $lang): ?>
                                <option value="<?php echo $lang['language_id']; ?>" <?php echo ($lang['language_id'] == 1) ? 'selected' : ''; ?>><?php echo htmlspecialchars($lang['language_name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2">Itinerary Content</label>
                        <textarea name="content" rows="8" class="border <?php echo isset($fieldErrors['itin_content']) ? 'border-error' : 'border-outline'; ?> p-3 w-full" placeholder="Day 1: Arrival...&#10;Day 2: Trekking..."><?php echo htmlspecialchars($_POST['content'] ?? ''); ?></textarea>
                        <?php if (isset($fieldErrors['itin_content'])): ?>
                        <p class="text-error text-sm mt-1"><?php echo $fieldErrors['itin_content']; ?></p>
                        <?php endif; ?>
                    </div>
                    <p class="text-sm text-on-surface-variant mb-4">Updating will trigger translation needed flags for other languages.</p>
                    <button type="submit" class="bg-primary text-on-primary px-6 py-3 font-bold">Update Itinerary</button>
                </form>
            </div>
            
            <div>
                <h3 class="font-bold mb-4">Current Itineraries</h3>
                <?php foreach ($tours as $t): 
                    $stmt = $connect->prepare("SELECT i.*, l.language_name FROM itinerary i LEFT JOIN languages l ON i.language_id = l.language_id WHERE i.tour_id = ? ORDER BY i.version DESC");
                    $stmt->execute([$t['tour_id']]);
                    $itins = $stmt->fetchAll();
                ?>
                    <div class="bg-surface-container p-4 mb-3">
                        <p class="font-bold"><?php echo htmlspecialchars($t['tour_name']); ?></p>
                        <?php if (empty($itins)): ?>
                            <p class="text-sm text-on-surface-variant">No itinerary yet</p>
                        <?php else: ?>
                            <?php foreach ($itins as $i): ?>
                                <div class="mt-2 p-2 bg-surface text-sm border-l-2 border-primary">
                                    <span class="font-bold"><?php echo $i['language_name']; ?> (v<?php echo $i['version']; ?>)</span>
                                    <p class="mt-1 whitespace-pre-wrap"><?php echo htmlspecialchars(substr($i['content'], 0, 200)); ?>...</p>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endif; ?>

        <!-- BADGES TAB -->
        <?php if ($activeTab === 'badges'): ?>
        <section>
            <h2 class="font-headline text-2xl font-bold mb-6">Expertise Badges</h2>
            
            <div class="bg-surface-container p-6 mb-6">
                <h3 class="font-bold mb-4">Earn Badges</h3>
                <p class="text-sm text-on-surface-variant mb-4">Submit credentials to earn badges based on your expertise.</p>
                <form method="POST">
                    <input type="hidden" name="action" value="claim_badge">
                    <div class="grid grid-cols-3 gap-3 mb-4">
                        <?php foreach ($badgeTypes as $badge): ?>
                        <button type="submit" name="badge" value="<?php echo $badge; ?>" 
                                class="border border-outline p-4 text-left hover:bg-primary-container hover:text-on-primary-container transition-colors">
                            <span class="material-symbols-outlined text-2xl">verified</span>
                            <p class="font-bold mt-2"><?php echo $badge; ?></p>
                        </button>
                        <?php endforeach; ?>
                    </div>
                </form>
            </div>
            
            <div>
                <h3 class="font-bold mb-4">My Badges</h3>
                <?php if (empty($badges)): ?>
                    <p class="text-on-surface-variant">No badges earned yet.</p>
                <?php else: ?>
                    <div class="grid grid-cols-4 gap-4">
                        <?php foreach ($badges as $b): ?>
                        <div class="bg-tertiary-container text-on-tertiary-container p-6 text-center">
                            <span class="material-symbols-outlined text-4xl">verified</span>
                            <p class="font-bold mt-2"><?php echo $b['badge']; ?></p>
                            <p class="text-xs mt-1"><?php echo date('M d, Y', strtotime($b['awarded_at'])); ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>

        <!-- SHADOWING TAB -->
        <?php if ($activeTab === 'shadowing'): ?>
        <section>
            <h2 class="font-headline text-2xl font-bold mb-6">Guide Shadowing</h2>
            
            <div class="bg-surface-container p-6 mb-6">
                <h3 class="font-bold mb-4">Request Shadowing</h3>
                <form method="POST">
                    <input type="hidden" name="action" value="request_shadow">
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-bold mb-2">Role</label>
                            <select name="role" class="border border-outline p-3 w-full">
                                <option value="trainee">Shadow as Junior/Trainee</option>
                                <option value="senior">Host as Senior Guide</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-bold mb-2">Tour</label>
                            <select name="tour_id" class="border border-outline p-3 w-full">
                                <?php foreach ($tours as $t): ?>
                                <option value="<?php echo $t['tour_id']; ?>"><?php echo htmlspecialchars($t['tour_name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-bold mb-2">Start Date</label>
                            <input type="datetime-local" name="start_time" class="border <?php echo isset($fieldErrors['shadow_start_time']) ? 'border-error' : 'border-outline'; ?> p-3 w-full" value="<?php echo htmlspecialchars($_POST['start_time'] ?? ''); ?>">
                            <?php if (isset($fieldErrors['shadow_start_time'])): ?>
                            <p class="text-error text-sm mt-1"><?php echo $fieldErrors['shadow_start_time']; ?></p>
                            <?php endif; ?>
                        </div>
                        <div>
                            <label class="block text-sm font-bold mb-2">End Date</label>
                            <input type="datetime-local" name="end_time" class="border <?php echo isset($fieldErrors['shadow_end_time']) ? 'border-error' : 'border-outline'; ?> p-3 w-full" value="<?php echo htmlspecialchars($_POST['end_time'] ?? ''); ?>">
                            <?php if (isset($fieldErrors['shadow_end_time'])): ?>
                            <p class="text-error text-sm mt-1"><?php echo $fieldErrors['shadow_end_time']; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <button type="submit" class="bg-primary text-on-primary px-6 py-3 font-bold">Request Shadowing</button>
                </form>
            </div>
            
            <div>
                <h3 class="font-bold mb-4">Shadowing History</h3>
                <?php if (empty($shadowings)): ?>
                    <p class="text-on-surface-variant">No shadowing requests.</p>
                <?php else: ?>
                    <?php foreach ($shadowings as $s): ?>
                        <div class="bg-surface-container p-4 mb-3">
                            <p class="font-bold"><?php echo htmlspecialchars($s['tour_name']); ?></p>
                            <p class="text-sm text-on-surface-variant">
                                Senior: <?php echo htmlspecialchars($s['senior_name']); ?> | 
                                Trainee: <?php echo htmlspecialchars($s['trainee_name']); ?>
                            </p>
                            <p class="text-sm">
                                <?php echo date('M d, Y', strtotime($s['start_time'])); ?> - 
                                <?php echo date('M d, Y', strtotime($s['end_time'])); ?>
                                | <span class="font-bold uppercase"><?php echo $s['status']; ?></span>
                            </p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>

        <!-- IDENTITY TAB -->
        <?php if ($activeTab === 'identity'): ?>
        <section>
            <h2 class="font-headline text-2xl font-bold mb-6">Identity Verification</h2>
            
            <div class="bg-surface-container p-6 mb-6">
                <h3 class="font-bold mb-4">Verify Identity</h3>
                <p class="text-sm text-on-surface-variant mb-4">Submit your identity document number for verification.</p>
                
                <div class="mb-4">
                    <p class="text-sm">Current Status: 
                        <?php if ($guideInfo['verified_at']): ?>
                            <span class="px-2 py-1 text-xs font-bold bg-primary text-on-primary">Verified</span>
                        <?php else: ?>
                            <span class="px-2 py-1 text-xs font-bold bg-secondary text-on-secondary">Pending</span>
                        <?php endif; ?>
                    </p>
                    <p class="text-sm">Verified At: <?php echo $guideInfo['verified_at'] ?? 'Not verified'; ?></p>
                </div>
                
                <form method="POST">
                    <input type="hidden" name="action" value="verify_identity">
                    <div class="mb-4">
                        <label class="block text-sm font-bold mb-2">Document Number / ID</label>
                        <input type="text" name="doc_number" class="border <?php echo isset($fieldErrors['doc_number']) ? 'border-error' : 'border-outline'; ?> p-3 w-full" placeholder="Enter ID number" value="<?php echo htmlspecialchars($_POST['doc_number'] ?? ''); ?>">
                        <?php if (isset($fieldErrors['doc_number'])): ?>
                        <p class="text-error text-sm mt-1"><?php echo $fieldErrors['doc_number']; ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="bg-primary text-on-primary px-6 py-3 font-bold">Submit for Verification</button>
                </form>
            </div>
        </section>
        <?php endif; ?>

        <!-- VOUCHERS TAB -->
        <?php if ($activeTab === 'vouchers'): ?>
        <section>
            <h2 class="font-headline text-2xl font-bold mb-6">Voucher Validation</h2>
            
            <div class="bg-surface-container p-6 mb-6">
                <h3 class="font-bold mb-4">Validate Traveler Voucher</h3>
                <p class="text-sm text-on-surface-variant mb-4">Enter booking ID to check in traveler.</p>
                <form method="POST">
                    <input type="hidden" name="action" value="validate_voucher">
                    <div class="flex gap-4 mb-4">
                        <div>
                            <label class="block text-sm font-bold mb-2">Booking ID</label>
                            <input type="number" name="booking_id" class="border <?php echo isset($fieldErrors['voucher_booking_id']) ? 'border-error' : 'border-outline'; ?> p-3 w-40" placeholder="#" value="<?php echo htmlspecialchars($_POST['booking_id'] ?? ''); ?>">
                            <?php if (isset($fieldErrors['voucher_booking_id'])): ?>
                            <p class="text-error text-sm mt-1"><?php echo $fieldErrors['voucher_booking_id']; ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="flex items-end">
                            <button type="submit" class="bg-primary text-on-primary px-6 py-3 font-bold">Check In</button>
                        </div>
                    </div>
                </form>
            </div>
            
            <div>
                <h3 class="font-bold mb-4">Pending Check-ins</h3>
                <?php 
                $pendingBookings = array_filter($bookings, function($b) { return $b['status'] === 'pending'; });
                ?>
                <?php if (empty($pendingBookings)): ?>
                    <p class="text-on-surface-variant">No pending check-ins.</p>
                <?php else: ?>
                    <?php foreach ($pendingBookings as $b): ?>
                        <div class="bg-surface-container p-4 mb-3 flex justify-between items-center">
                            <div>
                                <p class="font-bold"><?php echo htmlspecialchars($b['tour_name']); ?></p>
                                <p class="text-sm">Traveler: <?php echo htmlspecialchars($b['traveler_name']); ?></p>
                            </div>
                            <form method="POST">
                                <input type="hidden" name="action" value="validate_voucher">
                                <input type="hidden" name="booking_id" value="<?php echo $b['booking_id']; ?>">
                                <button type="submit" class="bg-primary text-on-primary px-4 py-2 font-bold text-sm">Confirm Check-in</button>
                            </form>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </section>
        <?php endif; ?>

    </div>
</body>
</html>