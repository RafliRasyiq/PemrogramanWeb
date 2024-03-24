<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 1</title>
</head>

<body> 
    <h2>Array Terindeks</h2>
    <?php
    // Menambahkan array yang memiliki indeks
    $Listdosen=["Elok Nur Hamdana", "Unggul Pemenang", "Bagas Nugraga"];

    // echo $Listdosen[2] . "<br>";
    // echo $Listdosen[0] . "<br>";
    // echo $Listdosen[1] . "<br>";

    // Soal 1.
    /* Untuk menampilakn array, selain menggunakan indeks kita juga bisa menggunakan perulangan. 
    Coba tampilan hasil dari kode program diatas dengan menggunakan perulangan. 
    Tampilkan kode program dan hasilnya.  */
    for ($i = 0; $i < count($Listdosen); $i++) {
        echo $Listdosen[$i] . "<br>";
    }
    ?>
</body>

</html>