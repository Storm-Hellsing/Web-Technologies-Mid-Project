<?php

    session_start();

    if(isset($_COOKIE['userID']) && isset($_COOKIE['userLogin']) && isset($_COOKIE['userEmail']))
    {

?>

<html>
    <head>
      <title> Bulk Order  </title>
    </head>

    <body>

      <h2 align="center"> Bulk Order </h2>

      <hr/>

      <form method="POST" action="PaymentOptions.php" enctype="">

        <table align="center">
            <tr>
              <th><img src="ProductUploads/EM-7018404368360,Arduino Mega 2560.jpg" width = "350px"></th>
            </tr>

            <br/>

            <tr align="left">
              <th><label for="product">Arduino Meaga 2560</label></th>
            </tr>

            <tr align="left">
              <th><label for="price">Price: TK 4000</label></th>
            </tr>
            
            <tr align="left">
              <th>Quantity:*
                  <select name="quantity">
                  <option value="">Select Quantity</option>
                  <option value="20">20</option>
                  <option value="40">40</option>
                  <option value="60">60</option>
                  <option value="80">80</option>
                  <option value="100">100</option>
                  </select>
              </th>
            </tr>

            <tr align="left">
                <th><label for="description">Product Description: Original Microcontroller</label></th>
            </tr>
        </table>

        <br/>

        <p align="center"> <input type="submit" name="submit" value="Proceed to check out"/> </p>
      </form>
      </table>
    </body>
</html>

<?php

    }
    else
    {
        header('location: HomePage_Merchant.php');
    }
    
?>