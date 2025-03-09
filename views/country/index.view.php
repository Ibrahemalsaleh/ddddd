<?php
// This file will be at views/country/index.view.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cultural Destinations</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    
    <!-- Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    
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
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="public/css/landing-about.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <?php require_once 'views/layout/public/header.php'; ?>

    <!-- Page Header -->
    <!-- <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-white text-uppercase">Cultural Destinations</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-light" href="/">Home</a>
                        <i class="fas fa-angle-right text-light mx-2"></i>
                        <a class="btn btn-outline-light disabled" href="">Destinations</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
    <!-- Countries Section -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center px-3">Explore Countries</p>
            </div>
            
            <div class="container text-center">
    <div class="row justify-content-center g-4">
        <?php foreach ($countries as $country): ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="card border-0 shadow-sm mb-4">
                <img class="card-img-top mx-auto d-block" src="<?= htmlspecialchars($country['image_url']) ?>" alt="<?= htmlspecialchars($country['name']) ?>" style="max-width: 100%; height: auto;">
                <div class="card-body p-4">
                    <h5 class="card-title"><?= htmlspecialchars($country['name']) ?></h5>
                    <p class="card-text"><?= htmlspecialchars(substr($country['description'], 0, 150)) ?>...</p>
                    <a href="/country/show/<?= $country['id'] ?>" class="btn" style="background-color: #198754; color: white;">Explore Products</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>


        </div>
    </div>

    <?php require_once 'views/layout/public/footer.php'; ?>

    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a> -->

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>