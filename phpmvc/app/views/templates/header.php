<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman <?= $data["judul"]; ?></title>
  <link rel="stylesheet" href="<?= BASEURL;?> /css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL;?>">MVC PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-end" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL;?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL;?>/siswa">Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL;?>/about">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>