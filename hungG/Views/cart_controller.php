<?php
session_start();

function sanitizeInput($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productId = sanitizeInput($_POST['product_id']);
    $productName = sanitizeInput($_POST['product_name']);
    $price = sanitizeInput($_POST['price']);

    if (!empty($productId) && !empty($productName) && is_numeric($price)) {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        $productFound = false;
        foreach ($_SESSION['cart'] as &$product) {
            if ($product['id'] === $productId) {
                $productFound = true;
                break;
            }
        }

        if (!$productFound) {
            $_SESSION['cart'][] = array(
                'id' => $productId,
                'name' => $productName,
                'price' => $price
            );
        }

        echo "Sản phẩm đã được thêm vào giỏ hàng";
    } else {
        echo "Dữ liệu sản phẩm không hợp lệ. Vui lòng thử lại.";
    }
}

