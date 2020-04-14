<?php
    //melakukan koneksi ke database
    $conn = mysqli_connect("localhost","root","") or die("Koneksi ke DB gagal");
    //memilih database
    mysqli_select_db($conn, "pw_193040102") or die("Database salah!");
    //query mengambil objek dari tabel didalam database
    $result = mysqli_query($conn, "SELECT * FROM makanan");
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
            <h1>Rumah Makan Insyaallah Berkah</h1>
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
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><img src="assets/img/<?= $row["gambar"]; ?>"></td>
                    <td><?= $row["kode"] ?></td>
                    <td><?= $row["nama makanan"] ?></td>
                    <td><?= $row["jenis makanan"] ?></td>
                    <td><?= $row["komposisi"] ?></td>
                    <td><?= $row["harga"] ?></td>
                </tr>
        <?php $i++ ?>
    <?php endwhile; ?>
     </table>
</body>
</html> 