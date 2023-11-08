<?php
// Konfigurasi database
$servername = "localhost"; // Ganti dengan host database Anda
$username = "root"; // Ganti dengan nama pengguna database Anda
$password = ""; // Ganti dengan kata sandi database Anda
$database = "berita_acara_kuliah"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$koneksi = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Mengambil data dari formulir registrasi (menggantinya dengan input yang sesuai)
$Nama = $_POST['username'];
$Email = $_POST['email'];
$Password = $_POST['password'];

// Menyisipkan data ke dalam database (menggantinya dengan query SQL yang sesuai)
$query = "INSERT INTO users (username, email, password) VALUES ('$Nama', '$Email', '$Password')";

if (mysqli_query($koneksi, $query)) {
    echo "Registrasi berhasil!";
    header("Location: login.php");
} else {
    echo "Registrasi gagal: " . mysqli_error($koneksi);
}

// Menutup koneksi database
mysqli_close($koneksi);
