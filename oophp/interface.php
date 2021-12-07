<?php

interface InfoProduk {
  public function getInfoProduk();
}


abstract class Produk {
  protected $judul,
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

  abstract public function getInfo();

}

// child class
class Komik extends Produk implements InfoProduk {
  public $halaman;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $halaman = 0) {
    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->halaman= $halaman;
  }

  public function getInfo(){
    // komik : Naruto | massahi kishimoto, shonen jump (rp. 30000) - 100 halaman.
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }

  public function getInfoProduk() {
    $str = "Komik : " . $this->getInfo() . " - {$this->halaman} Halaman.";
    return $str;
  }
}

class Game extends Produk implements InfoProduk{
  public $waktu;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $waktu = 0) {
    parent:: __construct($judul, $penulis, $penerbit, $harga);

    $this->waktu= $waktu;
  }

  public function getInfo(){
    // komik : Naruto | massahi kishimoto, shonen jump (rp. 30000) - 100 halaman.
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }

  public function getInfoProduk() {
    $str = "Game : " . $this->getInfo() . " ~ {$this->waktu} Jam.";
    return $str;
  }
}
// akhir child class


class CetakInfoProduk{
  public $daftarProduk = [];

  public function tambahProduk (Produk $produk){
    $this->daftarProduk[] = $produk;
  }

  public function cetak(){
    $str = "DAFTAR PRODUK : <br>";

    foreach ($this->daftarProduk as $p){
      $str .= "- {$p->getInfoProduk()} <br>";
    }

    return $str;
  }
}



$produk1 = new Komik("naruto","massahi kishimoto","shonen jump", 30000, 100,);
$produk2 = new Game("uncharted", "neil druckman" ,"sony computer", 25000, 50,);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();




?>