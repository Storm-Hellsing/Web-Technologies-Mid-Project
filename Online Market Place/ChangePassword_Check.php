<?php

    session_start();
    require 'validations.php';
    $flag = false;

    if(isset($_COOKIE['userLogin']) && isset($_COOKIE['userID']) && isset($_COOKIE['userEmail']))
    {
        $currentPassword = $_REQUEST['currentpassword'];
        $newPassword = $_REQUEST['newpassword'];
        $retypeNewPassword = $_REQUEST['retypenewpassword'];
        $email = $_COOKIE['userEmail'];
        $validPassword = validatePassword($newPassword);

        if($newPassword == "" && $currentPassword == "")
        {
            header('location: ResetPassword.php?msg=nullNewPassword');
        }
        elseif($validPassword == 0)
        {
            header('location: ResetPassword.php?msg=invalidPassword');
        }
        elseif($newPassword != $retypeNewPassword)
        {
            header('location: ResetPassword.php?msg=newPassMismatch');
        }
        elseif($newPassword != $retypeNewPassword)
        {
            header('location: ResetPassword.php?msg=newPassMismatch');
        }
        else
        {
            $lines = file('Database/UserList.txt');

            // loop through lines to find the user with the specified email
            foreach ($lines as &$line) 
            {
                $fields = explode('|', $line);
                if ($fields[2] == $email) 
                {
                    $fields[3] = $newPassword; // update the password field
                    $line = implode("|", $fields);
                    break;
                }
            }

            // write updated data back to file
            file_put_contents('Database/UserList.txt', implode("", $lines));
            $flag = true;

            if($flag)
            {
                header('location: LoginPage.php?msg=passChangeSuccess');
            }
            else
            {
                header('location: LoginPage.php?msg=passChangeFailed');
            }
            
        }
    }

?>