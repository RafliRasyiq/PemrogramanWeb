<?php
$nama = @$_GET['nama']; //tanda @ agar tidak ada peringatan error ketika key-nya kosong
$usia = @$_GET['usia']; //tanda @ agar tidak ada peringatan error ketika key-nya kosong

echo "Halo {$nama}! Apakah benar anda berusia {$usia}tahun?";
// Soal 23
/* Jika kita mengakses file tersebut dengan query string dibawah ini, 
output apa yang dihasilkan, amati dan bagaimana hasilnya */
// maka output yang dihasilkan sesuai yang kita inputkan pada bagian url
?>