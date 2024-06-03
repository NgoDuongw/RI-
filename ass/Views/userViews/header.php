<!-- header for main -->

<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>

    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="./vendor/font-awesome/css/font-awesome.min.css" type="text/css">

    <link rel="stylesheet" href="./assets/css/app.css" type="text/css">
    <style>
        * {
            position: relative;
        }

        footer {
            position: absolute;
            bottom: -100px;
            width: 100%;
            text-align: center;
        }

        footer>.container {
            display: flex;
            flex-direction: row;
            align-content: space-between;
        }

        footer>.container>span {
            margin: 0px 10px;
        }

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
            width: 900px;
        }

        .td1 {
            width: 30%;
        }

        .td2 {
            width: 50%;
            font-size: 30px;
        }

        h1 {
            text-align: center;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 3px rgba(0,0,0,0.1);
        }

        table tr th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        table tr th {
            background-color: #f2f2f2;
            color: #555;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        .form {
            max-width: 400px;
            margin: 10px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form label {
            margin-bottom: 8px;
            color: #333;
        }

        .form input[type = "text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form input[type = "password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form input[type = "file"] {
            margin-bottom: 10px;
        }

        .form textarea {
            height: 130px;
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form input[type = "submit"] {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .form input[type = "submit"]:hover {
            background-color: #4cae4c;
        }

        a {
            text-decoration: none;
            color: #337ab7;
        }

        a:hover {
            text-decoration: underline;
        }

        .a {
            text-decoration: none;
            color: #337ab7;
        }

        .a:hover {
            text-decoration: underline;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
        <div class="container">
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="./indexUser.php">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./News.php">Tin tức</a>
                    </li>
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
                    <a class="nav-link" href="./user.php">Tài khoản</a>
                </li>
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="./managePro.php">Quản lý</a>
                </li>
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="./logout.php">Đăng xuất</a>
                </li>
            </ul>
        </div>
    </nav>