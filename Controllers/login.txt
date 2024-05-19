<?php
// Start the session
session_start();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $user = $_POST['user'];
    $password = $_POST['password'];

    // Hard-coded credentials
    $valid_user = "rido2024@gmail.com";
    $valid_password = "fpt123";

    // Check credentials
    if ($user === $valid_user && $password === $valid_password) {
        // Redirect to admin page
        header("Location: webSach.html");
        exit(); // Ensure no further code is executed after the redirect
    } else {
        echo "<script>alert('Invalid username or password.')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Login Form using HTML CSS Only | Codehal</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2>Login</h2>
            <form method="POST" action="">
                <div class="input-box">
                    <ion-icon name="mail-outline" class="icon"></ion-icon>
                    <input type="email" name="user" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <ion-icon name="lock-closed-outline" class="icon"></ion-icon>
                    <input id="password" type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="forgot-pass">
                    <a href="forgot-password.html">Forgot your password?</a>
                </div>
                <button type="submit" class="btn" name="submit">Login</button>
                <div class="signup-link">
                    <a href="register.html">Sign up</a>
                </div>
            </form>
        </div>
        <span style="--i:0;"></span>
        <!-- All other span elements here -->
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>
