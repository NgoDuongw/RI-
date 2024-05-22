<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="./styles.css">
    <script src="scripts.js"></script>
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
                <img src="./assets/img/slider/1.jpg" width="100%" height="800px" alt=""
                    id="show">

            <div class="container marketing">
                <div class="row">
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                            src="assets/img/icon/icon-1.png">
                        <h2>Đặt hàng</h2>
                        <p>Chọn sản phẩm bạn yêu thích, và Đặt hàng.</p>
                    </div>
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                            src="assets/img/icon/icon-2.png">
                        <h2>Tạo đơn hàng</h2>
                        <p>Theo dõi đơn hàng của bạn.</p>
                    </div>
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                            src="assets/img/icon/icon-3.png">
                        <h2>Giao hàng</h2>
                        <p>Giao hàng tận nơi.</p>
                    </div>
                </div>

                <hr class="featurette-divider">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Đặt hàng, Tạo đơn hàng, Giao hàng <span class="text-muted">Nhanh
                                chóng</span>
                        </h2>
                        <p class="lead">Nơi mua sắm tuyệt vời cho mọi lứa tuổi.</p>
                    </div>
                    <div class="col-md-5">
                        <img src="assets/img/marketing/marketing-1.png">
                    </div>
                </div>

                <hr class="featurette-divider">
                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Báo cáo Doanh thu tuyệt vời <span class="text-muted">Theo dõi đơn
                                hàng của
                                bạn.</span></h2>
                        <p class="lead">Hệ thống theo dõi đơn hàng chi tiết, thông tin mọi lúc mọi nơi.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img src="assets/img/marketing/marketing-2.png">
                    </div>
                </div>

                <hr class="featurette-divider">
            </div>

            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Danh sách Sản phẩm</h1>
                    <p class="lead text-muted">Các sản phẩm với chất lượng, uy tín, cam kết từ nhà Sản xuất, phân phối và
                        bảo hành
                        chính hãng.</p>
                </div>
            </section>

            <div class="danhsachsanpham py-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="./product/iphone_15_pro_max.php">
                                    <img id="iphone_15_pro_max" class="bd-placeholder-img card-img-top" width="100%" height="350"
                                        src="assets/img/product/iphone-15-pro-max-blue-2-1.jpg">
                                </a>
                                <div class="card-body">
                                    <a href="./product/iphone_15_pro_max.php">
                                        <h5>iPhone 15 Pro Max</h5>
                                    </a>
                                    <h6>Điện thoại</h6>
                                    <p class="card-text">Sản phẩm của iPhone năm 2023</p>
                                    <button class="btn btn-sm btn-outline-secondary" onclick="addToCart('iphone_15_pro_max', 'iPhone 15 Pro Max', 30990000)">Add to
                                        cart</button>
                                    <small class="price">
                                        <s>34,990,000₫</s>
                                        <b>30,990,000₫</b>
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="./product/iphone_15_pro.php">
                                    <img id="iphone_15_pro" class="bd-placeholder-img card-img-top" width="100%" height="350"
                                        src="assets/img/product/apple-iphone-15-pro-1-1.jpg">
                                </a>
                                <div class="card-body">
                                    <a href="./product/iphone_15_pro.php">
                                        <h5>iPhone 15 Pro</h5>
                                    </a>
                                    <h6>Điện thoại</h6>
                                    <p class="card-text">Sản phẩm của iPhone năm 2023</p>
                                    <button class="btn btn-sm btn-outline-secondary" onclick="addToCart('iphone_15_pro', 'iPhone 15 Pro ', 26990000)">Add to
                                        cart</button>
                                    <small class="price">
                                        <s>28,990,000₫</s>
                                        <b>26,990,000₫</b>
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="./product/iphone_15_plus.php">
                                    <img id="iphone_15_plus" class="bd-placeholder-img card-img-top" width="100%" height="350"
                                        src="assets/img/product/iphone-15-plus-128gb-hong-2.jpg">
                                </a>
                                <div class="card-body">
                                    <a href="./product/iphone_15_plus.php">
                                        <h5>iPhone 15 Plus</h5>
                                    </a>
                                    <h6>Điện thoại</h6>
                                    <p class="card-text">Sản phẩm của iPhone năm 2023</p>
                                    <button class="btn btn-sm btn-outline-secondary" onclick="addToCart()">Add to
                                        cart</button>
                                    <small class="price">
                                        <s>25,990,000₫</s>
                                        <b>23,490,000₫</b>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="./product/iphone_15.php">
                                    <img id="iphone_15" class="bd-placeholder-img card-img-top" width="100%" height="350"
                                        src="assets/img/product/iphone-15-128gb-xanh-la-2.jpg">
                                </a>
                                <div class="card-body">
                                    <a href="./product/iphone_15.php">
                                        <h5>iPhone 15</h5>
                                    </a>
                                    <h6>Điện thoại</h6>
                                    <p class="card-text">Sản phẩm của iPhone năm 2023</p>
                                    <button class="btn btn-sm btn-outline-secondary" onclick="addToCart()">Add to
                                        cart</button>
                                    <small class="price">
                                        <s>22,990,000₫</s>
                                        <b>20,490,000₫</b>
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="./product/samsungGalaxy.php">
                                    <img id="samsungGalaxy" class="bd-placeholder-img card-img-top" width="100%" height="350"
                                        src="assets/img/product/samsung-galaxy-s24-xam-2.jpg">
                                </a>
                                <div class="card-body">
                                    <a href="./product/samsungGalaxy.php">
                                        <h5>Samsung Galaxy S24 Ultra 5G</h5>
                                    </a>
                                    <h6>Điện thoại</h6>
                                    <p class="card-text">Sản phẩm của Samsung năm 2023</p>
                                    <button class="btn btn-sm btn-outline-secondary" onclick="addToCart()">Add to
                                        cart</button>
                                    <small class="price">
                                        <s>22,000,000₫</s>
                                        <b>20,490,000₫</b>
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="./product/xiaomi.php">
                                    <img id="xiaomi" class="bd-placeholder-img card-img-top" width="100%" height="350"
                                        src="assets/img/product/xiaomi-14-xanh-10.jpg">
                                </a>
                                <div class="card-body">
                                    <a href="./product/xiaomi.php">
                                        <h5>Xiaomi 14 5G 512GB</h5>
                                    </a>
                                    <h6>Điện thoại</h6>
                                    <p class="card-text">Sản phẩm của Xiaomi năm 2023</p>
                                    <button class="btn btn-sm btn-outline-secondary" onclick="addToCart()">Add to
                                        cart</button>
                                    <small class="price">
                                        <s>24.490.000₫ </s>
                                        <b>21.490.000₫</b>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="./product/redmi.php">
                                    <img id="redmi" class="bd-placeholder-img card-img-top" width="100%" height="350"
                                        src="assets/img/product/xiaomi-redmi-note-13-pro-tim-5.jpg">
                                </a>
                                <div class="card-body">
                                    <a href="./product/redmi.php">
                                        <h5>Xiaomi Redmi Note 13 Pro </h5>
                                    </a>
                                    <h6>Điện thoại</h6>
                                    <p class="card-text">Sản phẩm của Xiaomi năm 2023</p>
                                    <button class="btn btn-sm btn-outline-secondary" onclick="addToCart()">Add to
                                        cart</button>
                                    <small class="price">
                                        <s>9.490.000₫</s>
                                        <b>8.690.000₫</b>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
</body>
</html>

