<?php
include '../../config/database.php';

// assigning values to variables
$formEmail = $_POST['email'];
$formPassword = $_POST['password'];

// saving variable values to database
if (!empty($formEmail) && !empty($formPassword)) {

    $match = "SELECT * FROM `login` WHERE `email`='$formEmail' AND `password`='$formPassword'";
    $result = mysqli_query($conn, $match);

    $dataValues = mysqli_fetch_assoc($result);

    if ($dataValues) {
        // Start the session
        session_start();

        // Store Data In Session
        $_SESSION["id"] = $dataValues['id'];
        $_SESSION["first_name"] = $dataValues['first_name'];
        $_SESSION["last_name"] = $dataValues['last_name'];
        $_SESSION["phone_no"] = $dataValues['phone_no'];
        $_SESSION["email"] = $dataValues['email'];

        header("location:http://localhost/store/index.php");
    } else {
        echo 'Error';
    }
} else {
    echo 'Input is empty';
}
