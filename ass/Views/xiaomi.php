<?php require_once './headercopy.php'; ?>


    <main role="main">
        <div class="container mt-4">
            <div id="thongbao" class="alert alert-danger d-none face" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="card">
                <div class="container-fliud">
                    <form name="frmsanphamchitiet" id="frmsanphamchitiet" method="post"
                        action="/php/twig/frontend/giohang/themvaogiohang">
                        <input type="hidden" name="sp_ma" id="sp_ma" value="5">
                        <input type="hidden" name="sp_ten" id="sp_ten" value="Samsung Galaxy Tab 10.1 3G 16G">
                        <input type="hidden" name="sp_gia" id="sp_gia" value="10990000.00">
                        <input type="hidden" name="hinhdaidien" id="hinhdaidien" value="samsung-galaxy-tab-10.jpg">

                        <div class="wrapper row">
                            <div class="preview col-md-6">
                                <div class="preview-pic tab-content">
                                    <div class="tab-pane active" id="pic-1">
                                        <img src="./assets/img/xiaomi//xiaomi-14-xanh-1.jpg"
                                            id="balam">
                                        <div class="dieu_huong">
                                            <i class="fa fa-arrow-left" aria-hidden="true" onclick="returnn()"></i>
                                            <i class="fa fa-arrow-right" aria-hidden="true" onclick="move()"></i>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="pic-2">
                                        <img src="./assets/img/xiaomi/xiaomi-14-den-1.jpg"
                                            id="klj">
                                        <div class="dieu_huong">
                                            <i class="fa fa-arrow-left" aria-hidden="true" onclick="UU()"></i>
                                            <i class="fa fa-arrow-right" aria-hidden="true" onclick="KK()"></i>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="pic-3">
                                        <img src="./assets/img/xiaomi/xiaomi-14-trang-1.jpg"
                                            id="trang">
                                        <div class="dieu_huong">
                                            <i class="fa fa-arrow-left" aria-hidden="true" onclick="on()"></i>
                                            <i class="fa fa-arrow-right" aria-hidden="true" onclick="come()"></i>
                                        </div>
                                    </div>
                                </div>
                                <ul class="preview-thumbnail nav nav-tabs">
                                    <li class="active">
                                        <a data-target="#pic-1" data-toggle="tab" class="">
                                            <img src="./assets/img/xiaomi//xiaomi-14-xanh-1.jpg">
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-target="#pic-2" data-toggle="tab" class="">
                                            <img src="./assets/img/xiaomi/xiaomi-14-den-1.jpg">
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-target="#pic-3" data-toggle="tab" class="active">
                                            <img
                                                src="./assets/img/xiaomi/xiaomi-14-trang-1.jpg">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="details col-md-6">
                                <h3 class="product-title">Xiaomi 14 5G 512GB</h3>
                                <div class="rating">
                                    <div id="rating">
                                        <i class="fa fa-star" data-index="0"></i>
                                        <i class="fa fa-star" data-index="1"></i>
                                        <i class="fa fa-star" data-index="2"></i>
                                        <i class="fa fa-star" data-index="3"></i>
                                        <i class="fa fa-star" data-index="4"></i>
                                    </div>
                                    <span class="review-no">999 reviews</span>
                                </div>
                                <small class="text-muted">Giá cũ: <s><span>24.490.000₫</span></s></small>
                                <h4 class="price">Giá hiện tại: <span>21.490.000₫</span></h4>
                                <p class="vote"><strong>100%</strong> hàng <strong>Chất lượng</strong>, đảm bảo
                                    <strong>Uy
                                        tín</strong>!
                                </p>
                                <h5 class="colors">
                                    <div>Xanh lá</div>
                                    <div>Đen</div>
                                    <div>Trắng</div>
                                </h5>
                                <div class="action">
                                    <a class="add-to-cart btn btn-default" id="btnThemVaoGioHang">Mua ngay</a>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="container-fluid">
                    <h3>Thông tin chi tiết về Sản phẩm</h3>
                    <div class="row">
                        <div class="col">
                            A17 Pro. | Chip thay đổi cuộc chơi.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once './footer.php'; ?>