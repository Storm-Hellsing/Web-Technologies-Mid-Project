<?php

    session_start();

    if(isset($_COOKIE['userID']) && isset($_COOKIE['userLogin']) && isset($_COOKIE['userEmail']))
    {

?>

<html>
    <head>
        <title>Product View</title>
    </head>
        
    <body>
        <form align="center" method="POST" action="AddtoCart_Check.php" enctype="multipart/form-data">
            <h1 align="center">Product View</h1>
            <table align="center">
                <tr>
                    <th><img src="ProductUploads/EM-7018404368360,Arduino Mega 2560.jpg" width = "350px"></th>
                </tr>

                <tr align="left">
                    <th><label for="product">Arduino Meaga 2560</label></th>
                </tr>
                <tr align="left">
                    <th><label for="price">Price: TK 4000</label></th>
                </tr>
                <tr align="left">
                    <th><label for="quantity">Quantity:</label> <input type="number" name="quantity" id="quantity" value=""></th>
                </tr>

                <tr align="left">
                    <th><label for="description">Product Description: Original Microcontroller</label></th>
                </tr>

                <tr align="center">
                    <th><a href="BulkOrder.php">Request Bulk Order</a></th>
                </tr>
            </table>
            <br/> <br/>
            &nbsp
            <input type="submit" name="addtocart" value="Add to Cart"/>
            <hr>
            <h1 align="center">Product Re-views</h1>

            <table align="center">
                <tr>
                    <th> <label for="review">Review:</label></th> 
                    <th><textarea name="review" id="review" cols="30" rows="5"></textarea></th>
                </tr>
                

                <tr align="left">
                    <th><label for="image">Upload Image:</label></th>
                    <td><input type="file" name="image" id="image" accept="image/jpg, image/jpeg, image/png"></td>
                </tr>
            </table>
            <br/> <br/>
            <input type="submit" name="submit" value="Submit Review"/>
            
            <?php

            if(isset($_REQUEST['msg']))
            {
                if($_REQUEST['msg'] == 'nullInputs')
                {
                    echo("Please provide Quantity");
                }
                elseif($_REQUEST['msg'] == 'addedtoCart')
                {
                    echo("Product has been added to your cart.<br/> <br/>");
                    echo "<a href='Cart_Management.php'>View Cart</a><br/>";
                    echo "or,<br/>";
                    echo "<a href='HomePage_Customer.php'>Continue Shopping</a><br/>";
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
        header('location: LoginPage.php');
    }
    
?>