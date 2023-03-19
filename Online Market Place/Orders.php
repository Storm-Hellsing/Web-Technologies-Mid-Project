<?php

    session_start();
    if(isset($_COOKIE['userLogin']) && isset($_COOKIE['userID']) && isset($_COOKIE['userEmail']))
    {

    $itemList = [

                    'r1'=>['sl'=>1, 'OrderID'=>"EUPH-SDKHJFGBASKDFBSDIHFVBH", 'Item'=>"Arduino Mega 2560 (Original)", 'Price'=>4000, 'Quantity'=>1, 'Total'=>4000, 'Action'=>"Issue Return"],
                    'r2'=>['sl'=>2, 'OrderID'=>"EUPH-dfgbksdfKJBIVYVHBsdfds", 'Item'=>"Piezoelectric Disk", 'Price'=>250, 'Quantity'=>6, 'Total'=>1500, 'Action'=>"Issue Return"],
                    'r3'=>['sl'=>3, 'OrderID'=>"EUPH-dfgbasdlIVBILVLviklvik", 'Item'=>"Red LED", 'Price'=>2, 'Quantity'=>5, 'Total'=>10, 'Action'=>"Issue Return"],
                    'r4'=>['sl'=>4, 'OrderID'=>"EUPH-redfgsdfgbkljBUSEDFQWD", 'Item'=>"Green LED",  'Price'=>2, 'Quantity'=>5, 'Total'=>10, 'Action'=>"Issue Return"],
                    'r5'=>['sl'=>5, 'OrderID'=>"EUPH-sdfsdkjbUGBIASDURFUIUK", 'Item'=>"Bread Board", 'Price'=>150, 'Quantity'=>1, 'Total'=>150, 'Action'=>"Issue Return"],
                    'r6'=>['sl'=>6, 'OrderID'=>"EUPH-5234534tfgedrhsfgdgaer", 'Item'=>"Jumber Wires", 'Price'=>2, 'Quantity'=>10, 'Total'=>20, 'Action'=>"Issue Return"],
                    'r7'=>['sl'=>7, 'OrderID'=>"EUPH-345345kjbkljasdbfHDBSF", 'Item'=>"Rechargeable AA batteries", 'Price'=>50, 'Quantity'=>4, 'Total'=>200, 'Action'=>"Issue Return"],

                ];

?>

<html>
    <head>
        <title>Cart</title>
    </head>
        
    <body>
        <form align="center" method="POST" action="PaymentOptions.php" enctype="">
            <h1 align="center">My Cart</h1>
            <label for="search">Search Items: </label>
            <input type="text" name="search" id="search" value=""/> 
            <br/> <br/>
            <table align="center" border="1" width="1500px">
                <tr>
                    <th width="100px">Serial No:</th>
                    <th>Order ID</th>
                    <th>Items</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
                
               
                    <?php

                        foreach($itemList as $item)
                        {
                            
                    ?>
                <tr align="center">
                    <td><?php echo $item['sl'];?></td>
                    <td><?php echo $item['OrderID'];?></td>
                    <td><?php echo $item['Item'];?></td>
                    <td><?php echo $item['Price'];?></td>
                    <td><?php echo $item['Quantity'];?></td>
                    <td><?php echo $item['Total'];?></td>
                    <td><a href="IssueReturn.php"><?php echo $item['Action'];?></a></td>

                    <?php

                        }

                    ?>
                </tr>
            </table>
            </br> </br>
            <input type="submit" name="proceedCheckOut" value="Proceed to Check Out"/>
        </form>
    </body>
</html>

<?php

    }
    else
    {
        header('location: HomePage_Customer.php');
    }

?>