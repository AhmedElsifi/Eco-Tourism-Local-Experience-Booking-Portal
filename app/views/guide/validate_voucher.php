<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once dirname(__DIR__, 3) . '/core/connection.php';
require_once dirname(__DIR__, 2) . '/models/TravelerModel.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'guide') {
    header('Location: /eco_full/app/views/guest/login_page.php');
    exit;
}

$guideId = $_SESSION['guide_id'] ?? $_SESSION['user_id'];
$model = new TravelerModel($connect);
$message = '';
$error = '';
$validationResult = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['voucher_code'])) {
    $voucherCode = trim($_POST['voucher_code']);
    $validationResult = $model->validateVoucher($voucherCode, $guideId);
    
    if ($validationResult['valid']) {
        $message = 'Voucher validated successfully!';
    } else {
        $error = $validationResult['error'];
    }
}
?>
<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Validate Voucher - EcoPortal</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
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
                        "surface-container": "#edeee9", "surface-container-high": "#e7e9e4",
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
<body class="bg-surface text-on-surface font-body min-h-screen">
    <aside class="fixed left-0 top-0 h-full w-72 bg-surface border-r border-outline/15 flex flex-col z-40">
        <div class="p-6">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-primary-container flex items-center justify-center">
                    <span class="material-symbols-outlined text-on-primary-container">nature_people</span>
                </div>
                <div>
                    <h1 class="text-2xl font-black tracking-tighter text-primary font-headline">EcoPortal</h1>
                    <p class="text-xs font-medium text-primary-container">Guide Portal</p>
                </div>
            </div>
        </div>
        <nav class="flex-1 py-4">
            <ul class="flex flex-col font-bold uppercase">
                <li>
                    <a href="guide_dashboard.php" class="px-6 py-4 flex items-center gap-4 text-outline hover:bg-surface-container">
                        <span class="material-symbols-outlined">grid_view</span> Dashboard
                    </a>
                </li>
                <li>
                    <a href="validate_voucher.php" class="px-6 py-4 flex items-center gap-4 text-primary-container bg-surface-container border-l-4 border-primary">
                        <span class="material-symbols-outlined">qr_code_scanner</span> Validate Voucher
                    </a>
                </li>
            </ul>
        </nav>
        <div class="p-6 border-t border-outline/15">
            <a href="/eco_full/app/views/guest/login_page.php" class="block text-center bg-primary text-on-primary py-3 font-bold">Logout</a>
        </div>
    </aside>

    <main class="ml-72 p-8">
        <h1 class="text-3xl font-bold font-headline mb-8">Validate Voucher</h1>
        
        <?php if ($message): ?>
        <div class="bg-primary-container text-on-primary-container p-4 mb-6 border-l-4 border-primary">
            <?php echo htmlspecialchars($message); ?>
        </div>
        <?php endif; ?>
        
        <?php if ($error): ?>
        <div class="bg-error-container text-on-error-container p-4 mb-6 border-l-4 border-error">
            <?php echo htmlspecialchars($error); ?>
        </div>
        <?php endif; ?>

        <div class="bg-surface-container p-6 max-w-xl">
            <form method="POST" class="space-y-4">
                <div>
                    <label class="block text-sm font-bold mb-2">Enter Voucher Code</label>
                    <input type="text" name="voucher_code" placeholder="VXXXXXXXX" class="w-full border-2 border-outline p-3 font-mono text-lg" required>
                </div>
                <button type="submit" class="bg-primary text-on-primary px-8 py-3 font-bold">Validate</button>
            </form>

            <?php if ($validationResult && $validationResult['valid']): ?>
            <div class="mt-6 p-4 bg-primary-container text-on-primary-container border-l-4 border-primary">
                <p class="font-bold text-lg mb-2">Valid Voucher</p>
                <p><strong>Code:</strong> <?php echo htmlspecialchars($validationResult['voucher']['voucher_code']); ?></p>
                <p><strong>Booking ID:</strong> <?php echo $validationResult['voucher']['booking_id']; ?></p>
                <p><strong>Status:</strong> Marked as Used</p>
            </div>
            <?php endif; ?>
        </div>

        <div class="mt-8">
            <a href="guide_dashboard.php" class="text-primary underline">Back to Dashboard</a>
        </div>
    </main>
</body>
</html>