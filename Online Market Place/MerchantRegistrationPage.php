<html>
    <head>
        <title>Sign Up</title>
    </head>

    <body>
        <h1 align="center"><b>Extend you Business</b></h1>
        <form align="center" method="POST" action="MerchantRegistrationPage_Check.php" enctype="">
            <fieldset>
                <legend>Business Account Registration</legend>
                <table align="center">
                    <tr align="left">
                        <th><label for="businessname">Business Name:* </label></th>
                        <th>
                        <input type="text" name="businessname" id="businessname" value=""/>
                        </th>
                    </tr>

                    <tr align="left">
                        <th><label for="businesslink">Business Website/Link:* </label></th>
                        <th>
                        <input type="text" name="businesslink" id="businesslink" value=""/>
                        </th>
                    </tr>

                    <tr align="left">
                        <th><label for="username">Your name:* </label></th>
                        <th>
                        <input type="text" name="username" id="username" value=""/>
                        </th>
                    </tr>

                    <tr align="left">
                        <th><label for="email">Email:* </label></th>
                        <th>
                        <input type="email" name="email" id="email" value=""/>
                        </th>
                    </tr>

                    <tr align="left">
                        <th><label for="password">Password:* </label></th>
                        <th>
                        <input type="password" name="password" id="password" value=""/>
                        </th>
                    </tr>

                    <tr align="left">
                        <th><label for="retypePassword">Retype Password:* </label></th>
                        <th>
                        <input type="password" name="retypePassword" id="retypePassword" value=""/>
                        </th>
                    </tr>
                </table>
                <br/>
                <h5 align="center">Note: By clicking Signup You agree to your <a href="PrivacyPolicy.php" target="_blank">Privacy policies</a> || <a href="TermsConditions.php">Terms and Conditons</a></h5>
                <input type="submit" name="signup" value="Sign Up"/></br> </br>
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
                        elseif($_REQUEST['msg'] == 'invalidBusinessName')
                        {
                            echo("Business Name already exists.");
                        }
                        elseif($_REQUEST['msg'] == 'invalidURL')
                        {
                            echo("Invalid Link/URL.");
                        }
                        elseif($_REQUEST['msg'] == 'invalidEmail')
                        {
                            echo("Email already exists.");
                        }
                        elseif($_REQUEST['msg'] == 'invalidPasswd')
                        {
                            echo("1. Passwords should be at least 8 characters long.<br/>
                            2. Should contain atleast one symbol.<br/>
                            3. Should contain at least one number.
                            4. Password can not contain '|' charcter.");
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