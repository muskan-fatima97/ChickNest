<?php
session_start();
include 'connection.php'; // Include database configuration file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate inputs
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $error = "Invalid name format";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format";
    } elseif (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/", $password)) {
        $error = "Password must be minimum 8 characters, include at least one letter and one number";
    } else {
        // Check database for matching user
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND user_name = ?");
        $stmt->bind_param("ss", $email, $name);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                // Password is correct, start session and redirect
                $_SESSION['user_name'] = $user['user_name'];
                $_SESSION['email'] = $user['email'];
                header("Location: index.php");
                exit();
            } else {
                $error = "Invalid password";
            }
        } else {
            $error = "No user found with these details";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <title>Login</title>

<style>
    .no-link-style {
    color: inherit; /* Inherit color from the parent */
    text-decoration: none; /* Remove underline */
    display: block; /* Make anchor behave like a block element */
   
    padding: 10px; /* Padding to make it look like a button */
}

    </style>

</head>
<body>   
<section class="login-container">
        <div class="heading-row">
            <div class="heading-container">
                <h1>Welcome!</h1>
            </div>
        </div>
        <div class="subheading-row">
            <div class="subheading-container">
                <h2>Login to your ChickNest account.</h2>
            </div>
        </div>
        <div class="row">
            <div class="user-input-form">
                <?php if (isset($error)): ?>
                    <div class="alert alert-danger"><?= $error ?></div>
                <?php endif; ?>
                <form class="user-form" method="POST" action="login.php">

                    <div class="form-input">
                        <label class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-input">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-block btn-continue">
                        <a href="index.php" class="no-link-style">Login</a>
                    </button>
                    <div class="check-more">
                        <p class="small-text">Forgot password? <a href="forgot_password.php" class="small-link">Click here to reset</a></p>
                        <p class="small-text">Don't have an account? <a href="signup.php" class="small-link">Sign Up Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".user-form").addEventListener("submit", function(event) {
        const name = document.querySelector("input[name='name']").value;
        const email = document.querySelector("input[name='email']").value;
        const password = document.querySelector("input[name='password']").value;

        const nameRegex = /^[a-zA-Z ]*$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

        if (!nameRegex.test(name)) {
            alert("Invalid name format");
            event.preventDefault();
        } else if (!emailRegex.test(email)) {
            alert("Invalid email format");
            event.preventDefault();
        } else if (!passwordRegex.test(password)) {
            alert("Password must be minimum 8 characters, include at least one letter and one number");
            event.preventDefault();
        }
    });
});
</script>

</html>
