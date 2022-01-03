<!-- class dan object -->
<!-- properti dan method -->
<!-- method adalah function di dalam class -->
<?php 

class Produk {
  public $judul = "judul",
          $penulis = "penulis",
          $penerbit = "penerbit",
          $harga = 0;

  public function getLabel(){
    return "$this->penulis, $this->penerbit";
  }
}

// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);


// $produk2 = new Produk();
// $produk2->judl = "gta";
// $produk2->tambahProperti = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi kishimoto";
$produk3->penerbit = "shonen jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil druckman";
$produk4->penerbit = "sony computer";
$produk4->harga = 25000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();



?>