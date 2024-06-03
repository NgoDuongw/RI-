<?php
require_once 'database.php';

class Product {
    private $conn;
    private $table_name = "products";

    public $id;
    public $type_img;
    public $img;
    public $proName;
    public $type;
    public $description;
    public $oldPrice;
    public $newPrice;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllProducts() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createProduct($type_img, $img, $proName, $type, $description, $oldPrice, $newPrice) {
        $query = "INSERT INTO " . $this->table_name . " (type_img, img, proName, type, description, oldPrice, newPrice) VALUES (:type_img, :img, :proName, :type, :description, :oldPrice, :newPrice)";
        $stmt = $this->conn->prepare($query);

        $type_img = htmlspecialchars(strip_tags($type_img));
        $img = htmlspecialchars(strip_tags($img));
        $proName = htmlspecialchars(strip_tags($proName));
        $type = htmlspecialchars(strip_tags($type));
        $description = htmlspecialchars(strip_tags($description));
        $oldPrice = htmlspecialchars(strip_tags($oldPrice));
        $newPrice = htmlspecialchars(strip_tags($newPrice));

        $stmt->bindParam(':type_img', $type_img);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':proName', $proName);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':oldPrice', $oldPrice);
        $stmt->bindParam(':newPrice', $newPrice);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function updateProduct($id, $type_img, $img, $proName, $type, $description, $oldPrice, $newPrice) {
        $query = "UPDATE " . $this->table_name . " SET type_img = :type_img, img = :img, proName = :proName, type = :type, description = :description, oldPrice = :oldPrice, newPrice = :newPrice WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $id = htmlspecialchars(strip_tags($id));
        $type_img = htmlspecialchars(strip_tags($type_img));
        $img = htmlspecialchars(strip_tags($img));
        $proName = htmlspecialchars(strip_tags($proName));
        $type = htmlspecialchars(strip_tags($type));
        $description = htmlspecialchars(strip_tags($description));
        $oldPrice = htmlspecialchars(strip_tags($oldPrice));
        $newPrice = htmlspecialchars(strip_tags($newPrice));

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':type_img', $type_img);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':proName', $proName);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':oldPrice', $oldPrice);
        $stmt->bindParam(':newPrice', $newPrice);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function deleteProduct($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $id = htmlspecialchars(strip_tags($id));
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
