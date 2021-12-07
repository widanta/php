<?php 
session_start();
require 'functions.php';

// cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key']) ){
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // ambil user name berdasarkan id 
  $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan user name
  if ($key === hash('sha256', $row['username'])){
    $_SESSION ['login'] = true;
  }

}

if (isset($_SESSION["login"]) ){
  header("Location: index.php");
  exit;
}

if (isset($_POST["login"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");

  // cek username
  if (mysqli_num_rows($result) === 1 ){
    // cek password
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["password"])){
      // set session 
      $_SESSION["login"] = true;

      // cek remember me
      if (isset($_POST['remember'])){
        // buat cokkie
        setcookie('id', $row['id'], time() + 60);
        setcookie('key', hash('sha256', $row['username']), time() + 60);
      }

      header("Location: index.php");
      exit;
    }
  }

  $error = true;

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman login</title>
</head>
<body>

<?php if(isset ($error)) : ?>
  <p style="font-style: italic; color:red;">username dan paswword salah</p>
  <?php endif ; ?>
  

  
<h1>halaman login</h1>
<form action="" method="post">
  <ul>
    <li>
      <label for="username">User Name :</label>
      <input type="text" name="username" id="username">
    </li>
    <li>
      <label for="username">Password :</label>
      <input type="password" name="password" id="password">
    </li>
    <li>
      <input type="checkbox" name="remember" id="remember">
      <label for="remember">Rememberme :</label>
    </li>
    <li>
      <button type="submit" name="login">Login</button>
    </li>
  </ul>
</form>


</body>
</html>