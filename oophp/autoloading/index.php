<?php 
require_once "App/init.php";

$produk1 = new Komik("naruto","massahi kishimoto","shonen jump", 30000, 100,);
$produk2 = new Game("uncharted", "neil druckman" ,"sony computer", 25000, 50,);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

?>