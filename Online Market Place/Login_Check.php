<?php

    session_start();

    $userName = "";
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $flag = false;

    if(isset($_REQUEST['signin']))
    {
        if($email == "" || $password == "")
        {
            echo("Please fillup the above credentials.");
        }
        else
        {
            $file = fopen('UserList.txt', 'r');
            while(!feof($file))
            {
                $data = fgets($file);
                $user = explode('|', $data);

                if($email == trim($user[1]) && $password == trim($user[2]))
                {
                    $flag = true;
                    $userName = trim($user[0]);
                }
            }

            if($flag)
            {
                $_SESSION['userName'] = $userName;
                setcookie('userLogin', 'true', time() + 900, '/');
                header('location: HomePage.php');
            }
            else
            {
                header('location: LoginPage.php?msg=error');
            }
        }
    }
    else
    {
        header('location: LoginPage.php');
    }

?>