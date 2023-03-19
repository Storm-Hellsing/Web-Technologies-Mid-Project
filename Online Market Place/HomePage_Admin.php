<?php

    session_start();

    if(isset($_COOKIE['userLogin']) && isset($_COOKIE['userID']) && isset($_COOKIE['userEmail']))
    { 

?>

<html>
    <head>
        <title>Home Page</title>
    </head>
        
    <body>
        <form>
            <h1 align="center">Greetings, <?php echo($_COOKIE['userLogin'])?></h1>
            <p align="right"><a href="Notifications.php"><img src="ProjectEssentials/Notification Logo.png" width="25px"></a></p>
            <label for="search">Search: </label>
            <input type="text" name="search" id="search" value=""/> 
            <br/> <br/>
            <table align="center">
                <tr>
                    <th width="350px">Annoucement</th>
                    <th width="350px">Support Requests</th>
                    <th><a href="Settings.php">Settings</a></th>
                    <th width="350px"><a href="ViewUsers.php" target="_blank">Users</a></th>
                    <th width="350px"><a href="UserProfileInfo.php">Profile</a></th>
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