 <?php
session_start();


echo "<h1>Hello {$_SESSION['first_name']} {$_SESSION['last_name']}</h1>";


?>
<a href="register/logout.php">Logout</a>