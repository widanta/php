<!-- array multi dimensi -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .kotak{
      width: 30px;
      height: 30px;
      line-height: 30px;
      text-align: center;
      transition: 1s;
      background-color: salmon;
      margin: 3px;
      float: left;
    }
    .kotak:hover{
      transform:rotate(360deg);
      border-radius: 100%;
    }
    .clear{
      clear: both;
    }
  </style>
</head>
<body>
  
<?php
  $angka = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
  ];
  // echo $angka[2][2]; bisa menggunakan ini mencetak ke layar
?>
<!-- menampilkan yang enak di lihat user -->
<?php foreach( $angka as $a ) : ?>
  <?php foreach ( $a as $b ) : ?>
    <div class="kotak"><?= $b; ?></div>
  <?php endforeach; ?>
  <div class="clear">
  </div>
<?php endforeach; ?>








</body>
</html>