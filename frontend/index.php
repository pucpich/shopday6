<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myshop</title>
    <?php include_once(__DIR__. '/layouts/styles.php') ?>
</head>
<body>
    <?php include_once(__DIR__ . '/layouts/partials/header.php'); ?>
    
    <main>
        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../assets/uploads/slider/hinh4.jpg" class="d-block w-100" alt="Slide 1" style="height: 500px; object-fit: cover;">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Xả kho – Giá sốc chưa từng có!</h1>
                            <p class="opacity-75">Chỉ hôm nay – Giảm đến 50%!.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../assets/uploads/slider/hinh5.jpg" class="d-block w-100" alt="Slide 2" style="height: 500px; object-fit: cover;">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Mua nhiều giảm lớn – Tiết kiệm tối đa!</h1>
                            <p>Săn sale chớp nhoáng – Hết giờ là hết hàng!</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../assets/uploads/slider/hinh6.jpg" class="d-block w-100" alt="Slide 3" style="height: 500px; object-fit: cover;">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>Mua giá giảm – Chất lượng không giảm!</h1>
                            <p>Chi tiêu thông minh – Mua sắm giá hời!</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Marketing section -->
        <div class="container marketing">
            <div class="row text-center">
                <div class="col-lg-4">
                    <i class="fa fa-credit-card-alt fa-3x mb-3" aria-hidden="true"></i>
                    <h2 class="fw-normal">Purchase</h2>
                    <p>Some representative placeholder content for this column.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div>
                <div class="col-lg-4">
                    <i class="fa fa-archive fa-3x mb-3" aria-hidden="true"></i>
                    <h2 class="fw-normal">Storage</h2>
                    <p>Another exciting bit of placeholder content for this column.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div>
                <div class="col-lg-4">
                    <i class="fa fa-line-chart fa-3x mb-3" aria-hidden="true"></i>
                    <h2 class="fw-normal">Analytics</h2>
                    <p>This column highlights your site's growth potential.</p>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- Featurette -->
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">ROG Astral GeForce RTX™ 5080<span class="text-muted">It'll blow your mind.</span></h2>
                    <p class="lead">Dòng ROG Astral mới lấy cảm hứng từ vẻ đẹp và sự bao la vô hạn của vũ trụ, và là minh chứng cho sự cống hiến không ngừng nghỉ để khám phá và xác định những ranh giới mới. Với tinh thần đó, ROG Astral GeForce RTX 5080 giới thiệu card đồ họa bốn quạt đầu tiên của ROG, kết hợp với buồng hơi được cấp bằng sáng chế, mật độ cánh tản nhiệt tăng lên, miếng đệm nhiệt GPU thay đổi pha, tốc độ xung nhịp mặc định cao ngất ngưởng, khả năng cung cấp điện năng được tăng cường cùng các tính năng khác. Những cải tiến cao cấp này - được khuếch đại bởi khung đúc nguyên khối bắt mắt và giá đỡ GPU bằng kim loại - kết hợp để mang lại hiệu năng tuyệt đối có thể xử lý ngay cả những cảnh game đòi hỏi cấu hình khắt khe nhất</p>
                </div>
                <div class="col-md-5">
                    <img src="../assets/uploads/slider/hinh7.jpg" class="d-block w-100" alt="Slide 1" style="height: 500px; object-fit: cover;">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">ROG ZEPHYRUS G16 (GU605) <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Zephyrus G16 2025 và Windows 11 Pro cho phép chơi game, sáng tạo cùng nhiều tác vụ khác trở nên thật dễ dàng. Được trang bị bộ vi xử lên đến Intel® Core™ Ultra 9 285H và GPU Laptop lên đến NVIDIA® GeForce RTX™ 5090, cỗ máy 16 inch này có thể dễ dàng xử lý các tựa game mới nhất cũng như các phần mềm sáng tạo tối tân. Zephyrus G16 có thể dễ dàng phiên âm ghi chú bằng giọng nói thành tài liệu dạng văn bản, tiết kiệm vốn thời gian quý báu khi kết xuất video và chơi các tựa game AAA mới nhất với tần số làm mới siêu nhanh. Tương lai bắt đầu từ đây.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="../assets/uploads/slider/hinh8.jpg" class="d-block w-100" alt="Slide 1" style="height: 500px; object-fit: cover;">
                </div>
            </div>
<hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">ROG Strix OLED XG27AQDMG <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead">Màn hình gaming ROG Strix OLED XG27AQDMG ― Tấm nền WOLED bóng 27 inch (kích thước hiển thị 26.5 inch) 1440p, 240 Hz, 0,03 ms, tản nhiệt tùy chỉnh, công nghệ chống nhấp nháy OLED, ASUS OLED Care, độ sáng đồng đều, tương thích G-SYNC®, 99% DCI-P3, và phần mềm DisplayWidget Center.</p>
                </div>
                <div class="col-md-5">
                    <img src="../assets/uploads/slider/hinh9.jpg" class="d-block w-100" alt="Slide 1" style="height: 500px; object-fit: cover;">
                </div>
            </div>

            <hr class="featurette-divider">
        </div>

        <!-- Product List -->
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                <?php
                include_once(__DIR__ . '/../dbconnect.php');
                $conn = connectDb();
                $sql ="SELECT id, name, description, price, image_url FROM products";
                $result = $conn->query($sql);
                $data = [];
                if($result->num_rows > 0){
                    while($row = $result->fetch_array(MYSQLI_ASSOC)){
                        $data[] = $row;
                    }
                    $result->free_result();
                }
                $conn->close();
                ?>
                <?php foreach($data as $item): ?>
                <div class="col">
                    <div class="card shadow-sm">
                        <a href="pages/details.php?id=<?= $item['id'] ?>">
                            <img src="../assets/shared/img/<?= $item['image_url'] ?>" alt="<?= htmlspecialchars($item['name']) ?>" class="img-fluid" style="height: 225px; object-fit: cover;">
                        </a>
                        <div class="card-body">
                            <p class="card-text">
                                <a href="pages/details.php?id=<?= $item['id'] ?>" class="text-decoration-none text-dark"><?= htmlspecialchars($item['name']) ?></a>
                            </p>
                            <p class="card-text text-danger"><?= number_format($item['price'], 0, ',', '.') ?> ₫</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="pages/details.php?id=<?= $item['id'] ?>" class="btn btn-sm btn-outline-secondary">View</a>
                                </div>
                                <button class="btn btn-sm btn-outline-secondary add-to-cart-btn"
                                    data-id="<?= $item['id'] ?>"
                                    data-name="<?= htmlspecialchars($item['name']) ?>"
                                    data-price="<?= $item['price'] ?>"
                                    data-image="<?= $item['image_url'] ?>"
                                    data-quantity="1">Add cart</button>
                            </div>
                        </div>
</div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <?php include_once(__DIR__ . '/layouts/partials/footer.php'); ?>
    <?php include_once(__DIR__ . '/layouts/scripts.php'); ?>

    <!-- Add to Cart Script -->
    <script>
    document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            const data = {
                id: this.dataset.id,
                name: this.dataset.name,
                price: this.dataset.price,
                image: this.dataset.image,
                quantity: this.dataset.quantity
            };

            fetch('/myshop/frontend/api/addCart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams(data)
            })
            .then(res => res.json())
            .then(response => {
                if (response.success) {
                    alert("🛒 Đã thêm vào giỏ hàng!");
                } else {
                    alert("❌ Lỗi khi thêm giỏ hàng.");
                }
            })
            .catch(err => {
                console.error(err);
                    alert("🛒 Đã thêm vào giỏ hàng!");
            });
        });
    });
    </script>
</body>
</html>
