<!-- cara menampilkan elemn array ke user -->
<?php
// Pengulangan pada array
// for //foreach

$angka = [23,6567,3,2,5,3,1];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan 2</title>
  <style>

    .kotak{
      width: 50px;
      height: 50px;
      background-color: salmon;
      text-align: center;
      line-height: 50px;
      margin: 3px;
      float: left;
    }
    .clear{
      clear: both;
    }

  </style>
</head>
<body>


<?php for( $i = 0; $i < count($angka); $i++ ) {?>
  <div class="kotak"><?php echo $angka [$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) { ?>
  <div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>
<!-- penulisan secara templeting -->
<?php foreach( $angka as $a ) : ?>
  <div class="kotak"><?= $a;?></div>
<?php endforeach; ?>

</body>
</html>
