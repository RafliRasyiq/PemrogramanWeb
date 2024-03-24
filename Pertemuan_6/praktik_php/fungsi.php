<?php

// function perkenalan(){
// echo "Assalamualaikum, ";
// echo "Perkenalkan, nama saya Rafli<br/>";
// echo "Senang berkenalan dengan Anda<br/>";
// }
// //memanggil fungsi yang sudah dibuat
//  Soal 4
/* Simpan file dan jalankan kode program dengan cetak sebanyak 2 kali, 
   Amati hasil yang ditampilkan dan jelaskan hasil pengamatanmu!*/
// Hasilnya tetap sama, tidak terdapat perubahan. Karena hanya memangginya 2 kali
// perkenalan();
// perkenalan();

// function perkenalan($nama, $salam){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }
// perkenalan("Rafli","Hallo");
// echo "<hr>";
// $saya = "Rafli";
// $ucapanSalam = "Selamat pagi";
// perkenalan($saya, $ucapanSalam);
/** Soal 5
 * Amati hasil yang ditampilkan dan jelaskan hasil pengamatanmu!
 */
// Hasil yang ditampilkan merupakan contoh dari penggunaan parameter

//  function perkenalan($nama, $salam="Assalamualaikum"){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }
// perkenalan("Rafli","Hallo");
// echo "<hr>";
// $saya = "Rafli";
// $ucapanSalam = "Selamat pagi";
// perkenalan($saya);

/** Soal 6
 * Amati hasil yang ditampilkan dan jelaskan hasil pengamatanmu! 
 */
//  Hasil yang ditampilkan adalah salam pertama yang telah disediakan dalam parameter

//  function hitungUmur($thn_lahir, $thn_sekarang){
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
//  }
//  echo "Umur saya adalah ".hitungUmur(2003, 2024)."tahun"
/** Soal 7
 *  Amati hasil yang ditampilkan dan jelaskan hasil pengamatanmu! 
 */
// Maka fungsi tersebut akan menghitung berapa umur kita

 function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
 }
 function perkenalan ($nama, $salam="Assalamualaikum"){
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Saya berusia ". hitungUmur(2003, 2024)." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/r>";
 }
 perkenalan ("Rafli");

 /** Soal 8
  * Amati hasil yang ditampilkan dan jelaskan hasil pengamatanmu! 
  */
// Hasil tersebut merupaka contoh penggabungan dari 2 fungsi
?>