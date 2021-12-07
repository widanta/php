<?php 
require'functions.php';

$siswa = query("SELECT * FROM siswa");
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
        <a href="">ubah</a> |
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
