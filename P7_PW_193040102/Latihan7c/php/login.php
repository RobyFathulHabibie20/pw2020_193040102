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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>193040102</title>
    <link rel="stylesheet" href="../css/loginstyle.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="UTF-8"></script>
</head>
<body>
    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username atau Password Salah!</p>
    <?php endif ?>
    <div class="contact-form">
      <h1>Login</h1>
      <table>
      <form action="" method="post">
        <tr>
          <label for="username">Username</label><br>
          <input type="text" name="username" placeholder="Enter Username"><br>
        </tr>
        <tr>
          <label for="password">Password</label><br>
          <input type="password" name="password" placeholder="Enter Password">
        </tr>
        </table>
        <div class="remember">
          <input type="checkbox" name="remember">
          <label for="remember">Remember Me</label>
        </div>
        <input type="submit" name="submit" value="Login">
      </form>
    </div>
</body>
</html>     
