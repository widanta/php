<!-- class dan object -->
<!-- properti dan method -->
<!-- method adalah function di dalam class -->
<?php

use Produk as GlobalProduk;

class Produk {
  public $judul,
          $penulis,
          $penerbit,
          $harga;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel(){
    return "$this->penulis, $this->penerbit";
  }
}

$produk1 = new Produk("naruto","massahi kishimoto","shonen jump", 30000);

$produk2 = new Produk("uncharted", "neil druckman" ,"sony computer", 25000);

$produk3 = new Produk("dragon ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);


?>