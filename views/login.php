<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login - Klinik Harmoni Medika</title>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card shadow">
        <div class="card-body">
            <h3 class="text-center mb-4">Login</h3>
            <form method="post" action="../proses_login.php">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Role</label>
                <select name="role" class="form-select" required>
                <option value="admin">Admin</option>
                <option value="dokter">Dokter</option>
                <option value="pasien">Pasien</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <p class="text-center mt-3">
            Belum punya akun? <a href="register.php">Daftar di sini</a>
            </p>
        </div>
        </div>
    </div>
    </div>
</div>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
