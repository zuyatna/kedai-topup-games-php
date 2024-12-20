<?php
session_start();
require_once '../config/config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM user WHERE user_id = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['update_profile'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        $check_query = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($mysqli, $check_query);
        
        if (mysqli_num_rows($result) > 0) {
            $errorEmail = "Email already registered";
        } else {
            $query = "UPDATE user SET name = ?, email = ? WHERE user_id = ?";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param('ssi', $name, $email, $user_id);
            $stmt->execute();
            $_SESSION['user_name'] = $name;
            echo "<script>alert('Change email successful!'); window.location.href='profile.php';</script>";
        }
    } elseif (isset($_POST['change_password'])) {
        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];

        if ($current_password === $user['password']) {            
            $query = "UPDATE user SET password = ? WHERE user_id = ?";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param('si', $new_password, $user_id);
            $stmt->execute();
            echo "<script>alert('Change password successful!'); window.location.href='profile.php';</script>";
        } else {
            $errorPassword = "Invalid current password";
        }
    } elseif (isset($_POST['delete_account'])) {
        $query = "DELETE FROM users WHERE user_id = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param('i', $user_id);
        $stmt->execute();
        session_destroy();
        header('Location: signup.php');
        exit();
    } elseif (isset($_POST['logout'])) {
        session_destroy();
        header('Location: ../../index.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="id">
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
                <a class="navbar-brand fw-bold color-primary logo-color" href="../../index.php">Kedai Topup</a>                
            </div>
        </nav>
    </header>

    <main>
        <section>
            <div class="container form-login">
                <p class="fs-3 fw-semibold">Profile</p>
                <div class="canvas-form">                    
                    <div class="row justify-content-center margin-section">                        
                        <div class="col">
                            <form method="POST" action="">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput0" class="form-label">Name:</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput0" name="name" value="<?php echo ($user['name']); ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="<?php echo ($user['email']); ?>" required>
                                </div>
                                <?php if (isset($errorEmail)): ?>
                                    <div class="alert alert-danger"><?php echo $errorEmail; ?></div>
                                <?php endif; ?>                            
                                <button class="btn btn-primary btn-login" type="submit" name="update_profile">Update Profile</button>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container form-login">
                <div class="canvas-form">                    
                    <div class="row justify-content-center margin-section">                        
                        <div class="col">
                            <form method="POST" action="">
                            <div class="mb-3">
                                    <label for="exampleFormControlInput2" class="form-label">Current Password:</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="exampleFormControlInput2" name="current_password" placeholder="recent password">
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput3" class="form-label">New Password:</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="exampleFormControlInput3" name="new_password" placeholder="new password">
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword1">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <?php if (isset($errorPassword)): ?>
                                    <div class="alert alert-danger"><?php echo $errorPassword; ?></div>
                                <?php endif; ?>                                                     
                                <button class="btn btn-primary btn-login" type="submit" name="change_password">Change Password</button>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container form-login">
                <div class="canvas-form">                    
                    <div class="row justify-content-center margin-section">                        
                        <div class="col">
                            <form method="POST" action="">
                                <p class="fs-4 fw-semibold color-red">Delete Account</p>                                                           
                                <button class="btn btn-primary btn-login color-red" type="submit" name="delete_account" onclick="return confirm('Are you sure you want to delete your account?');">Delete Account</button>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container form-login">
                <div class="canvas-form">                    
                    <div class="row justify-content-center">                        
                        <div class="col">
                            <form method="POST" action="">                                                           
                                <button class="btn btn-primary btn-login btn-lg" type="submit" name="logout">Logout</button>
                            </form>                    
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