<?php
// This file will be at views/country/show.view.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($country['name']) ?> - Cultural Products</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
     
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="/css/style.css">
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="/public/css/landing-about.css">
    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>
    <?php require_once 'views/layout/public/header.php'; ?>
    
    <!-- Carousel Start -->

    <div class="container-fluid px-0 mb-2">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" height="500" alt="..."
                    src="<?= htmlspecialchars($country['banner_image_url']) ?>" alt="<?= htmlspecialchars($country['name']) ?>">
                    <div class="carousel-caption bg-transparent">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="row w-100">
            <div class="col-lg-6 text-start">
                <p class="fs-4 text-white fw-bold">Welcome To <?= htmlspecialchars($country['name']) ?></p>
                <a href="#product" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">See Products</a>
            </div>
            <div class="col-lg-6 text-end">
                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus dolorem incidunt perferendis eius alias, dignissimos quod, tenetur quis, expedita optio nostrum enim assumenda neque sequi distinctio maxime fugiat ab mollitia?</p>
            </div>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center  px-3" id="product">Our Products</p>
                <h1 class="mb-5"><?= htmlspecialchars($country['name']) ?>'s Products</h1>
            </div>

            <div class="container">
                <div class="row gx-4">
                    <?php foreach ($products as $product): ?>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item">
                            <div class="position-relative">
                                <img class="img-fluid" src="<?= htmlspecialchars($product['product_image_url']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                                <div class="product-overlay">
                                    <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-link"></i></a>
                                    <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-cart"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <p class="d-block h5" href=""><?= htmlspecialchars($product['name']) ?></p>
                                <span class="text me-1 text-center d-block"><?= htmlspecialchars($product['description']) ?></span>

                                <p class="text-primary me-1">$<?= htmlspecialchars($product['price']) ?></p>
                                <p class="text-muted d-none">Category: <?= htmlspecialchars($product['category_name']) ?></p>

                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="<?= htmlspecialchars($country['image1_url'] ?? '/public/img/placeholder.jpg') ?>">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="<?= htmlspecialchars($country['image2_url'] ?? '/public/img/placeholder.jpg') ?>">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="<?= htmlspecialchars($country['image3_url'] ?? '/public/img/placeholder.jpg') ?>">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid rounded" src="<?= htmlspecialchars($country['image4_url'] ?? '/public/img/placeholder.jpg') ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start  pe-3">About <?= htmlspecialchars($country['name']) ?></p>
                    <p class="mb-4"><?= htmlspecialchars($country['description']) ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <?php require_once 'views/layout/public/footer.php'; ?>

    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a> -->

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>