<?php 
session_start();
require'functions.php';

if ( !isset ($_SESSION["login"])) {
  header("Location : login.php");
  exit;
}

// ambil data di url
$id = $_GET["id"];
// query data siswa berdasarkan id nya
$sis = query("SELECT * FROM siswa WHERE id = $id")[0];



// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

// cek apakah tombol submit sudah pernah di tekan
if ( isset($_POST["submit"]) ) {

  // cek apakah data berhasil di ubah atau tidak
  if (ubah($_POST) > 0 ){
    echo "
      <script>
        alert('data berhasil diubah');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data gagal diubah');
        document.location.href = 'index.php';
      </script>
    ";
  }


}



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<h1>Ubah Data Siswa</h1>

<form action="" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $sis["id"];?>">
  <input type="hidden" name="gambarLama" value="<?= $sis["gambar"];?>">
  <ul>
    <li>
      <label for="nama">Nama :</label>
      <input type="text" name="nama" id="nama" value="<?= $sis["nama"];?>">
    </li>
    <li>
      <label for="nis">Nis :</label>
      <input type="text" name="nis" id="nis" value="<?= $sis["nis"];?>">
    </li>
    <li>
      <label for="email">Email :</label>
      <input type="text" name="email" id="email" value="<?= $sis["email"];?>">
    </li>
    <li>
      <label for="jurusan">Jurusan :</label>
      <input type="text" name="jurusan" id="jurusan" value="<?= $sis["jurusan"];?>">
    </li>
    <li>
      <label for="gambar">Gambar :</label> <br>
      <img src="gambar/<?= $sis['gambar'];?>" width="40"> <br>
      <input type="file" name="gambar" id="gambar">
    </li>
    <li>
      <button type="submit" name="submit">Ubah Data!</button>
    </li>
  </ul>
</form>


</body>
</html>