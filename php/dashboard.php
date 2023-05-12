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
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION["studentNumber"]; ?></h1>
    <p>This is the dashboard page.</p>
</body>
</html>
