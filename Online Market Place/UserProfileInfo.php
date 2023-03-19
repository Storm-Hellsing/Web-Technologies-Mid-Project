<?php

    session_start();

    if(isset($_COOKIE['userID']) && isset($_COOKIE['userLogin']) && isset($_COOKIE['userEmail']))
    {
        $userID = $_COOKIE['userID'];
        $userEmail = $_COOKIE['userEmail'];
        $userName = $_COOKIE['userLogin'];
?>
    
<html>
    <head>
        <title> Basic user profile </title>
    </head>

    <h1 align="center">Profile</h1>
    <body>
        <table align="center">

            <tr align="left">
                <th>User ID:</th>
                <th><?php echo $userID; ?></th>
                <th rowspan="3" width="250px" align="right"><img src="ProjectEssentials/Profile Icon.png" width ="100px"></th>
            </tr>

            <tr align="left">
                <th>User Name:</th>
                <th><?php echo $userName; ?></th>
            </tr>

            <tr align="left">
                <th>Email:</th>
                <th><?php echo $userEmail; ?></th>
            </tr>

            <tr align="left">
                <th colspan="3" ><input type="file" name="profilepic" id="profilepic"></th>
            </tr>

        </table>
    </body>
</html>

<?php

    }
    else
    {
        header('location: LoginPage.php');
    }
    
?>