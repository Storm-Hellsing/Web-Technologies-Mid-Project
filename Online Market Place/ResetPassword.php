<?php

    session_start();

    if(isset($_COOKIE['otpCode']))
    {   

?>

<html>
    <head>
        <title>Reset Password</title>
    </head>

    <body>
        <h1 align="center"><b>EUPHORIA</b></h1>
        <form align="center" method="POST" action="Login_Check.php" enctype="">
            <fieldset>
                <legend>Reset Password</legend>
                <table align="center">
                    <tr align="left">
                        <th><label for="New Password">Password: </label></th>
                        <th>
                        <input type="password" name="newpassword" id="newpassword" value=""/>
                        </th>
                    </tr>

                    <tr align="left">
                        <th><label for="retypepassword">Retype Password: </label></th>
                        <th>
                        <input type="password" name="retypepassword" id="retypepassword" value=""/>
                        </th>
                    </tr>
                </table>
                <br/>
                <input type="submit" name="confirm" value="Confirm"/> </br> </br>
            </fieldset>
        </form>
    </body>
</html>

<?php

    }
    else
    {
        header('location: ForgotPasswordPage.php');
    }

?>