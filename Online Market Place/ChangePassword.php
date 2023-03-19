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
    <form>
      Current Password: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="name" value="" /> <br>

      <br/>

      New Password: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="name" value="" /> <br>

      <br/>

      Re-type New Password: <input type="text" name="name" value="" /> <br>

      <br/>

      <input type="submit" name="" value="Submit" />

      </form>

      <p><a href="ForgotPassword.php"> Forgot Password? </a> </p>

  </body>
</html>

<?php

    }
    else
    {
        header('location: LoginPage.php');
    }

?>