// menulis ajax menggunakan javascript manual tanpa framework

// ambil elemen yang di butuhkan
// var keyword = document.getElementById("keyword");
// var tombolCari = document.getElementById("tombol-cari");
// var container = document.getElementById("container");

// tambahkan event ketika keyword di tulis
// keyword.addEventListener("keyup", function () {
//   // buat objek ajax
//   var xhr = new XMLHttpRequest();

//   cek kesiapan ajax
//   xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//       container.innerHTML = xhr.responseText;
//     }
//   };

//   eksekusi ajax
//   xhr.open("GET", "ajax/siswa.php?keyword=" + keyword.value, true);
//   xhr.send();
// });

// menulis ajax dengan framework
$(document).ready(function () {
  // hilangkan tombol cari
  $("#tombol-cari").hide();

  // munculkan loading
  $(".loader").show();

  // event ketika keyword di tulis
  $("#keyword").on("keyup", function () {
    //     ajax menggunakan load
    // $("#container").load("ajax/siswa.php?keyword=" + $("#keyword").val());

    // $.get()
    $.get("ajax/siswa.php?keyword=" + $("#keyword").val(), function (data) {
      $("#container").html(data);
      $(".loader").hide();
    });
  });
});
