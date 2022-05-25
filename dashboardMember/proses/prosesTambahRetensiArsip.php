<?php
include '../../koneksi.php';
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
$query = "INSERT INTO tb_retensi_arsip(nama,email,bidang,kode_klas,isi,masa_aktif,keterangan,waktu_penyusutan,periode,ket_fisik,notif,created_at) 
VALUES('$nama','$email','$bidang','$kode_klas','$isi','$masa_aktif','$keterangan','$waktu_penyusutan','$periode','$ket_fisik','$notif','$created_at')";
$result = mysqli_query($koneksi, $query);
// periska query apakah ada error
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
} else {
    //tampil alert dan akan redirect ke halaman index.php
    //silahkan ganti index.php sesuai halaman yang akan dituju
    echo "<script>alert('Data berhasil ditambah.');window.location='../dataRetensiArsip.php';</script>";
}
// Show message when user added
