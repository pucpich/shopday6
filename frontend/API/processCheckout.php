<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['user']) || empty($_SESSION['cart'])) {
        header('Location: /myshop/frontend/pages/cart.php');
        exit;
    }

    $shipping_address = $_POST['shipping_address'] ?? '';
    $payment_method = $_POST['payment_method'] ?? 'cod';
    $cart = $_SESSION['cart'];
    $user_id = $_SESSION['user']['id'];

    // Lưu đơn hàng vào database
    include_once(__DIR__ . '/../../dbconnect.php');

    // Thêm đơn hàng (order)
    $sql_order = "INSERT INTO orders (user_id, shipping_address, payment_method, created_at)
                  VALUES ('$user_id', '$shipping_address', '$payment_method', NOW())";
    mysqli_query($conn, $sql_order);
    $order_id = mysqli_insert_id($conn);

    // Thêm từng chi tiết đơn hàng (order_items)
    foreach ($cart as $item) {
        $product_id = $item['id'];
        $quantity = $item['quantity'];
        $price = $item['price'];
        $sql_detail = "INSERT INTO order_items (order_id, product_id, quantity, price)
                       VALUES ('$order_id', '$product_id', '$quantity', '$price')";
        mysqli_query($conn, $sql_detail);
    }

    // Xoá giỏ hàng
    unset($_SESSION['cart']);

    // Chuyển hướng đến trang cảm ơn
    header('Location: /myshop/frontend/pages/thankyou.php');
    exit;
}
