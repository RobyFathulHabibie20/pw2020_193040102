<?php
    // menghubungkan dengan file php lainnya
    require 'php/functions.php';

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>193040102</title>
    <link rel="stylesheet" href="css/indexstyle.css">
</head>
<body>
    <div class="container">
      <div>
        <h2>Daftar Makanan</h2>
        <a href="php/login.php">
            <button>Masuk ke halaman admin</button>
        </a><br><br>
        <form action="" method="get">
            <input type="text" name="keyword" autofocus>
            <button type="submit" name="cari">Cari!</button>
        </form>
      </div>
        <?php if (empty($makanan2)) : ?>
          <h1>Data tidak ditemukan</h1>
       <?php else : ?>
      <?php foreach ($makanan2 as $mkn2) : ?>
        <p class="nama">
            <a href="php/detail.php?id=<?= $mkn2['id']; ?>" style="text-decoration: none; color: #fff;">
            <img src="assets/img/<?= $mkn2['gambar']; ?>" alt=""><br>
                <?= $mkn2["nama"]; ?>
        </p>
      <?php endforeach; ?>
    <?php endif; ?>
    </div>
</body>
</html>     