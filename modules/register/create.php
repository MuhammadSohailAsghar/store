<?php
include '../../config/database.php';

// assigning values to variables
$formFName = $_POST['f_name'];
$formLName = $_POST['l_name'];
$formPhoneNo = $_POST['phone_no'];
$formEmail = $_POST['email'];
$formPassword = $_POST['password'];
$formConfPassword = $_POST['conf_password'];

// saving variable values to database
if (!empty($formFName) && !empty($formLName) && !empty($formPhoneNo) && !empty($formEmail) && !empty($formPassword) && !empty($formConfPassword)) {
    if ($formPassword == $formConfPassword) {
        $formValues = "INSERT INTO `login`(`first_name`, `last_name`,`phone_no`,`email`,`password`,`conf_password`) VALUES ('$formFName', '$formLName', '$formPhoneNo', '$formEmail', '$formPassword', '$formConfPassword') ";

        if (mysqli_query($conn, $formValues)) {
            // echo 'Data Saved';
            header('Location: http://localhost/store/page-login.php');
        } else {
            echo 'Error';
        }
    } else {
        echo 'Password does not match';
    }
} else {
    echo 'Input is empty';
}
