<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salah Password!</title>
    <link rel="stylesheet" href="bootstrap-5.3.3/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            $('#grub-1').fadeIn(3000);
            $('#slide-navbar').effect("drop", { distance: 100, direction: "up", mode: "show" }, 1000);
        });
    </script>
</head>

<body style="background-image: url(assets/bg-2.jpg);">
    <nav class="navbar bg-body-dark bg-dark" id="slide-navbar" style="display: none;">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-light">T-CORP</span>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col" id="grub-1" style="display: none;">
                <div class="container mt-5">
                    <h1 class="text-center">Cek Kembali Username Dan Password Anda</h1>
                    <div class="d-flex justify-content-center">
                        <a href="form.php" class="btn btn-primary">LOGIN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>