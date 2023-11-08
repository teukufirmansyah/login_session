<?php
// Konfigurasi database
$host = "localhost"; // Ganti dengan host database Anda
$username = "root"; // Ganti dengan nama pengguna database Anda
$password = ""; // Ganti dengan kata sandi database Anda
$database = "berita_acara_kuliah"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Memeriksa apakah formulir login telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query SQL untuk memeriksa kecocokan username dan password
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login berhasil, arahkan ke halaman lain
        header("Location: home.php");
    } else {
        // Login gagal
        echo "Login gagal. Silakan cek kembali username dan password Anda.";
    }
}

// Menutup koneksi database
mysqli_close($koneksi);
