<?php

    if(isset($_COOKIE['userID']) && isset($_COOKIE['userLogin']) && isset($_COOKIE['userEmail']))
    {
        session_start();
    

?>



<html>
  <head>
    <title> Wish List  </title>
  </head>

  <body>

  <h2 align="center"><u> Wish List </u> </h2>

  <hr/>

  <br/> <br/>

  <form align="center">

  <table align="center" width="800px"" width="500px">

    <tr>
      <td><a href="WishList.php"> See all </a> <br></td>
    </tr>

  </table>

  </form>

    <table border="2" align="center" width="800px"" width="500px">
      <tr>
        <th> Product Name </th>
        <th> Model </th>
        <th> Price </th>
      </tr>

    <tr>
      <td> 	Gigabyte G27FC 27 Inch Curved 165 Hz Adaptive-Sync VA Gaming Monitor </td>
      <td> G27FC </td>
      <td> 29,000 </td>
    </tr>

    <tr>
      <td> Corsair K95 RGB PLATINUM Mechanical Gaming Keyboard (CHERRY MX Speed) -Gunmetal </td>
      <td> K95 RGB PLATINUM </td>
      <td> 12,500 </td>
    </tr>

    <tr>
      <td> 	ZOTAC GAMING GeForce RTX 3060 Ti Twin Edge 8GB Graphics Card </td>
      <td> RTX 3060 Ti Twin Edge </td>
      <td> 52,500 </td>
    </tr>

    <tr>
      <td> CORSAIR T1 RACE GAMING CHAIR (BLACK-RED) </td>
      <td> T1 Race </td>
      <td> 22,500 </td>
    </tr>

    <tr>
      <td> 	Lenovo IdeaPad 1 15AMN7 15.6 Inch Full HD Display Ryzen 5 7520U 8GB DDR5 5500MHz RAM 256GB SSD Laptop </td>
      <td> IdeaPad 1 15AMN7 </td>
      <td> 60,000 </td>
    </tr>



  </table>


  </body>
</html>


<?php

    }
    else
    {
        header('location: HomePage_Customer.php');
    }

?>