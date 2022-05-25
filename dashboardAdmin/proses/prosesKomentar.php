<?php
include '../../koneksi.php';

$id = $_POST["id"];
$komentar = $_POST["komentar"];

$query  = "UPDATE tb_arsip SET komentar = '$komentar', notif=1 WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('Komentar berhasil ditambahkan.');window.location='../arsipPage.php';</script>";
}
