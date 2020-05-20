<?php
require 'functions.php';

if (isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
    echo "<script>
                  alert('Registrasi Berhasil');
                  document.location.href = 'login.php';
          </script>";
  }else {
    echo "<script>
                  alert('Registrasi Gagal');
                  document.location.href = 'login.php';
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/registrasistyle.css">

<title>Registrasi | Form</title>
</head>
<body>

     <div class="login-container d-flex align-items-center justify-content-center">
        <form action="" method="post" class="login-form text-center">
          <h1 class="mb-5 font-weight-light text-uppercase">Registrasi</h1>
          <div class="form-group">
            <label for="username"></label>
            <input type="text" name="username" class="form-control rounded-pill form-control-lg" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="password"></label>
            <input type="password" name="password" class="form-control rounded-pill form-control-lg" placeholder="Password">
          </div>
          <button type="submit" name="register" class="btn mt-5 btn-custom btn-block text-uppercase rounded-pill btn-lg">Registrasi</button>
        </form>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="../js/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="../js/propper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  </body>
</html>   