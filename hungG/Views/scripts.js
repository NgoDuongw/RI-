function addToCart(productId, productName, price) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "cart_model.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            alert(xhr.responseText); // Hiển thị phản hồi từ máy chủ
        }
    };
    xhr.send(`product_id=${encodeURIComponent(productId)}&product_name=${encodeURIComponent(productName)}&price=${encodeURIComponent(price)}`);
}