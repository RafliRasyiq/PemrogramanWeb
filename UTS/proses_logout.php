<?php
session_start();

if (isset($_COOKIE['nama_cookie'])) {
    unset($_COOKIE['nama_cookie']);
    setcookie('nama_cookie', '', time() - 3600, '/');
}

session_unset();
session_destroy();
header("Location: hal_logout.php");
exit;
?>
