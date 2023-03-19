<?php

    session_start();

    if(isset($_COOKIE['userID']) && isset($_COOKIE['userLogin']) && isset($_COOKIE['userLogin']))
    {
        setcookie('viewProductList', 'true', time() + 900, '/');
        $userName = $_COOKIE['userLogin'];
        $userID = $_COOKIE['userID'];
        // Open the file for reading
        $file = fopen('Database/ProductList.txt', 'r');
        $count = 1;
        $productCount = 0;

        // Initialize the user data array
        $userData = [];

        // Loop through the file and store the user data in an array
        while(!feof($file))
        {
            $data = fgets($file);
            $userData[] = explode('|', $data);
        }

        // Close the file
        fclose($file);

?>

<html>
    <head>
        <title>Product Manager</title>
    </head>
        
    <body>
        <form>
            <h1 align="center">Product Manager</h1>
            <table align="center">
                <tr>
                    <th width="350px"><a href="AddProduct.php">Add Product</a></th>
                    <th width="350px">Upate Existing Products</th>
                </tr>
            </table>
            <h3 align="center"><u>Your Product List</u></h3>
            <table align="center" border="1" width="1500px">
                <tr>
                    <th width="100px">Serial No:</th>
                    <th>Product ID</th>
                    <th>Product</th>
                    <th>Product Type</th>
                    <th>Price</th>
                    <th>Available Quantity</th>
                    <th>Description</th>
                    <th>Product Image</th>
                    <th>Action</th>
                </tr>
                
               
                <?php 
                    
                    foreach($userData as $user): 
                    if(trim($user[0]) === $userID)
                    { //print the table excluding admin info

                ?>
                <tr align="center">
                    <td><?php echo $count ?></td>
                    <td><?php echo $user[2]; ?></td>
                    <td><?php echo $user[4]; ?></td>
                    <td><?php echo $user[3]; ?></td>
                    <td><?php echo $user[5]; ?></td>
                    <td><?php echo $user[6]; ?></td>
                    <td><?php echo $user[7]; ?></td>
                    <td>
                    <?php 
                    
                    $files = glob("ProductUploads/{$userID}*");
                    if(count($files) > 0) 
                    {
                        echo '<img src="'.$files[$productCount].'" width="100px">';
                    }
                    else
                    {
                        echo("Your Inventory is empty");
                    } 
                        
                    ?>
                    </td>
                    <td><u>Remove</u></td>
                </tr>
                <?php 
                    $count++;
                    $productCount++;
                    }
                endforeach; 
                ?>
            </table>
        </form>
    </body>
</html>

<?php

    }
    else
    {
        header('location: HomePage_Merchant.php');
    }
    
?>