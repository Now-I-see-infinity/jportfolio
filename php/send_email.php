<?php
// Prevent direct access to this file
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Method Not Allowed');
}

// Sanitize and validate form inputs
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validation
$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Valid email is required';
}

if (empty($subject)) {
    $errors[] = 'Subject is required';
}

if (empty($message)) {
    $errors[] = 'Message is required';
}

// If there are validation errors, return them
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'errors' => $errors]);
    exit;
}

// Email configuration
$to = 'your-email@example.com'; // Change this to your email
$from = $email;
$reply_to = $email;

// Build email headers
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: $from\r\n";
$headers .= "Reply-To: $reply_to\r\n";

// Build email subject
$email_subject = "Portfolio Contact: $subject";

// Build email body
$body = "
<html><body>
<h2>New Contact Form Submission</h2>
<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
<p><strong>Subject:</strong> " . htmlspecialchars($subject) . "</p>
<p><strong>Message:</strong></p>
<p>" . nl2br(htmlspecialchars($message)) . "</p>
</body></html>
";

// Send email
try {
    $mail_sent = mail($to, $email_subject, $body, $headers);
    
    if ($mail_sent) {
        // Log the message (optional)
        $log_message = "[" . date('Y-m-d H:i:s') . "] From: $email, Subject: $subject\n";
        error_log($log_message, 3, __DIR__ . '/contact_log.txt');
        
        // Return success response
        http_response_code(200);
        echo json_encode([
            'success' => true,
            'message' => 'Thank you! Your message has been sent successfully. I\'ll get back to you soon!'
        ]);
    } else {
        throw new Exception('Email could not be sent');
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'An error occurred while sending your message. Please try again later.'
    ]);
}
?>
