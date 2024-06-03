<?php
require_once '../database.php';
require_once '../Models/User_Models.php';

$database = new Database();
$db = $database->getConnection();
$user = new User($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password != $confirm_password) {
        echo "Passwords do not match.";
    } else {
        if ($user->register($username, $email, $password)) {
            header("Location: ../Views/login.php");
        } else {
            echo "Registration failed.";
        }
    }
}
?>