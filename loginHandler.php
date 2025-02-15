<?php
// Mengambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];
$captcha = $_POST['captcha'];

// Validasi captcha di sini, misalnya menggunakan sesi atau API captcha

// Cek apakah username dan password cocok
if ($username === "admin" && $password === "password123") {
    // Arahkan ke halaman beranda jika login berhasil
    header('Location: dashboard.php');
    exit();
} else {
    echo "Username atau password salah.";
}
?>
