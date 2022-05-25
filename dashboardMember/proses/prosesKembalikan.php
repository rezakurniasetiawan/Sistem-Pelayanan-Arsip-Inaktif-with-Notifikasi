<?php
include '../../koneksi.php';

$id = $_POST["id"];

$query  = "UPDATE tb_arsip SET info = 'sudah dikembalikan' WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('Berhasil dikembalikan.');window.location='../notifikasiArsip.php';</script>";
}
