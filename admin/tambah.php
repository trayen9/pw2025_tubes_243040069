<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    echo "<script>alert('Akses ditolak!'); window.location = '../user.php';</script>";
    exit;
}

require 'functions.php';

if (isset($_POST['submit'])) {
    // ambil data dari form
    $title = $_POST['title'];
    $company_name = $_POST['company_name'];
    $location = $_POST['location'];
    $minimum_education = $_POST['minimum_education'];
    $work_type = $_POST['work_type'];
    $salary = $_POST['salary'];
    $recruiter_time = $_POST['recruiter_time'];
    $category = $_POST['category'];

    // upload logo
    $namaFile = $_FILES['company_logo']['name'];
    $tmpName = $_FILES['company_logo']['tmp_name'];

    // generate nama unik agar tidak bentrok
    $ekstensi = pathinfo($namaFile, PATHINFO_EXTENSION);
    $namaBaru = uniqid() . '.' . $ekstensi;

    move_uploaded_file($tmpName, '../image/' . $namaBaru);

    // simpan ke database
    $conn = koneksi();
    $query = "INSERT INTO job_portal 
(title, company_name, location, minimum_education, work_type, company_logo, recruiter_time, category, salary)
VALUES 
('$title', '$company_name', '$location', '$minimum_education', '$work_type', '$namaBaru', '$recruiter_time', '$category', '$salary')";

    mysqli_query($conn, $query);

    // kembali ke halaman daftar
    header("Location: /pw2025_tubes_243040069/index.php");
exit;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Lowongan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
    <h2>Tambah Lowongan Kerja</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="company_name" class="form-label">Nama Perusahaan</label>
            <input type="text" name="company_name" id="company_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Lokasi</label>
            <input type="text" name="location" id="location" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="minimum_education" class="form-label">Pendidikan Minimal</label>
            <input type="text" name="minimum_education" id="minimum_education" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="work_type" class="form-label">Tipe Kerja</label>
            <input type="text" name="work_type" id="work_type" class="form-control" required>
        </div>
        <div class="mb-3">
    <label for="salary" class="form-label">Gaji</label>
    <input type="text" name="salary" id="salary" class="form-control" required>
</div>

        <div class="mb-3">
        <label for="company_logo" class="form-label">Logo Perusahaan</label>
        <input type="file" name="company_logo" id="company_logo" class="form-control" accept="image/*" required>
    </div>
        <div class="mb-3">
            <label for="recruiter_time" class="form-label">Tanggal Rekrutmen</label>
            <input type="date" name="recruiter_time" id="recruiter_time" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <input type="text" name="category" id="category" class="form-control" required>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Simpan</button>
    </form>
</body>
</html>
