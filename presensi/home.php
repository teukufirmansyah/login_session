<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<br><a href="create.php" class="btn btn-dark">Tambah Data</a>
<h3>Data yang Tersimpan</h3>

<table class="table table-striped-columns table-bordered">
    <thead class="table-info">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "koneksi.php";
        $sql = "SELECT * FROM users"; // Ganti 'nama_tabel' dengan nama tabel Anda
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>

    <a href='update/koneksi_edit.php?id" . $row['id'] . "' class='btn btn-info btn-sm'>Edit</a>
    <a href='delete.php' class='btn btn-danger btn-sm'>Hapus</a>
</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Tidak ada data tersimpan</td></tr>";
        }
        ?>
    </tbody>
</table>