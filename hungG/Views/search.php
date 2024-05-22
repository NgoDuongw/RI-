<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="main.php">Trang chủ</a></li>
                <li><a href="news.php">Tin tức</a></li>
                <li><a href="search.php">Tìm kiếm</a></li>
                <li><a href="cart_view.php">Giỏ hàng</a></li>
                <li><a href="login.php">Đăng nhập</a></li>
            </ul>
        </nav>
    </header>
    <main role="main">
        <h1>Tìm kiếm sản phẩm</h1>
    
        <div class="search-results">
            <?php
            if (isset($_GET['query'])) {
                $query = $_GET['query'];
                
                $conn = new mysqli('localhost', 'root', '', 'product_management');
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM products WHERE name LIKE '%$query%'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='product'>";
                        echo "<img src='" . $row['image'] . "' alt='" . $row['name'] . "'>";
                        echo "<h2>" . $row['name'] . "</h2>";
                        echo "<p>" . $row['description'] . "</p>";
                        echo "<p><b>" . $row['price'] . "₫</b></p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Không tìm thấy sản phẩm nào.</p>";
                }
                $conn->close();
            }
            ?>
        </div>
    </main>
</body>
</html>
