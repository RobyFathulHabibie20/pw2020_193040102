<?php 
require 'functions.php';

session_start();
   if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
   }

$id = $_GET['id'];
$mkn2 = query("SELECT * FROM makanan2 WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                  alert('Data Berhasil diubah!');
                  document.location.href = 'admin.php';
          </script>";
  }else {
    echo "<script>
                  alert('Data Gagal diubah!');
                  document.location.href = 'admin.php';
          </script>";
  }
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
 <div class="container">
   <form action="" method="post">
    <input type="hidden" name="id" value="<?= $mkn2['id']; ?>">
     <table>
       <tr>
         <td>
           <label for="nama">Nama</label>
         </td>
         <td>:</td>
         <td>
           <input type="text" name="nama" id="nama" value="<?= $mkn2['nama']; ?>">
         </td>
       </tr>
       <tr>
         <td>
           <label for="jenis">Jenis</label>
         </td>
         <td>:</td>
         <td>
           <select name="jenis" id="jenis" value="<?= $mkn2['jenis']; ?>">
             <option>----------Pilih Jenis----------</option>
             <option value="daging">Daging</option>
             <option value="sayuran">Sayuran</option>
             <option value="mie">Mie</option>
             <option value="nasi">Nasi</option>
           </select>
         </td>
       </tr>
       <tr>
         <td>
           <label for="bahan">Bahan</label>
         </td>
         <td>:</td>
         <td>
           <input type="text" name="bahan" id="bahan" value="<?= $mkn2['bahan']; ?>">
         </td>
       </tr>
       <tr>
         <td>
           <label for="asal">Asal</label>
         </td>
         <td>:</td>
         <td>
           <input type="text" name="asal" id="asal" value="<?= $mkn2['asal']; ?>">
         </td>
       </tr>
       <tr>
         <td>
           <label for="harga">Harga</label>
         </td>
         <td>:</td>
         <td>
           <input type="text" name="harga" id="harga" value="<?= $mkn2['harga']; ?>">
         </td>
       </tr>
       <tr>
         <td>
           <label for="gambar">Gambar</label>
         </td>
         <td>:</td>
         <td>
           <input type="text" name="gambar" id="gambar" value="<?= $mkn2['gambar']; ?>">
         </td>
       </tr>
     </table>
     <button type="submit" name="ubah">Ubah Data</button>
     <button type="submit">
       <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
     </button>
   </form>
 </div>
</body>
</html>