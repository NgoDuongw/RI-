<?php
require_once 'database.php';
require_once 'Product_Models.php';

$database = new Database();
$db = $database->getConnection();
$product = new Product($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $type_img = $_POST['type_img'];
    $proName = $_POST['proName'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    $oldPrice = $_POST['oldPrice'];
    $newPrice = $_POST['newPrice'];
    $image = $_FILES['img']['name'];
    $target = "../assets/img/product/" . basename($image);

    if ($image) {
        $imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES['img']['tmp_name']);
        if ($check !== false) {
            if ($_FILES['img']['size'] > 5000000) {
                echo "File is too large.";
                exit();
            }
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Only JPG, JPEG, PNG & GIF files are allowed.";
                exit();
            }
            if (!move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
                echo "Failed to upload image.";
                exit();
            }
        } else {
            echo "File is not an image.";
            exit();
        }
    }

    if ($product->updateProduct($id, $type_img, $image, $proName, $type, $description, $oldPrice, $newPrice)) {
        header("Location: ../managePro.php");
    } else {
        echo "Failed to update product.";
    }
} else {
    $id = $_GET['id'];
    $productData = $product->getProductById($id);
    $type_img = $productData['type_img'];
    $proName = $productData['proName'];
    $type = $productData['type'];
    $description = $productData['description'];
    $oldPrice = $productData['oldPrice'];
    $newPrice = $productData['newPrice'];
    $img = $productData['img'];
}
?>