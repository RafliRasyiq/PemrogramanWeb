<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Form dengan PHP</title>
</head>

<body>
    <h2>Form Contoh</h2>
    <form method="POST" action="proses_lanjut.php">
        <label for="buah">Pilih Buah: </label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>

        <br>
        <br>
        <label>Pilih Warna Favorit: </label> <br>
        <input type="checkbox" name="warna[]" value="merah">Merah<br>
        <input type="checkbox" name="warna[]" value="biru">Biru<br>
        <input type="checkbox" name="warna[]" value="hijau">Hijau<br>

        <br>
        <br>
        <label>Pilih Jenis Kelamin: </label> <br>
        <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki<br>
        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br>

        <br>

        <input type="submit" value="Submit">
    </form>
    <!-- SOAL 6.1 -->
    <!-- Pada percobaan ini, diminta untuk memasukkan pilhan dari formulir. Pilihan ini akan 
    disimpan dan ditampilkan melalui tindakan dalam file proses_form. -->
</body>

</html>