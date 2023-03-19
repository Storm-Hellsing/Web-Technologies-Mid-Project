<?php

    session_start();
    require "validations.php";

    if(isset($_REQUEST['signup']))
    {
        $businessName = $_REQUEST['businessname'];
        $businessLink = $_REQUEST['businesslink'];
        $userName = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $retypePassword = $_REQUEST['retypePassword'];
        $validBusinessName = validateBusinessName($businessName);
        $validURL = validateURL($businessLink);
        $validEmail = validateEmail($email);
        $validPassword = validatePassword($password);

        if($businessName == "" || $businessLink == "" || $userName == "" || $email == "" || $password == "" || $retypePassword == "")
        {
            header('location: MerchantRegistrationPage.php?msg=nullInputs');
        }
        elseif($validBusinessName == 1)
        {
            header('location: MerchantRegistrationPage.php?msg=invalidBusinessName');
        }
        elseif($validURL == 0)
        {
            header('location: MerchantRegistrationPage.php?msg=invalidURL');
        }
        elseif($validEmail == 1)
        {
            header('location: MerchantRegistrationPage.php?msg=invalidEmail');
        }
        elseif($validPassword == 0)
        {
            header('location: MerchantRegistrationPage.php?msg=invalidPasswd');
        }
        elseif($retypePassword != $password)
        {
            header('location: MerchantRegistrationPage.php?msg=passwdMismatch');
        }
        else
        {
            $merchantID = generateMerchantCode();
            $filename = 'UserList.txt';
            $file = fopen($filename, 'a') or die('Unable to open file!');
            $text = "{$merchantID}|{$userName}|{$email}|{$password}|Merchant|{$businessName}|{$businessLink}\r\n";
            fwrite($file, $text) or die('Unable to write to file!');
            fclose($file);
            echo("<h1 align='center'><b>Registration Successful.</b></h1>");
            echo("<h3 align='center'><b><a href='LoginPage.php'>Login</a></b></h3>");
        }
    }
    else
    {
        header('location: MerchantRegistrationPage.php');
    }

?>