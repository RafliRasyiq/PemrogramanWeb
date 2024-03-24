<?php
// $pesan = "Saya arek malang";
// echo strrev($pesan)."<br>";
// Soal 15
/* Amati hasil yang ditampilkan dan jelaskan hasil pengamatanmu  */
// maka hasil yang ditampilkan akan terbalik, dimulai dari kata malang menjadi gnalam

$pesan = "saya arek malang";
# ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerKata = explode(" ", $pesan);
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
#gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan."<br>";
// Soal 16
/* Amati hasil yang ditampilkan dan jelaskan hasil pengamatanmu  */
// maka hasil yang ditampilkan akan terbalik tertapi urut sesuai dengan isi dari $pesan

?>  