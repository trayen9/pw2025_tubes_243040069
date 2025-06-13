<?php
session_start();        // Mulai session
session_destroy();      // Hapus semua data session

// Arahkan ke halaman utama
header("Location: ../index.php"); 
exit;
