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
    <form action="register/verify.php" method="POST">
        <div class="box">
            <h1 class="heading">Sign Up</h1>
            <br>
            <input type="email" class="input" placeholder="Email" name="email">
            <br>
            <input type="password" class="input" placeholder="Password" name="password">

            <p>not registered?<a href="signup.php" class="btn1">SignUp</a></p>

            <div>
                <button class="btn2" type="submit">Login</button>
            </div>

        </div>
    </form>
    <script src="main.js"></script>
</body>

</html>