<?php
include '../../config/database.php';

// assigning values to variables
$formId = $_POST['id'];
$formCPass = $_POST['current_password'];
$formNPass = $_POST['new_password'];
$formConfPass = $_POST['conf_new_password'];

// saving variable values to database


// $match = "SELECT * FROM `login` WHERE `email`='$formEmail' AND `password`='$formPassword'";
// $result = mysqli_query($conn, $match);

// $dataValues = mysqli_fetch_assoc($result);

if ($formNPass === $formConfPass) {
    $update = "UPDATE `login` SET `password` = '$formNPass', `conf_password` = '$formNPass' WHERE `id` = '$formId' AND `password` = '$formCPass'";
    $passwordUpdate = mysqli_query($conn, $update);

    header("location:http://localhost/store/index.php");
} else {
    echo 'New password does not match';
}
