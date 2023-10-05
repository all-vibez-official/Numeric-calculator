<?php
$to = 'hemav602@gmail.com';
$subject = 'Test Email';
$message = 'haii';
$headers = 'From: hema@gmail.com' . "\r\n" .
           'Reply-To: hemav602@gmail.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
} else {
    echo 'Email delivery failed. Check your configuration.';
}
?>
