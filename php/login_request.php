<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentNumber = $_POST["studentNumber"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `users` WHERE `student_number`='$studentNumber' AND `password`='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login successful
        session_start();
        $_SESSION["studentNumber"] = $studentNumber;
        header('Location: dashboard.php'); // Redirect to the dashboard page
        exit();
    } else {
        // Login failed
        header('Location: login.php'); // Redirect back to the login page
        exit();
    }
}
?>
