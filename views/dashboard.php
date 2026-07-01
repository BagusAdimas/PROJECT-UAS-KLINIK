<?php
session_start();
$role = $_SESSION['role'] ?? 'guest';
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard Klinik Harmoni Medika</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
<div class="card shadow">
    <div class="card-body">
    <h3 class="text-center mb-4">Dashboard</h3>

    <?php if ($role == 'admin'): ?>
        <h4>Halo Admin!</h4>
        <ul>
        <li>Kelola User</li>
        <li>Laporan Klinik</li>
        <li>Pengaturan Sistem</li>
        </ul>

    <?php elseif ($role == 'dokter'): ?>
        <h4>Halo Dokter!</h4>
        <ul>
        <li>Daftar Pasien</li>
        <li>Jadwal Praktek</li>
        <li>Rekam Medis</li>
        </ul>

    <?php elseif ($role == 'pasien'): ?>
        <h4>Halo Pasien!</h4>
        <ul>
        <li>Profil Saya</li>
        <li>Janji Temu</li>
        <li>Riwayat Berobat</li>
        </ul>

    <?php else: ?>
        <h4>Halo Gantenk</h4>
        <p>Silakan login dulu untuk melihat dashboard sesuai role.</p>
    <?php endif; ?>

    </div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
