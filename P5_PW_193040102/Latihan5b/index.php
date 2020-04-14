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
            <h1><style>h1 { color: blue; text-align: center;}</style>Rumah Makan Insyaallah Berkah</h1>
    <table border = "1px"; cellpadding = 10; cellspacing= "0"> 
         <tr>
            <th>NO</th>
            <th>Gambar</th>
            <th>Kode</th>
            <th>Nama Makanan</th>
            <th>Jenis Makanan</th>
            <th>Komposisi</th>
            <th>Harga</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach ($makanan as $mkn) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><img src="assets/img/<?= $mkn["gambar"]; ?>"></td>
                    <td><?= $mkn["kode"] ?></td>
                    <td><?= $mkn["nama makanan"] ?></td>
                    <td><?= $mkn["jenis makanan"] ?></td>
                    <td><?= $mkn["komposisi"] ?></td>
                    <td><?= $mkn["harga"] ?></td>
                </tr>
        <?php $i++ ?>
    <?php endforeach; ?>
     </table>
</body>
</html> 