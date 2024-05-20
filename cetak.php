<?php
include "config.php";
require 'vendor/autoload.php';

// Memuat library PhpSpreadsheet untuk membuat file Excel
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Menjalankan query SQL untuk mengambil data dari tabel "calon_siswa"
$sql = "SELECT * FROM calon_siswa";
$result = $db->query($sql);

// Memeriksa apakah query berhasil dijalankan dan ada data yang ditemukan
if ($result->num_rows > 0) {
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Header row
    $sheet->setCellValue('A1', 'No');
    $sheet->setCellValue('B1', 'Nama');
    $sheet->setCellValue('C1', 'Alamat');
    $sheet->setCellValue('D1', 'Agama');
    $sheet->setCellValue('E1', 'Jenis Kelamin');
    $sheet->setCellValue('F1', 'Asal Sekolah');

    $rowIndex = 2; // Mulai dari baris kedua
    while ($row = $result->fetch_assoc()) {
        $sheet->setCellValue('A' . $rowIndex, $row['no']);
        $sheet->setCellValue('B' . $rowIndex, $row['nama']);
        $sheet->setCellValue('C' . $rowIndex, $row['alamat']);
        $sheet->setCellValue('D' . $rowIndex, $row['agama']);
        $sheet->setCellValue('E' . $rowIndex, $row['jenis_kelamin']);
        $sheet->setCellValue('F' . $rowIndex, $row['sekolah_asal']);
        $rowIndex++;
    }

    // Mengatur header HTTP untuk download file Excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="data_pendaftar.xlsx"');
    header('Cache-Control: max-age=0');

    // Membuat objek writer dan menyimpan file Excel
    $writer = new Xlsx($spreadsheet);
    $writer->save('php://output');
} else {
    echo "Tidak ditemukan";
}

$db->close();
?>
