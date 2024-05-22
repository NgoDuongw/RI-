<?php
    @include './config.php';
    session_start();

    if(isset( $_SESSION['admin_name'])){
        header('location:login_form.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <link rel="stylesheet" href="./css/styless.css">
<body>
    <div class="container">

    <div class="content">
        <h3>Hi, <span>Admin</span></h3>
        <h1>Welcome <span></span></h1>
        <p>This is Admin</p>
        <a href="./login_form.php" class="btn">Login</a>
        <a href="./register_form.php" class="btn">register</a>
        <a href="./logout.php" class="btn">Logout</a>
    </div>

    </div>
</body>
</html>