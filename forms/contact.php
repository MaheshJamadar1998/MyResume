<?php

// Replace with your real receiving email address
$receiving_email_address = 'jamadarmahesh1298@gmail.com';

// Collect form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Sanitize form data to prevent injection
$name = htmlspecialchars(strip_tags($name));
$email = htmlspecialchars(strip_tags($email));
$subject = htmlspecialchars(strip_tags($subject));
$message = htmlspecialchars(strip_tags($message));

// Create email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Compose email body
$email_body = "Name: $name\n";
$email_body .= "Email: $email\n";
$email_body .= "Subject: $subject\n\n";
$email_body .= "Message:\n$message\n";

// Send the email
if (mail($receiving_email_address, $subject, $email_body, $headers)) {
    echo "success";
} else {
    echo "error";
}

?>
