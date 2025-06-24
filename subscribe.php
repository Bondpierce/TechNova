<?php
session_start();

// Rate limiting - max 3 attempts per hour
if (!isset($_SESSION['subscribe_attempts'])) {
    $_SESSION['subscribe_attempts'] = 0;
    $_SESSION['first_attempt_time'] = time();
}

$_SESSION['subscribe_attempts']++;

if ($_SESSION['subscribe_attempts'] > 1 && 
    (time() - $_SESSION['first_attempt_time']) < 3600) {
    echo json_encode([
        'success' => false,
        'message' => 'Too many subscription attempts. Please try again later.'
    ]);
    exit;
}

require_once 'script/config.php';

header('Content-Type: application/json');

// Validate input
$email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$ip = $_POST['ip'] ?? '';

if (!$email || !$ip) {
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
    exit;
}

try {
    // Check if email already exists
    $stmt = $pdo->prepare("SELECT id FROM subscribers WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $exists = $stmt->fetch();
    
    if ($exists) {
        // Update existing record
        $stmt = $pdo->prepare("UPDATE subscribers SET ip_address = :ip, is_active = TRUE WHERE email = :email");
        $stmt->execute(['ip' => $ip, 'email' => $email]);
        
        echo json_encode([
            'success' => true,
            'message' => 'You were already subscribed. We\'ve updated your subscription preferences.'
        ]);
    } else {
        // Insert new subscriber
        $stmt = $pdo->prepare("INSERT INTO subscribers (email, ip_address) VALUES (:email, :ip)");
        $stmt->execute(['email' => $email, 'ip' => $ip]);
        
        echo json_encode([
            'success' => true,
            'message' => 'Thank you for subscribing to our newsletter!'
        ]);
    }
} catch (PDOException $e) {
    error_log("Subscription error: " . $e->getMessage());
    echo json_encode([
        'success' => false,
        'message' => 'Failed to process subscription. Please try again later.'
    ]);
}
?>