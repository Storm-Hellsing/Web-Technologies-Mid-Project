<?php
    
    session_start();

    if(isset($_REQUEST['confirm']))
    {
        $otp = $_REQUEST['otp'];

        if(isset($_COOKIE['otpCode']))
        {
            $generatedOTP = $_COOKIE['otpCode'];

            if($otp != $generatedOTP)
            {
                header('Location: OTPCode.php?msg=invalidOTP');
            }
            else
            {
                session_destroy();
                setcookie('otpCode', $otpCode, time() - 1, '/');
                header('Location: ResetPassword.php');
            }
        }
        else
        {
            header('location: OTPCode.php');
        }
    }
    else
    {
        header('location: OTPCode.php');
    }

?>