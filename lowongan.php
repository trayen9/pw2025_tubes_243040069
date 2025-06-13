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
        <div class="search-section">
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Search">
                <button class="search-btn"><i class="fas fa-search"></i></button>
            </div>

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

    <?php include './template/footer.php'; ?>
</body>
</html>