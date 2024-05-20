<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru</title>
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
            <h2>Formulir Pendaftaran Siswa Baru</h2>
        </div>
    </header>
    <form action="proses-pendaftaran.php" method="POST">
        <fieldset><br>
            <div class="container mt-3">
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-3">
                      <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                  <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-3">
                    <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" value="Laki-laki">
                            <label class="form-check-label" for="jk_laki_laki">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jk" value="Perempuan" checked>
                            <label class="form-check-label" for="jk_perempuan">Perempuan</label>
                        </div>
                    </div>
                <div class="mb-3 row">
                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-3">
                        <select class="form-select" id="agama" name="agama" aria-label="Default select example">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Atheis">Atheis</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="sekolah_asal" class="col-sm-2 col-form-label">Sekolah asal</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal">
                    </div>
                </div>
                  <div class="col-sm-3 offset-sm-2">
                  <input type="submit" value="Daftar" name="daftar" class="btn btn-primary btn-sm" style="width: 100px;">
                  </div>
            </div>
        </fieldset>
    </form>
    <script src="./vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
