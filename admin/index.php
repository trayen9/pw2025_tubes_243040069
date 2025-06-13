<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    echo "<script>alert('Akses ditolak!'); window.location = '../user.php';</script>";
    exit;
}

require "functions.php";
$job_portal = query("SELECT * FROM job_portal ORDER BY title ASC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Lowongan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Daftar Lowongan Kerja</h1>
                <a href="tambah.php" class="btn btn-primary mb-3">Tambah Lowongan</a>
                <table class="table table-striped table-hover">
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>company_name</th>
                        <th>location</th>
                        <th>minimum_education</th>
                        <th>work_type</th>
                        <th>salary</th>
                        <th>company_logo</th>
                        <th>recruiter_time</th>
                        <th>category</th>
                        <th>aksi</th>

                    </tr>
                    <?php $i = 1;
                    foreach ($job_portal as $job) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $job['title']; ?></td>
                            <td><?= $job['company_name']; ?></td>
                            <td><?= $job['location']; ?></td>
                            <td><?= $job['minimum_education']; ?></td>
                            <td><?= $job['work_type']; ?></td>
                            <td><?= $job['salary']; ?></td>
                            <td>
                                <img src="../image/Logo_UNPAS.png" width="20">
                            </td>
                            <td><?= $job['recruiter_time']; ?></td>
                            <td><?= $job['category']; ?></td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                                <a href="delete.php?id=<?= $job['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>