<?php require_once './header.php'; ?>

<main role="main">
        <form name="frmForgotPassword" id="frmForgotPassword" method="POST" action="">
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card mx-4">
                            <div class="card-body p-4">
                                <h1>Quên Mật Khẩu</h1>
                                <p class="text-muted">Nhập tên tài khoản hoặc email để khôi phục mật khẩu</p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Tên tài khoản hoặc Email"
                                        name="usernameOrEmail" required>
                                </div>
                                <button class="btn btn-block btn-success" name="btnForgotPassword">Gửi yêu cầu</button>
                            </div>
                            <div class="card-footer p-4">
                                <div class="row">
                                    <div class="col-12">
                                        <center>Nếu bạn đã nhớ mật khẩu, xin mời Đăng nhập</center>
                                        <a class="btn btn-primary form-control" href="./login.php">Đăng nhập</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>

    <?php require_once './footer.php'; ?>