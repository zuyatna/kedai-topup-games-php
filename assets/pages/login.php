<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="body bg-light body-margin">
    <div id="particles-js"></div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-mid">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold color-primary logo-color" href="../../index.php" style="color: #007bff;">Kedai Topup</a>                
            </div>
        </nav>
    </header>

    <main>
        <section>
            <div class="container form-login form-margin-top">
                <div class="canvas-form">
                    <p class="fs-3 fw-semibold">Login</p>
                    <div class="row justify-content-center margin-section">                        
                        <div class="col">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput2" class="form-label">Password:</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="Password">
                                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-3 row g-3">
                                <div class="col">                        
                                    <input type="checkbox" class="form-check-input" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <a href="#" class="text-decoration-none">Forgot password?</a>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-login">Login</button>
                            <p class="text-center text-margin-top">Don't have an account? <a class="text-decoration-none" href="../pages/signup.html">Signup now</a></p>
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