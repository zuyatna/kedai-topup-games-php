<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="body bg-light body-margin">
    <header>
        <nav class="navbar navbar-expand-lg navbar-mid">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold color-primary logo-color" href="index.php" style="color: #007bff;">Kedai Topup</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fw-medium" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="assets/pages/products.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="assets/pages/gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="assets/pages/voucher.php">Voucher</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="assets/pages/about-us.php">About</a>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="assets/pages/contact.php">Contact</a>
                        </li>
                    </ul>
                    <div>
                        <?php if (isset($_SESSION['user_name'])): ?>
                            <a href="assets/pages/profile.php"><img src="assets/images/user-color.png" alt="user" width="25" height="25"></a>
                            <span class="me-2">Hi, <?php echo $_SESSION['user_name']; ?></span>
                        <?php else: ?>
                            <a href="assets/pages/login.php"><img src="assets/images/user-color.png" alt="user" width="25" height="25"></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="margin-section">
            <div class="container">
                <div class="row content-margin">
                    <div class="col-lg-6">
                        <p class="fs-1 fw-semibold">
                            Topup ga ribet,<br> 
                            banyak diskonnya!
                        </p>
                        <p class="fs-5 margin-section">
                            Tempat topup nomor 1 di Indonesia<br>
                            dengan banyak diskon dan promo menarik<br>
                            setiap harinya.
                        </p>
                        <a class="btn btn-primary margin-section" href="assets/pages/products.php" role="button">Shop Now</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-center">
                            <img src="assets/images/lunox-flip.png" alt="hero" class="img-fluid" width="500" height="500">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-dark-light">
            <div class="container">
                <div class="row content-margin">
                    <div class="col-lg-5 margin-section">
                        <p class="fs-1 fw-semibold">Products</p>
                        <p class="fs-5 text-margin-top">
                            Semua game favoritmu ada di sini<br>
                            dengan harga yang terjangkau dan<br>
                            diskon yang menarik.
                        </p>
                        <a class="btn btn-primary margin-section" href="assets/pages/products.php" role="button">Eksplor Game</a>
                    </div>
                    <div class="col-lg-7 margin-child">
                        <div class="row g-4">
                            <div class="col-lg-6 d-flex justify-content-center">
                                <div class="card card-width">
                                    <img src="assets/images/mlbb.png" class="card-img-top" alt="mlbb">
                                    <div class="card-body">
                                        <p class="card-title fs-5 fw-semibold">Mobile Legends</p>
                                        <p class="card-text fs-6 ">Mulai dari Rp 20,900</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex justify-content-center">
                                <div class="card card-width">
                                    <img src="assets/images/wuwa.png" class="card-img-top" alt="wuwa">
                                    <div class="card-body">
                                        <p class="card-title fs-5 fw-semibold">Wuthering Waves</p>
                                        <p class="card-text fs-6">Mulai dari Rp 49,900</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row content-margin end-content-margin">
                    <div class="col-lg-12 margin-section">
                        <p class="fs-1 fw-semibold">Gallery</p>
                    </div>
                    <div class="col-lg-4 margin-section">
                        <div class="card">
                            <img src="assets/images/news1.jpg" class="card-img-top" alt="news1">
                            <div class="card-body">
                                <p class="card-title fs-5 fw-semibold">Reset S34 Mobile Legends: Tanggal, First Purchase S35, dan Penurunan Rank</p>
                                <p class="card-text fs-6">Season 34 MLBB akan segera berakhir dan pemain kini bersiap-siap menyambut musim 35 (S35). Reset musim ini membawa beberapa perubahan penting.</p>
                                <a href="assets/pages/gallery.php" class="btn btn-outline-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 margin-section">
                        <div class="card">
                            <img src="assets/images/news2.jpg" class="card-img-top" alt="news2">
                            <div class="card-body">
                                <p class="card-title fs-5 fw-semibold">Kenalan dengan Astro Bot, Pemenang Game of the Year 2024</p>
                                <p class="card-text fs-6">Astro Bot, game buatan Sony Interactive Entertainment dinobatkan sebagai pemenang Game of the Year 2024.</p>
                                <a href="assets/pages/gallery.php" class="btn btn-outline-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 margin-section">
                        <div class="card">
                            <img src="assets/images/news3.jpg" class="card-img-top" alt="news3">
                            <div class="card-body">
                                <p class="card-title fs-5 fw-semibold">Inilah Hero Indonesia Pertama di Game Honor of Kings 2025</p>
                                <p class="card-text fs-6">Honor of Kings (HOK) akan memperkenalkan hero baru asal Indonesia yang sangat dinanti, yaitu Garuda Khageswara.</p>
                                <a href="assets/pages/gallery.php" class="btn btn-outline-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-darken-light">
            <div class="container">
                <div class="row content-margin">
                    <div class="margin-child">
                        <p class="fs-1 fw-semibold">Diskon Up to 50%</p>
                        <p class="fs-5">Buruan klaim voucher diskon spesial 12.12</p>
                        <a class="btn btn-outline-primary margin-section" href="assets/pages/voucher.php" role="button">Claim Voucher</a>                                               
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container margin-child">
                <div class="row content-margin end-content-margin">
                    <p class="fs-1 fw-semibold">Feedbacks From Our Real Customer</p>
                    <div class="row margin-section">
                        <div class="col-lg-3 d-flex justify-content-center">
                            <img src="assets/images/mamat.png" alt="customer1" class="img-fluid" width="125" height="125">
                        </div>
                        <div class="col-lg-9">
                            <p class="fs-3">Mamat Suramat</p>
                            <p class="fs-5">"Layanan topup di sini sangat cepat dan terpercaya. Diskonnya juga banyak, sangat puas!"</p>                        
                        </div>
                    </div>
                    <div class="row margin-section">
                        <div class="col-lg-3 d-flex justify-content-center">
                            <img src="assets/images/jenny.png" alt="customer2" class="img-fluid" width="125" height="125">
                        </div>
                        <div class="col-lg-9">
                            <p class="fs-3">Jenny Jane</p>
                            <p class="fs-5">"Tempat topup terbaik yang pernah saya temui. Pelayanannya ramah dan cepat. Sangat direkomendasikan!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p class="fs-6 fw-semibold">&copy; 2024 Kedai Topup Games. All rights reserved.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>