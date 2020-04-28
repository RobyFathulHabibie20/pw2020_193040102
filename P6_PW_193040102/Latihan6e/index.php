<?php
    // menghubungkan dengan file php lainnya
    require 'php/functions.php';

    //melakukan query
    $makanan2 = query("SELECT * FROM makanan2")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>193040102</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h2>Daftar Makanan</h2>
    <div class="container">
      <?php foreach ($makanan2 as $mkn2) : ?>
        <p class="nama">
            <a href="php/detail.php?id=<?= $mkn2['id']; ?>">
            <img src="assets/img/<?= $mkn2['gambar']; ?>" alt=""><br>
                <?= $mkn2["nama"]; ?>
            </a>
        </p>
      <?php endforeach; ?>
    </div>
</body>
</html>     