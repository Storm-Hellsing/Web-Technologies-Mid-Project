<?php

    session_start();

    if(isset($_COOKIE['userID']) && isset($_COOKIE['userLogin']) && isset($_COOKIE['userEmail']))
    {

?>

<html>
  <head>
    <title> Account Settings  </title>
  </head>

  <body align="center">
    <fieldset>
      <legend align="center"> Settings</legend>
      <br/> <br/>
      <a href="ChangePassword.php"> Change Password </a>
      <br/>
      <br/>
      <a href="ChangeEmail.php"> Change E-mail </a> 
      <br/>
      <br/>

    </fieldset>
  </body>
</html>

<?php

    }
    else
    {
        header('location: LoginPage.php');
    }

?>