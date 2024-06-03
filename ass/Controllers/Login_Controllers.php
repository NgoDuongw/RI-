<?php
require_once '../database.php';
require_once '../Models/User_Models.php';

$database = new Database();
$db = $database->getConnection();
$user = new User($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btnDangNhap'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $loggedInUser = $user->login($username, $password);

    if ($loggedInUser) { 
        $_SESSION['user_id'] = $loggedInUser['id'];
        header("Location: ../Views/userViews/indexUser.php");
    } else {
        echo "<script>alert('Không tìm thấy người dùng $username')</script>";
    }
}
?>