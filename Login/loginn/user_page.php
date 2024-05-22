<?php
    @include './config.php';
    session_start();

    if(!isset($_SESSION['admin_name']) && !isset($_SESSION['user_name'])){
        header('location:login_form.php');
        exit(); // Chắc chắn dừng việc thực thi mã sau khi chuyển hướng
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($_SESSION['admin_name']) ? 'Admin Page' : 'User Page'; ?></title>
    <link rel="stylesheet" href="./css/styless.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h3>Hi, <span><?php echo isset($_SESSION['admin_name']) ? 'Admin' : 'User'; ?></span></h3>
            <h1>Welcome <span><?php echo isset($_SESSION['admin_name']) ? $_SESSION['admin_name'] : $_SESSION['user_name']; ?></span></h1>
            <p><?php echo isset($_SESSION['admin_name']) ? 'This is Admin' : 'This is User'; ?></p>
            <a href="./logout.php" class="btn">Logout</a>
        </div>
    </div>
</body>
</html>
