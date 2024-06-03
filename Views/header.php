<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Custom css - Các file css do chúng ta tự viết -->
    <link rel="stylesheet" href="../assets/css/product-detail.css" type="text/css">
    <style>
        .dieu_huong {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            position: absolute;
        }

        .dieu_huong .fa-arrow-left {
            cursor: pointer;
            font-size: 24px;
            padding: 10px;
            position: absolute;
            top: -170px;
        }

        .dieu_huong .fa-arrow-right {
            cursor: pointer;
            font-size: 24px;
            padding: 10px;
            position: absolute;
            top: -170px;
            right: 30px;
        }

        .sizes div {
            display: inline-block;
            margin: 0 10px;
            padding: 5px 10px;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        .sizes div:hover {
            background-color: #ff9f1a;
            color: white;
        }

        .colors {
            margin-bottom: 30px;
        }

        .colors div {
            display: inline-block;
            margin: 0 10px;
            padding: 5px 10px;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        .colors div:hover {
            background-color: #ff9f1a;
            color: white;
        }

        .h1, .table1 {
            text-align: center;
            margin: 20px auto;
        }

        .table1 {
            border: 1px solid red;
            width: 1100px;
        }

        .td1 {
            width: 30%;
            border: 1px solid blue;
        }

        .td2 {
            width: 20%;
            border: 1px solid blue;
        }
    </style>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
        <div class="container">
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index_views/index.php">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../News_views/News.php">Tin tức</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="about.html">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Liên hệ</a>
                    </li> -->
                </ul>
                <form class="form-inline mt-2 mt-md-0" method="get" action="search.html">
                    <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm" aria-label="Search"
                        name="keyword_tensanpham">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                </form>
            </div>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <!-- <a class="nav-link" href="cart.html">Giỏ hàng</a> -->
                </li>
                <li class="nav-item text-nowrap">
                    <!-- Nếu chưa đăng nhập thì hiển thị nút Đăng nhập -->
                    <a class="nav-link" href="../login_views/login.php">Đăng nhập</a>
                </li>
            </ul>
        </div>
    </nav>