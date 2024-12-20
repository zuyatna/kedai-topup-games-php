<?php
session_start();
require_once('../config/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $errorPassword = "Invalid not match password and confirm password";
    } else {
        $check_query = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($mysqli, $check_query);
        
        if (mysqli_num_rows($result) > 0) {
            $errorEmail = "Email already registered";
        } else {
            $insert_query = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
        
            if (mysqli_query($mysqli, $insert_query)) {
                echo "<script>alert('Registration successful!'); window.location.href='login.php';</script>";
            } else {
                echo "<script>alert('Registration failed'); window.location.href='login.php';</script>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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
                    <p class="fs-3 fw-semibold">Signup</p>
                    <div class="row justify-content-center margin-section">                        
                        <div class="col">
                            <form method="POST" action="">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput0" class="form-label">Name:</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput0" name="name" placeholder="name">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
                                </div>
                                <?php if (isset($errorEmail)): ?>
                                    <div class="alert alert-danger"><?php echo $errorEmail; ?></div>
                                <?php endif; ?>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput2" class="form-label">Password:</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="exampleFormControlInput2" name="password" placeholder="password">
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput3" class="form-label">Confirm Password:</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="exampleFormControlInput3" name="confirm_password" placeholder="confirm password">
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword1">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <?php if (isset($errorPassword)): ?>
                                    <div class="alert alert-danger"><?php echo $errorPassword; ?></div>
                                <?php endif; ?>
                                <div class="mb-3">
                                    <input type="checkbox" class="form-check-input" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">I accept all terms & conditions</label>                           
                                </div>
                                <button class="btn btn-primary btn-login" type="submit">Signup</button>                                
                            </form>
                            <p class="text-center text-margin-top">Already have an account? <a class="text-decoration-none" href="../pages/login.php">Login now</a></p>
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