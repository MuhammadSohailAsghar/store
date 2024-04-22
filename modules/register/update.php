<?php
include '../../config/database.php';

// assigning values to variables
$formId = $_POST['id'];
$formFName = $_POST['f_name'];
$formLName = $_POST['l_name'];
$formPhoneNo = $_POST['phone_no'];
$formEmail = $_POST['email'];


// Updating data

$update = "UPDATE `login` SET `first_name` = '$formFName', `last_name` = '$formLName', `phone_no` = '$formPhoneNo', `email` = '$formEmail' WHERE `id` = '$formId'";
$formUpdate = mysqli_query($conn, $update);

if ($formUpdate) {
    header('Location: http://localhost/store/page-login.php');
} else {
    echo 'Error';
}
