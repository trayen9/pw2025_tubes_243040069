<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    echo "<script>alert('Akses ditolak!'); window.location = '../user.php';</script>";
    exit;
}

require 'functions.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM job_portal WHERE id = $id");
    header("Location: index.php"); // arahkan ke halaman admin, bukan index utama
    exit;
}
?>
