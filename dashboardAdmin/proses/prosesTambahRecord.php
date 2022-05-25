<?php
include '../../koneksi.php';
$email = $_POST["email"];
$no_box = $_POST["no_box"];
$waktu_penyerahan = $_POST["waktu_penyerahan"];
$nama_pen = $_POST["nama_pen"];
$jabatan_pen = $_POST["jabatan_pen"];
$bidang_pen = $_POST["bidang_pen"];
$nama_pem = $_POST["nama_pem"];
$jabatan_pem = $_POST["jabatan_pem"];
$bidang_pem = $_POST["bidang_pem"];
$kode_klas = $_POST["kode_klas"];
$jumlah_berkas = $_POST["jumlah_berkas"];
$ruang = $_POST["ruang"];
$rak = $_POST["rak"];
$masa_inaktif = $_POST["masa_inaktif"];
$keterangan = $_POST["keterangan"];
$waktu_penyusutan = $_POST["waktu_penyusutan"];
$notif = $_POST["notif"];
$created_at = $_POST["created_at"];

$query  = "INSERT INTO tb_record_arsip (email,no_box,waktu_penyerahan,nama_pen,jabatan_pen,bidang_pen,nama_pem,jabatan_pem,bidang_pem,kode_klas,jumlah_berkas,ruang,rak,masa_inaktif,keterangan,waktu_penyusutan,notif,created_at) 
VALUES ('$email','$no_box','$waktu_penyerahan','$nama_pen','$jabatan_pen','$bidang_pen','$nama_pem','$jabatan_pem','$bidang_pem','$kode_klas','$jumlah_berkas','$ruang','$rak','$masa_inaktif','$keterangan','$waktu_penyusutan','$notif','$created_at')";
$result = mysqli_query($koneksi, $query);
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('Daftar Arsip Inaktif berhasil ditambahkan.');window.location='../recordCenterPage.php';</script>";
}
