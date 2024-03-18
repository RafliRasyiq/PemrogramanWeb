<?php
// Langkah 4
// Membuat fungsi
//  function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Rafli<br>";
//     echo "Senang berkenalan dengan Anda<br>";
//  }

//  perkenalan();
//  perkenalan();

// Langkah 7
//membuat fungsi
// function perkenalan ($nama, $salam) {
//     echo $salam.", ";

//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";

// }

//memanggil fungsi yang sudah dibuat
// perkenalan ("Hamdana", "Hallo");

// echo "<hr>";

// $saya = "Elok";
// $ucapanSalam = "Selamat pagi";

// //memanggil lagi
// perkenalan ($saya, $ucapanSalam);


// Langkah 10
//membuat fungsi
// function hitungUmur($thn_lahir, $thn_sekarang){
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
// }
// echo "Umur saya adalah ". hitungUmur(2003, 2023) ."tahun";

// Langkah 13
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan ($nama, $salam="Assalamualaikum"){
    echo $salam.",";
    echo "Perkenalan, nama saya ".$nama."<br>";

    //memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(2003, 2023)." tahun<br>";
    echo "Senang berkenalan dengan anda<br>";
}

//memanggil fungsi perkenalan
perkenalan("Rafli");
?>
