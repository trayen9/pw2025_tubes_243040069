<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>

<header class="header">
    <div class="nav-container">
        <div class="nav-left">
            <div class="logo">DreamJob</div>
            <a href="#">Lowongan</a>
            <a href="#">Perusahaan</a>
            <a href="#">Tentang Kami</a>
            <a href="#">Kontak</a>
        </div>

        <div class="nav-right">
            <?php if (isset($_SESSION['username'])): ?>
                <span class="user-greeting">Halo, <?= htmlspecialchars($_SESSION['username']); ?></span>
                <a href="logout.php" class="btn-primary">Logout</a>
            <?php else: ?>
                <a href="user.php">Masuk</a>
                <a href="user_register.php">Daftar</a>
                <a href="#" class="btn-primary">Untuk Perusahaan</a>
            <?php endif; ?>

            <input type="checkbox" id="mobile-menu-toggle" class="mobile-menu-toggle">
            <label for="mobile-menu-toggle" class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </label>

            <div class="mobile-nav">
                <div class="mobile-nav-content">
                    <a href="#">Loker</a>
                    <a href="#">Perusahaan</a>
                    <?php if (isset($_SESSION['username'])): ?>
                        <span class="user-greeting">Hi, <?= htmlspecialchars($_SESSION['username']); ?></span>
                        <a href="logout.php">Logout</a>
                    <?php else: ?>
                        <a href="user.php">Masuk</a>
                        <a href="user_register.php">Daftar</a>
                        <a href="#" class="btn-primary">Untuk Perusahaan</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>