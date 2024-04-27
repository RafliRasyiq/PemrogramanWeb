<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri</title>
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
            $('#nav-down').effect("drop", { distance: 100, direction: "up", mode: "show" }, 1000);
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
                    <h1 class="text-center">Berikut data diri <div class="text-uppercase"><?php echo $_SESSION["username"]; ?></div>
                    </h1>
                    <div class="d-flex justify-content-center">
                        <div class="card" style="width: 50%;">
                            <div class="card-body">
                                <p class="card-text">Nama: <?php echo $_SESSION['formData']['firstName'] . ' ' . $_SESSION['formData']['lastName']; ?></p>
                                <p class="card-text">Email: <?php echo $_SESSION['formData']['email']; ?></p>
                                <p class="card-text">Alamat Rumah: <?php echo $_SESSION['formData']['address']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>