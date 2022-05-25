<?php
include '../../koneksi.php';
$id = $_POST["id"];
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

$query  = "UPDATE tb_record_arsip SET email= '$email',no_box='$no_box',waktu_penyerahan='$waktu_penyerahan',nama_pen='$nama_pen',jabatan_pen='$jabatan_pen',bidang_pen='$bidang_pen',nama_pem='$nama_pem',jabatan_pem='$jabatan_pem',bidang_pem='$bidang_pem',kode_klas='$kode_klas',jumlah_berkas='$jumlah_berkas',ruang='$ruang',rak='$rak',masa_inaktif='$masa_inaktif',keterangan='$keterangan',waktu_penyusutan='$waktu_penyusutan',notif='$notif',created_at='$created_at'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('Berhasil di edit.');window.location='../recordCenterPage.php';</script>";
}
