<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DreamJob - Job Portal</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<?php include 'data/navbar.php' ?>

<body>
    </div>
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
            <a href="#" class="job-category">Semua Pekerjaan</a>
            <a href="#" class="job-category">Driver</a>
            <a href="#" class="job-category">BusDev & Sales</a>
            <a href="#" class="job-category">Design & Creative</a>
            <a href="#" class="job-category">IT & Engine.</a>
            <a href="#" class="job-category">Admin & Ops</a>
            <a href="#" class="job-category">Health & Science</a>
        </div>
    </main>

    <div class="container">
        <div class="content-section">
            <h1>Temukan pekerjaan yang diinginkan</h1>
            <p>Dapatkan kemudahan akses ke berbagai daftar pekerjaan, dan informasi tentang lowongan pekerjaan terbaru.</p>
            <button class="search-button">Cari Lowongan Sekarang</button>
        </div>

        <div class="hero-image">
            <img src="./image/foto.png" alt="">
        </div>
    </div>

    <?php include 'data/footer.php' ?>
</body>

</html>