<?php
session_start();

// Pastikan form dikirim via POST
if (!isset($_POST['username']) || !isset($_POST['password'])) {
    echo "<script>alert('Silakan login melalui form!'); window.location='../user.php';</script>";
    exit;
}

// Koneksi ke database
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'pw2025_tubes_243040069';
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Query user
$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    // Verifikasi password hash
    if (password_verify($password, $row['password'])) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['role']     = $row['role'];

        // Redirect sesuai role
        if ($row['role'] === 'admin') {
            header("Location: ../index.php");
        } else {
            header("Location: ../index.php");
        }
        exit;
    }

    // Contoh di file login Anda, setelah verifikasi kredensial berhasil:
$_SESSION['logged_in'] = true;
$_SESSION['username'] = $username_dari_database;
$_SESSION['role'] = $role_dari_database; // <-- Ini tempatnya diset!
header('Location: index.php'); // Arahkan ke halaman utama atau dashboard
exit();
}

// Jika gagal login
echo "<script>alert('Username atau password salah!'); window.location='../user.php';</script>";
exit;
