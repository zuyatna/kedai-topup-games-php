<?php
session_start();
require_once('../config/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $fullName = $firstName . ' ' . $lastName;
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    echo "$fullName";

    $insert_query = "INSERT INTO contact_form (name, email, subject, message) VALUES ('$fullName', '$email', '$subject', '$message')";
        
    if (mysqli_query($mysqli, $insert_query)) {
        echo "<script>alert('Message has been send. Thank You!'); window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('Failed sending a message'); window.location.href='contact.php';</script>";
        error_log("MySQL error: " . mysqli_error($mysqli));
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
                            <a class="nav-link fw-medium" href="../pages/gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="../pages/voucher.php">Voucher</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="../pages/about-us.php">About</a>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link active fw-medium" aria-current="page" href="#">Contact</a>
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
        <section class="about-us-section py-5">
            <div class="container form-contact">
                <h2 class="text-center mb-4">Contact Us</h2>
                <p class="text-center mb-4">
                    Jika Anda memiliki pertanyaan, masukan, atau permintaan, jangan ragu untuk menghubungi kami menggunakan formulir di bawah ini. Kami menghargai masukan Anda dan akan segera menghubungi Anda kembali.
                </p>
                <form class="form-margin-top" method="POST" action="">
                    <div class="mb-3 row">
                        <label class="form-label">Name*</label>
                        <div class="col">                        
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject*</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message*</label>
                        <textarea class="form-control" id="message" rows="4" name="message" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>           
        </section>
    </main>

    <footer class="footer">
        <p class="fs-6 fw-semibold">&copy; 2024 Kedai Topup Games. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>