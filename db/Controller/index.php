<?php
require_once 'db.php';
require_once 'CartController.php';

$controller = new CartController($conn);
$controller->addToCart();
?>
