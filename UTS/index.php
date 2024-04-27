<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="bootstrap-5.3.3/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            $('#grub-1').fadeIn(1000);
            $('#nav-down').effect("drop", {
                distance: 100,
                direction: "up",
                mode: "show"
            }, 1000);
        });
    </script>
</head>

<body style="background-image: url(assets/bg-2.jpg);">
    <nav class="navbar bg-body-dark bg-dark" id="nav-down" style="display: none;">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-light">T-CORP</span>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="proses_logout.php">LOGOUT</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5 pt-5" id="grub-1" style="display: none;">
        <div class="row justify-content-center">
            <div class="col">
                <div class="container mt-5">
                    <h1 class="text-center">Selamat Datang<div class="text-uppercase"><?php echo $_SESSION["username"];  ?></div>
                    </h1>
                    <p class="text-center fs-3">Lengkapi data diri anda!</p>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dataDiriModal">
                            Isi Data Diri
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="dataDiriModal" tabindex="-1" role="dialog" aria-labelledby="dataDiriModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dataDiriModalLabel">Form Data Diri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formData" method="post" action="tampil_data.php">
                        <div class="form-group">
                            <label for="firstName">Nama Depan:</label>
                            <input type="text" class="form-control" id="firstName" name="firstName">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Nama Belakang:</label>
                            <input type="text" class="form-control" id="lastName" name="lastName">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat Rumah:</label>
                            <textarea class="form-control" id="address" name="address"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#formData').submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: 'data_tersimpan.php',
                    data: formData,
                    success: function(response) {
                        alert('Data tersimpan!');
                        console.log(response);
                        window.location.href = 'tampil_data.php';
                    },
                    error: function(xhr, status, error) {
                        alert('Error occurred while saving data.');
                        console.log(error);
                    }
                });
            });
        });
    </script>
</body>

</html>