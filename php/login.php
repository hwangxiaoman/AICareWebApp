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
        <form action="login_request.php" method="post">
            <div class="input-field">
                <label for="student number">Student Number</label>
                <input type="text" name="studentNumber" id="studentNumber">
            </div>
            <div class="input-field">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            </div>
            <input type="submit" value="Sign in" id="sign-in">
        </form>
        <span>Don't have an account yet?&nbsp;<a href="#">Register</a></span>
    </div>
</body>