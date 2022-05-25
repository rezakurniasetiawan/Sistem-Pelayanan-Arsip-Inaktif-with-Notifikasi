<?php
include '../../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$periode = $_POST['periode'];
$ket_fisik = $_POST['ket_fisik'];
$bidang = $_POST['bidang'];
$kode_klas = $_POST['kode_klas'];
$isi = $_POST['isi'];
$masa_aktif = $_POST['masa_aktif'];
$keterangan = $_POST['keterangan'];
$waktu_penyusutan = $_POST['waktu_penyusutan'];
$notif = $_POST['notif'];
$created_at = $_POST['created_at'];


// Insert user data into table
$query = "UPDATE tb_retensi_arsip SET nama='$nama',email='$email',bidang='$bidang',kode_klas='$kode_klas',isi='$isi',masa_aktif='$masa_aktif',keterangan='$keterangan',waktu_penyusutan='$waktu_penyusutan',periode='$periode',ket_fisik='$ket_fisik',notif='$notif',created_at='$created_at'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
// periska query apakah ada error
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
} else {
    //tampil alert dan akan redirect ke halaman index.php
    //silahkan ganti index.php sesuai halaman yang akan dituju
    echo "<script>alert('Data berhasil diedit.');window.location='../dataRetensiArsip.php';</script>";
}
// Show message when user added
