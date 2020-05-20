<?php 
	// mengecek apakah ada id yang dikirimkan
	// jika tidak maka akan dikembalikan ke halaman index.php
	if (!isset($_GET['id'])) {
		header("location: ../index.php");
		exit;
	}

	require 'functions.php';

	// mengambil id dari url
	$id = $_GET['id'];

	// melakukan query dengan parameter id yang diambil dari url
	$mkn2 = query("SELECT * FROM makanan2 WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/detailstyle.css">

    <title>Hello | Wellcome</title>
  </head>
  <body>
<section class="container-fluid bg">
  <section class="row justify-content-center">
    <div class="card" style="width: 24rem;">
      <img src="../assets/img/<?= $mkn2["gambar"]; ?>" alt="">
      <div class="card-body">
            <p>Nama makanan: <?= $mkn2["nama"]; ?></p>
            <p>Jenis makanan: <?= $mkn2["jenis"]; ?></p>
            <p>Bahan utama: <?= $mkn2["bahan"]; ?></p>
            <p>Asal: <?= $mkn2["asal"]; ?></p>
            <p>Harga: <?= $mkn2["harga"]; ?> / porsi</p>
        <a href="../index.php" class="btn btn-primary btn-block">Kembali</a>
      </div>
    </div>
  </section>
</section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="../js/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="../js/propper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  </body>
</html> 