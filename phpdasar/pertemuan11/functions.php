<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

function query($query) {
  global $conn;
  $result = mysqli_query($conn , $query);
  $rows = [];
  while ( $row = mysqli_fetch_assoc($result) ){
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data) {
  global $conn;

    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
      return false;
    }

    // query insert data
    $query = "INSERT INTO siswa
      VALUES
        ('','$nama','$nis','$email','$jurusan','$gambar')
          ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function upload(){
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  // cek apakah tidak ada gambar yang di upload
  if($error === 4){
    echo "<script>
      alert('pilih gambar terlebih dahulu');
    </script>";

    return false;
  }

  // cek apakah yang di upload adalah gambar
  $ekstensiGambarValid = ['jpg','jpeg','png'];
  $ekstensiGambar = explode('.',$namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
    echo "<script>
      alert('yang anda upload bukan gambar');
    </script>";
  }

  // cek jika ukurannya terlalu besar
  if ( $ukuranFile > 1000000){
    echo "<script>
      alert('yang anda upload bukan gambar');
    </script>";
  }

  // lolos pengecekan, gambar siap di upload
  // generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, 'img/' .$namaFileBaru);
  return $namaFileBaru;

}


function hapus($id) {
  global $conn;
  mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");

  return mysqli_affected_rows($conn);
}

function ubah($data) {
  global $conn;

    // ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user memilih gambar baru atau tidak
    if ( $_FILES['gambar']['error'] === 4 ){
      $gambar = $gambarLama;
    } else{
      $gambar = upload();
    }
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = "UPDATE siswa SET
                nama = '$nama',
                nis = '$nis',
                email ='$email',
                jurusan ='$jurusan',
                gambar = '$gambar'
              WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
  $query = "SELECT * FROM siswa
              WHERE
            nama LIKE '%$keyword%' OR
            nis LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
          ";
  return query($query);
}













?>
