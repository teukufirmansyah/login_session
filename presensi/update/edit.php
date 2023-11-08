<?php
include '../koneksi.php';

if ($_POST) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $query = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

    if (mysqli_query($connection, $query)) {
        header("Location: home.php"); // Redirect ke halaman utama setelah pembaruan berhasil
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
}
