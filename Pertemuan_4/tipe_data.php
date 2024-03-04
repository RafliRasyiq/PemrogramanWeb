<?php
/* Penambahan variabel dengan tipe data int */
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";
echo "<br>";

var_dump($e);

/* Penambahan variabel nilaiMatematika, nilaiIPA, nilaiBahasaIndonesia dengan tipe data float */
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";

var_dump($rataRata);
echo "<br>";

/* Penambahan variabel apakahSiswaLulus dan apakahSiswaSudahUjian dengan tipe data boolean */
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

echo "<br>";
var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);

echo "<br>";

/* Penambahan variabel dengan tipe data String */
$namaDepan = "Ibnu";
$namaBelakang = 'Jakaria';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

echo "<br>";
echo "nama Depan: {$namaDepan} <br>";
echo ' Nama Belakang: ' . $namaBelakang . '<br>';
echo $namaLengkap;
?>