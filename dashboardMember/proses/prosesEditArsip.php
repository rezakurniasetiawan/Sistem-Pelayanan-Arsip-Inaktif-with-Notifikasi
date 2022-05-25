<?php
include '../../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$nid = $_POST['nid'];
$bidang = $_POST['bidang'];
$kode_arsip = $_POST['kode_arsip'];
$judul = $_POST['judul'];
$keperluan = $_POST['keperluan'];
$waktu_pinjam = $_POST['waktu_pinjam'];
$waktu_pengembalian = $_POST['waktu_pengembalian'];
$status = $_POST['status'];
$komentar = $_POST['komentar'];
$info = $_POST['info'];
$notif = $_POST['notif'];
$created_at = $_POST['created_at'];



// Insert user data into table
$query = "UPDATE tb_arsip SET nama='$nama',email='$email',nid='$nid',bidang='$bidang',kode_arsip='$kode_arsip',judul='$judul',keperluan='$keperluan',waktu_pinjam='$waktu_pinjam',waktu_pengembalian='$waktu_pengembalian',status='$status',komentar='$komentar',info='$info',notif='$notif',created_at='$created_at'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
// periska query apakah ada error
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
} else {
    //tampil alert dan akan redirect ke halaman index.php
    //silahkan ganti index.php sesuai halaman yang akan dituju
    echo "<script>alert('Data berhasil ditambah.');window.location='../notifikasiArsip.php';</script>";
}
