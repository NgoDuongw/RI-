<?php
require_once 'database.php';
require_once 'Product_Models.php';

$database = new Database();
$db = $database->getConnection();
$productModel = new Product($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type_img = $_POST['type_img'];
    $proName = $_POST['proName'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    $oldPrice = $_POST['oldPrice'];
    $newPrice = $_POST['newPrice'];
    $img = $_FILES['img']['name'];

    // Upload image
    $target_dir = "assets/img/product/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);

    // Create product
    if ($productModel->createProduct($type_img, $proName, $type, $description, $oldPrice, $newPrice, $img)) {
        echo "Product added successfully!";
    } else {
        echo "Failed to add product.";
    }
}
?>