<?php

    session_start();
    if(isset($_COOKIE['userLogin']) && isset($_COOKIE['userID']) && isset($_COOKIE['userEmail']))
    {

?>


<html>
  <head>
    <title> Return Product  </title>
  </head>

  <body>
    <fieldset>  
      <h2 align="center"> <u> Return Product </u> </h2>
      <hr/>

      <u><h3 align="left"> Input the Order Details: </h3></u>

        <table align="center">
            <tr align="left">
                <th>Product Name: </th>
                <th>
                <input type="text" name="Productname" id="Productname" value="">
                </th>
            </tr>

            <tr align="left">
                <th>Order ID:</th>
                <th>
                <input type="text" name="orderid" id="orderid" value="">
                </th>
            </tr>

            <tr align="left">
                <th>Buying Price:</th>
                <th>
                  <input type="number" name="buyingprice" id="buyingprice" value="">
                </th>
            </tr>

            <tr align="left">
                <th>Date of Order:</th>
                <th>
                  <input type="date" name="DoO" value="" />
                </th>
            </tr>

            <tr align="left">
              <th>Explain Return Reason:</th> <br/>
              <th>
              <textarea rows="8" cols="50"></textarea> <br/>
              </th>
          </tr>

        </table>
  
        <p align="center"> <input type="submit" name="" value="Submit Return Request" /> </p> <br/>
        <br/>
  
    </table>    
    </fieldset>
  </body>
</html>

<?php

    }
    else
    {
        header('location: HomePage_Customer.php');
    }

?>