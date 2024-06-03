<?php
require_once '../database.php';
require_once '../Models/User_Models.php';

$database = new Database();
$fb = $database -> getConnection();
$user = new User($db);

$userData = $_SESSION['user'];

$user = $user -> getUserById($userData['id']);
?>