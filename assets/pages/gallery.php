<?php
session_start();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="body bg-light body-margin">
    <div id="particles-js"></div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-mid">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold color-primary logo-color" href="../../index.php">Kedai Topup</a>
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
                            <a class="nav-link active fw-medium" aria-current="page" href="#">Gallery</a>
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
                            <span class="me-2">Hi, <?php echo $_SESSION['user_name']; ?></span>
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
                <div class="row content-margin end-content-margin">
                    <div class="col-lg-12 margin-section">
                        <div class="row g-2 justify-content-start">
                            <div class="col-auto">
                                <button type="button" class="btn btn-outline-secondary">Promo</button>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-outline-secondary">Acara</button>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-outline-secondary">Esport</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 margin-section">
                        <div class="card">
                            <img src="../images/news1.jpg" class="card-img-top" alt="news1">
                            <div class="card-body">
                                <p class="card-title fs-5 fw-semibold">Reset S34 Mobile Legends: Tanggal, First Purchase S35, dan Penurunan Rank</p>
                                <p class="card-text fs-6">Season 34 MLBB akan segera berakhir dan pemain kini bersiap-siap menyambut musim 35 (S35). Reset musim ini membawa beberapa perubahan penting.</p>
                                <a href="#" class="btn btn-outline-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 margin-section">
                        <div class="card">
                            <img src="../images/news2.jpg" class="card-img-top" alt="news2">
                            <div class="card-body">
                                <p class="card-title fs-5 fw-semibold">Kenalan dengan Astro Bot, Pemenang Game of the Year 2024</p>
                                <p class="card-text fs-6">Astro Bot, game buatan Sony Interactive Entertainment dinobatkan sebagai pemenang Game of the Year 2024.</p>
                                <a href="#" class="btn btn-outline-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 margin-section">
                        <div class="card">
                            <img src="../images/news3.jpg" class="card-img-top" alt="news3">
                            <div class="card-body">
                                <p class="card-title fs-5 fw-semibold">Inilah Hero Indonesia Pertama di Game Honor of Kings 2025</p>
                                <p class="card-text fs-6">Honor of Kings (HOK) akan memperkenalkan hero baru asal Indonesia yang sangat dinanti, yaitu Garuda Khageswara.</p>
                                <a href="#" class="btn btn-outline-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 margin-section">
                        <div class="card">
                            <img src="../images/news4.jpg" class="card-img-top" alt="news1">
                            <div class="card-body">
                                <p class="card-title fs-5 fw-semibold">Skin Memory Chip Arli HoK: Review, Cara Mendapatkan, dan Harganya</p>
                                <p class="card-text fs-6">Skin Memory Chip Arli Honor of Kings telah dirilis pada tanggal 13 September 2024. Skin tersebut menjadi salah satu item terbaru yang mencuri perhatian pemain.</p>
                                <a href="#" class="btn btn-outline-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 margin-section">
                        <div class="card">
                            <img src="../images/news5.jpg" class="card-img-top" alt="news2">
                            <div class="card-body">
                                <p class="card-title fs-5 fw-semibold">Free Fire x Windah Basudara: Bocoran Fitur Voice Pack Terbaru</p>
                                <p class="card-text fs-6">Free Fire kembali menghadirkan kolaborasi menarik yang menggaet voice pack Youtuber Windah Basudara voice pack. Kolaborasi ini tidak hanya memanjakan pemain dengan suara khas Windah.</p>
                                <a href="#" class="btn btn-outline-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 margin-section">
                        <div class="card">
                            <img src="../images/news6.jpg" class="card-img-top" alt="news3">
                            <div class="card-body">
                                <p class="card-title fs-5 fw-semibold">Inilah Serba Serbi Update Patch OB46 Free Fire 2024</p>
                                <p class="card-text fs-6">Free Fire kembali menghadirkan update patch besar dengan membawa banyak perubahan signifikan. Berbagai perubahan tersebut tentu akan memengaruhi gameplay dan strategi para pemain.</p>
                                <a href="#" class="btn btn-outline-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container d-flex justify-content-center end-content-margin">
                <div class="row justify-content-center">
                    <div class="col-auto"></div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link active" aria-current="page" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
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