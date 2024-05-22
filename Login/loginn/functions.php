<?php
session_start();

function redirectToLoginPage() {
    header('location: login_form.php');
    exit();
}

function login($conn, $email, $password) {
    $email = mysqli_real_escape_string($conn, $email);
    $password = md5($password);

    $select = "SELECT * FROM user_form WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['user_type'] == 'admin') {
            $_SESSION['admin_name'] = $row['name'];
            header('location: admin_page.php');
            exit();
        } elseif ($row['user_type'] == 'user') {
            $_SESSION['user_name'] = $row['name'];
            header('location: user_page.php');
            exit();
        }
    } else {
        return 'Incorrect email or password';
    }
}
?>
