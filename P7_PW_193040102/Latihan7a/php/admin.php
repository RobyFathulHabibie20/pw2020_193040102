<?php
   require 'functions.php';
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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>193040102</title>
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
  <a href="logout.php">
    <button>Logout</button>
  </a><br>
  <a href="tambah.php">
    <button>Tambah Data</button>
  </a><br><br>
  <form action="" method="get">
    <input type="text" name="keyword" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
    <h1>Rumah Makan Khas Daerah</h1>
    <table border="1" cellpadding="13" cellspacing="0">
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
           <a href="ubah.php?id=<?= $mkn2['id']; ?>"><button>Ubah</button></a><br>
           <a href="hapus.php?id=<?= $mkn2['id']; ?>" onclick="return confirm('Hapus Data?')"><button>Hapus</button></a>
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
    </table>
</body>
</html>