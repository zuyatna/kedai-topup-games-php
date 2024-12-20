<?php
session_start();
require_once '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['change_password'])) {
        $password = $_POST['password'];
        $email = $_POST['email'];
        
        $insert_query = "UPDATE user SET password = '$password' WHERE email = '$email'";
        
        if (mysqli_query($mysqli, $insert_query)) {
            echo "<script>alert('Change password successful!'); window.location.href='login.php';</script>";
        } else {
            echo "<script>alert('Change password failed'); window.location.href='login.php';</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="body bg-light body-margin">
    <div id="particles-js"></div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-mid">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold color-primary logo-color" href="../../index.php">Kedai Topup</a>
            </div>
        </nav>
    </header>

    <main>
        <section>
            <div class="container form-login form-margin-top">
                <div class="canvas-form">
                    <p class="fs-3 fw-semibold">Forgot Password</p>
                    <div class="row justify-content-center margin-section">                        
                        <div class="col">
                            <form method="POST" action="">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
                                </div>                                
                                <div class="mb-3">
                                    <label for="exampleFormControlInput2" class="form-label">New Password:</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="exampleFormControlInput2" name="password" placeholder="new password">
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>                                                          
                                <button class="btn btn-primary btn-login" type="submit" name="change_password">Change Password</button>
                            </form>                            
                            <p class="text-center text-margin-top">Back to <a class="text-decoration-none" href="../pages/login.php">Login</a></p>
                        </div>
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