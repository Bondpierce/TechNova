<?php
require_once 'phpmailer/PHPMailerAutoload.php';

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'TechNovaUser');
define('DB_PASS', 'SecurePassword123!');
define('DB_NAME', 'TechNova');

// Email configuration
define('SITE_SUPPORT_EMAIL', 'olamideolanipekun75@gmail.com');
define('SITE_NAME', 'TechNova');
define('SITE_DOMAIN', 'technova.com');
define('FROM_EMAIL', 'noreply@technova.com');
define('FROM_NAME', 'TechNova Support');

// Enable error reporting for debugging (turn off in production)
error_reporting(E_ALL);
ini_set('display_errors', 0);

// Security headers
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");
header("X-XSS-Protection: 1; mode=block");

// Only process POST requests
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    
    // Validate required fields
    $errors = [];
    if (empty($name)) {
        $errors[] = "Name is required";
    } elseif (strlen($name) > 100) {
        $errors[] = "Name is too long (max 100 characters)";
    }
    
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address";
    } elseif (strlen($email) > 100) {
        $errors[] = "Email is too long (max 100 characters)";
    }
    
    if (!empty($subject) && strlen($subject) > 200) {
        $errors[] = "Subject is too long (max 200 characters)";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    if (!empty($errors)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'errors' => $errors]);
        exit;
    }
    
    try {
        // Connect to database
        $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        
        $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        
        // Insert message into database
        $stmt = $pdo->prepare("INSERT INTO contact_messages 
                              (name, email, subject, message, ip_address, user_agent, created_at) 
                              VALUES (?, ?, ?, ?, ?, ?, NOW())");
        
        $stmt->execute([
            $name,
            $email,
            $subject,
            $message,
            $_SERVER['REMOTE_ADDR'],
            $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown'
        ]);
        
        // Send email to admin
        $admin_mail = new PHPMailer;
        $admin_mail->isSMTP();
        $admin_mail->Host = 'smtp.gmail.com';
        $admin_mail->Port = 587;
        $admin_mail->SMTPAuth = true;
        $admin_mail->SMTPSecure = 'tls';
        $admin_mail->Username = SITE_SUPPORT_EMAIL;
        $admin_mail->Password = 'znsp hxgw fbnf vsxf';
        
        $admin_mail->setFrom(FROM_EMAIL, FROM_NAME);
        $admin_mail->addAddress(SITE_SUPPORT_EMAIL);
        $admin_mail->addReplyTo($email, $name);
        
        $admin_mail->isHTML(true);
        $admin_mail->Subject = "New Contact Form Submission: " . (!empty($subject) ? $subject : "No Subject");
        
       $admin_mail->Body = "
    <h2>New Contact Form Submission</h2>
    <p><strong>Name:</strong> {$name}</p>
    <p><strong>Email:</strong> {$email}</p>
    <p><strong>Subject:</strong> " . (!empty($subject) ? $subject : "No Subject") . "</p>
    <p><strong>Message:</strong></p>
    <p>{$message}</p>
    <hr>
    <p><small>IP Address: {$_SERVER['REMOTE_ADDR']}</small></p>
    <p><small>User Agent: " . ($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown') . "</small></p>
";  

// Send confirmation email to user
$user_mail = new PHPMailer;
$user_mail->isSMTP();
$user_mail->Host = 'smtp.gmail.com';
$user_mail->Port = 587;
$user_mail->SMTPAuth = true;
$user_mail->SMTPSecure = 'tls';
$user_mail->Username = SITE_SUPPORT_EMAIL;
$user_mail->Password = 'znsp hxgw fbnf vsxf';

$user_mail->setFrom(FROM_EMAIL, FROM_NAME);
$user_mail->addAddress($email, $name);
$user_mail->addReplyTo(FROM_EMAIL, FROM_NAME);

$user_mail->isHTML(true);
$user_mail->Subject = "Thank you for contacting " . SITE_NAME;  // Fixed this line
        
        $user_mail->Body = '
        <body style="background-color: #f3f5f7; margin: 0 !important; padding: 0 !important;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td align="center" style="padding: 40px 10px 10px 10px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px;">
                                    <h1 style="color: #111111; font-family: Arial, sans-serif; font-size: 28px; font-weight: 400; margin: 0;">Thank you for contacting us!</h1>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 20px; color: #666666; font-family: Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                                    <p>Dear ' . $name . ',</p>
                                    <p>We have received your message and will get back to you soon. Here are the details you submitted:</p>
                                    <p><strong>Subject:</strong> ' . (!empty($subject) ? $subject : "No Subject") . '</p>
                                    <p><strong>Message:</strong><br>' . nl2br($message) . '</p>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 0px 20px 20px 20px; color: #666666; font-family: Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                                    <p>If you have any further questions, please don\'t hesitate to reply to this email.</p>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#ffffff" align="left" style="padding: 0px 20px 40px 20px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                                    <p>Best regards,<br>The ' . SITE_NAME . ' Team</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="padding: 0px 10px 50px 10px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td align="center" style="padding: 10px 10px 10px 10px; color: #aaaaaa; font-family: Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
                                    <p>You received this email because you contacted ' . SITE_DOMAIN . '.</p>
                                    <p>© ' . date('Y') . ' ' . SITE_NAME . '. All rights reserved.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>';
        
        // Send emails
        $admin_sent = $admin_mail->send();
        $user_sent = $user_mail->send();
        
        if (!$admin_sent || !$user_sent) {
            error_log("Email sending failed. Admin: " . $admin_mail->ErrorInfo . " | User: " . $user_mail->ErrorInfo);
            throw new Exception("Failed to send confirmation emails");
        }
        
        // Return success response
        http_response_code(200);
        header('Content-Type: application/json');
        echo json_encode([
            'success' => true,
            'message' => 'Thank you for your message. We\'ve sent a confirmation to your email address.'
        ]);
        
    } catch (PDOException $e) {
        http_response_code(500);
        error_log("Database error: " . $e->getMessage());
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => 'Oops! Something went wrong with saving your message. Please try again later.'
        ]);
    } catch (Exception $e) {
        http_response_code(500);
        error_log("Email error: " . $e->getMessage());
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => 'Your message was received but we couldn\'t send the confirmation email. We\'ll still get back to you!'
        ]);
    }
} else {
    http_response_code(403);
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false,
        'message' => 'There was a problem with your submission, please try again.'
    ]);
}
?>