<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

// ambil data dari tabel siswa / query data siswa
$result = mysqli_query($conn, "SELECT * FROM siswa");
// bisa menggunakan ini kalau sudah akan muncul boolean true / false jika benar/salah
// var_dump($result) ; 

// cara cek pesan jika eror
// if( !$result ){
//   echo mysqli_error($conn);
// }

// ambil data (fetch) siswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array asosiative
// mysqli_fetch_array() // mengembalikan keduannya numerik & asosiative
// mysqli_fetch_object() 

// while ( $sis = mysqli_fetch_assoc($result) ){
//   var_dump($sis);
// }

// $sis = mysqli_fetch_object($result);
// var_dump($sis->nama); kalau ingin mengecek database menggunakan mysqli_fetch_object() 





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
  <?php while( $row = mysqli_fetch_assoc($result) ) :?>
    <tr>
      <td><?= $i ; ?>
      </td>
      <td>
        <a href="">ubah</a> |
        <a href="">hapus</a>
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
  <?php endwhile; ?>
    

</table>

</body>
</html>
