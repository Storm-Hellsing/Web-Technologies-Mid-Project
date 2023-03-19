<?php

    if(isset($_COOKIE['userID']) && isset($_COOKIE['userLogin']) && isset($_REQUEST['addtocart']))
    {
        $quantity = $_REQUEST['quantity'];

        if($quantity == "")
        {
            header('location: ProductView.php?msg=nullInputs');
        }
        else
        {
            header('location: ProductView.php?msg=addedtoCart');
        }
    }
    else
    {
        header('location: ProductView.php');
    }

?>