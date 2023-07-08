<?php
// Mengambil data dari form login
$email = $_POST['email'];
$password = $_POST['password'];

// TODO: Proses validasi dan autentikasi pengguna
// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die('Koneksi ke database gagal: ' . $conn->connect_error);
}

// Contoh autentikasi sederhana
if ($email == 'user@example.com' && $password == 'password') {
    // Autentikasi berhasil
    header ('Location: index.html');
    exit();
} else {
    // Autentikasi gagal
    echo "Email atau password salah.";
}
?>
