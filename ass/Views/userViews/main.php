<?php
require_once './another/database.php';
require_once './another/Product_Models.php';

$database = new Database();
$db = $database->getConnection();
$product = new Product($db);

$products = $product->getAllProducts();
?>

<main role="main">
            <img src="/JAVASCRIPT/Assimentt/index/project/assets/img/slider/1.jpg" width="100%" height="800px" alt=""
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
                    <?php foreach ($products as $prod): ?>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="./<?php echo $prod['type_img']; ?>.php">
                                    <img id="<?php echo $prod['type_img']; ?>" class="bd-placeholder-img card-img-top" width="100%" height="350"
                                        src="assets/img/product/<?php echo $prod['img']; ?>">
                                </a>
                                <div class="card-body">
                                    <a href="./<?php echo $prod['type_img']; ?>.php">
                                        <h5><?php echo $prod['proName']; ?></h5>
                                    </a>
                                    <h6><?php echo $prod['type']; ?></h6>
                                    <p class="card-text"><?php echo $prod['description']; ?></p>
                                    <button class="btn btn-sm btn-outline-secondary" onclick="addToCart()">Add to cart</button>
                                    <small class="price">
                                        <s><?php echo $prod['oldPrice']; ?>₫</s>
                                        <b><?php echo $prod['newPrice']; ?>₫</b>
                                    </small>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>


    </main>