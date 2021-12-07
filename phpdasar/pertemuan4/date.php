<?php
// 1. build-in function
  // Date
  // date untuk menampilkan tanggal dengan format tertentu
  // echo date("l,d-m-y");

  // Time
  // UNIX Timestamp / EPOCH time
  // detik yang sudah berlalu sejak 1 Januari 1970
  // echo time();
  // echo date("l,d m y",time()-60*60*24*100);

  // mktime
  // membuat sendiri detik
  // mktime(0,0,0,0,0,0)
  // jam, menit, detik, bulan, tanggal, tahun
  // echo date ("l", mktime(0,0,0,4,28,2005));

  // strtotime
  // echo strtotime("28 april 2005");
?>