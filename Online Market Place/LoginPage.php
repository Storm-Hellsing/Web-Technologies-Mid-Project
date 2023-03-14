<html>
    <head>
        <title>Login</title>
    </head>

    <body>
        <h1 align="center"><b>EUPHORIA</b></h1>
        <form align="center" method="POST" action="Login_Check.php" enctype="">
            <fieldset>
                <legend>Login</legend>
                <table align="center">
                    <tr align="left">
                        <th><label for="email">Email: </label></th>
                        <th>
                        <input type="text" name="email" id="email" value=""/>
                        </th>
                    </tr>

                    <tr align="left">
                        <th><label for="password">Password: </label></th>
                        <th>
                        <input type="password" name="password" id="password" value=""/>
                        </th>
                    </tr>
                </table>
                <br/>
                <input type="submit" name="signin" value="Sign In"/> </br> </br>
                <input type="checkbox" name="keepmesignedin" value=""/> Keep me signed in. </br> </br>
                <a href='SignUpPage.php'>Don't have an account? Sign Up Now!</a>
                <br/> <br/>

                <?php 
                
                    session_start();
                    //print_r($_REQUEST);
                    if(isset($_REQUEST['msg']))
                    {
                        if($_REQUEST['msg'] == 'error')
                        {
                            echo "Username or Password Might be wrong.";
                        }
                    }
                ?>

            </fieldset>
        </form>
    </body>
</html>