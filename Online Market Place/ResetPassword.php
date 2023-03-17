<?php

    session_start();

    if(isset($_COOKIE['resetpassword']))
    {   

        setcookie('carryEmail', $_COOKIE['resetpassword'], time() + 300, '/');

?>

<html>
    <head>
        <title>Reset Password</title>
    </head>

    <body>
        <h1 align="center"><b>EUPHORIA</b></h1>
        <form align="center" method="POST" action="ResetPassword_Check.php" enctype="">
            <fieldset>
                <legend>Reset Password</legend>
                <table align="center">
                    <tr align="left">
                        <th><label for="New Password">New Password*: </label></th>
                        <th>
                        <input type="password" name="newpassword" id="newpassword" value=""/>
                        </th>
                    </tr>

                    <tr align="left">
                        <th><label for="retypenewpassword">Retype New Password: </label></th>
                        <th>
                        <input type="password" name="retypenewpassword" id="retypenewpassword" value=""/>
                        </th>
                    </tr>
                </table>
                <br/>
                <input type="submit" name="confirm" value="Confirm"/> </br> </br>

                <?php
                    
                    if(isset($_REQUEST['msg']))
                    {
                        if($_REQUEST['msg'] == 'nullNewPassword')
                        {
                            echo("Please fillup the required field indicated with '*'.");
                        }
                        elseif($_REQUEST['msg'] == 'invalidPassword')
                        {
                            echo("1. Passwords should be at least 8 characters long.<br/>
                            2. Should contain atleast one symbol.<br/>
                            3. Should contain at least one number.<br/>
                            4. Password can not contain '|' charcter.");
                        }
                        elseif($_REQUEST['msg'] == 'newPassMismatch')
                        {
                            echo("Password Mismatch.");
                        }
                        elseif($_REQUEST['msg'] == 'passChangeFailed')
                        {
                            echo("Unable to change password.");
                        }
                    }

                ?>

            </fieldset>
        </form>
    </body>
</html>

<?php

    }
    else
    {
        session_destroy();
        setcookie('resetpassword', $_SESSION['email'], time() - 1, '/');
        header('location: ForgotPasswordPage.php');
    }

?>