<?php
session_start();
require 'functions.php';
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}
//cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}

//Login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);

            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('sha256', $hash, time() + 60 * 60 * 24);
            }
        }
        if (hash('sha256', $row['id']) == $_SESSION['hash']) {
            header("Location: admin.php");
            die;
        }
        header("Location: ../index.php");
        die;
    }
    $error = true;
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
    <link rel="stylesheet" href="../css/loginstyle.css">

    <title>Login | Form</title>
  </head>
  <body>
    <?php if (isset($error)) : ?>
        <p>Username atau Password Salah!</p>
    <?php endif ?>
      <div class="login-container d-flex align-items-center justify-content-center">
        <form action="" method="post" class="login-form text-center">
          <h1 class="mb-5 font-weight-light text-uppercase">Login</h1>
          <div class="form-group">
            <label for="username"></label>
            <input type="text" name="username" class="form-control rounded-pill form-control-lg" placeholder="Username">
          </div>
          <div class="form-group">
            <label for="password"></label>
            <input type="password" name="password" class="form-control rounded-pill form-control-lg" placeholder="Password">
          </div>
          <div class="forgot-link d-flex align-items-center justify-content-between">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="remember">
              <label for="remember">Remember Me</label>
            </div>
          </div>
          <button type="submit" name="submit" class="btn mt-5 btn-custom btn-block text-uppercase rounded-pill btn-lg">Login</button>
          <p class="mt-3 font-weight-normal">Belum punya akun? Registrasi <a href="registrasi.php"><strong>disini!</strong></a></p>
        </form>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="../js/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="../js/propper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  </body>
</html>   
