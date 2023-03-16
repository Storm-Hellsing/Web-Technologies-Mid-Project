<?php

function SmtpService($smtp_email, $smtp_password, $from_email, $to_email)
{
    // PHPMailer library for sending email via SMTP
    require_once 'path/to/PHPMailerAutoload.php';

    // Email and password for SMTP server
    // $smtp_email = 'your_smtp_email@example.com';
    // $smtp_password = 'your_smtp_password';

    // // Sender and recipient email addresses
    // $from_email = 'sender@example.com';
    // $to_email = 'recipient@example.com';

    // Email subject and body
    $subject = 'Password Reset Request';
    $body = 'Dear User, we received a request to reset your password. Please follow this link to reset your password: https://example.com/reset_password.php';

    // Create a new PHPMailer instance
    $mail = new PHPMailer;

    // SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.google.com'; // SMTP server address
    $mail->SMTPAuth = true;
    $mail->Username = $smtp_email;
    $mail->Password = $smtp_password;
    $mail->SMTPSecure = 'tls'; // TLS encryption
    $mail->Port = 587; // SMTP port

    // Sender and recipient email addresses
    $mail->setFrom($from_email, 'Euphoria');
    $mail->addAddress($to_email, 'User');

    // Email subject and body
    $mail->Subject = $subject;
    $mail->Body    = $body;

    // Send the email and check for errors
    if(!$mail->send()) {
       return 0;
    } else {
        return 1;
    }
}


?>
