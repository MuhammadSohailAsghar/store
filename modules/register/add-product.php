<?php
include '../../config/database.php';

// assigning values to variables
$productNo = $_POST['item_no'];
$productName = $_POST['name'];
$productPrice = $_POST['price'];
$productQuantity = $_POST['quantity'];


// saving variable values to database


$productData = "INSERT INTO `products`(`item_no`, `name`,`price`,`quantity`) VALUES ('$productNo', '$productName', '$productPrice', '$productQuantity') ";

if (mysqli_query($conn, $productData)) {
    // echo 'Product Saved';
    header('Location: http://localhost/store/app-add-product.php');
} else {
    echo 'Error';
}
