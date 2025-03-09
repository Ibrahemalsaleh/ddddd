<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="public/css/landing-about.css">

    <title>People Tells</title>
</head>

<body>
    <?php
    require_once 'views/layout/public/header.php'
    ?>

    <!-- Header Start -->
    <section>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <img src="./public/img/landing/first.webp" class="d-block w-100" height="500" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./public/img/landing/Untitled_design.webp" class="d-block w-100" height="500" alt="...">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- Header End -->

    <!-- Countries Start -->
    <section class="container-fluid my-5">
        <h2 class="text-center mb-5">Countries</h2>
        <div class="row row-cols-3 row-cols-md-3 row-cols-lg-5 g-5">
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="/country/show/1">
                            <img src="<?= asset("img/landing/p.webp") ?>" alt="Palestine Flag" class="img-fluid">
                        </a>

                        <h5 class="card-title">Jordan</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="/country/show/4">
                            <img src="<?= asset("img/landing/f.webp") ?>" alt="Palestine Flag"
                                class="img-fluid">
                        </a>
                        <h5 class="card-title">Palestine</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="/country/show/5">
                            <img src="<?= asset("img/landing/m.webp") ?>" alt="Morocco Flag" class="img-fluid">
                        </a>
                        <h5 class="card-title">Morocco</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="/country/show/3">
                            <img src="<?= asset("img/landing/i.webp") ?>" alt="Italy Flag" class="img-fluid">
                        </a>
                        <h5 class="card-title">Italy</h5>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="/country/show/2">
                            <img src="./public/img/landing/j.webp" alt="Japan Flag" class="img-fluid">
                        </a>
                        <h5 class="card-title">Japan</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Countries End -->

    <!-- Best Selling Start -->
    <section class="container-fluid my-5">
        <h2 class="text-center mb-5">Best Selling</h2>
        <div class="row row-cols-3 row-cols-md-3 row-cols-lg-5 g-5">
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="./public/images/jordan.png" alt="Jordan Flag" class="img-fluid">
                        <h5 class="card-title">Jordan</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="./public/images/palestine.png" alt="Palestine Flag" class="img-fluid">
                        <h5 class="card-title">Palestine</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="./public/images/morocco.png" alt="Morocco Flag" class="img-fluid">
                        <h5 class="card-title">Morocco</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="./public/images/italy.png" alt="Italy Flag" class="img-fluid">
                        <h5 class="card-title">Italy</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="./public/images/japan.png" alt="Japan Flag" class="img-fluid">
                        <h5 class="card-title">Japan</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Best Selling End -->

    <!-- Recommended Start -->
    <section class="container-fluid my-5">
        <h2 class="text-center mb-5">Recommended</h2>
        <div class="row row-cols-3 row-cols-md-3 row-cols-lg-5 g-5">
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="./images/jordan.png" alt="Jordan Flag" class="img-fluid">
                        <h5 class="card-title">Jordan</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="./images/palestine.png" alt="Palestine Flag" class="img-fluid">
                        <h5 class="card-title">Palestine</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="./images/morocco.png" alt="Morocco Flag" class="img-fluid">
                        <h5 class="card-title">Morocco</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="./images/italy.png" alt="Italy Flag" class="img-fluid">
                        <h5 class="card-title">Italy</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="./images/japan.png" alt="Japan Flag" class="img-fluid">
                        <h5 class="card-title">Japan</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Recommended End -->
    <section class="about-section py-5">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 text-center">
                    <img src="<?= asset("img/landing/abo.webp") ?>" alt="About Us" class="img-fluid rounded">
                </div>


                <div class="col-lg-6">
                    <h2 class="fw-bold">About Us</h2>
                    <p class="lead">
                        Welcome to <strong>People Tales</strong>, your gateway to a world of cultural treasures! We are an online platform dedicated to bringing you unique and authentic products from different cultures across the globe. Our mission is to connect people through the beauty of tradition, offering handcrafted items that tell a story.......
                    </p>
                    <a href="/about" class="btn rounded-pill py-3 px-5 animated slideInRight" style="background-color: #198754; color:white">Read more</a>
                </div>
            </div>
        </div>
    </section>

    <?php
    require_once  'views/layout/public/footer.php';
    ?>


    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a> -->

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>