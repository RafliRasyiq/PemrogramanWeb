<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
</head>

<body>
    <h2>Keranjang Belanja</h2>

    <?php
    $beliNovel = $_COOKIE['beliNovel'];
    $beliBuku = $_COOKIE['beliBuku'];

    echo "Jumlah Novel: " . $beliNovel . "<br>";
    echo "Jumlah Buku: " . $beliBuku . "<br>";
    ?>
    <!-- SOAL 15 -->
    <!-- Terjadi eror karena jumlah novel dan buku tidak didefinisikan -->

    <!-- SOAL 16 -->
    <!-- Muncul jumlah novel dan buku -->

    <!-- SOAL 17 -->
    <!-- Menghasilkan output yang sama, karena data tersimpan pada cookies -->
</body>

</html>