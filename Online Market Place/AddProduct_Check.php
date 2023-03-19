<?php

    session_start();
    require 'validations.php';

    if(isset($_COOKIE['userID']) && isset($_COOKIE['userLogin']) && isset($_REQUEST['add']) && isset($_FILES['image']))
    {
        $userID = $_COOKIE['userID'];
        $userName = $_COOKIE['userLogin'];
        $productType = $_REQUEST['productType'];
        $productName = $_REQUEST['produtname'];
        $price = $_REQUEST['price'];
        $quantity = $_REQUEST['quantity'];
        $productDescription = $_REQUEST['description'];

        if($productType == "" || $productName == "" || $price == "" || $quantity == "")
        {
            header('location: AddProduct.php?msg=nullInputs');
        }
        else
        {
            $productID = generateRandomProductCode();
            $filename = 'Database/ProductList.txt';
            $file = fopen($filename, 'a') or die('Unable to open file!');
            $text = "$userName|{$productID}|$productType|$productName|$price|$quantity|$productDescription\r\n";
            fwrite($file, $text) or die('Unable to write to file!');
            fclose($file);
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            
            $new_file_name = "{$userID}{$file_name}.{$file_type}";
            setcookie('productAdd', $productID, time() + 900, '/');
            // Move the uploaded file to a directory on the server
            move_uploaded_file($file_tmp, "ProductUploads/".$filename);
            header('location: AddProduct.php?msg=addSuccess');
        }
    }
    else
    {
        header('location: LoginPage.php');
    }

?>