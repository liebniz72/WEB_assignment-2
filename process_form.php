<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Send an email with the form data
    $to = 'rahim@gmail.com';
    $headers = "From: $name <$email>" . "\r\n";
    mail($to, $subject, $message, $headers);

    // Show a success message
    echo '<p>Thank you for contacting us! We will get back to you as soon as possible.</p>';
}
?>
