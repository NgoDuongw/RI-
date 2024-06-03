<?php
require_once '../database.php';
require_once '../Models/Product_Models.php';

$database = new Database();
$db = $database->getConnection();
$product = new Product($db);

$products = $product->getAllProducts();
?>