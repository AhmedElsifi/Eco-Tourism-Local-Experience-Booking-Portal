<?php
session_start();

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (empty($email) || empty($password)) {
        $error = 'Please enter email and password';
    } else {
        require_once dirname(__DIR__, 3) . '/core/connection.php';
        
        $stmt = $connect->prepare("SELECT user_id, name, password_hash, role FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        
        if ($user && password_verify($password, $user['password_hash'])) {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['role'] = $user['role'];
            
            if ($user['role'] === 'guide') {
                $stmt = $connect->prepare("SELECT guide_id FROM guide WHERE guide_id = ?");
                $stmt->execute([$user['user_id']]);
                $guide = $stmt->fetch();
                if ($guide) {
                    $_SESSION['guide_id'] = $guide['guide_id'];
                }
            }
            
            if ($user['role'] === 'guide') {
                header('Location: ../guide/guide_dashboard.php');
            } elseif ($user['role'] === 'super_admin' || $user['role'] === 'auditor') {
                header('Location: ../admin/dashboard.php');
            } else {
                header('Location: ../../index.php');
            }
            exit;
        } else {
            $error = 'Invalid email or password';
        }
    }
}
?>

<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Earth Architect | Login</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&amp;family=Inter:wght@400;500;600&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
                        "inverse-surface": "#2e312e",
                        "tertiary": "#392d13",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary": "#ffffff",
                        "secondary-container": "#fed6a7",
                        "outline": "#727972",
                        "on-surface": "#191c19",
                        "surface-container-low": "#f3f4ef",
                        "surface": "#f8faf5",
                        "tertiary-fixed-dim": "#d8c49f",
                        "on-error-container": "#93000a",
                        "tertiary-fixed": "#f5e0ba",
                        "surface-container-high": "#e7e9e4",
                        "surface-container-highest": "#e1e3de",
                        "surface-tint": "#466550",
                        "surface-dim": "#d9dbd6",
                        "primary-fixed": "#c8ebd0",
                        "primary": "#163422",
                        "on-primary-container": "#99baa1",
                        "inverse-on-surface": "#f0f1ec",
                        "secondary": "#765934",
                        "primary-fixed-dim": "#adcfb4",
                        "surface-container": "#edeee9",
                        "secondary-fixed": "#ffddb6",
                        "on-secondary-fixed-variant": "#5c421f",
                        "on-tertiary-fixed": "#241a03",
                        "on-primary-fixed": "#022110",
                        "on-secondary-container": "#795b36",
                        "background": "#f8faf5",
                        "on-tertiary-container": "#c3b08c",
                        "on-secondary-fixed": "#2a1800",
                        "outline-variant": "#c2c8c0",
                        "surface-bright": "#f8faf5",
                        "inverse-primary": "#adcfb4",
                        "on-background": "#191c19",
                        "tertiary-container": "#504327",
                        "on-tertiary-fixed-variant": "#534529",
                        "error-container": "#ffdad6",
                        "on-error": "#ffffff",
                        "secondary-fixed-dim": "#e6c093",
                        "primary-container": "#2d4b37",
                        "on-primary-fixed-variant": "#2f4d39",
                        "on-primary": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "surface-variant": "#e1e3de",
                        "error": "#ba1a1a",
                        "on-surface-variant": "#424843"
                    },
                    "borderRadius": {
                        "none": "0",
                        "DEFAULT": "0",
                        "lg": "0",
                        "xl": "0",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Manrope", "sans-serif"],
                        "body": ["Inter", "sans-serif"],
                        "label": ["Inter", "sans-serif"]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>

<body class="bg-surface text-on-surface min-h-screen flex flex-col">
    <main class="flex-grow flex flex-col md:flex-row min-h-screen">
        <!-- Left Half: Hero Image Section -->
        <section class="relative w-full md:w-1/2 h-64 md:h-auto overflow-hidden">
            <img alt="Misty forest" class="absolute inset-0 w-full h-full object-cover"
                data-alt="dramatic wide angle view of a misty ancient forest with tall evergreen trees emerging from thick low-hanging fog in soft morning light"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVvqUL58_yU55-Sf7LpqyKEFmDbMKTjz635pb0I19oqtWBc6wij1vki-JAhS7GQwvWoE2Pi52TQWLqr7NG4pH3YIbWoYpncECxb-ddBuClbb1ldYAGt4MMohgar6V8R-EEUENU2Ll5rV_1yxElZdKIFm1aq_Bai3j9pruvolHLJt1Nn7JLuyjRgJxF0TE9Kswr_jdMMRvIFLlk2RZewaDQyxPtHAzU7X7UanDiktjj_3I23xgJwbSb0j9Sv73kLXOLtg7lPhHQfao" />
            <div class="absolute inset-0 bg-primary/40 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent"></div>
            <div class="relative h-full flex flex-col justify-end p-8 md:p-16 text-white max-w-2xl">
                <div class="mb-6">
                    <span class="font-headline font-black text-2xl tracking-tighter uppercase mb-4 block">Earth
                        Architect</span>
                    <h1 class="text-4xl md:text-6xl font-headline font-black tracking-tighter leading-none mb-6">
                        Architecture of the Earth.
                    </h1>
                    <p class="text-lg md:text-xl font-body leading-relaxed opacity-90">
                        Building a sustainable bridge between modern exploration and the precision of the natural world.
                        Our mission is to curate experiences that respect the geometry of our planet.
                    </p>
                </div>
            </div>
        </section>
        <!-- Right Half: Login Form Section -->
        <section class="w-full md:w-1/2 flex items-center justify-center p-8 md:p-16 bg-surface-bright">
            <div class="w-full max-w-md">
                <div class="mb-10">
                    <h2 class="text-3xl font-headline font-extrabold tracking-tight text-primary mb-2">Welcome Back</h2>
                    <p class="text-on-surface-variant font-body">Enter your credentials to access the portal.</p>
                </div>
                
                <?php if ($error): ?>
                <div class="bg-error-container text-on-error-container p-4 mb-6 border-l-4 border-error">
                    <p class="text-sm font-bold"><?php echo htmlspecialchars($error); ?></p>
                </div>
                <?php endif; ?>
                
                <?php if ($success): ?>
                <div class="bg-primary-fixed text-on-primary-fixed p-4 mb-6 border-l-4 border-primary">
                    <p class="text-sm font-bold"><?php echo htmlspecialchars($success); ?></p>
                </div>
                <?php endif; ?>
                
                <form method="POST" class="space-y-6">
                    <div class="space-y-2">
                        <label
                            class="block text-xs font-label font-bold uppercase tracking-widest text-on-surface-variant"
                            for="email">Email Address</label>
                        <input
                            class="w-full border-outline-variant bg-surface-container-lowest focus:ring-0 focus:border-primary px-4 py-4 font-body text-sm rounded-none border-2 transition-colors duration-200"
                            id="email" name="email" placeholder="architect@earth.com" type="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" />
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <label
                                class="block text-xs font-label font-bold uppercase tracking-widest text-on-surface-variant"
                                for="password">Password</label>
                            <a class="text-xs font-label font-bold uppercase tracking-widest text-primary hover:underline transition-all"
                                href="#">Forgot Password?</a>
                        </div>
                        <div class="relative">
                            <input
                                class="w-full border-outline-variant bg-surface-container-lowest focus:ring-0 focus:border-primary px-4 py-4 font-body text-sm rounded-none border-2 transition-colors duration-200"
                                id="password" name="password" placeholder="••••••••••••" type="password" />
                            <button class="absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant"
                                type="button" onclick="togglePassword()">
                                <span class="material-symbols-outlined text-xl" data-icon="visibility">visibility</span>
                            </button>
                        </div>
                    </div>
                    <div class="pt-4">
                        <button
                            class="w-full bg-primary text-on-primary py-5 text-sm font-label font-black tracking-widest uppercase hover:bg-primary-container transition-all duration-300 active:scale-95 flex items-center justify-center gap-2 group"
                            type="submit">
                            LOGIN
                            <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform"
                                data-icon="arrow_forward">arrow_forward</span>
                        </button>
                    </div>
                </form>
                <div class="mt-12 pt-8 border-t border-outline-variant/20 text-center">
                    <p class="text-sm font-body text-on-surface-variant">
                        Don't have an account?
                        <a class="font-bold text-primary hover:underline decoration-2 underline-offset-4"
                            href="registration_selection.php">Register</a>
                    </p>
                </div>
            </div>
        </section>
    </main>
</body>
<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const icon = document.querySelector('[data-icon="visibility"]');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.textContent = 'visibility_off';
        } else {
            passwordInput.type = 'password';
            icon.textContent = 'visibility';
        }
    }
</script>
</html>