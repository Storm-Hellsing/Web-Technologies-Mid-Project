<?php

    session_start();
    require 'validations.php';

    if(isset($_REQUEST['send']))
    {
        $email = $_REQUEST['email'];
        $validEmail = validateEmail($email);

        if($email == "")
        {
            header('location: ForgotPasswordPage.php?msg=emailBlank');
        }
        elseif($validEmail == 1)
        {
            $otpCode = generateRandomCode();

            $to = $email;
            $subject = "Password Reset Request";
            $message = "Dear user,\n\nYou have requested to reset your password. Please use the code given below to proceed futher for resetting your password. The code will remain active for 5 minutes.\n\n Code: {$otpCode}\n\nIf you didn't make this request then ignore this email.\n\n Best Regards, \r\n Team Euphoria.";
        
            // Set headers
            $headers = "From: hellsing.technologies@gmail.com\r\n";
            $headers .= "Reply-To: hellsing.technologies@gmail.com\r\n";
            $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
        
            // Send email
            if(mail($to, $subject, $message, $headers)) 
            {
                header('location: OTPCode.php?msg=emailSent');
                $_SESSION['otp'] = $otpCode;
                setcookie('otpCode', $otpCode, time() + 300, '/');
            } 
            else
            {
                header('location: ForgotPasswordPage.php?msg=emailSentError');
            }
        
        }
        else
        {
            header('location: ForgotPasswordPage.php?msg=invalidEmail');
        }
    }
    else
    {
        header('location: ForgotPasswordPage.php');
    }

?>