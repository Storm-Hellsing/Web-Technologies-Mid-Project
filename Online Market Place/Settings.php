<?php

    session_start();

    if(isset($_COOKIE['userID']) && isset($_COOKIE['userLogin']) && isset($_COOKIE['userEmail']))
    {

?>

<html>
  <head>
    <title> Settings  </title>
  </head>

  <body align="center">
    <fieldset>
      <legend align="center"> Settings</legend>
      <br/>
      <a href="AccountSettings.php"> Account Setting </a>
      <br/>
      <br/>

      <a href="PrivacyPolicy.php"> Privacy Policy </a>
      <br/>
      <br/>

      <a href="TermsConditions.php"> Terms & Conditions </a>

      <h4 align="right"><a href='LogoutPage.php'>Logout</a></h4>
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