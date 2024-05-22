<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
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
                <li><a href="login_view.php">Đăng nhập</a></li>
            </ul>
        </nav>
    </header>
    <main role="main">
        <h1>Đăng nhập</h1>
        <form action="process_login.php" method="post">
            <label for="username">Tên đăng nhập:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Đăng nhập</button>
        </form>
    </main>
</body>
</html>
