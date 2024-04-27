<?php
session_start();
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $query);

    if (!$result) {
        die("Query error: " . mysqli_error($connect));
    }

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['username'] = $username;
        $loginSuccess = true;
        setcookie('user', $username, time() + (3 * 3600), '/');
        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau password salah.";
        header("Location: salah_password.php");
        exit;
    }
}
