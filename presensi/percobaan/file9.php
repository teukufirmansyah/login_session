<?php
rmdir ($dir);
//buat direktori
$dir = "images"; //nama direktori
//hapus direktori
$del = rmdir ($dir);
if ($del) {
echo "<br>Direktori <b>$dir</b> berhasil dihapus";
} else {
echo "<br>Direktori <b>$dir</b> gagal dihapus";
}
