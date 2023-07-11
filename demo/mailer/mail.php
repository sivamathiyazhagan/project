
<?php
$to = "recipient@example.com";
$subject = "Test Email";
$message = "This is a test email.";
$headers = "From: sender@example.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Email failed to send.";
}
?>