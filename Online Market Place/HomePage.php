<?php

    session_start();

    if(isset($_COOKIE['userLogin']))
    {

?>

<html>
    <head>
        <title>Home Page</title>
    </head>
        
    <body>

        <h1>Welcome Home! <?php echo($_COOKIE['userLogin'])?></h1>
        <h4 align="right"><a href='LogoutPage.php'>Logout</a></h4>
        
    </body>
</html>

<?php

    }
    else
    {
        header('location: LoginPage.php');
    }
    
?>