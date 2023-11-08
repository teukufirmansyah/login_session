<?php
$namafile = "data.txt";
$handle = fopen ($namafile, "r");
if (!$handle) {
echo "<b>File tidak dapat dibuka atau belum ada</b>";
} else {
$isi = fgets ($handle, 2048);
$isi2 = fread ($handle, 20);
echo "Isi 1 : $isi<br>";
echo "Isi 2 : $isi2<br>";
}
fclose($handle);
