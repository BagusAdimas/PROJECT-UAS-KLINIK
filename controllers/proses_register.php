<?php
include 'koneksi.php';

$nama    = $_POST['nama'];
$email   = $_POST['email'];
$telepon = $_POST['telepon'];
$password= $_POST['password'];

$sql = "INSERT INTO users (nama, email, telepon, password, role) 
        VALUES ('$nama', '$email', '$telepon', '$password', 'pasien')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Registrasi berhasil, silakan login');window.location='views/login.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
