<?php

    session_start();

    if(isset($_COOKIE['userID']) && isset($_COOKIE['userLogin']) && isset($_COOKIE['userEmail']))
    {
        $userName = $_COOKIE['userLogin'];
        $userEmail = $_COOKIE['userEmail'];

?>

<html>
    <head>
        <title>Merchant Support</title>
    </head>
        
    <body>
        <form align="center" method="POST" action="AddProduct_Check.php" enctype="multipart/form-data">
            <h1 align="center">Merchant Support</h1>
            <table align="center">
                <tr align="left">
                    <th>Issue Type*</th>
                    <th>
                        <select name="issuetype">
                            <option value="">Select Issue Type</option>
                            <option value="Product Not Received">Product Not Received</option>
                            <option value="Damaged Product">Damaged Product</option>
                            <option value="Return Request">Return Request</option>
                            <option value="Others">Others</option>
                        </select>
                    </th>
                </tr>

                <tr align="left">
                    <th>User Name:* </th>
                    <th><?php echo $userName; ?></th>
                </tr>

                <tr align="left">
                    <th>User Email:*</th>
                    <th><?php echo $userEmail; ?></th>
                </tr>

                <tr align="left">
                    <th><label for="orderID">Order ID:*</label></th>
                    <th><input type="text" name="orderID" id="orderID" value=""/></th>
                </tr>

                <tr align="left">
                    <th><label for="subject">Subject:*</label></th>
                    <th><input type="text" name="subject" id="subject" value=""/></th>
                </tr>

                <tr align="left">
                    <th><label for="description">Tell us in Detail:*</label></th>
                    <th><textarea name="description" id="description" cols="30" rows="5"></textarea></th>
                </tr>

                <tr align="left">
                    <th><label for="image">Upload Image:*</label></th>
                    <th><input type="file" name="image" id="image" accept="image/jpg, image/jpeg, image/png"></th>
                </tr>
            </table>
            <br/> <br/>
            &nbsp
            <input type="submit" name="submit" value="Submit"/>
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