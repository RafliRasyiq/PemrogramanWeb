<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    echo "Nama : ".$nama."<br>";
    echo "Email : ".$email."<br>";
}
// SOAL 3.1
/* Simpan file tersebut, kemudian buka browser dan jalankan localhost/dasarWeb/ proses_form.php. 
 * Apa yang anda pahami dari penggunaan form pada file tersebut. Catat di bawah ini pemahaman anda. */
/* tidak terjadi apa-apa jika menjalankan proses_form.php karena form tersebut berada pada form.php, 
ketika selesai mengisikan pada file form.php baru akan muncul data yang tadi dinputkan */
?>