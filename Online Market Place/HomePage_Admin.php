<?php

    session_start();

    if(isset($_COOKIE['userLogin']) && isset($_COOKIE['userID']))
    { 

?>

<html>
    <head>
        <title>Home Page</title>
    </head>
        
    <body>
        <form>
            <h1 align="center">Greetings, <?php echo($_COOKIE['userLogin'])?></h1>
            <h4 align="right"><a href='LogoutPage.php'>Logout</a></h4>
            <label for="search">Search: </label>
            <input type="text" name="search" id="search" value=""/> 
            <br/> <br/>
            <table align="center">
                <tr>
                    <th width="350px">Annoucement</th>
                    <th width="350px">Support Requests</th>
                    <th width="350px">Settings</th>
                    <th width="350px"><a href="ViewUsers.php" target="_blank">Users</a></th>
                    <th width="350px">Profile</th>
                </tr>
            </table>
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