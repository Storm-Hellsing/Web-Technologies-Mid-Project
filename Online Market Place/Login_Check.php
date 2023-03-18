<?php

    session_start();

    $userName = "";
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $accountTypeCustomer = "Customer";
    $accountTypeMerchant = "Merchant";
    $accountTypeAdmin = "Admin";
    $flagCustomer = false;
    $flagMerchant = false;
    $flagAdmin = false;

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

                if($email == trim($user[1]) && $password == trim($user[2]) && $accountTypeCustomer == trim($user[3]))
                {
                    $flagCustomer = true;
                    $userName = trim($user[0]);
                }
                elseif($email == trim($user[1]) && $password == trim($user[2]) && $accountTypeMerchant == trim($user[3]))
                {
                    $flagMerchant = true;
                    $userName = trim($user[0]);
                }
                elseif($email == trim($user[1]) && $password == trim($user[2]) && $accountTypeAdmin == trim($user[3]))
                {
                    $flagAdmin = true;
                    $userName = trim($user[0]);
                }
            }

            if($flagCustomer)
            {
                $_SESSION['userName'] = $userName;
                if($_REQUEST['keep_me_signed_in'] && $_REQUEST['keep_me_signed_in'] == 'on')
                {
                    setcookie('userLogin', $userName, time() + (30 * 24 * 60 * 60), '/');
                }
                else
                {
                    setcookie('userLogin', $userName, time() + 900, '/');
                }

                header('location: HomePage_Customer.php');
            }
            elseif($flagMerchant)
            {
                $_SESSION['userName'] = $userName;
                if($_REQUEST['keep_me_signed_in'] && $_REQUEST['keep_me_signed_in'] == 'on')
                {
                    setcookie('userLogin', $userName, time() + (30 * 24 * 60 * 60), '/');
                }
                else
                {
                    setcookie('userLogin', $userName, time() + 900, '/');
                }

                header('location: HomePage_Merchant.php');
            }
            elseif($flagAdmin)
            {
                $_SESSION['userName'] = $userName;
                if($_REQUEST['keep_me_signed_in'] && $_REQUEST['keep_me_signed_in'] == 'on')
                {
                    setcookie('userLogin', $userName, time() + 2592000, '/');
                }
                else
                {
                    setcookie('userLogin', $userName, time() + 900, '/');
                }

                header('location: HomePage_Admin.php');
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