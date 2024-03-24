<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Dengan Validasi</title>
    <script src="jquery-3.7.1.js"></script>
</head>

<body>
    <h1>Form Input Dengan Validasi </h1>
    <form id="myForm">
        <label for="nama">Nama : </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span>
        <br>

        <label for="email">Email : </label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span>
        <br>

        <label for="password">Password : </label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span>
        <br>


        <input type="submit" value="Submit">
    </form>
    <div id="hasil"></div>
    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault();
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                if (nama == "") {
                    $("#nama-error").text("Nama harus diisi");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email == "") {
                    $("#email-error").text("Email harus diisi");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }
                // Password
                if (password === "") {
                    $("#password-error").text("Password harus diisi.");
                    valid = false;
                } else if (password.length < 8) {
                    $("#password-error").text("Password minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                if (valid) {
                    !event.preventDefault();
                    // AJAX
                    $.ajax({
                        url: "proses_validasi.php",
                        type: "POST",
                        data: $("#myForm").serialize(),
                        success: function(response) {
                            console.log(response);
                            $("#hasil").html(response);
                        }
                    });
                }
            });
        });
    </script>
    <!-- SOAL 7.1 -->
    <!-- Pada percobaan ini,memeriksa nama dan email. Untuk validasi 
    email harus menggunakan @gmail.com.-->

    <!-- SOAL 7.2 -->
    <!-- Jika nama dan email belum diisi, kode ini akan mengeluarkan output seperti di atas. -->

    <!-- SOAL 7.3 -->
    <!-- Untuk menampilkan hasil di halaman yang sama, kode ditambahkan di baris 68-->

    <!-- SOAL 7.4 -->
    <!-- Validasi password ditambahkan, sama seperti validasi email dan nama. -->
</body>

</html>