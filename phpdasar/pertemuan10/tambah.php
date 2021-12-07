<?php 
require 'functions.php';
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

// cek apakah tombol submit sudah pernah di tekan
if ( isset($_POST["submit"]) ) {

  // cek apakah data berhasil di tambahkan atau tidak
  if (tambah($_POST) > 0 ){
    echo "
      <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('data gagal ditambahkan');
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
  
<h1>tambah Data Siswa</h1>

<form action="" method="POST">
  <ul>
    <li>
      <label for="nama">Nama :</label>
      <input type="text" name="nama" id="nama">
    </li>
    <li>
      <label for="nis">Nis :</label>
      <input type="text" name="nis" id="nis">
    </li>
    <li>
      <label for="email">Email :</label>
      <input type="text" name="email" id="email">
    </li>
    <li>
      <label for="jurusan">Jurusan :</label>
      <input type="text" name="jurusan" id="jurusan">
    </li>
    <li>
      <label for="gambar">Gambar :</label>
      <input type="text" name="gambar" id="gambar">
    </li>
    <li>
      <button type="submit" name="submit">Tambah Data!</button>
    </li>
  </ul>
</form>


</body>
</html>