<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Keamanan</title>
</head>

<body>
    <h2>Form Input Keamanan</h2>
    <?php

    $namaErr = "";
    $nama = "";
    $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['nama'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        echo "nama yang valid" . $input . "<br>";


        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email anda valid";
        } else {
            echo "Email anda tidak valid";
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" value=" <?php echo $nama; ?>"><br>
        <label for="email">Email :</label>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $namaErr; ?></span><br><br>

        <input type="submit" name="submit" value="submit">

    </form>
    <!-- SOAL 4.1
    Catat di sini apa yang anda amati dari penambahan kode program di atas. -->
    <!-- Karena karakter khusus HTML diubah entitas menjadi HTML, 
    browser tidak dapat menjalankannya sebagai kode HTML, kode ini berfungsi untuk menghindari serangan XSS. -->

    <!-- SOAL 4.2
    Catat di sini apa yang anda amati dari penambahan kode program di atas. -->
    <!-- Kode ini memastikan nilai yang dimasukkan adalah alamat email yang valid dan memastikan bahwa 
    masukan yang diterima dari formulir web memiliki format yang diharapkan.  -->

</body>

</html>