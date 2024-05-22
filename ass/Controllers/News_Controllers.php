<?php
require_once './News_Models.php';
use Core\config;

class NewsController {
    private $db;
    private $news;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->news = new News($this->db);
    }

    // public function index() {
    //     $result = $this->news->readAll();
    //     $news_list = $result->fetchAll(PDO::FETCH_ASSOC);
    //     require '../views/news/index.php';
    // }

    // public function detail($id) {
    //     $this->news->id = $id;
    //     $this->news->readOne();
    //     require '../views/news/detail.php';
    // }

    // public function create() {
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $this->news->title = $_POST['title'];
    //         $this->news->type = $_POST['type'];
    //         $this->news->content = $_POST['content'];
    //         $this->news->created_at = date('Y-m-d');

    //         if ($this->news->create()) {
    //             header("Location: index.php");
    //         } else {
    //             echo "Lỗi khi tạo bài viết.";
    //         }
    //     }
    //     require '../views/news/create.php';
    // }

    // public function edit($id) {
    //     $this->news->id = $id;
    //     $this->news->readOne();

    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $this->news->title = $_POST['title'];
    //         $this->news->type = $_POST['type'];
    //         $this->news->content = $_POST['content'];

    //         if ($this->news->update()) {
    //             header("Location: index.php");
    //         } else {
    //             echo "Lỗi khi cập nhật bài viết.";
    //         }
    //     }
    //     require '../views/news/edit.php';
    // }

    // public function delete($id) {
    //     $this->news->id = $id;
    //     if ($this->news->delete()) {
    //         header("Location: index.php");
    //     } else {
    //         echo "Lỗi khi xóa bài viết.";
    //     }
    // }
}

?>