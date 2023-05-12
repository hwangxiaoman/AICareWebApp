<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/register.css">
    <title>AI Care | Register</title>
</head>
<body>
    <div class="container">
        <div class="icon">
            <img src="../assets/login/c_d1.png" alt="">
            <img src="../assets/login/c_d2.png" alt="">
        </div>
        <div class="header">
            <p>Create an Account</p>
        </div>
        <?php
            if(isset($_GET['error'])){
                echo "<div class='error'>" . $_GET['error'] . "</div>";
            }
        ?>

        <form action="register_request.php" method="post">
            <div class="input-field">
                <label for="student number">Student Number</label>
                <input type="text" name="studentNumber" id="studentNumber" value="<?php echo isset($studentNumber) ? $studentNumber : ''; ?>">
            </div>
            <div class="input-field">
                <label for="password">Enter a Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="input-field">
                <label for="re-enter password">Re-enter Password</label>
                <input type="password" name="confirm_password" id="confirm_password">
            </div>
            <input type="submit" value="Sign up" id="sign-up">
        </form>
        <span>Already have an account yet?&nbsp;<a href="login.php">Login</a></span>
    </div>
</body>
</html>
