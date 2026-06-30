<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Daftar - Klinik Harmoni Medika</title>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card shadow">
        <div class="card-body">
            <h3 class="text-center mb-4">Daftar Akun</h3>
            <form method="post" action="../proses_register.php">
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor Telepon</label>
                <input type="text" name="telepon" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Daftar</button>
            </form>
            <p class="text-center mt-3">
            Sudah punya akun? <a href="login.php">Login di sini</a>
            </p>
        </div>
        </div>
    </div>
    </div>
</div>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
