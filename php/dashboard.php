<?php
session_start();

if (!isset($_SESSION["studentNumber"])) {
    // User is not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}

// User is logged in, show the dashboard page
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../styles/dashboard.css">
</head>
<body>
<!--
    <h1>Welcome, <?php echo $_SESSION["studentNumber"]; ?></h1>
    <p>This is the dashboard page.</p>
-->
    <div class="header">
        <div class="logo-section">
            <img src="../assets/dashboard/AICareAppLogo.png" alt="logo">
            <span>Care</span>
        </div>
        <div class="profile-navigation">
            <img src="../assets/dashboard/notificationBell.png" alt="notif-bell-icon">
            <img src="../assets/dashboard/profile.jpg" alt="profile-pic">
        </div>
    </div>
    <nav class="dashboard-navigation">
        <div class="navigation">
            <img src="../assets/dashboard/iconHome.png" alt="icon-home">
        </div>
    </nav>
</body>
</html>
