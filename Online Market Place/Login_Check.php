<?php

    session_start();

    $userName = "";
    $userID = "";
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
            $file = fopen('Database/UserList.txt', 'r');
            while(!feof($file))
            {
                $data = fgets($file);
                $user = explode('|', $data);

                if($email == trim($user[2]) && $password == trim($user[3]) && $accountTypeCustomer == trim($user[4]))
                {
                    $flagCustomer = true;
                    $userID = trim($user[0]);
                    $userName = trim($user[1]);
                }
                elseif($email == trim($user[2]) && $password == trim($user[3]) && $accountTypeMerchant == trim($user[4]))
                {
                    $flagMerchant = true;
                    $userID = trim($user[0]);
                    $userName = trim($user[1]);
                }
                elseif($email == trim($user[2]) && $password == trim($user[3]) && $accountTypeAdmin == trim($user[4]))
                {
                    $flagAdmin = true;
                    $userID = trim($user[0]);
                    $userName = trim($user[1]);
                }
            }

            if($flagCustomer)
            {
                if($_REQUEST['keep_me_signed_in'] && $_REQUEST['keep_me_signed_in'] == 'on')
                {
                    setcookie('userLogin', $userName, time() + (30 * 24 * 60 * 60), '/');
                    setcookie('userID', $userID, time() + (30 * 24 * 60 * 60), '/');
                    setcookie('userEmail', $email, time() + (30 * 24 * 60 * 60), '/');
                }
                else
                {
                    setcookie('userLogin', $userName, time() + 900, '/');
                    setcookie('userID', $userID, time() + 900, '/');
                    setcookie('userEmail', $email, time() + 900, '/');
                }

                header('location: HomePage_Customer.php');
            }
            elseif($flagMerchant)
            {
                if($_REQUEST['keep_me_signed_in'] && $_REQUEST['keep_me_signed_in'] == 'on')
                {
                    setcookie('userLogin', $userName, time() + (30 * 24 * 60 * 60), '/');
                    setcookie('userID', $userID, time() + (30 * 24 * 60 * 60), '/');
                    setcookie('userEmail', $email, time() + (30 * 24 * 60 * 60), '/');
                }
                else
                {
                    setcookie('userLogin', $userName, time() + 900, '/');
                    setcookie('userID', $userID, time() + 900, '/');
                    setcookie('userEmail', $email, time() + 900, '/');
                }

                header('location: HomePage_Merchant.php');
            }
            elseif($flagAdmin)
            {
                if($_REQUEST['keep_me_signed_in'] && $_REQUEST['keep_me_signed_in'] == 'on')
                {
                    setcookie('userLogin', $userName, time() + (30 * 24 * 60 * 60), '/');
                    setcookie('userID', $userID, time() + (30 * 24 * 60 * 60), '/');
                    setcookie('userEmail', $email, time() + (30 * 24 * 60 * 60), '/');
                }
                else
                {
                    setcookie('userLogin', $userName, time() + 900, '/');
                    setcookie('userID', $userID, time() + 900, '/');
                    setcookie('userEmail', $email, time() + 900, '/');
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