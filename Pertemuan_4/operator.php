<?php
/* Penambahan operator pada file operator.php */
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

/* Penambahan untuk menampilkan hasil operator */
echo "Hasil tambah dari: ". $a ."+". $b ."= $hasilTambah <br>";
echo "Hasil kurang dari: ". $a ."-". $b ."= $hasilKurang <br>";
echo "Hasil kali dari: ". $a ."*". $b ."= $hasilKali <br>";
echo "Hasil bagi dari: ". $a ."/". $b ."= $hasilBagi <br>";
echo "Hasil sisa bagi dari: ". $a ."%". $b ."= $sisaBagi <br>";
echo "Hasil pangkat dari: ". $a ."**". $b ."= $pangkat <br>";
echo "<br><br>";

// Menambahkan operator pembanding
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

// Menambahkan echo untuk memanggil variable yang berisi hasil opertor pembanding
echo "Hasil Sama dari: ". $a ."==". $b ." hasilnya: $hasilSama <br>";
echo "Hasil Tidak Sama dari: ". $a ."!=". $b ." hasilnya: $hasilTidakSama <br>";
echo "Hasil Lebih Kecil dari: ". $a ."<". $b ." hasilnya: $hasilLebihKecil <br>";
echo "Hasil Lebih Besar dari: ". $a .">". $b ." hasilnya: $hasilLebihBesar <br>";
echo "Hasil Lebih Kecil Sama dari: ". $a ."<=". $b ." hasilnya: $hasilLebihKecilSama <br>";
echo "Hasil Lebih Besar Sama dari: ". $a .">=". $b ." hasilnya: $hasilLebihBesarSama <br>";
echo "<br><br>";

// Menambahkan operator Bitwise
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// Menambahkan echo untuk menampilkan operator diatas
echo "Hasil AND dari: ". $a ."&&". $b ." hasilnya: $hasilAnd <br>"; 
echo "Hasil OR dari: ". $a ."||". $b ." hasilnya: $hasilOr <br>";
echo "Hasil NOT A dari: !(". $a .") hasilnya: $hasilNotA <br>";
echo "Hasil NOT B dari: !(".$b.") hasilnya: $hasilNotB <br>";
echo "<br><br>";

// Menambahkan operator Penugasan
// Menambahkan echo untuk menampilkan operator 
$a += $b;
echo "Hasil dari penjumlahan +=: ". $a ."<br>";
$a -= $b;
echo "Hasil dari pengurangan -=: ". $a ."<br>";
$a *= $b;
echo "Hasil dari perkalian *=: ". $a ."<br>";
$a /= $b;
echo "Hasil dari pembagian /=: ". $a ."<br>";
$a %= $b;
echo "Hasil dari sisa bagi %=: ". $a ."<br>";
echo "<br><br>";

// Menambahkan operator Identik
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

// Menambahkan echo untuk menampilkan operator diatas
echo "Hasil dari ". $a ." identik dengan ". $b ." : $hasilIdentik <br>";
echo "Hasil dari ". $a ." tidak identik dengan ". $b ." : $hasilTidakIdentik <br>";
echo "<br><br>";


?>