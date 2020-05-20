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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/tambahstyle.css">

    <title>Ubah | Data</title>
  </head>
  <body>

<div class="container">

  <div class="card mt-3 mb-4">
    <div class="card-header bg-danger text-white">
      <h3 class="text-center">Form Ubah Data</h3>
    </div>
    <div class="card-body">
      <form action="" method="post">
      <input type="hidden" name="id" value="<?= $mkn2['id']; ?>">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama" class="form-control" placeholder="Ubah Nama anda disini!" value="<?= $mkn2['nama']; ?>">
        </div>
        <div class="form-group">
          <label for="jenis">Jenis</label>
          <select name="jenis" id="jenis" class="form-control" value="<?= $mkn2['jenis']; ?>">
            <option value="Daging">Daging</option>
            <option value="Sayuran">Sayuran</option>
            <option value="Mie">Mie</option>
            <option value="Nasi">Nasi</option>
          </select>
        </div>
        <div class="form-group">
          <label for="bahan">Bahan Utama</label>
          <textarea name="bahan" id="bahan" class="form-control" placeholder="Ubah Bahan disini!" value="<?= $mkn2['bahan']; ?>"></textarea>
        </div>
        <div class="form-group">
          <label for="asal">Asal</label>
          <input type="text" name="asal" id="asal" class="form-control" placeholder="Ubah Asal disini!" value="<?= $mkn2['asal']; ?>">
        </div>
        <div class="form-group">
          <label for="harga">Harga</label>
          <input type="text" name="harga" id="harga" class="form-control" placeholder="Input Harga disini!" value="<?= $mkn2['harga']; ?>">
        </div>
        <div class="form-group">
          <label for="gambar">Gambar</label>
          <input type="text" name="gambar" id="gambar" class="form-control" placeholder="Input Gambar disini!" value="<?= $mkn2['gambar']; ?>">
        </div>
        <button type="submit" name="ubah" class="btn btn-success">Ubah Data</button>
        <button type="submit" class="btn btn-danger">
          <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
        </button>
      </form>
    </div>
  </div>
</div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="../js/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="../js/propper.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  </body>
</html>


 <!--<div class="container">
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
 </div>-->