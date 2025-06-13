<?php
session_start();

require "./koneksi/function.php";

$category = isset($_GET['category']) ? $_GET['category'] : '';
$job_portal_data = query("SELECT * FROM job_portal ORDER BY title ASC");

if ($category === '') {
    $job_portal_data = query("SELECT * FROM job_portal ORDER BY title ASC");
} else {
    $job_portal_data = query("SELECT * FROM job_portal WHERE category = '$category' ORDER BY title ASC");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/kontak.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <?php include './template/navbar.php'; ?>

<section class="py-5 py-5 contact-section">
  <div class="container text-center">
    <h3 class="mb-4">Hubungi Kami untuk Bantuan</h3>
    <hr class="w-25 mx-auto">
    <p class="text-muted">
      Apabila Anda tidak menemukan informasi yang dibutuhkan di bagian Pertanyaan Umum pada FAQ di website Pertamina, 
      Anda dapat menghubungi kami melalui Pertamina Call Center 135 untuk mendapatkan bantuan dan informasi terkait dengan proses rekrutmen Pertamina.
    </p>
    <a href="#" class="btn btn-primary mt-3 fw-bold">TEKAN DISINI</a>
  </div>
</section>

<?php include './template/footer.php'; ?>
</body>
</html>
