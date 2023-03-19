<?php

    session_start();

    if(isset($_COOKIE['userID']) && isset($_COOKIE['userLogin']) && isset($_COOKIE['userEmail']))
    {

?>

<html>
  <head>
    <title> Change E-mail  </title>
  </head>

  <body align = "center">
    <h2><u> Change E-mail </u></h2>
    <form>
      Current E-mail: <input type="email" name="email" value="" /> <br>

      <br/>

      New E-mail: &nbsp&nbsp&nbsp <input type="email" name="email" value="" /> <br>

      <br/>

      Password: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="name" value="" /> <br>

      <br/>

      <input type="submit" name="" value="Submit" />

      </form>

  </body>
</html>

<?php

    }
    else
    {
        header('location: LoginPage.php');
    }

?>