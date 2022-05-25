<?php
include '../../koneksi.php';

$id = $_POST["id"];
$judul = $_POST["judul"];
$created_at = $_POST["created_at"];

$query  = "UPDATE tb_klasifikasi SET judul = '$judul',created_at = '$created_at'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('Kode Klasifikasi berhasil diedit.');window.location='../KlasifikasiPage.php';</script>";
}
