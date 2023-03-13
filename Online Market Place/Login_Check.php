<?php

    session_start();

    $userName = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $flag = false;

    if(isset($_REQUEST['signin']))
    {
        if($userName == "" || $password == "")
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

                if($userName == trim($user[0]) && $password == trim($user[2]))
                {
                    $flag = true;
                }
            }

            if($flag)
            {
                $_SESSION['username'] = $userName;
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