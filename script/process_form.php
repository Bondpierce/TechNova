<?php
    require_once 'phpmailer/PHPMailerAutoload.php';
    $sitesupport_email = "olamideolanipekun75@gmail.com";
    $site_name = "TechNova";
    $receiver_email = "devpro432@gmail.com";
    $receiver_name = "Olamide";
    $site_domain = "technova.com";

    $title = "Welcome to TechNova";
    $mail = new PHPMailer;
	$mail->isSMTP();
	// $mail->SMTPDebug = 2;
	$mail->Host= 'smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';
	$mail->Username=$sitesupport_email;
	$mail->Password='znsp hxgw fbnf vsxf';

	$mail->setFrom($sitesupport_email,$site_name);
	$mail->addAddress($receiver_email);
	$mail->addReplyTo($sitesupport_email,$site_name);

	$mail->isHTML(true);
	$mail->Subject=$title;

	$mail->Body='<body style="background-color: #f3f5f7; margin: 0 !important; padding: 0 !important;">
            
	<!-- HIDDEN PREHEADER TEXT -->
	<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: "Poppins", sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
		
	</div>
	
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
		<!-- LOGO -->
		<tr>
			<td align="center" style="padding: 0px 10px 0px 10px;">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
					<tr>
					<td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 10px 10px 10px;">
					  <a href="#" target="_blank">
					  <img alt="logo" src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.logodesign.net%2Fcontests%2Flogo-for-a-high-tech-company&psig=AOvVaw2wRhoVcA4jX0-eL7R_MC13&ust=1750331962523000&source=images&cd=vfe&opi=89978449&ved=0CBgQ3YkBahcKEwj47Kvq7PqNAxUAAAAAHQAAAAAQBg" width="155" height="29"  border="0">
					  </a>
					</td>
				  </tr>
				</table>
			</td>
		</tr>
		<!-- HERO -->
		
		<tr>
			<td align="center" style="padding: 0px 10px 0px 10px;">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
					<tr>
						<td bgcolor="#ffffff" align="left" valign="top" style="padding: 20px 20px 10px 10px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Poppins", sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 2px; line-height: 48px;">
						  <p style="font-size: 14px; font-weight: 600; margin: 10px 13px;">Hi '.$receiver_name.',</p>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<!-- COPY BLOCK -->
		<tr>
			<td align="center" style="padding: 0px 10px 0px 10px;">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
				  <!-- COPY -->
				  <tr>
					<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 20px 10px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
							  <p style="margin:10px 13px; font-size: 12px;">Welcome aboard! 🎉 We’re so excited to have you as part of the RocketEnglish family. You’ve taken a huge step towards mastering English faster and more efficiently.</p>
					</td>
				  </tr>

                   <!-- COPY HEADING -->
				  <tr>
					<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 40px 10px; color: #111111; font-family: "Poppins", sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
					  <h2 style="font-size: 12px; font-weight: 400; margin: 10px 13px;">Here’s what you can expect:</h2>
					</td>
				  </tr>
				  <!-- COPY -->

				  <tr>
					<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 20px 10px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
					  <p style="margin:10px 13px; font-size: 12px;"><b>Simple and effective lessons<b> designed to get you speaking quickly.</p>
					  <p style="margin:10px 13px; font-size: 12px;"><b>Proven techniques<b> to help you learn faster, with everyday conversations.</p>
                      <p style="margin:10px 13px; font-size: 12px;"><b>Practice exercises<b> that will give you the confidence to use English in real-life situations.</p>

					</td>
				  </tr>

				  <!-- COPY HEADING -->
				  <tr>
					<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 40px 10px; color: #111111; font-family: "Poppins", sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
					  <h2 style="font-size: 12px; font-weight: 400; margin: 10px 13px;">🚀 Ready to get started? Log in now and dive into your first lesson: [Link to First Lesson]</h2>
					</td>
				  </tr>
				  <!-- COPY -->
				  <tr>
					<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 20px 10px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
					  <p style="margin: 10px 13px; font-size: 12px;">Email:  webminning.space@gmail.com</p>
					  <p style="margin: 10px 13px; font-size: 12px;">Password: 12345678</p>
					</td>
				  </tr>
				  <!-- COPY -->
				  <tr>
					<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 20px 10px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
					<p style="margin:10px 13px; font-size: 12px;">We’re confident you’ll love your learning experience with '.$site_name.'. Let’s make your English fluency journey an exciting one!</p>
					<p style="margin:10px 13px; font-size: 12px;">All the best,</p>
					</td>
				  </tr>
				 
				  <!-- COPY -->
				  <tr>
					<td bgcolor="#ffffff" align="left" style="padding: 10px 10px 40px 10px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
					  <p style="margin:10px 13px; font-size: 12px;">'.$site_name.' Team</p>
					</td>
				  </tr>
				</table>
			</td>
		</tr>
		<!-- FOOTER -->
		<tr>
			<td align="center" style="padding: 0px 10px 50px 10px;">
		
			<table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
		   
			<!-- PERMISSION REMINDER -->
			<tr>
			  <td bgcolor="#ffffff" align="left" style="padding: 10px 10px 10px 10px; color: #aaaaaa; font-family: "Poppins", sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
				<p style="margin:20px 13px; font-size: 12px;">You received this email because you signed up with '.$site_domain.'. If it looks weird, view it in your browser ['.$site_domain.'].</p>
			  </td>
			</tr>
			
		<!-- COPYRIGHT -->
			<tr>
			  <td align="center" style="padding: 50px 10px 10px 10px; color: #333333; font-family: "Poppins", sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
				<p style="margin: 70px 0 20px; font-size: 12px;">Copyright © '.$site_domain.'. All rights reserved.</p>
			  </td>
			</tr>
		  </table>
			</td>
		</tr>
	</table>
	</body>';
	if($mail->send()){
        echo "Message Sent";
    }else{
        echo "Could not send message";
    }


exit();
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'TechNovaUser');  // Changed from empty to the new user
define('DB_PASS', 'SecurePassword123!');  // Changed from 'root' to more secure password
define('DB_NAME', 'TechNova');

// Email configuration
define('OWNER_EMAIL', 'olamideolanipekun75@gmail.com');
define('FROM_EMAIL', 'noreply@technova.com');  // Changed to use a noreply address
define('FROM_NAME', 'TechNova');

// Enable error reporting for debugging (turn off in production)
error_reporting(E_ALL);
ini_set('display_errors', 0);

// Security headers
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");
header("X-XSS-Protection: 1; mode=block");

// Only process POST requests
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate CSRF token if implemented
    // Validate honeypot field if implemented
    
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
        echo implode("<br>", $errors);
        exit;
    }
    
    try {
        // Connect to database with error handling
        $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8mb4";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        
        $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        
        // Insert message into database
        $stmt = $pdo->prepare("INSERT INTO contact_messages 
                              (name, email, subject, message, ip_address, user_agent) 
                              VALUES (?, ?, ?, ?, ?, ?)");
        
        $stmt->execute([
            $name,
            $email,
            $subject,
            $message,
            $_SERVER['REMOTE_ADDR'],
            $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown'
        ]);
        
        // Prepare email headers
        $headers = [
            'From' => FROM_NAME . ' <' . FROM_EMAIL . '>',
            'Reply-To' => $email,
            'X-Mailer' => 'PHP/' . phpversion(),
            'MIME-Version' => '1.0',
            'Content-type' => 'text/plain; charset=utf-8'
        ];
        
        // Format headers string
        $headersString = '';
        foreach ($headers as $key => $value) {
            $headersString .= "$key: $value\r\n";
        }
        
        // Send email to owner
        $owner_subject = "New Contact Form Submission: " . (!empty($subject) ? $subject : "No Subject");
        $owner_message = "You have received a new message from your website contact form.\n\n";
        $owner_message .= "Name: $name\n";
        $owner_message .= "Email: $email\n";
        $owner_message .= "Subject: " . (!empty($subject) ? $subject : "No Subject") . "\n";
        $owner_message .= "Message:\n$message\n";
        $owner_message .= "\n---\nIP Address: " . $_SERVER['REMOTE_ADDR'] . "\n";
        $owner_message .= "User Agent: " . ($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown') . "\n";
        
        // Send confirmation email to user
        $user_subject = "Thank you for contacting TechNova";
        $user_message = "Dear $name,\n\n";
        $user_message .= "Thank you for contacting TechNova. We have received your message and will get back to you soon.\n\n";
        $user_message .= "Here's a copy of your message:\n\n";
        $user_message .= "Subject: " . (!empty($subject) ? $subject : "No Subject") . "\n";
        $user_message .= "Message:\n$message\n\n";
        $user_message .= "Best regards,\nThe TechNova Team";
        
        // Send emails (with error handling)
        $mailSent = mail(OWNER_EMAIL, $owner_subject, $owner_message, $headersString);
        $confirmationSent = mail($email, $user_subject, $user_message, $headersString);
        
        if (!$mailSent || !$confirmationSent) {
            error_log("Failed to send email. Owner: $mailSent, User: $confirmationSent");
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
            'message' => 'Oops! Something went wrong. Please try again later.'
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