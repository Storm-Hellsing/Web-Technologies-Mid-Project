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
                    <th width="350px"><a href="Orders.php">My Orders</a></th>
                    <th width="350px"><a href="WishList.php">My Wish List</a></th>
                    <th width="350px"><a href="Cart_Management.php">Cart</a></th>
                    <th width="350px"><a href="Support_Customer.php">Support</a></th>
                    <th width="350px"><a href="Settings.php">Settings</a></th>
                    <th width="350px"><a href='MerchantRegistrationPage.php' target="_blank">Sell with Euphoria</a></th>
                    <th width="350px"><a href="UserProfileInfo.php">Profile</a></th>
                </tr>
            </table>

            <br/> <br/>
            <br/> <br/>
            
            <table align="left">
                <tr>
                    <th><a href="ProductView.php"><img src="ProductUploads/EM-7018404368360,Arduino Mega 2560.jpg" width = "350px"></a></th>
                </tr>

                <tr>
                    <th align="left">
                        Arduino Mega 2560 <br/>
                        Price: 1000 <br/>
                        Description: Original Microcontroller
                    </th>
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