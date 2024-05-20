<?php include("config.php"); ?>
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
        <span class="navbar-toggler-icon"></span></button>
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
 <h2>Siswa yang sudah mendaftar</h2></div>
 </header>
 <br>
 <div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($db, $sql);
            while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$siswa['no']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";
            echo "<td>";
            echo "<a href='form-edit.php?no=".$siswa['no']."' class='btn btn-secondary'>Edit</a> ";
            echo "<a href='hapus.php?no=".$siswa['no']."' class='btn btn-danger'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <nav class="container mt-3">
        <a href="form-daftar.php" class="btn btn-primary">[+] Tambah Baru</a>
        <a href="cetak.php" class="btn btn-primary">Cetak data</a>
    </nav><br>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
 </div>
 <script src="./vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 </body>
</html>