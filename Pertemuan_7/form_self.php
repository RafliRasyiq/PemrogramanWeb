<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PHP</title>
</head>

<body>
    <h2>Form Input PHP</h2>
    <?php
    //inisialisai variabel

    $namaErr = "";
    $nama = "";

    //Cek apalah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //Validasi nama (contoh : pastikan nama tidak kosong)
        if (empty($_POST["nama"])) {
            $namaErr = "Nama harus diisi!!";
        } else {
            $nama = $_POST["nama"];
            echo "Data berhasil disimpan!";
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" value=" <?php echo $nama; ?>">
        <span class="error"><?php echo $namaErr; ?></span><br><br>

        <input type="submit" name="submit" value="submit">
    </form>
    <!-- SOAL 3.2
    Simpan file tersebut, kemudian buka browser dan jalankan localhost/dasarWeb/ form_self.php. 
    Apa yang anda pahami dari penggunaan form pada file tersebut. Catat di bawah ini pemahaman anda. -->
    <!-- merupakan penggunaan penggabungan dari form html dengan php  -->
</body>

</html>