<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
    <?php include_once(__DIR__ . '/../layouts/styles.php'); ?>
</head>
<body>
    <?php include_once(__DIR__ . '/../layouts/partials/header.php'); ?>
    <div class="container mt-5 pt-5">
        <h1>Cảm ơn bạn đã đặt hàng!</h1>
        <p>Đơn hàng của bạn đang được xử lý. Chúng tôi sẽ liên hệ sớm nhất có thể.</p>
        <a href="/myshop/frontend/" class="btn btn-primary">Tiếp tục mua sắm</a>
    </div>
    <?php include_once(__DIR__ . '/../layouts/partials/footer.php'); ?>
    <?php include_once(__DIR__ . '/../layouts/scripts.php'); ?>
</body>
</html>
