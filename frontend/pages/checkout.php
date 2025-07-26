<?php session_start(); ?>
<?php
// Kiểm tra đăng nhập
if (!isset($_SESSION['user'])) {
    header('Location: /myshop/frontend/pages/login.php');
    exit;
}

$cart = $_SESSION['cart'] ?? [];
$total = 0;
foreach ($cart as $item) {
    $total += $item['price'] * $item['quantity'];
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Checkout - MyShop</title>
    <?php include_once(__DIR__ . '/../layouts/styles.php'); ?>
</head>
<body>
    <?php include_once(__DIR__ . '/../layouts/partials/header.php'); ?>
    <div class="container mt-5 pt-5">
        <h1>Checkout</h1>

        <?php if (!empty($cart)): ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart as $item): ?>
                        <tr>
                            <td><?= htmlspecialchars($item['name']) ?></td>
                            <td><?= $item['quantity'] ?></td>
                            <td><?= number_format($item['price'], 0, ',', '.') ?> vnđ</td>
                            <td><?= number_format($item['price'] * $item['quantity'], 0, ',', '.') ?> vnđ</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="text-end"><strong>Tổng cộng:</strong></td>
                        <td><strong><?= number_format($total, 0, ',', '.') ?> vnđ</strong></td>
                    </tr>
                </tfoot>
            </table>

            <form action="/myshop/frontend/api/processCheckout.php" method="post">
                <div class="mb-3">
                    <label for="shipping_address" class="form-label">Địa chỉ giao hàng</label>
                    <textarea class="form-control" id="shipping_address" name="shipping_address" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="payment_method" class="form-label">Phương thức thanh toán</label>
                    <select class="form-control" id="payment_method" name="payment_method" required>
                        <option value="cod">Thanh toán khi nhận hàng (COD)</option>
                        <option value="momo">Momo</option>
                        <option value="vnpay">VNPay</option>
                        <option value="bank">Chuyển khoản ngân hàng</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Xác nhận đơn hàng</button>
            </form>
        <?php else: ?>
            <p>Giỏ hàng của bạn đang trống. <a href="/myshop/frontend/">Tiếp tục mua sắm</a></p>
        <?php endif; ?>
    </div>
    <?php include_once(__DIR__ . '/../layouts/partials/footer.php'); ?>
    <?php include_once(__DIR__ . '/../layouts/scripts.php'); ?>
</body>
</html>
