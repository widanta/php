<?php

use Produk as GlobalProduk;

// parent class
class Produk {
  private $judul,
          $penulis,
          $penerbit,
          $harga;
          
  protected $diskon = 0;


  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function setJudul ($judul){
    // if (!is_string($judul)){
    //   throw new Exception("Error Processing Request");
    // }
    $this->judul = $judul;
  }
  public function getjudul (){
    return $this->judul;
  }

  public function setPenulis ($penulis){
    $this->penulis = $penulis;
  }
  public function getPenulis (){
    return $this->penulis;
  }

  public function setPenerbit ($penerbit){
    $this->penerbit = $penerbit;
  }
  public function getPenerbit (){
    return $this->penerbit;
  }

  public function setDiskon($diskon){
    $this->diskon = $diskon;
  }
  public function getDiskon(){
    return $this->diskon;
  }

  public function setHarga($harga){
    $this->harga = $harga;
  }
  public function getHarga(){
    return $this->harga - ($this->harga * $this->diskon/ 100);
  }

  public function getLabel(){
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk(){
    // komik : Naruto | massahi kishimoto, shonen jump (rp. 30000) - 100 halaman.
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }
}

// child class
class Komik extends Produk {
  public $halaman;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $halaman = 0) {
    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->halaman= $halaman;
  }


  public function getInfoProduk() {
    $str = "Komik : " . parent::getInfoProduk() . " - {$this->halaman} Halaman.";
    return $str;
  }
}

class Game extends Produk {
  public $waktu;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $waktu = 0) {
    parent:: __construct($judul, $penulis, $penerbit, $harga);

    $this->waktu= $waktu;
  }

  public function getInfoProduk() {
    $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktu} Jam.";
    return $str;
  }
}
// akhir child class


class CetakInfoProduk{
  public function cetak( Produk $produk ){
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}



$produk1 = new Komik("naruto","massahi kishimoto","shonen jump", 30000, 100,);
$produk2 = new Game("uncharted", "neil druckman" ,"sony computer", 25000, 50,);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setPenerbit("Danta");
echo $produk1->getPenerbit();


?>