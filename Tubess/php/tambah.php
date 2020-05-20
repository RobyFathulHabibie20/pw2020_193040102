<?php 
require 'functions.php';

session_start();
   if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
   }

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                  alert('Data Berhasil ditambahkan!');
                  document.location.href = 'admin.php';
          </script>";
  }else {
    echo "<script>
                  alert('Data Gagal ditambahkan!');
                  document.location.href = 'admin.php';
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
    <link rel="stylesheet" href="../css/tambahstyle.css">

    <title>Tambah | Data</title>
  </head>
  <body>

<div class="container">

  <div class="card mt-3 mb-4">
    <div class="card-header bg-primary text-white">
      <h3 class="text-center">Form Tambah Data</h3>
    </div>
    <div class="card-body">
      <form action="" method="post">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama" class="form-control" placeholder="Input nama makanan disini!" required>
        </div>
        <div class="form-group">
          <label for="jenis">Jenis</label>
          <select name="jenis" id="jenis" class="form-control">
            <option>-- Pilih jenis --</option>
            <option value="Daging">Daging</option>
            <option value="Sayuran">Sayuran</option>
            <option value="Mie">Mie</option>
            <option value="Nasi">Nasi</option>
          </select>
        </div>
        <div class="form-group">
          <label for="bahan">Bahan Utama</label>
          <textarea name="bahan" id="bahan" class="form-control" placeholder="Input Bahan disini!"></textarea>
        </div>
        <div class="form-group">
          <label for="asal">Asal</label>
          <input type="text" name="asal" id="asal" class="form-control" placeholder="Input Asal disini!" required>
        </div>
        <div class="form-group">
          <label for="harga">Harga</label>
          <input type="text" name="harga" id="harga" class="form-control" placeholder="Input Harga disini!" required>
        </div>
        <div class="form-group">
          <label for="gambar">Gambar</label>
          <input type="text" name="gambar" id="gambar" class="form-control" placeholder="Input Gambar disini!" required>
        </div>
        <button type="submit" name="tambah" class="btn btn-success">Tambah Data</button>
        <button type="submit" class="btn btn-danger">
          <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
        </button>
      </form>
    </div>
  </div>
</div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="../js/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="../js/propper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  </body>
</html>