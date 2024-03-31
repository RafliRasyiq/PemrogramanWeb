<?php
$namaHost = "localhost";
$username = "root";
$password = "";
$database = "prakwebdb";

try {
    $connect = mysqli_connect($namaHost, $username, $password, $database);

    /* if($connect){
         echo "Koneksi dengan MySql Berhasil <br>";
     }else{
         echo "Koneksi dengan MySql Gagal " . mysqli_connect_error();
     }
     SOAL 2
     $sql = "CREATE TABLE user(
         id INT PRIMARY KEY,
         username VARCHAR(50) NOT NULL,
         password VARCHAR(50) NOT NULL)"; */

    /* SOAL 3
     $sql = "INSERT INTO user(id, username, password)
     VALUES('1', 'admin', '123')";
    
     if (mysqli_query($connect, $sql)){
         echo "Record Berhasil Ditambahkan";
     }else{
         throw new Exception("Record Gagal ditambahkan: ". mysqli_error($connect));
     }
     mysqli_close($connect); */
} catch (Exception $e) {
    echo $e->getMessage();
}
