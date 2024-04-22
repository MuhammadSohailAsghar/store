<?php
include '../../config/database.php';

$productQuerry = "SELECT * FROM `products` ";
$productData = mysqli_query($conn, $productsQuerry);
$product = mysqli_fetch_all($productData);
