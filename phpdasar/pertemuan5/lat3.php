<?php
$siswa = [
  ["Widanta","1","Teknik Informatika","widanta66@gmail.com"],
  ["tata","2","Teknik Informatika","tata2@gmail.com"],
  ["wan","3","Teknik Informatika","wan3@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Siswa</title>
</head>
<body>
  
  <h1>Daftar Siswa</h1>


  <?php foreach ($siswa as $sis) :?>
    <ul>
      <li>Nama : <?= $sis[0]; ?></li>
      <li>Nis : <?= $sis[1]; ?></li>
      <li>Jurusan : <?= $sis[2]; ?></li>
      <li>Email : <?= $sis[3]; ?></li>
    </ul>
  <?php endforeach;?>



</body>
</html>