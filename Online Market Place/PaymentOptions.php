<?php

    session_start();

    if(isset($_COOKIE['userID']) && isset($_COOKIE['userLogin']) && isset($_COOKIE['userEmail']))
    {


?>

<html>
    <head>
        <title>Payment Options</title>
    </head>
        
    <body>
        <form>
            <h1 align="center">Payment Options</h1>
            <table align="center">
                <tr>
                    <th><a href="CheckOut_Bkash.php"><img src="ProjectEssentials/Bkash Logo.png" height="350px" width = "350px"></a></th>
                    <th><a href="CheckOut_Visa.php?validate=true"><img src="ProjectEssentials/Visa Logo.png" height="350px" width = "350px"></a></th>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php

    }
    else
    {
        header('location: Cart_Management.php');
    }
    
?>