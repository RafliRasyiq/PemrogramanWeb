<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="bootstrap-5.3.3/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(document).ready(function() {
            $('#slide-navbar').effect("drop", { distance: 100, direction: "up", mode: "show" }, 1000);
            $('#slide-form').effect("drop", { distance: 100, direction: "right", mode: "show" }, 1000);
        });
    </script>
</head>

<body style="background-image: url(assets/bg-1.jpg);">
    <nav class="navbar bg-body-dark bg-dark" id="slide-navbar" style="display: none;">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-light">T-CORP</span>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col">
                <div class="container" style="margin-top: 17%;">
                    <h1 class="text-start">Silahkan Login Terlebih Dahulu</h1>
                    <p class="lead text-start">Masukkan username dan password yang sesuai agar dapat login.</p>
                </div>
            </div>
            <div class="col" id="slide-form" style="display: none;">
                <div class="card" style="border-radius: 40px; width: 60%; margin-left: auto; margin-right: auto;">
                    <div class="card-body">
                        <form action="proses_login.php" method="post">
                            <div class="text-center">
                                <label for="" class="fw-bold pt-5 pb-3">
                                    <h1>LOGIN</h1>
                                </label>
                            </div>
                            <input type="text" name="username" id="username" class="form-control pb-2" placeholder="Username" style="border-radius: 50px; border-width: 2px;">
                            <input type="password" name="password" id="password" class="form-control my-3" placeholder="Password" style="border-radius: 50px; border-width: 2px;">
                            <div class="text-center mt-3 pt-3 pb-5">
                                <button type="submit" id="loginBtn" class="btn btn-primary fw-bold" value="Login" style="border-radius: 50px; width: 100%;">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>