<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "db_utsweb"; 

$connect = mysqli_connect($host, $username, $password, $database);

if (!$connect) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>