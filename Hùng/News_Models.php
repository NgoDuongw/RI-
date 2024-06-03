<?php
require_once '../database.php';

class News {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllNews() {
        $query = "SELECT * FROM news";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>