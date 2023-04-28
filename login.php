<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="assets/login_assets/d2.png" alt="">
            <img src="assets/login_assets/d1.png" alt="">
        </div>
        <h1>Login into your Account</h1>
        <form action="login" method="POST">
            <div class="inputs">
                <label for="studentNumber">Student Number</label>
                <input type="text" name="studentNumber">
            </div>
            <br>
            <div class="inputs">
                <label for="password">Password</label>
                <input type="text" name="password">
            </div>
            <input type="button" value="Sign in">
            <span>Don't have an account yet? &nbsp;<a href="#">Register</a></span>
        </form>
    </div>
</html>