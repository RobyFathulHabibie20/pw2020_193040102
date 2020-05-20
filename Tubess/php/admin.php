<?php
   require 'functions.php';

   session_start();
   if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
   }

   if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $makanan2 = query("SELECT * FROM makanan2 WHERE
                        nama LIKE '%$keyword%' OR 
                        jenis LIKE '%$keyword%' OR
                        bahan LIKE '%$keyword%' OR
                        asal LIKE '%$keyword%' OR
                        harga LIKE '%$keyword%' ");
   } else {
    $makanan2 = query("SELECT * FROM makanan2");
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

    <title>Halaman | Admin</title>
  </head>
  <body>

<div class="container">
<nav class="navbar navbar-light bg-transparent mt-3">
<button type="submit" class="btn btn-danger"><a href="logout.php" style="text-decoration: none; color: white;">Logout</a></button>

  <form action="" method="get" class="form-inline">
    <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Search" aria-label="Search" autofocus>
    <button class="btn btn-outline-warning my-2 my-sm-0" name="cari" type="submit">Search</button>
  </form>
  <button type="submit" class="btn btn-warning"><a href="tambah.php" style="text-decoration: none; color: white;">Tambah Data</a></button>
</nav>

  <div class="card mt-3 mb-4">
    <div class="card-header bg-warning text-white">
      <h5>Daftar Makanan</h5>
    </div>
    <div class="card-body">
    <table class="table table-bordered table-striped">
       <tr>
          <th>#</th>
          <th>Opsi</th>
          <th>Gambar</th>
          <th>Nama</th>
          <th>Jenis</th>
          <th>Bahan</th>
          <th>Asal</th>
          <th>Harga</th>
       </tr>
       <?php if (empty($makanan2)) : ?>
            <tr>
              <td colspan="8">
                <h1>Data tidak ditemukan</h1>
              </td>
            </tr>
       <?php else : ?>
       <?php $i = 1; ?>
       <?php foreach ($makanan2 as $mkn2) : ?>
       <tr>
         <td><?= $i; ?></td>
         <td>
           <button class="btn btn-info" type="submit"><a href="ubah.php?id=<?= $mkn2['id']; ?>" style="text-decoration: none; color: white;">Ubah</a></button>
           <button class="btn btn-danger mt-2" type="submit"><a href="hapus.php?id=<?= $mkn2['id']; ?>" onclick="return confirm('Hapus Data?')" style="text-decoration: none; color: white;">Hapus</a></button>         
         </td>
         <td><img src="../assets/img/<?= $mkn2['gambar']; ?>" alt=""></td>
         <td><?= $mkn2['nama']; ?></td>
         <td><?= $mkn2['jenis']; ?></td>
         <td><?= $mkn2['bahan']; ?></td>
         <td><?= $mkn2['asal']; ?></td>
         <td><?= $mkn2['harga']; ?></td>
       </tr>
       <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
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