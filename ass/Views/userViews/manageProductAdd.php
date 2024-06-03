<?php require_once './header.php'; ?>
<?php require_once './another/Product_Controllers1.php'; ?>
<body>
    <h1>Add Product</h1>
    <form class="form" action="" method="POST" enctype="multipart/form-data">
        <label for="type_img">Type Image:</label>
        <input type="text" name="type_img" id="type_img" required>
        <br>
        <label for="proName">Product Name:</label>
        <input type="text" name="proName" id="proName" required>
        <br>
        <label for="type">Type:</label>
        <input type="text" name="type" id="type" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea>
        <br>
        <label for="oldPrice">Old Price:</label>
        <input type="number" name="oldPrice" id="oldPrice" required>
        <br>
        <label for="newPrice">New Price:</label>
        <input type="number" name="newPrice" id="newPrice" required>
        <br>
        <label for="img">Image:</label>
        <input type="file" name="img" id="img" required>
        <br>
        <button type="submit">Add Product</button>
    </form>
</body>