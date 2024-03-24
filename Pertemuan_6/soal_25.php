<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_REQUEST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>
</body>
    <!-- Soal 25
    Jalankan kode program berikut ini. Apa yang bisa kalian simpulkan dari 
    output yang dihasilkan. Dan apa bedanya dengan variable global $POST -->
    <!-- yang berbeda yaitu menggunakan variabel $_REQUEST yang dapat gabungan nilai dari 
    variabel $_GET, $_POST, dan $_COOKIE yang kesemuanya berhubungan dengan 
    data yang dikirim bersamaan dengan request user. -->
</html>