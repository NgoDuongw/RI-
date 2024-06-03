<?php
require_once '../database.php';

class User {
    private $conn;
    public $id;
    public $username;
    public $email;
    public $password;
    public $resetToken;
    public $resetExpiration;
    public function __construct($db) {
        $this->conn = $db;
    }

    public function getUserById($id) {
        $query = "SELECT id, username, email FROM users WHERE id = :id LIMIT 0,1";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
        $stmt->execute();
        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $this->id = $user['id'];
            $this->username = $user['username'];
            $this->email = $user['email'];
            return $user;
        } else {
            return null;
        }
    }
}
?>