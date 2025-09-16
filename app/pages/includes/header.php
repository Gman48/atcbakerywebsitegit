<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=APP_NAME?> - <?=ucfirst($URL[0])?></title>
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/styles.css?<?= time();?>">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- REMIXICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

    <!-- Swiper cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- ========= AOS CSS ========= -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

<header>
<!-- bootstrap navbar from order -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top mb-5 py-3">
        <div class="container">
            <img class="logo" src="<?=ROOT?>/assets/images/logo_final.png">
            <h2 class="brand">Around The Corner Bakery</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="<?=ROOT?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=ROOT?>/prod_gallery">Products</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="<?=ROOT?>/#events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=ROOT?>/event_gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=ROOT?>/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=ROOT?>/#cta">Order</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="<?=ROOT?>/admin">Admin</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                        <a href="account.html"><i class="fas fa-user"></i></a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav> <!-- END bootstrap navigation bar END -->
</header>