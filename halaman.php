<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DreamJob - Job Portal</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="nav-container">
            <div class="nav-left">
                <div class="logo">DreamJob</div>
                <a href="#">Lowongan</a>
                <a href="#">Kategori</a>
                <a href="#">Perusahaan</a>
                <a href="#">Tentang Kami</a>
                <a href="#">Kontak</a>
            </div>
            <div class="nav-right">
                <span>Masuk</span>
                <span>Daftar</span>
                <a href="#" class="btn-primary">Untuk Perusahaan</a>

                <!-- Mobile Menu Toggle -->
                <input type="checkbox" id="mobile-menu-toggle" class="mobile-menu-toggle">
                <label for="mobile-menu-toggle" class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </label>

                <!-- Mobile Navigation -->
                <div class="mobile-nav">
                    <div class="mobile-nav-content">
                        <a href="#">Loker</a>
                        <a href="#">Mentoring</a>
                        <a href="#">Perusahaan</a>
                        <a href="#">Events</a>
                        <a href="#">AI CV Analyzer</a>
                        <a href="#">Masuk</a>
                        <a href="#">Daftar</a>
                        <a href="#" class="btn-primary">Untuk Perusahaan</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

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
                    <option>Level</option>
                    <option>Entry Level</option>
                    <option>Mid Level</option>
                    <option>Senior Level</option>
                </select>
                <select class="filter-btn">
                    <option>Jenis</option>
                    <option>Full Time</option>
                    <option>Part Time</option>
                    <option>Contract</option>
                    <option>Internship</option>
                </select>
                <select class="filter-btn">
                    <option>Tipe</option>
                    <option>On-site</option>
                    <option>Remote</option>
                    <option>Hybrid</option>
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
            </div>
        </div>

        <div class="job-categories">
            <a href="#" class="job-category">Semua Pekerjaan</a>
            <a href="#" class="job-category">Data & Product</a>
            <a href="#" class="job-category">BusDev & Sales</a>
            <a href="#" class="job-category">Design & Creative</a>
            <a href="#" class="job-category">Marketing & SocMed</a>
            <a href="#" class="job-category">Finance & Account</a>
            <a href="#" class="job-category">Recruiting & People</a>
            <a href="#" class="job-category">IT & Engine.</a>
            <a href="#" class="job-category">Admin & Ops</a>
            <a href="#" class="job-category">Health & Science</a>
        </div>
    </main>
</body>

</html>