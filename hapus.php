<?php
include("config.php");
if( isset($_GET['no']) ){
 // ambil id dari query string
 $no = $_GET['no'];
 // buat query hapus
 $sql = "DELETE FROM calon_siswa WHERE no=$no";
 $query = mysqli_query($db, $sql);
 // apakah query hapus berhasil?
 if( $query ){
 header('Location: list-siswa.php');
 } else {
 die("gagal menghapus...");
 }
}
?>
