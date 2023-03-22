<?php

    session_start();

    if(isset($_COOKIE['userID']) && isset($_COOKIE['userLogin']) && isset($_COOKIE['userEmail']))
    {

?>

<html>
  <head>
    <title> Change Password  </title>
  </head>

  <body align ="center">
    <h2><u> Change Password </u></h2>
    <form method="POST" action="ChangePassword.php" enctype="">
      Current Password: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="currentpassword" value="" /> <br>

      <br/>

      New Password: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="newpassword" value="" /> <br>

      <br/>

      Re-type New Password: <input type="text" name="retypenewpassword" value="" /> <br>

      <br/>

      <input type="submit" name="submit" value="Submit" />

      <br/><br/>

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

      </form>

      <p><a href="ForgotPasswordPage.php"> Forgot Password? </a> </p>

  </body>
</html>

<?php

    }
    else
    {
        header('location: LoginPage.php');
    }

?>