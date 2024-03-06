<?php

// Menambahkan nestedif untuk mengecek nilai
$nilaiNumerik = 92;

if($nilaiNumerik >= 90 && $nilaiNumerik <=100){
    echo "Nilai anda A";
}elseif ($nilaiNumerik >=80 && $nilaiNumerik < 90) {
    echo "Nilai Anda B";
}elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai Anda C";
}elseif($nilaiNumerik < 70){
    echo "Nilai Anda D";
}
echo "<br>";

// Menambahkan perintah while
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";
echo "<br>";

// Menambahkan perintah perulangan for
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
echo "<br>";

// Menambahkan perintah foreach
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";
echo "<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 96];

foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60){
        echo "Nilai: $nilai (Tidak lulus)<br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus)<br>";
}
echo "<br><br>";

/* SOAL CERITA (soal no 4.6)
    Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika. 
    Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. 
    Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan nilai rata-rata 
    setelah mengabaikan nilai tertinggi dan terendah. Berikut daftar 
    nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96)
*/
$nilai_siswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$total_nilai = 0;
$nilai_tertinggi = -1;
$nilai_terendah = 101;

foreach ($nilai_siswa as $nilai) {
    if ($nilai > $nilai_tertinggi) {
        $nilai_tertinggi = $nilai;
    }
    if ($nilai < $nilai_terendah) {
        $nilai_terendah = $nilai;
    }
    $total_nilai += $nilai;
}

$total_nilai -= ($nilai_tertinggi + $nilai_terendah);
$total_nilai -= ($nilai_tertinggi + $nilai_terendah);

$jumlah_siswa = count($nilai_siswa) - 4;
$rata_rata = $total_nilai / $jumlah_siswa;

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $total_nilai . "<br>";
echo "Jumlah siswa yang dihitung: " . $jumlah_siswa . "<br>";
echo "Rata-rata nilai: " . $rata_rata;
echo "<br><br>";

/* SOAL CERITA (soal no 4.7) 
    Seorang pelanggan ingin membeli sebuah produk dengan harga Rp 120.000. 
    Toko tersebut menawarkan diskon sebesar 20% untuk pembelian di atas Rp 100.000. 
    Bantu pelanggan ini untuk menghitung harga yang harus 
    dibayar setelah mendapatkan diskon.
*/
$harga_produk = 120000;

if ($harga_produk > 100000) {
    $diskon = $harga_produk * 0.20;
    $harga_setelah_diskon = $harga_produk - $diskon;
    echo "Harga yang harus dibayar setelah diskon: Rp " . number_format($harga_setelah_diskon, 0, ",", ".");
} else {
    echo "Harga yang harus dibayar: Rp " . number_format($harga_produk, 0, ",", ".");
}
echo "<br><br>";

/* SOAL CERITA (soal no 4.8)
    Seorang pemain game ingin menghitung total skor mereka dalam permainan. 
    Mereka mendapatkan skor berdasarkan poin yang mereka kumpulkan. 
    Jika mereka memiliki lebih dari 500 poin, maka mereka akan mendapatkan hadiah tambahan. 
    Buat tampilan baris pertama “Total skor pemain adalah: (poin)”. 
    Dan baris kedua “Apakah pemain mendapatkan hadiah tambahan? (YA/TIDAK)”
*/
$skor = 700;
echo "Total skor pemain adalah: " . $skor . "<br>";

if ($skor > 500) {
    echo "Apakah pemain mendapatkan hadiah tambahan? YA";
} else {
    echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK";
}
?>
