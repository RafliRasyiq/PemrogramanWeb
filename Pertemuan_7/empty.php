<?php
$myArray = array();
    if(empty($myArray)){
        echo "Array tidak terdefinisi atau kosong<br>";
    
    }else {
        echo "Array terdefinisi dan tidak kosong<br>";
    }

// SOAL 2.1
/* Simpan file tersebut, kemudian buka browser dan jalankan localhost/dasarWeb/ empty.php. 
Apa yang anda pahami dari penggunaan empty pada file tersebut. Catat di bawah ini pemahaman anda. */
// output yang dihasilkan sama karena  isinya berisi string isi dari echo if else sama, dan array tidak memiliki nilai.

    if(empty($nonExistentVar)){
        echo "<br>Array tidak terdefinisi atau kosong";
    
    }else {
        echo "<br>Array terdefinisi dan tidak kosong";
    }

// SOAL 2.2
/* Simpan file tersebut, kemudian buka browser dan jalankan localhost/dasarWeb/ empty.php buat hasil tidak menjadi 1 baris, 
jadi tampilan dari echo harus terpisah. Apa yang anda pahami dari penggunaan empty pada file tersebut. 
Catat di bawah ini pemahaman anda. */
// variabel empty digunakan untuk mengecek apakah variabel tersebut kosong atau tidak terdefinis.
?>