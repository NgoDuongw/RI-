<?php
require_once 'database.php';
require_once 'User_Models.php';

$database = new Database();
$fb = $database -> getConnection();
$userModel = new User($db);

$userData = $_SESSION['user'];

$user = $userModel -> getUserById($userData['id']);

if (!$user) {
    echo "User not found";
    exit();
}
?>