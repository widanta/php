<?php

class Produk {
  public $judul,
          $penulis,
          $penerbit,
          $harga,
          $halaman,
          $waktu,
          $tipe;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0, $waktu = 0, $tipe) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->halaman = $halaman;
    $this->waktu = $waktu;
    $this->tipe = $tipe;
  }

  public function getLabel(){
    return "$this->penulis, $this->penerbit";
  }

  public function getInfolengkap(){
    // komik : Naruto | massahi kishimoto, shonen jump (rp. 30000) - 100 halaman.
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    if($this->tipe == "komik"){
      $str .= " - {$this->halaman} halaman.";
    } else if ($this->tipe == "game"){
      $str .= " ~ {$this->waktu} waktu.";
    }
    return $str;
  }
}

class CetakInfoProduk{
  public function cetak( Produk $produk ){
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}



$produk1 = new Produk("naruto","massahi kishimoto","shonen jump", 30000, 100, 0, "komik");

$produk2 = new Produk("uncharted", "neil druckman" ,"sony computer", 25000, 0, 50, "game");

// Komik : massahi kishimoto, shonen jump
// Game : neil druckman, sony computer
// naruto | massahi kishimoto, shonen jump (Rp. 30000)

// komik : Naruto | massahi kishimoto, shonen jump (rp. 30000) - 100 halaman.
// game : uncharted | neil druckman, sony computer (rp. 25000) ~ 50 jam

echo $produk1->getInfolengkap();
echo "<br>";
echo $produk2->getInfolengkap();

?>