<?php require_once 'header.php'; ?>

<?php
require_once './another/database.php';
require_once './another/Product_Models.php';

$database = new Database();
$db = $database->getConnection();
$product = new Product($db);

$products = $product->getAllProducts();
?>

<body>
    <h1>Product List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Type Image</th>
            <th>Image</th>
            <th>Product Name</th>
            <th>Type Product</th>
            <th>Description</th>
            <th>Old Price</th>
            <th>New Price</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($products as $prod): ?>
            <tr>
                <td><?php echo $prod['id']; ?></td>
                <td><?php echo $prod['type_img']; ?></td>
                <td><img src="./assets/img/product/<?php echo $prod['img']; ?>" width="100" ></td>
                <td><?php echo $prod['proName']; ?></td>
                <td><?php echo $prod['type']; ?></td>
                <td><?php echo $prod['description']; ?></td>
                <td><?php echo $prod['oldPrice']; ?>đ</td>
                <td><?php echo $prod['newPrice']; ?>đ</td>
                <td>
                    <a href="manageProductEdit.php?id=<?php echo $prod['id']; ?>">Edit</a> | 
                    <a href="manageProductDelete.php?id=<?php echo $prod['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="manageProductAdd.php">Add New Product</a>
</body>