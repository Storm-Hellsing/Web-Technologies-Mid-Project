<?php

    session_start();
    require "validations.php";

    if(isset($_REQUEST['signup']))
    {
        $userName = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $retypePassword = $_REQUEST['retypePassword'];
        $validPassword = validatePassword($password);

        if($userName == "" || $email == "" || $password == "" || $retypePassword == "")
        {
            header('location: SignUpPage.php?msg=nullInputs');
        }
        elseif($validPassword == 0)
        {
            header('location: SignUpPage.php?msg=invalidPasswd');
        }
        elseif($retypePassword != $password)
        {
            header('location: SignUpPage.php?msg=passwdMismatch');
        }
        else
        {
            $filename = 'UserList.txt';
            $file = fopen($filename, 'a') or die('Unable to open file!');
            $text = "{$userName}|{$email}|{$password}\r\n";
            fwrite($file, $text) or die('Unable to write to file!');
            fclose($file);
            echo("<h1 align='center'><b>Registration Successful.</b></h1>");
            echo("<h3 align='center'><b><a href='LoginPage.php'>Login</a></b></h3>");
        }
    }
    else
    {
        header('location: SignUpPage.php');
    }

?>