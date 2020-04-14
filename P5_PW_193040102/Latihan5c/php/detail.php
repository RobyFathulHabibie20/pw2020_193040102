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
	$mkn = query("SELECT * FROM makanan WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>193040102</title>
</head>
<body>
    <div class="container">
    	<div class="gambar">
    		<img src="../assets/img/<?= $mkn["gambar"]; ?>" alt="">
    	</div>
    	<div class="keterangan">
    		<p><?= $mkn["kode"]; ?></p>
    		<p><?= $mkn["nama makanan"]; ?></p>
    		<p><?= $mkn["jenis makanan"]; ?></p>
    		<p><?= $mkn["komposisi"]; ?></p>
    		<p><?= $mkn["harga"]; ?></p>
    	</div>
    	<button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html> 