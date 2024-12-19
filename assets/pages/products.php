<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Products</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body class="body bg-light body-margin">
        <header>
            <nav class="navbar navbar-expand-lg navbar-mid">
                <div class="container-fluid">
                    <a class="navbar-brand fw-bold color-primary logo-color" href="../../index.php" style="color: #007bff;">Kedai Topup</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link fw-medium" href="../../index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active fw-medium" aria-current="page" href="#">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-medium" href="../pages/gallery.php">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-medium" href="../pages/voucher.php">Voucher</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-medium" href="../pages/about-us.php">About</a>
                            </li>                        
                            <li class="nav-item">
                                <a class="nav-link fw-medium" href="../pages/contact.php">Contact</a>
                            </li>
                        </ul>
                        <div>
                            <?php if (isset($_SESSION['user_name'])): ?>
                                <a href="../pages/profile.php"><img src="../images/user-color.png" alt="user" width="25" height="25"></a>
                                <span class="me-2"><?php echo $_SESSION['user_name']; ?></span>
                            <?php else: ?>
                                <a href="../pages/login.php"><img src="../images/user-color.png" alt="user" width="25" height="25"></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <section>
                <div class="container">
                    <div class="margin-section">
                        <p class="fs-1 fw-semibold">Populer</p>                        
                    </div>
                    <div class="row g-4 card-parent">
                        <div class="col-6 col-sm-3 mx-auto d-flex justify-content-center">
                            <div class="card card-width card-pointer" onclick="getProduct('Mobile Legends')">
                                <img src="../images/mlbb.png" class="card-img-top" alt="mlbb">
                                <div class="card-body">
                                    <p class="card-title fs-5 fw-semibold">Mobile Legends</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 mx-auto d-flex justify-content-center">
                            <div class="card card-width card-pointer" onclick="getProduct('Free Fire')">
                                <img src="../images/freefire.jpg" class="card-img-top" alt="mlbb">
                                <div class="card-body">
                                    <p class="card-title fs-5 fw-semibold">Free Fire</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 mx-auto d-flex justify-content-center">
                            <div class="card card-width card-pointer" onclick="getProduct('Wuthering Waves')">
                                <img src="../images/wuwa.png" class="card-img-top" alt="mlbb">
                                <div class="card-body">
                                    <p class="card-title fs-5 fw-semibold">Wuthering Waves</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 mx-auto d-flex justify-content-center">
                            <div class="card card-width card-pointer" onclick="getProduct('Genshin Impact')">
                                <img src="../images/genshin-impact.png" class="card-img-top" alt="mlbb">
                                <div class="card-body">
                                    <p class="card-title fs-5 fw-semibold">Genshin Impact</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 mx-auto d-flex justify-content-center">
                            <div class="card card-width card-pointer" onclick="getProduct('Honkai: Star Rail')">
                                <img src="../images/honkai-star-rail.png" class="card-img-top" alt="mlbb">
                                <div class="card-body">
                                    <p class="card-title fs-5 fw-semibold">Honkai: Star Rail</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 mx-auto d-flex justify-content-center">
                            <div class="card card-width card-pointer" onclick="getProduct('Infinity Nikki')">
                                <img src="../images/infinity-nikki.jpg" class="card-img-top" alt="mlbb">
                                <div class="card-body">
                                    <p class="card-title fs-5 fw-semibold">Infinity Nikki</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 mx-auto d-flex justify-content-center">
                            <div class="card card-width card-pointer" onclick="getProduct('PUBG: Mobile')">
                                <img src="../images/pubg.png" class="card-img-top" alt="mlbb">
                                <div class="card-body">
                                    <p class="card-title fs-5 fw-semibold">PUBG: Mobile</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 mx-auto d-flex justify-content-center">
                            <div class="card card-width card-pointer" onclick="getProduct('Arknights')">
                                <img src="../images/arknights.png" class="card-img-top" alt="mlbb">
                                <div class="card-body">
                                    <p class="card-title fs-5 fw-semibold">Arknights</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-darken-light">
                <div class="container">
                    <div class="row">
                        <div class="margin-child">
                            <p class="fs-1 fw-semibold">Diskon Up to 50%</p>
                            <p class="fs-5">Buruan klaim voucher diskon spesial 12.12</p>                        
                            <a class="btn btn-outline-primary margin-section" href="../pages/voucher.php" role="button">Claim Voucher</a>                                               
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="margin-section">
                        <div class="mb-3 margin-child">
                            <p class="form-label fs-4 fw-semibold">Nama Game:</p>
                            <input class="form-control input-game" type="text" id="name-game" name="name-game" value="Pilih game terlebih dahulu..." aria-label="readonly input example" readonly>
                        </div>                     
                    </div>
                    <div class="margin-section">
                        <p class="form-label fs-4 fw-semibold">Pilih Item:</p>
                        <div class="row g-4 margin-child pilih-item">
                            <!-- pilih-item -->
                            <p class="fs-6 fw-normal">Pilih game terlebih dahulu!</p>
                        </div>
                    </div>                
                </div>
            </section>
            <section>
                <div class="container payment-parent">                
                    <div class="row align-items-center">
                        <div class="col payment-summary">
                            <!-- payment-summary -->
                        </div>
                    </div>                  
                </div>
            </section>
        </main>

        <footer class="footer">
            <p class="fs-6 fw-semibold">&copy; 2024 Kedai Topup Games. All rights reserved.</p>
        </footer>
        
        <script src="../scripts/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>