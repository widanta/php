<?php
// $siswa = [
//   ["Widanta","1","Teknik Informatika","widanta66@gmail.com"],
//   ["tata","2","Teknik Informatika","tata2@gmail.com"],
//   ["wan","3","Teknik Informatika","wan3@gmail.com"]
// ];

// array asosiatif
// key-nya adalah sting yang kita buat sendiri

$komputers =[
  [
  "brand" => "gigabyte",
  "warna" => "orange",
  "produk" => "aorus",
  "asal" => "taiwan",
  "logo" => "burung",
  "gambar" => "Danta.jpg"
  ],
  [
  "brand" => "msi",
  "warna" => "merah",
  "produk" => "mag",
  "asal" => "tiongkok",
  "logo" => "naga",
  "gambar" => "Danta.jpg"
    ]
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


  <?php foreach ($komputers as $s) :?>
    <ul>
      <li>
        <img src="gambar/<?= $s["gambar"]; ?>" alt="tata">
      </li>
      <li>Brand : <?= $s["brand"]; ?></li>
      <li>Warna <?= $s["warna"]; ?></li>
      <li>Produk : <?= $s["produk"]; ?></li>
      <li>Asal : <?= $s["asal"]; ?></li>
      <li>Logo : <?= $s["logo"]; ?></li>
    </ul>
  <?php endforeach;?>



</body>
</html>