<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <form action="register/create.php" method="POST">
        <div class="box">
            <h1 class="heading">Sign Up</h1>

            <input type="text" class="input" placeholder="Fisrt Name" name="f_name">
            <br>
            <input type="text" class="input" placeholder="Last Name" name="l_name">
            <br>
            <input type="text" class="input" placeholder="Phone No" name="phone_no">
            <br>
            <input type="text" class="input" placeholder="Email" name="email">
            <br>
            <input type="password" class="input" placeholder="Password" name="password">
            <br>
            <input type="password" class="input" placeholder="Confirm Password" name="conf_password">

            <p>Already a member?<a href="logIn.php" class="btn1">Log In</a></p>

            <div>
                <button class="btn2" type="submit">Sign Up</button>
            </div>

        </div>
    </form>
    <script src="main.js"></script>
</body>

</html>