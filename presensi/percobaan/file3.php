<?php
$namafile = "data.txt";
$handle = fopen ($namafile, "w");
if (!$handle) {
echo "<b>File tidak dapat dibuka atau belum ada</b>";
} else {
fwrite ($handle, "Fakultas Teknologi Informasi\n");
fputs ($handle, "Universitas Budi Luhur\n");
//file_put_contents ($namafile, "Jakarta");
echo "<b>File berhasil ditulis</b>";
}
fclose($handle);
