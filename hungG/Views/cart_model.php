<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function addToCart($productId, $productName, $price) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    $_SESSION['cart'][] = array(
        'id' => $productId,
        'name' => $productName,
        'price' => $price
    );
}

function removeFromCart($productId) {
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $product) {
            if ($product['id'] === $productId) {
                unset($_SESSION['cart'][$key]);
                
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                return true;
            }
        }
    }
    return false;
}

function calculateTotal() {
    $total = 0;
    if (!empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product) {
            $total += $product['price'];
        }
    }
    return $total;
}

function processCheckout() {
   
}

function sanitizeInput($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['product_id'], $_POST['product_name'], $_POST['price'])) {
        $productId = sanitizeInput($_POST['product_id']);
        $productName = sanitizeInput($_POST['product_name']);
        $price = sanitizeInput($_POST['price']);

        if (!empty($productId) && !empty($productName) && is_numeric($price)) {
            addToCart($productId, $productName, $price);
            echo "Sản phẩm đã được thêm vào giỏ hàng.";
        } else {
            echo "Dữ liệu sản phẩm không hợp lệ. Vui lòng thử lại.";
        }
    } elseif (isset($_POST['remove_from_cart'], $_POST['product_id'])) {
        $productId = sanitizeInput($_POST['product_id']);
        if (removeFromCart($productId)) {
            echo "Sản phẩm đã được xóa khỏi giỏ hàng.";
        } else {
            echo "Không tìm thấy sản phẩm trong giỏ hàng.";
        }
    }
}

