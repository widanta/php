<?php 
require "../functions.php";
$keyword = $_GET["keyword"];
$query = "SELECT * FROM siswa
          WHERE
nama LIKE '%$keyword%' OR
nis LIKE '%$keyword%' OR
email LIKE '%$keyword%' OR
jurusan LIKE '%$keyword%'
";
$siswa = query($query);

?>

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