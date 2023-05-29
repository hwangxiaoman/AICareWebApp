<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $studentNumber = $_POST["studentNumber"];
    $college = $_POST["college"];
    $course = $_POST["course"];
    $yearLevel = $_POST["yearLevel"];
    $email = $_POST["email"];
    $contactNumber = $_POST["contactNumber"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Validate input data
    if (empty($studentNumber) || empty($password) || empty($confirm_password)) {
        // Display error message if fields are empty
        $error = "All fields are required." . $conn->error;
    } elseif ($password != $confirm_password) {
        // Display error message if passwords not match
        $error = "Passwords do not match." . $conn->error;
    } else {
        // Check if the student number already exists in the database
        $sql = "SELECT * FROM `users` WHERE `studentNumber`='$studentNumber'";
        $result = $conn->query($sql);

        if ($result->num_rows == 0) {
            // registers new user
            $password = sha1($password);
            $sql = "INSERT INTO `users` (`firstName`, `middleName`, `lastName`, `studentNumber`, `college`, `course`, `yearLevel`, `email`, `contactNumber`, `password`) 
            VALUES ('$firstName', '$middleName', '$lastName', '$studentNumber', '$college', '$course', '$yearLevel', '$email', '$contactNumber', '$password')";
            if ($conn->query($sql) === TRUE) {
                // Registration successful, redirect to the login page
                header('Location: login.php');
                exit();
            } else {
                // Display error message if database query fails
                $error = "Registration failed: " . $conn->error;
            }
        } else {
            // Display error message if student number already exists
            $error = "This student number is already registered." . $conn->error;
        }
    }

    // Pass error message back to register.php
    if (isset($error)) {
        header('Location: register.php?error=' . urlencode($error));
        exit();
    }
}
?>
