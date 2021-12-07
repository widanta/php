<?php 
session_start();
require'functions.php';

if ( !isset ($_SESSION["login"])) {
  header("Location : login.php");
  exit;
}

// pagination
// konfigurasi
$jumlahDataPerHalaman = 2 ;
// $result = mysqli_query($conn, "SELECT * FROM siswa");
// $jumlahData = mysqli_num_rows($result); boleh seperti ini untuk menghitung jumlah data di database
$jumlahData = count(query("SELECT * FROM siswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
// if (isset($_GET["halaman"])){
//   $halamanAktif = $_GET["halaman"];
// } else{
//   $halamanAktif = 1;
// } boleh seperti ini

// kondisi menggunakan operator ternari
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


$siswa = query("SELECT * FROM siswa LIMIT $awalData, $jumlahDataPerHalaman");
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

<a href="logout.php">logout</a>

<h1>Daftar Siswa</h1>

<a href="tambah.php">Tambah data Siswa</a>
<br><br>
<br>
<form action="" method="post">
  <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian.." autocomplete="off">
  <button type="submit" name="cari">Cari !</button>
</form>
<br>
<!-- hal sebelum -->
<?php if($halamanAktif > 1) :?>
  <a href="?halaman= <?= $halamanAktif - 1;?>">&laquo;</a>
<?php endif;?>

<!-- navigasi -->
<?php for($i = 1; $i <= $jumlahHalaman; $i++) :?>
  <?php if($i == $halamanAktif) :?>
    <a href="?halaman=<?= $i; ?> " style="font-weight: bold; color:orange;"><?= $i; ?></a>
  <?php else :?>
    <a href="?halaman=<?= $i; ?> "><?= $i; ?></a>
  <?php endif ;?>
<?php endfor;?>

<!-- hal sesudah -->
<?php if($halamanAktif < $jumlahHalaman) :?>
  <a href="?halaman= <?= $halamanAktif + 1;?>">&raquo;</a>
<?php endif;?>

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

</body>
</html>
