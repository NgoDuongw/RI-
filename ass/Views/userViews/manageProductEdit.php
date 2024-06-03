<?php require_once './header.php'; ?>
<?php require_once './another/Product_Controllers.php'; ?>
<body>
    <h1>Edit Product</h1>
    <form class="form" action="./another/Product_Controllers.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label for="type_img">Type Image:</label>
            <input type="text" name="type_img" value="<?php echo $type_img ?>">
        
            <label for="img">Image:</label>
            <input type="file" name="img">
            <img src="./assets/img/product/<?php echo $img ?>" width="100">
        
            <label for="proName">Product Name:</label>
            <input type="text" name="proName" value="<?php echo $proName ?>">
        
            <label for="type">Type:</label>
            <input type="text" name="type" value="<?php echo $type ?>">
        
            <label for="description">Description:</label>
            <textarea name="description"><?php echo $description ?></textarea>
        
            <label for="oldPrice">Old Price:</label>
            <input type="text" name="oldPrice" value="<?php echo $oldPrice ?>">
        
            <label for="newPrice">New Price:</label>
            <input type="text" name="newPrice" value="<?php echo $newPrice ?>">
        
            <input type="submit" value="Update">
    </form>
</body>