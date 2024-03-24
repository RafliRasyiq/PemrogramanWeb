<?php
$umur;
if(isset($umur)&&$umur >= 18){
    echo "Anda Sudah Dewasa";

}else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.<br>";
}

// SOAL 1.1
/* Simpan file tersebut, kemudian buka browser dan jalankan localhost/dasarWeb/ isset.php. 
Apa yang anda pahami dari penggunaan isset pada file tersebut. Catat di bawah ini pemahaman anda. */
// yang tampil yaitu "Anda belum dewasa atau variabel umur tidak ditemukan" dikarenakan variabel umur tidak ada/belum ada nilainya.

$data = array("nama"=>"Jane", "usia"=> 25);
    if(isset($data["nama"])){
        echo "Nama :".$data["nama"];
    
    }else {
        echo "Variabel 'nama' tidak ditemukan dalam array.";
    }

// SOAL 1.2 
/* Simpan file tersebut, kemudian buka browser dan jalankan localhost/dasarWeb/isset.php buat hasil tidak menjadi 1 baris, 
jadi tampilan dari echo harus terpisah. Apa yang anda pahami dari penggunaan 
isset pada file tersebut. Catat di bawah ini pemahaman anda. */
// maka akan mencetak Nama :Jane karena variabel nama memiliki nilai.
?>