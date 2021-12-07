<?php 
session_start();
require'functions.php';

if ( !isset ($_SESSION["login"])) {
  header("Location : login.php");
  exit;
}



$siswa = query("SELECT * FROM siswa");
// tombol cari di tekan
if ( isset($_POST["cari"]) ){
  $siswa = cari($_POST["keyword"]);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<a href="logout.php" class="logout">logout</a>

<h1>Daftar Siswa</h1>

<a href="tambah.php" class="tambah">Tambah data Siswa</a>
<br><br>
<br>
<!-- form pencarian -->
<form action="" method="post" class="form-cari">
  <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian.." autocomplete="off" id="keyword">
  <button type="submit" name="cari" id="tombol-cari">Cari !</button>

  <!-- loader -->
  <img src="img/loader.gif" alt="gif" class="loader">
</form>
<!-- akhir form pencarian -->
<br><br>
<!-- tabel -->
<div id="container">
<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>No.</th>
    <th class="aksi">Aksi</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Nis</th>
    <th>Email</th>
    <th>Jurusan</th>
  </tr>

  <?php $i = 1 ; ?>
  <?php foreach ($siswa as $row) :?>
    <tr>
      <td><?= $i ; ?>
      </td>
      <td class="aksi">
        <a href="ubah.php?id=<?= $row["id"];?>">ubah</a> |
        <a href="hapus.php?id=<?= $row["id"] ; ?>" onclick="return confirm ('Yakin?');">hapus</a>
      </td>
      <td><img src="img/<?= $row["gambar"] ; ?>"></td>
      <td><?= $row["nama"] ; ?>
      </td>
      <td><?= $row["nis"] ; ?>
      </td>
      <td><?= $row["email"] ; ?>
      </td>
      <td><?= $row["jurusan"] ; ?>
      </td>
    </tr>
  <?php $i++ ; ?>
  <?php endforeach; ?>
</table>
</div>
<!-- akhir container tabel -->

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
