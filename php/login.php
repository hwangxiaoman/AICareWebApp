<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/login.css">
    <title>AI Care | Sign in</title>
</head>
<body>
    <div class="container">
        <div class="icon">
            <img src="../assets/login/d1.png" alt="">
            <img src="../assets/login/d2.png" alt="">
        </div>
        <div class="header">
            <p>Login to your Account</p>
        </div>
        <form action="login" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <input type="button" value="Sign in" id="sign-in">
        </form>
    </div>
</body>