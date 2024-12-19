<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voucher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="body bg-light body-margin">
    <div id="particles-js"></div>
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
                            <a class="nav-link fw-medium" href="../pages/products.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="../pages/gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active fw-medium" aria-current="page" href="#">Voucher</a>
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
                <div class="row">
                    <div class="margin-child">
                        <p class="fs-1 fw-semibold">Klaim Voucher</p>
                        <p class="fs-5">Coba keberuntunganmu untuk bisa mendapatkan diskon up to 50%</p>                          
                        <button class="btn btn-outline-primary margin-section gacha">Gacha!</button>                                           
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container discount-container">
                <!-- discount text -->
            </div>
        </section>
    </main>

    <footer class="footer">
        <p class="fs-6 fw-semibold">&copy; 2024 Kedai Topup Games. All rights reserved.</p>
    </footer>
    
    <script src="../scripts/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
</body>
</html>