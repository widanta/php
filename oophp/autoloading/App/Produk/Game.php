<?php 
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

?>