<?php
// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"]) ) {
// cek username & pasword
  if($_POST["username"] == "admin" && $_POST["password"] == "123"){
    // jika benar redirect ke halaman admin
    header("Location: admin.php");
    exit;
  } else{
    // jika salah tampilkan pesan kesalahan
    $error = true;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<h1>login admin</h1>

<?php if(isset($error)) : ?>
  <p>Username/ Pasword salah!</p>
<?php endif;?>


<ul>
<form action="" method="POST">
  <li>
    <label for="username">User Name :</label>
    <input type="text" name="username" id="username">
  </li>
  <li>
    <label for="password">Password :</label>
    <input type="password" name="password" id="password">
  </li>
  <li>
    <button type="submit" name="submit">Login</button>
  </li>
</form>
</ul>


</body>
</html>