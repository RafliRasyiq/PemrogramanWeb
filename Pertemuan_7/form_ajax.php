<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Form dengan PHP</title>
    <script src="jquery-3.7.1.js"></script>
</head>
<body>
<h2>Form Contoh</h2>
    <form id = "myForm">
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

    <div id = "hasil">
        <!-- Hasil akan ditampilkan disini -->
    </div>

    <script>
        $(document).ready(function(){
            $("#myForm").submit(function(e){
                e.preventDefault(); //Mencegah pengiriman form secara default

                //Mengunmpulkan data form
                var formData = $("#myForm").serialize();

                //kirim data ke server php

                $.ajax({
                    url: "proses_lanjut.php",//Ganti dengan nama file php yang sesuai
                    type: "POST",
                    data: formData,
                    success: function(response){
                        //Tampilkan hasil dari server div "Hasil"
                        $("#hasil").html(response);
                    }
                });
            });
        });
    </script>
    <!-- SOAL 6.2 -->
    <!-- Dibandingkan dengan kode sebelumnya, hasil dari memasukkan pilihan di program ini berada di 
    halaman yang sama, tidak seperti percobaan sebelumnya yang akan menghasilkan output di halaman 
    yang berbeda karena penggunaan ajax. -->
</body>
</html>