<?php require_once '../header.php'; ?>


    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <form name="frmdangky" id="frmdangky" method="post" action="#">
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card mx-4">
                            <div class="card-body p-4">
                                <h1>Đăng ký</h1>
                                <p class="text-muted">Tạo tài khoản</p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Tên tải khoản"
                                        name="kh_tendangnhap">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="password" placeholder="Mật khẩu"
                                        name="kh_matkhau">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Họ tên" name="kh_ten">
                                </div>
                                <!-- <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <select name="kh_gioitinh" class="form-control">
                                        <option value="0">Nam</option>
                                        <option value="1">Nữ</option>
                                    </select>
                                </div> -->
                                <!-- <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Địa chỉ" name="kh_diachi">
                                </div> -->
                                <!-- <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Điện thoại"
                                        name="kh_dienthoai">
                                </div> -->
                                <!-- <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="email" placeholder="Email" name="kh_email">
                                </div> -->
                                <!-- <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Ngày sinh" name="kh_ngaysinh">
                                    <input class="form-control" type="text" placeholder="Tháng sinh"
                                        name="kh_thangsinh">
                                    <input class="form-control" type="text" placeholder="Năm sinh" name="kh_namsinh">
                                </div> -->
                                <!-- <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="CMND" name="kh_cmnd">
                                </div> -->
                                <button class="btn btn-block btn-success" name="btnDangKy">Tạo tài khoản</button>
                            </div>
                            <div class="card-footer p-4">
                                <div class="row">
                                    <div class="col-12">
                                        <center>Nếu bạn đã có Tài khoản, xin mời Đăng nhập</center>
                                        <a class="btn btn-primary form-control"
                                            href="../login_views/login.php">Đăng nhập</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End block content -->
    </main>

    <?php require_once '../footer.php'; ?>