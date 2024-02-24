<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace with your real receiving email address
    $receiving_email_address = 'abhishekranjan92131@gmail.com';

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message:\n$message";

    // Set additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Send email
    $success = mail($receiving_email_address, $subject, $email_message, $headers);

    if ($success) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email. Please try again later.";
    }
} else {
    echo "Invalid form submission.";
}
?>
