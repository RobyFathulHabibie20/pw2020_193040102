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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/indexstyle.css">

    <title>Hello | Wellcome</title>
  </head>
  <body style="background:url(assets/img/1.jpg)no-repeat;background-size:cover;">
  
    
     
     <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed">
        <a style="color:orange;" class="navbar-brand" href="index.php">Makanan<b>Daerah</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a style="color:white;" class="nav-link text-center" href="php/admin.php">Halaman Admin<span class="sr-only">(current)</span></a>
            </li>
            </ul>
            <form action="" method="get" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Search" aria-label="Search" autofocus>
            <button name="cari" class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>
    
    
    <?php if (empty($makanan2)) : ?>
          <h1>Data tidak ditemukan!</h1>
    <?php else : ?>
    <?php foreach ($makanan2 as $mkn2) : ?>
      
        <div class="card" style="width: 18rem; float: left; margin: 44px;">
            <img src="assets/img/<?= $mkn2['gambar']; ?>" alt="" style="width: 358px; height: 240px;">
        <div class="card-body">
          <h5 class="card-title"><?= $mkn2["nama"]; ?></h5>
          <a href="php/detail.php?id=<?= $mkn2['id']; ?>" style="text-decoration: none; color: #fff;" class="btn btn-warning">Detail lebih lanjut</a>
         </div>
        </div>
    <?php endforeach; ?>
    <?php endif; ?>
    
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="js/propper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>