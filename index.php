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

<body>
    </div>
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

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-col description">
                <h2><span style="color: #7f32ff">Dream</span><span style="color: #ffcc00">Job</span></h2>
                <p>Website Lowongan Kerja dan Loker Terbaru di Indonesia</p>
                <p>
                    DreamJob adalah job portal dan website cari kerja di Indonesia dengan lowongan kerja berkualitas dari perusahaan terbaik.<br>
                </p>
                <p>Dapatkan kesempatan pekerjaan baru & belajar dari Mentor terbaik di Indonesia</p>

            </div>

            <div class="footer-right">

                <div class="footer-col">
                    <h4>Loker</h4>
                    <ul>
                        <li>Loker Penuh Waktu</li>
                        <li>Loker Paruh Waktu</li>
                        <li>Loker Magang</li>
                        <li>Loker Freelance</li>
                    </ul>
                </div>


                <div class="footer-col">
                    <h4>Hubungi Kami</h4>
                    <p>Jl. Dr. Setiabudi No.193, Gegerkalong, Kec. Sukasari, Kota Bandung, Jawa Barat 40153</p>

                    <div class="social-icons">
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2025 <strong>DreamJob.</strong> All rights reserved</p>
        </div>
    </footer>
</body>

</html>