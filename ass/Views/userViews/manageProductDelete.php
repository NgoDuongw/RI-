<?php
require_once './another/database.php';
require_once './another/Product_Models.php';

$database = new Database();
$db = $database->getConnection();
$product = new Product($db);

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($product->deleteProduct($id)) {
        header("Location: managePro.php");
    } else {
        echo "Failed to delete product.";
    }
}
?>