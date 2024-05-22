<?php
@include './config.php';
@include './functions.php';

// Kiểm tra xem người dùng đã đăng nhập chưa
if (isset($_SESSION['admin_name']) || isset($_SESSION['user_name'])) {
    header('location: admin_page.php');
    exit();
}

// Xử lý đăng nhập nếu người dùng nhấn nút "submit"
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = login($conn, $email, $password);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/styless.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Login now</h3>
            <?php 
                if(isset($error)){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            ?>
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>dont't have an account? <a href="./register_form.php">register now</a></p>
        </form>
    </div>
</body>
</html>
