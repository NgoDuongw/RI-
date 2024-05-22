<?php
require_once 'CartModel.php';

class CartController {
    private $model;

    public function __construct($db) {
        $this->model = new CartModel($db);
    }

    public function addToCart() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productId = $_POST['sp_ma'];
            $productName = $_POST['sp_ten'];
            $productPrice = $_POST['sp_gia'];
            $productImage = $_POST['hinhdaidien'];
            $quantity = 1; // Default quantity, can be dynamic

            if ($this->model->addToCart($productId, $productName, $productPrice, $productImage, $quantity)) {
                header('Location: /php/twig/frontend/giohang'); // Redirect to cart page
                exit();
            } else {
                echo "Error adding to cart.";
            }
        }
    }
}
?>
