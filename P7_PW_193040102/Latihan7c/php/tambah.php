<?php 
require 'functions.php';

session_start();
   if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
   }

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
                  alert('Data Berhasil ditambahkan!');
                  document.location.href = 'admin.php';
          </script>";
  }else {
    echo "<script>
                  alert('Data Gagal ditambahkan!');
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
     <table>
       <tr>
         <td>
           <label for="nama">Nama</label>
         </td>
         <td>:</td>
         <td>
           <input type="text" name="nama" id="nama">
         </td>
       </tr>
       <tr>
         <td>
           <label for="jenis">Jenis</label>
         </td>
         <td>:</td>
         <td>
           <select name="jenis" id="jenis">
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
           <input type="text" name="bahan" id="bahan">
         </td>
       </tr>
       <tr>
         <td>
           <label for="asal">Asal</label>
         </td>
         <td>:</td>
         <td>
           <input type="text" name="asal" id="asal">
         </td>
       </tr>
       <tr>
         <td>
           <label for="harga">Harga</label>
         </td>
         <td>:</td>
         <td>
           <input type="text" name="harga" id="harga">
         </td>
       </tr>
       <tr>
         <td>
           <label for="gambar">Gambar</label>
         </td>
         <td>:</td>
         <td>
           <input type="text" name="gambar" id="gambar">
         </td>
       </tr>
     </table>
     <button type="submit" name="tambah">Tambah Data</button>
     <button type="submit">
       <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
     </button>
   </form>
 </div>
</body>
</html>