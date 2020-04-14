<?php
    // menghubungkan dengan file php lainnya
    require 'php/functions.php';

    //melakukan query
    $makanan = query("SELECT * FROM makanan")
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
      <?php foreach ($makanan as $mkn) : ?>
        <p class="nama">
            <a href="php/detail.php?id=<?= $mkn['id']; ?>">
                <?= $mkn["nama makanan"]; ?>
            </a>
        </p>
      <?php endforeach; ?>
    </div>
</body>
</html>     