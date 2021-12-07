<?php 
require'functions.php';

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
</head>
<body>
  
<h1>Daftar Siswa</h1>

<a href="tambah.php">Tambah data Siswa</a>
<br><br>
<br>
<form action="" method="post">
  <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian.." autocomplete="off">
  <button type="submit" name="cari">Cari !</button>
</form>
<br><br>
<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>No.</th>
    <th>Aksi</th>
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
      <td>
        <a href="ubah.php?id=<?= $row["id"];?>">ubah</a> |
        <a href="hapus.php?id=<?= $row["id"] ; ?>" onclick="return confirm ('Yakin?');">hapus</a>
      </td>
      <td><img src="gambar/Danta.jpg" alt="" width="50px"></td>
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

</body>
</html>
