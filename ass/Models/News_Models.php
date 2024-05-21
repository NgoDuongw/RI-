<?php
class News {
    private $conn;
    private $table_name = "news";

    public $id;
    public $title;
    public $type;
    public $content;
    public $created_at;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function readAll() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function readOne() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->title = $row['title'];
        $this->type = $row['type'];
        $this->content = $row['content'];
        $this->created_at = $row['created_at'];
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET title=:title, type=:type, content=:content, created_at=:created_at";
        $stmt = $this->conn->prepare($query);

        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->type = htmlspecialchars(strip_tags($this->type));
        $this->content = htmlspecialchars(strip_tags($this->content));
        $this->created_at = htmlspecialchars(strip_tags($this->created_at));

        $stmt->bindParam(":title", $this->title);
        $stmt->bindParam(":type", $this->type);
        $stmt->bindParam(":content", $this->content);
        $stmt->bindParam(":created_at", $this->created_at);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " SET title = :title, type = :type, content = :content WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $this->title = (strip_tags($this->title));
        $this->type = (strip_tags($this->type));
        $this->content = (strip_tags($this->content));
        $this->id = (strip_tags($this->id));

        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':type', $this->type);
        $stmt->bindParam(':content', $this->content);
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);

        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}

?>