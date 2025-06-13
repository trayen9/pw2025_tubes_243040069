<?php
$conn = new mysqli("localhost", "root", "", "pw2025_tubes_243040069");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$username = $conn->real_escape_string($_POST['username']);
$email = $conn->real_escape_string($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password

// 🔍 Cek apakah username atau email sudah digunakan
$check = $conn->query("SELECT * FROM users WHERE username='$username' OR email='$email'");
if ($check->num_rows > 0) {
    echo "<script>alert('Username atau email sudah terdaftar');window.location='../user_register.php';</script>";
    exit;
}

// 🚀 Lanjut insert jika belum terdaftar
$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
if ($conn->query($query) === TRUE) {
    echo "<script>alert('Registrasi berhasil');window.location='../user.php';</script>";
} else {
    echo "<script>alert('Terjadi kesalahan: $conn->error');window.location='../user_register.php';</script>";
}
$conn->close();
?>
