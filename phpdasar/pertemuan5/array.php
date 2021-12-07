<?php
// array
// variabel yang dapat memiliki banyak nilai
// element pada array boleh memiliki tipe data yang berbeda
// pasangan antar kata dan value
// key-nya adalah index yang dimulai dari 0


// Membuat array
// cara lama
$hari = array("senin","selasa","rabu");
// cara baru
$bulan = ["januari","februari","maret"];
$arr1 = [123,"tulisan", false];


// Menampilkan Array
// var_dump() / print_r
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo"<br>";


// Menampilkan 1 element pada array
// echo $arr1[0];
// echo"<br>";
// echo $bulan[1];


// menampilkan elem baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jumat";
echo "<br>";
var_dump($hari);





















?>