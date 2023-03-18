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
        <form>
            <h1 align="center">Greetings, <?php echo($_COOKIE['userLogin'])?></h1>
            <h4 align="right"><a href='LogoutPage.php'>Logout</a></h4>
            <label for="search">Search: </label>
            <input type="text" name="search" id="search" value=""/> 
            <br/> <br/>
            <table align="center" width="1500px">
                <tr>
                    <th>My Products</th>
                    <th>My Orders</th>
                    <th><a href="Cart_Management.php?validate=true">Cart</a></th>
                    <th>Support</th>
                    <th>Settings</th>
                    <th>Profile</th>
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