<?php

    session_start();

    if(isset($_COOKIE['userID']) && isset($_COOKIE['userLogin']) && isset($_REQUEST['validate']))
    {

?>

<html>
    <head>
        <title>Visa Payment</title>
    </head>
        
    <body>
        <form align="center" method="POST" action="PaymentCheck_Visa" enctype="">
            <h1 align="center">Confirm Order</h1>
            <table align="center">

                <tr align="left">
                    <th><label for="orderID">OrderID:</label></th>
                    <th>EUPH-dfsdflsldf12312dASEF</th>
                </tr>

                <tr align="left">
                    <th><label for="cardno">Card No:*</label></th>
                    <th><input type="number" name="cardno" id="cardno" value=""/></th>
                </tr>

                <tr align="left">
                    <th><label for="cvc">CVC:*</label></th>
                    <th><input type="number" name="cvc" id="cvc" value=""/></th>
                </tr>

                <tr align="left">
                    <th><label for="expiry">Expiry Date:*</label></th>
                    <th><input type="date" name="expiry" id="expiry" value=""/></th>
                </tr>

                <tr align="left">
                    <th><label for="name">Your Name:</label></th>
                    <th><input type="text" name="name" id="name" value=""/></th>
                </tr>

                <tr align="left">
                    <th><label for="address">Address:</label></th>
                    <th><textarea name="address" id="address" cols="30" rows="5"></textarea></th>
                </tr>
            </table>
            <br/> <br/>
            &nbsp
            <input type="submit" name="confirm" value="Place Order"/>
            <br/> <br/>

            <?php

                if(isset($_REQUEST['msg']))
                {
                    if($_REQUEST['msg'] == 'nullInputs')
                    {
                        echo("Please fillup the requried fields marked with '*'.");
                    }
                    elseif($_REQUEST['msg'] == 'addSuccess')
                    {
                        echo("Product Added Successfully to your Inventory.");
                    }
                    else
                    {
                        echo("Operation Failed.");
                    }
                }

            ?>
        </form>
    </body>
</html>

<?php

    }
    else
    {
        header('location: ProductManagement.php');
    }
    
?>