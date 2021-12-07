<?php 
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
?>