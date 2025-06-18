<?php
require_once __DIR__ . '/script/db.php';

require_once __DIR__ . '/vendor/autoload.php'; // Load PHPMailer
require_once __DIR__ . '/script/db.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function handleContactForm() {
    $errors = [];
    $success_message = '';
    $form_data = [
        'name' => '',
        'email' => '',
        'subject' => '',
        'message' => ''
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $form_data = [
            'name' => trim($_POST['name'] ?? ''),
            'email' => trim($_POST['email'] ?? ''),
            'subject' => trim($_POST['subject'] ?? ''),
            'message' => trim($_POST['message'] ?? '')
        ];

        // Validation
        if (empty($form_data['name'])) $errors[] = 'Name is required';
        if (empty($form_data['email'])) $errors[] = 'Email is required';
        elseif (!filter_var($form_data['email'], FILTER_VALIDATE_EMAIL)) $errors[] = 'Invalid email format';
        if (empty($form_data['subject'])) $errors[] = 'Subject is required';
        if (empty($form_data['message'])) $errors[] = 'Message is required';

        if (empty($errors)) {
            $conn = getDBConnection();
            $stmt = $conn->prepare("INSERT INTO contact_submissions (name, email, subject, message) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $form_data['name'], $form_data['email'], $form_data['subject'], $form_data['message']);
            
            if ($stmt->execute()) {
                $submission_id = $stmt->insert_id;
                
                // Send email with PHPMailer
                $mail = new PHPMailer(true);
                
                try {
                    // Server settings
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.example.com'; // Your SMTP server
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'olamideolanipekun75@gmail.com'; // SMTP username
                    $mail->Password   = 'your-email-password'; // SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS encryption
                    $mail->Port       = 587; // TCP port
                    
                    // Recipients
                    $mail->setFrom('noreply@example.com', 'Website Contact Form');
                    $mail->addAddress('your-email@example.com', 'Your Name'); // Where to deliver
                    $mail->addReplyTo($form_data['email'], $form_data['name']);
                    
                    // Content
                    $mail->isHTML(true);
                    $mail->Subject = 'New Contact Form Submission: ' . $form_data['subject'];
                    $mail->Body    = sprintf(
                        '<h1>New Contact Form Submission</h1>
                        <p><strong>Name:</strong> %s</p>
                        <p><strong>Email:</strong> %s</p>
                        <p><strong>Subject:</strong> %s</p>
                        <p><strong>Message:</strong></p>
                        <p>%s</p>
                        <p><small>Submission ID: %d</small></p>',
                        htmlspecialchars($form_data['name']),
                        htmlspecialchars($form_data['email']),
                        htmlspecialchars($form_data['subject']),
                        nl2br(htmlspecialchars($form_data['message'])),
                        $submission_id
                    );
                    $mail->AltBody = sprintf(
                        "Name: %s\nEmail: %s\nSubject: %s\nMessage:\n%s\n\nSubmission ID: %d",
                        $form_data['name'],
                        $form_data['email'],
                        $form_data['subject'],
                        $form_data['message'],
                        $submission_id
                    );
                    
                    $mail->send();
                    
                    // Mark as processed in database
                    $conn->query("UPDATE contact_submissions SET is_processed = TRUE WHERE id = $submission_id");
                    $success_message = 'Thank you! Your message has been sent.';
                    $form_data = ['name' => '', 'email' => '', 'subject' => '', 'message' => ''];
                } catch (Exception $e) {
                    $errors[] = "Message saved but could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            } else {
                $errors[] = 'Database error. Please try again.';
            }
            
            $stmt->close();
            $conn->close();
        }
    }

    return [
        'errors' => $errors,
        'success_message' => $success_message,
        'form_data' => $form_data
    ];
}

// displayContactForm() remains the same as previous examples

function displayContactForm($result) {
    ?>
    <div class="max-w-2xl mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">Contact Us</h1>
        
        <?php if (!empty($result['errors'])): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                <ul>
                    <?php foreach ($result['errors'] as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        
        <?php if (!empty($result['success_message'])): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                <?php echo htmlspecialchars($result['success_message']); ?>
            </div>
        <?php endif; ?>
        
        <form class="space-y-6" method="POST" action="">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block mb-2 dark:text-white">Your Name</label>
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($result['form_data']['name']); ?>" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-gray-700 dark:text-white" required>
                </div>
                <div>
                    <label for="email" class="block mb-2 dark:text-white">Your Email</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($result['form_data']['email']); ?>" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-gray-700 dark:text-white" required>
                </div>
            </div>
            <div>
                <label for="subject" class="block mb-2 dark:text-white">Subject</label>
                <input type="text" id="subject" name="subject" value="<?php echo htmlspecialchars($result['form_data']['subject']); ?>" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-gray-700 dark:text-white" required>
            </div>
            <div>
                <label for="message" class="block mb-2 dark:text-white">Message</label>
                <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent dark:bg-gray-700 dark:text-white" required><?php echo htmlspecialchars($result['form_data']['message']); ?></textarea>
            </div>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg transition w-full">Send Message</button>
        </form>
    </div>
    <?php
}
?>