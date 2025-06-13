<?php
$conn = new mysqli("localhost", "root", "", "pw2025_tubes_243040069");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

session_start();

$username = $conn->real_escape_string($_POST['username']);
$password = $_POST['password'];

// Ambil data user berdasarkan username
$result = $conn->query("SELECT * FROM users WHERE username='$username'");
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    
    // Verifikasi password
    if (password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        echo "<script>alert('Login berhasil');window.location='../index.php';</script>";
    } else {
        echo "<script>alert('Password salah');window.location='../user.php';</script>";
    }
} 
else {
    echo "<script>alert('Username tidak ditemukan');window.location='../user.php';</script>";
}

$conn->close();
?>
