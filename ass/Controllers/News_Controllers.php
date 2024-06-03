<?php
require_once '../database.php';
require_once '../Models/News_Models.php';

$database = new Database();
$db = $database->getConnection();
$news = new News($db);

$newss = $news->getAllNews();
?>