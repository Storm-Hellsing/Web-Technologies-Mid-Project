<?php

    session_start();

    if(isset($_COOKIE['otpCode']))
    {

?>

<html>
    <head>
        <title>OTP Code</title>
    </head>

    <body>
        <h1 align="center"><b>Verification</b></h1>
        <form align="center" method="POST" action="OTPCode_Check.php" enctype="">
            <fieldset>
                <legend>OTP Channel</legend>
                <table align="center">
                    <tr align="left">
                        <th><label for="otp">Enter Code: </label></th>
                        <th>
                        <input type="text" name="otp" id="otp" value=""/>
                        </th>
                    </tr>
                </table>
                <br/>
                <input type="submit" name="confirm" value="Confirm"/> </br> </br>

                <?php

                    if(isset($_REQUEST['msg']))
                    {
                        if($_REQUEST['msg'] == 'emailSent')
                        {
                            echo("An OTP code has been sent to your emai address. Please check and enter the code here.");
                        }
                        elseif($_REQUEST['msg'] == 'invalidOTP')
                        {
                            echo("The OTP seems to be wrong. Please try again.");
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
        header('location: ForgotPasswordPage.php');
    }

?>