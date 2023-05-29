<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentNumber = $_POST["studentNumber"];
    $password = $_POST["password"];

    // Check if student number and password are not empty
    if (empty($studentNumber) || empty($password)) {
        $error = "Please enter your student number and password." . $conn->error;
    }
    else {
        // Check if the student number and password is correct
        $password = sha1($password);
        $sql = "SELECT * FROM `users` WHERE `studentNumber`='$studentNumber' AND `password`='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Login successful
            session_start();
            $_SESSION["studentNumber"] = $studentNumber;
            header('Location: dashboard.php'); // Redirect to the dashboard page
            exit();
        } else {
            // Login failed
            $error = "Incorrect student number or password." . $conn->error;
        }
    } 
    
    // Pass error message back to register.php
    if (isset($error)) {
        header('Location: login.php?error=' . urlencode($error));
        exit();
    }
}
?>
