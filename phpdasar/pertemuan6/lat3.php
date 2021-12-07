<?php
// cetak apaka tidak ada data di $_get
if ( !isset($_GET["brand"]) || 
      !isset($_GET["warna"]) ||
      !isset($_GET["produk"]) ||
      !isset($_GET["logo"]) ||
      !isset($_GET["warna"]) ||
      !isset($_GET["gambar"])){
  // redirect = memaksa memindahkan user ke halaman sebelumnya
  header("Location: lat2.php");
  exit;
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
  
<ul>
  <li><img src="gambar/<?= $_GET["gambar"]; ?>"></li>
  <li><?= $_GET["brand"]; ?></li>
  <li><?= $_GET["warna"]; ?></li>
  <li><?= $_GET["produk"]; ?></li>
  <li><?= $_GET["logo"]; ?></li>
</ul>

<a href="lat2.php">kembali ke lat2</a>


</body>
</html>