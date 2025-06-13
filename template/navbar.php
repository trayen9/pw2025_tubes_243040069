<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


$user_role = $_SESSION['role'] ?? 'guest';
$is_logged_in = isset($_SESSION['username']); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar DreamJob</title>
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="nav-container">
            <div class="nav-left">
                <div class="logo">DreamJob</div>
                <a href="/pw2025_tubes_243040069/index.php">Beranda</a>
                <a href="/pw2025_tubes_243040069/lowongan.php">Lowongan</a>
                <a href="/pw2025_tubes_243040069/kontak.php">Kontak</a>

                <?php
                
                if ($user_role === 'admin'):
                ?>
                    <a href="/pw2025_tubes_243040069/admin/index.php">Panel Admin</a>
                <?php endif; ?>
            </div>

            <div class="nav-right">
                <?php if ($is_logged_in): ?>
                    <span class="user-greeting">Halo, <?= htmlspecialchars($_SESSION['username']); ?></span>
                    <a href="/pw2025_tubes_243040069/user/logout.php" class="btn-primary">Logout</a>
                <?php else: ?>
                    <a href="/pw2025_tubes_243040069/user.php">Masuk</a>
                    <a href="/pw2025_tubes_243040069/user_register.php">Daftar</a>
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
                        <?php
                        
                        if ($user_role === 'admin'):
                        ?>
                            <a href="/pw2025_tubes_243040069/admin/dashboard.php">Panel Admin</a>
                        <?php endif; ?>

                        <?php if ($is_logged_in): ?>
                            <span class="user-greeting">Hi, <?= htmlspecialchars($_SESSION['username']); ?></span>
                            <a href="/pw2025_tubes_243040069/user/logout.php">Logout</a>
                        <?php else: ?>
                            <a href="/pw2025_tubes_243040069/user.php">Masuk</a>
                            <a href="/pw2025_tubes_243040069/user_register.php">Daftar</a>
                            <a href="#" class="btn-primary">Untuk Perusahaan</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>