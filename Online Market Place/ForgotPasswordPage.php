<html>
    <head>
        <title>Forgot Password</title>
    </head>

    <body>
        <h1 align="center"><b>EUPHORIA</b></h1>
        <form align="center" method="POST" action="ForgotPassword_Check.php" enctype="">
            <fieldset>
                <legend>Fogot Password Procedure</legend>
                <table align="center">
                    <tr align="left">
                        <th><label for="email">Email: </label></th>
                        <th>
                        <input type="text" name="email" id="email" value=""/>
                        </th>
                    </tr>
                </table>
                <br/>
                <input type="submit" name="send" value="Send"/> </br> </br>
                <a href='LoginPage.php'>Sign in, Instead!</a>
                <br/> <br/>

                <?php
                    
                    if(isset($_REQUEST['msg']))
                    {
                        if($_REQUEST['msg'] == 'emailBlank')
                        {
                            echo("Please provide an email.");
                        }
                        elseif($_REQUEST['msg'] == 'invalidEmail')
                        {
                            echo("Email not found.");
                        }
                        elseif($_REQUEST['msg'] == 'emailSentError')
                        {
                            echo("Unable to send email. Please Try again later");
                        }
                    }
                ?>
            </fieldset>
        </form>
    </body>
</html>