<html>
    <head>
        <title>Sign Up</title>
    </head>

    <body>
        <h1 align="center"><b>EUPHORIA</b></h1>
        <form align="center" method="POST" action="SignUp_Check.php" enctype="">
            <fieldset>
                <legend>Account Registration</legend>
                <table align="center">
                    <tr align="left">
                        <th><label for="username">User Name:* </label></th>
                        <th>
                        <input type="text" name="username" id="username" value="">
                        </th>
                    </tr>

                    <tr align="left">
                        <th><label for="email">Email:* </label></th>
                        <th>
                        <input type="email" name="email" id="email" value="">
                        </th>
                    </tr>

                    <tr align="left">
                        <th><label for="password">Password:* </label></th>
                        <th>
                        <input type="password" name="password" id="password" value="">
                        </th>
                    </tr>

                    <tr align="left">
                        <th><label for="retypePassword">Retype Password:* </label></th>
                        <th>
                        <input type="password" name="retypePassword" id="retypePassword" value="">
                        </th>
                    </tr>
                </table>
                <br/>
                <button >Clear</button>
                &nbsp 
                <input type="submit" name="signup" value="Sign Up"></br> </br>
                <a href='LoginPage.php'>Already have an account? Sign In!</a>
                <br/> <br/>

                <?php

                    session_start();

                    if(isset($_REQUEST['msg']))
                    {
                        if($_REQUEST['msg'] == 'nullInputs')
                        {
                            echo("Please fillup the required fields marked with '*'.");
                        }
                        elseif($_REQUEST['msg'] == 'invalidPasswd')
                        {
                            echo("1. Passwords should be at least 8 characters long.<br/>
                            2. Should contain atleast one symbol.<br/>
                            3. Should contain at least one number.");
                        }
                        elseif($_REQUEST['msg'] == 'passwdMismatch')
                        {
                            echo("Password Mismatch.");
                        }
                    }
                ?>
            </fieldset>
        </form>
    </body>
</html>