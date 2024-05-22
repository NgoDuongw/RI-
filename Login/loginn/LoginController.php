<?php
@include './config.php';
@include './loginModel.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = login($conn, $email, $password);
    if ($error == 'admin') {
        header('location: admin_page.php');
        exit();
    } elseif ($error == 'user') {
        header('location: user_page.php');
        exit();
    }
}

include './loginView.php';
?>
