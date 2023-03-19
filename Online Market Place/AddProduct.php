<?php

    session_start();

    if(isset($_COOKIE['userLogin']))
    {

?>

<html>
    <head>
        <title>Add Product</title>
    </head>
        
    <body>
        <form align="center" method="POST" action="AddProduct_Check.php" enctype="multipart/form-data">
            <h1 align="center">Add Product</h1>
            <table align="center">
                <tr align="left">
                    <th>Product Type:*</th>
                    <th>
                        <select name="productType">
                            <option value="">Select Product Type</option>
                            <option value="Electronics">Electronics</option>
                            <option value="Clothing">Clothing</option>
                            <option value="Gadgets and Accessories">Gadgets and Accessories</option>
                        </select>
                    </th>
                </tr>

                <tr align="left">
                    <th><label for="produtname">Product Name:*</label></th>
                    <th><input type="text" name="produtname" id="produtname" value=""/></th>
                </tr>

                <tr align="left">
                    <th><label for="price">Price (TK):*</label></th>
                    <th><input type="number" name="price" id="price" value=""/></th>
                </tr>

                <tr align="left">
                    <th><label for="quantity">Quantity:*</label></th>
                    <th><input type="number" name="quantity" id="quantity" value=""/></th>
                </tr>

                <tr align="left">
                    <th><label for="description">Product Description:</label></th>
                    <th><textarea name="description" id="description" cols="30" rows="5"></textarea></th>
                </tr>

                <tr align="left">
                    <th><label for="image">Upload Image:*</label></th>
                    <th><input type="file" name="image" id="image" accept="image/jpg, image/jpeg, image/png"></th>
                </tr>
            </table>
            <br/> <br/>
            <button>Clear</button>
            &nbsp
            <input type="submit" name="add" value="Add"/>
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