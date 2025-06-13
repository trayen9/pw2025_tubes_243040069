<?php
if (isset($_POST['submit'])) {
    $conn = mysqli_connect("localhost", "root", "", "pw2025_tubes_243040069");

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    $username = htmlspecialchars($_POST['username']);
    $email    = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $role     = 'user';

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Cek apakah username atau email sudah dipakai
    $check = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' OR email = '$email'");
    if (mysqli_num_rows($check) > 0) {
        echo "<script>alert('Username atau email sudah digunakan!'); window.location='user_register.php';</script>";
        exit;
    }

    // Insert ke DB
    $query = "INSERT INTO users (username, email, password, role) VALUES ('$username', '$email', '$hashed_password', '$role')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Registrasi berhasil! Silakan login'); window.location='user.php';</script>";
    } else {
        echo "<script>alert('Registrasi gagal!'); window.location='user_register.php';</script>";
    }

    // Contoh di file register Anda, setelah pengguna berhasil terdaftar di database:
// Insert data pengguna baru ke database dengan peran default, misalnya 'user'
// Contoh: INSERT INTO users (username, password, role) VALUES ('nama_baru', 'password_hash', 'user');

// Setelah pendaftaran, arahkan ke halaman login
header('Location: user.php'); // Atau login.php
exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="./css/user.css">
</head>
<body>
<div class="container-box">
    <div class="form-box">
        <h3 class="mb-4">Register</h3>
        <form action="user/register.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
        <p class="text-center mt-3">or register with</p>
        <div class="text-center social-btns">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-github"></i>
            <i class="fab fa-linkedin"></i>
        </div>
    </div>
    <div class="blue-box">
        <h3>Welcome Back!</h3>
        <p>Already have an account?</p>
        <a href="user.php" class="btn btn-outline-light">Login</a>
    </div>
</div>
</body>
</html>