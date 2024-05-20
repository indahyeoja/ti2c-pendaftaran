<?php
include("config.php");
// kalau tidak ada id di query string
if( !isset($_GET['no']) ){
 header('Location: list-siswa.php');
}
//ambil id dari query string
$no = $_GET['no'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE no=$no";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
   }
?>
   <!DOCTYPE html>
   <html>
   <head>
    <title>Formulir Edit Siswa</title>
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
      <div class="container mt-5">
      <h2>Formulir Edit Siswa</h2>
      </div>
    </header>
    <div class="container mt-5">
        <form action="proses-edit.php" method="POST">
            <fieldset>
                <input type="hidden" name="no" value="<?php echo $siswa['no'] ?>" />
                <div class="mb-3 row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="nama" placeholder="Nama lengkap" value="<?php echo $siswa['nama'] ?>" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-3">
                        <textarea class="form-control" name="alamat" rows="3"><?php echo $siswa['alamat'] ?></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-3">
                        <?php $jk = $siswa['jenis_kelamin']; ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?>>
                            <label class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?>>
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                    <div class="col-sm-3">
                        <?php $agama = $siswa['agama']; ?>
                        <select class="form-select" name="agama">
                            <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                            <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                            <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                            <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                            <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="sekolah_asal" class="col-sm-2 col-form-label">Sekolah Asal</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="sekolah_asal" placeholder="Nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-3 offset-sm-2">
                        <input type="submit" class="btn btn-primary" value="Simpan" name="simpan" />
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <script src="./vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>