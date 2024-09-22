<?php
session_start();
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate inputs
    if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $error = "Invalid name format";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format";
    } elseif (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/", $password)) {
        $error = "Password must be minimum 8 characters, include at least one letter and one number";
    } else {
        // Insert data into database without hashing the password
        $stmt = $conn->prepare("INSERT INTO users (user_name, email, password) VALUES (?, ?, ?)");
        if ($stmt === false) {
            $error = "Error preparing statement: " . $conn->error;
        } else {
            $stmt->bind_param("sss", $name, $email, $password);
            if ($stmt->execute()) {
                $_SESSION['message'] = "Account created successfully";
                header("Location: index.php"); // Redirect to index.php
                exit();
            } else {
                $error = "Error inserting data into database: " . $stmt->error;
            }
        }
    }

    $_SESSION['error'] = $error;
    header("Location: signup.php"); // Redirect back to the signup page
    exit();
}
?>
