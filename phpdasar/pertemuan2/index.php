<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Outpun
// echo, print
// print_r
// var_dump

// penulisan sintaks php
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// variabel dan tipe data
// variabel $ 
// tidak boleh diawali dengan angka,tetapi boleh mengandung angka 
// contoh : 1.test[salah]
          //test 2[benar]
// $nama = "widanta";
// echo 'halo nama saya $nama';

// Operator
// 1. Aritmatika
// + - * / %
// contoh :
// $x = 20;
// $y = 9;
// echo $x * $y;


// 2. Penggabung string /conkatenasi /concat
// .
// $namaDepan = "Made";
// $namaBelakang = "Widanta";
// echo $namaDepan ." ". $namaBelakang;


// 3. Assignment / operator penugasan
// =, +=, -=, *=, /=, %=, .=,
// contoh 
// $x = 1;
// $x = 5;[5 yang akan tampil di layar karena variabel 1 di timpa oleh variabel 5]
// echo $x;[tampil di layar 1]

// $x = 1;
// $x += 5;        
// // [harus menggunakan operator assignment agar nilai awal nya tidak hilang bisa menggunakan +=, -=, *=, /=, %=, .=, ]
// echo $x;

// $nama = "Made";
// $nama .= " ";
// $nama .= "Widanta";
// echo $nama;


// 4. Perbandingan
// <,>,<=,>=,==,!=
// var_dump(1 > 2); apakah 1 lebih besar dari 2? jawabannya salah(false)
// var_dump(1 == "1"); jawabannya true karena operator perbantingan tidak mengecek tipe data hanya mengecek nilainya saja


// 5. Identitas
// ===,!==
// var_dump(1 === "1"); apakah 1 === string "1"? jawabanya false karena meskipun nilai nya sama namun tipe data nya berbeda


// 6. Logika
// &&[and], ||[or], ![not]
// $x = 30;
// var_dump($x < 20 || $x % 2 == 0);

?>