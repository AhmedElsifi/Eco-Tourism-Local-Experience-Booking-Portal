<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Debug Session</title>
</head>
<body>
    <h1>Session Debug</h1>
    <pre>
    <?php 
    echo "Session Status: " . session_status() . "\n";
    echo "Session ID: " . session_id() . "\n";
    echo "\n";
    echo "SESSION Variables:\n";
    print_r($_SESSION);
    ?>
    </pre>
    
    <?php if (isset($_SESSION['user_id'])): ?>
    <h2>Database Test for User ID: <?php echo $_SESSION['user_id']; ?></h2>
    
    <?php
    require_once dirname(__DIR__, 3) . '/core/connection.php';
    
    echo "<pre>";
    
    $stmt = $connect->prepare("SELECT * FROM users WHERE user_id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $user = $stmt->fetch();
    echo "User Data:\n";
    print_r($user);
    
    if ($user['role'] === 'guide') {
        $stmt = $connect->prepare("SELECT * FROM guide WHERE guide_id = ?");
        $stmt->execute([$_SESSION['user_id']]);
        $guideData = $stmt->fetch();
        echo "\nGuide Data:\n";
        print_r($guideData);
        
        $stmt = $connect->prepare("SELECT * FROM guide_wallet WHERE guide_id = ?");
        $stmt->execute([$_SESSION['user_id']]);
        $wallet = $stmt->fetch();
        echo "\nWallet Data:\n";
        print_r($wallet);
    }
    
    echo "</pre>";
    ?>
    <?php else: ?>
    <p style="color:red">No user logged in! Go to <a href="../guest/login_page.php">Login</a></p>
    <?php endif; ?>
    
    <p><a href="guide_dashboard.php">Go to Dashboard</a></p>
</body>
</html>