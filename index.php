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
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DreamJob - Job Portal</title>
    
    
    <link rel="stylesheet" href="./css/job_portal.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <?php include './template/navbar.php'; ?>

    <main class="main-container">
        <h1 class="hero-title">
            Find Your Dream Remote Job
</h1>

        <div class="categories">
            <a href="#" class="category-item">
                <div class="category-icon"></div>
                Butuh Cepat
            </a>
            <a href="#" class="category-item">
                <div class="category-icon"></div>
                Top Company
            </a>
            <a href="#" class="category-item">
                <div class="category-icon"></div>
                Kerja Remote
            </a>
            <a href="#" class="category-item">
                <div class="category-icon"></div>
                Fresh Graduate
            </a>
        </div>

        <div class="search-section">
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Search">
                <button class="search-btn"><i class="fas fa-search"></i></button>
            </div>

            <input type="text" id="live-search-input" placeholder="Cari..." autofocus>

<div id="search-results">
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('live-search-input');
        const searchResultsDiv = document.getElementById('search-results');

        // Mendeteksi setiap ketikan pada input
        searchInput.addEventListener('keyup', function() {
            const searchTerm = this.value.trim(); // Ambil nilai input dan hapus spasi di awal/akhir

            // Jika input kosong, sembunyikan atau bersihkan hasil dan jangan kirim permintaan
            if (searchTerm === '') {
                searchResultsDiv.innerHTML = ''; // Mengosongkan hasil
                // searchResultsDiv.style.display = 'none'; // Atau menyembunyikan div jika kosong
                return;
            }

            // // Jika tidak kosong, pastikan div hasil terlihat
            // searchResultsDiv.style.display = 'block';

            // Membuat objek XMLHttpRequest (untuk AJAX)
            const xhr = new XMLHttpRequest();

            // Mengatur metode (GET) dan URL untuk permintaan AJAX
            // 'nama_file_proses_search_anda.php' adalah file PHP yang akan memproses pencarian
            // 'q=' + encodeURIComponent(searchTerm) adalah data yang akan dikirim (query parameter)
            xhr.open('GET', 'nama_file_proses_search_anda.php?q=' + encodeURIComponent(searchTerm), true);

            // Fungsi yang dijalankan saat respons dari server diterima
            xhr.onload = function() {
                if (xhr.status === 200) { // Jika respons berhasil (kode 200 OK)
                    // Perbarui div #search-results dengan data yang diterima dari server
                    searchResultsDiv.innerHTML = xhr.responseText;
                } else {
                    // Tangani kesalahan jika ada
                    searchResultsDiv.innerHTML = '<p style="color: red;">Terjadi kesalahan saat mencari.</p>';
                    console.error('Request gagal. Status: ' + xhr.status);
                }
            };

            // Mengirim permintaan
            xhr.send();
        });
    });
</script>

            <div class="filter-buttons">
                <select class="filter-btn">
                    <option>Jenis</option>
                    <option>Full Time</option>
                    <option>Part Time</option>
                    <option>Magang</option>
                    <option>Freelance</option>
                </select>
                <select class="filter-btn">
                    <option>Tipe</option>
                    <option>On-site</option>
                    <option>Remote</option>
                </select>
                <select class="filter-btn">
                    <option>Lokasi</option>
                    <option>Jakarta</option>
                    <option>Bandung</option>
                    <option>Surabaya</option>
                </select>
                <select class="filter-btn">
                    <option>Gaji</option>
                    <option>
                        < 5 Juta</option>
                    <option>5-10 Juta</option>
                    <option>> 10 Juta</option>
                </select>
                <select class="filter-btn">
                    <option>Pendidikan</option>
                    <option>SMA / SMK / MA</option>
                    <option>Diploma / D3 / D4</option>
                    <option>Sarjana / S1</option>
                </select>
            </div>
        </div>

        <h1 class="section-title">Bidang Pekerjaan Terpopuler</h1>
        <div class="job-categories">
            <a href="index.php" class="job-category">Semua Pekerjaan</a>
            <a href="index.php?category=driver" class="job-category">Driver</a>
            <a href="index.php?category=sales" class="job-category">BusDev & Sales</a>
            <a href="index.php?category=creative" class="job-category">Design & Creative</a>
            <a href="index.php?category=it" class="job-category">IT & Engine</a>
            <a href="index.php?category=admin" class="job-category">Admin & Ops</a>
            <a href="index.php?category=health" class="job-category">Health & Science</a>
        </div>


        <div class="job-listings">
            <?php if (!empty($job_portal_data)) : ?>
                <?php foreach ($job_portal_data as $job) : ?>
                    <div class="job-card">
                        <div class="company-info">
                            <img src="./image/Logo_UNPAS.png"
                                alt="<?= htmlspecialchars($job['company_name'] ?? 'Perusahaan Tidak Diketahui'); ?> Logo"
                                class="company-logo">
                            <div>
                                <h3><?= htmlspecialchars($job['title'] ?? 'Judul Tidak Tersedia'); ?></h3>
                                <h4><?= htmlspecialchars($job['company_name'] ?? 'Perusahaan Tidak Diketahui'); ?></h4>
                            </div>
                        </div>
                        <p class="job-detail-row"><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars($job['location'] ?? '-'); ?></p>
                        <p class="job-detail-row"><i class="fas fa-graduation-cap"></i> <?= htmlspecialchars($job['minimum_education'] ?? '-'); ?></p>
                        <p class="job-detail-row"><i class="fas fa-money-bill-wave"></i> <?= htmlspecialchars($job['work_salary'] ?? '-'); ?></p>
                        <p class="job-detail-row"><i class="fas fa-briefcase"></i> <?= htmlspecialchars($job['work_type'] ?? '-'); ?></p>
                        <p class="recruiter-time"><?= htmlspecialchars($job['recruiter_time'] ?? '-'); ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>Tidak ada lowongan pekerjaan yang ditemukan saat ini.</p>
            <?php endif; ?>
        </div>
    </main>

    <div class="container">
        <div class="content-section">
            <h1>Temukan pekerjaan yang diinginkan</h1>
            <p>Dapatkan kemudahan akses ke berbagai daftar pekerjaan, dan informasi tentang lowongan pekerjaan terbaru.</p>
            <button class="search-button">Cari Lowongan Sekarang</button>
        </div>

        <div class="hero-image">
            <img src="./image/foto.png" alt="Ilustrasi Temukan Pekerjaan Impian Anda">
        </div>
    </div>

    <?php include './template/footer.php'; ?>
</body>

</html>