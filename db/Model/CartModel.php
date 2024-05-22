<?php
class CartModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function addToCart($productId, $productName, $productPrice, $productImage, $quantity) {
        $query = "INSERT INTO cart_items (product_id, product_name, product_price, product_image, quantity) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("isdsi", $productId, $productName, $productPrice, $productImage, $quantity);
        return $stmt->execute();
    }
}
?>
