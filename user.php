<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="./css/user.css">
</head>

<body>
    <div class="container-box">
        <div class="form-box">
            <h3 class="mb-4">Login</h3>
            <form action="koneksi/login.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <p><a href="#">Forgot Password?</a></p>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <p class="text-center mt-3">or login with</p>
            <div class="text-center social-btns">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-github"></i>
                <i class="fab fa-linkedin"></i>
            </div>
        </div>
        <div class="blue-box">
            <h3>Hello, Welcome!</h3>
            <p>Don't have an account?</p>
            <a href="user_register.php" class="btn btn-outline-light">Register</a>
        </div>
    </div>
</body>

</html>