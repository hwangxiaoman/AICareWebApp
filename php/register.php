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
            <span>Personal Information</span>
            <div class="input-field">
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName">
            </div>
            <div class="input-field">
                <label for="middleName">Middle Name</label>
                <input type="text" name="middleName" id="middleName">
            </div>
            <div class="input-field">
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName">
            </div>
            <span>Education</span>
            <div class="input-field">
                <label for="studentNumber">Student Number</label>
                <input type="text" name="studentNumber" id="studentNumber" value="<?php echo isset($studentNumber) ? $studentNumber : ''; ?>">
            </div>
            <div class="input-field">
                <label for="college">College</label>
                <input type="text" name="college" id="college">
            </div>
            <div class="input-field">
                <label for="course">Course</label>
                <input type="text" name="course" id="course">
            </div>
            <div class="input-field">
                <label for="yearLevel">Year Level</label>
                <input type="text" name="yearLevel" id="yearLevel">
            </div>
            <span>Contact Details</span>
            <div class="input-field">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="input-field">
                <label for="contactNumber">Contact Number</label>
                <input type="text" name="contactNumber" id="contactNumber">
            </div>
            <span>Password</span>
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