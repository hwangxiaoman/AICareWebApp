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
    <script src="../scripts/dashboard.js"></script>
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
            <img src="../assets/dashboard/iconHomeSelected.png" alt="icon-home">
            <span>Home</span>
        </div>
        <div class="navigation">
            <img src="../assets/dashboard/iconDelivery.png" alt="iconDelivery">
            <span>Delivery</span>
        </div>
        <div class="navigation">
            <img src="../assets/dashboard/iconMessage.png" alt="iconMessage">
            <span>Message</span>
        </div>
    </nav>
    <div class="content-area">
        <div class="section-1">
            <div class="sub-section">
                <p>You're one step away on earning while helping.</p>
                <span>Upgrade your account now!</span>
                <button>Upgrade Account</button>
            </div>
            <div class="sub-section">
                <img src="../assets/dashboard/upgrade-box1.png" alt="upgrade-box">
                <img src="../assets/dashboard/upgrade-box2.png" alt="upgrade-box">
            </div>
        </div>
        <div class="section-2">
            <span>Services</span>
            <div class="services-category">
                <div class="sub-section" id="categoryPackage" onclick="redirectToPage('categoryPackage')">
                    <img src="../assets/dashboard/categoryPackage.png" alt="category-package" >
                    <span>Packages</span>
                </div>
                <div class="sub-section" id="categoryFood">
                    <img src="../assets/dashboard/categoryFood.png" alt="category-food">
                    <span>Food & Beverages</span>
                </div>
                <div class="sub-section" id="categoryMaterials">
                    <img src="../assets/dashboard/categoryMaterials.png" alt="category-materials">
                    <span>Materials</span>
                </div>
                <div class="sub-section" id="categoryMedicine">
                    <img src="../assets/dashboard/categoryMedicine.png" alt="category-medicine">
                    <span>Medicine</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
