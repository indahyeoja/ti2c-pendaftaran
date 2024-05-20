<!DOCTYPE html>
<html>
<head>
 <title>Pendaftaran Siswa Baru</title>
 <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
  <style>
    body {
                background-image: url('icoon.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
            .content-wrapper {
                background-color: rgba(255, 255, 255, 0.8);
                padding: 20px;
                border-radius: 10px;
            }
  </style>
</head>
<body>
 <header>
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Siswa Baru</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form-daftar.php">Daftar Baru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list-siswa.php">Pendaftar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
   <h2>Pendaftaran Siswa Baru</h2><hr>
</div>
 </header>
 <div class="container">
 <nav>
 <?php if(isset($_GET['status'])): ?>
    <p>
 <?php
 if($_GET['status'] == 'sukses'){
 echo "Pendaftaran siswa baru berhasil!";
 } else {
 echo "Pendaftaran gagal!";
 }
 ?>
 </p>
<?php endif; ?>
 </nav>
 </div>
 <script src="./vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 </body>
</html>