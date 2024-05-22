<?php
session_start();
$total = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <header>
                <nav>
                <div class="logo">
                    <a href="main.php"><img src="assets/img/icon/tải xuống.png" alt="Logo"></a>
                </div>
                    <ul>
                        <li><a href="main.php">Trang chủ</a></li>
                        <li><a href="news.php">Tin tức</a></li>
                        <div class="search-container">
                            <form action="search.php" method="get">
                                <input type="text" placeholder="Tìm kiếm..." name="query">
                                <button type="submit">Tìm kiếm</button>
                            </form>
                        </div>
                        <li><a href="cart_view.php">Giỏ hàng</a></li>
                        <li><a href="login_view.php">Đăng nhập</a></li>
                    </ul>
                </nav>
        </header>

    <main role="main">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Giỏ hàng của bạn</h1>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($_SESSION['cart'])) {
                                    $count = 1;
                                    foreach ($_SESSION['cart'] as $product) {
                                        echo "<tr>";
                                        echo "<th scope='row'>" . htmlspecialchars($count) . "</th>";
                                        echo "<td>" . htmlspecialchars($product['name']) . "</td>";
                                        echo "<td>" . number_format(htmlspecialchars($product['price'])) . "₫</td>";
                                        echo "<td>
                                                <form action='cart_model.php' method='post' class='d-inline'>
                                                    <input type='hidden' name='product_id' value='" . htmlspecialchars($product['id']) . "'>
                                                    <button type='submit' name='remove_from_cart' class='btn btn-danger btn-sm'>Xóa</button>
                                                </form>
                                              </td>";
                                        echo "</tr>";
                                        $total += $product['price'];
                                        $count++;
                                    }
                                } else {
                                    echo "<tr><td colspan='4'>Không có sản phẩm trong giỏ hàng</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="text-right">
                        <h4>Tổng cộng: <?php echo number_format($total); ?>₫</h4>
                        <form action="checkout.php" method="post">
                            <button type="submit" name="checkout" class="btn btn-primary">Thanh toán</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    

</body>
</html>
