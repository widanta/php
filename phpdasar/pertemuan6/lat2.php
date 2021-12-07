<?php
// $siswa = [
//   ["Widanta","1","Teknik Informatika","widanta66@gmail.com"],
//   ["tata","2","Teknik Informatika","tata2@gmail.com"],
//   ["wan","3","Teknik Informatika","wan3@gmail.com"]
// ];

// array asosiatif
// key-nya adalah sting yang kita buat sendiri

// $_GET
$komputers =[
  [
  "brand" => "gigabyte",
  "warna" => "orange",
  "produk" => "aorus",
  "logo" => "burung",
  "gambar" => "aorus.png"
  ],
  [
  "brand" => "msi",
  "warna" => "merah",
  "produk" => "mag",
  "logo" => "naga",
  "gambar" => "msi.jpg"
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

  <ul>
  <?php foreach ($komputers as $s) :?>
      <li>
        <a href="lat3.php?brand=<?= $s["brand"]?>&warna=<?= $s["warna"];?>&produk=<?= $s["produk"];?>&logo=<?= $s["logo"];?>&gambar=<?= $s["gambar"];?>"><?= $s["brand"]; ?></a>
      </li>
  <?php endforeach;?>
  </ul>


</body>
</html>