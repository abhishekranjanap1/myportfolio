<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $receiving_email_address = 'abhishekranjan92131@gmail.com';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message:\n$message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    $success = mail($receiving_email_address, $subject, $email_message, $headers);

    if ($success) {
        echo "Your message has been sent. Thank you!";
    } else {
        echo "Error sending message. Please try again later.";
    }
} else {
    echo "Invalid form submission.";
}
?>
