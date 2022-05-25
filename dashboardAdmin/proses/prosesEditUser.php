<?php
include '../../koneksi.php';


$id = $_POST["id"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$nid = $_POST["nid"];
$bidang = $_POST["bidang"];
$created_up = $_POST["created_up"];
$foto = $_FILES['foto']['name'];



if ($foto != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg',);
    $x = explode('.', $foto);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $foto;
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, '../../gambar/' . $nama_gambar_baru);


        $query  = "UPDATE tb_user SET nama = '$nama',email = '$email',nid = '$nid',bidang = '$bidang',created_up = '$created_up', foto = '$nama_gambar_baru'";
        $query .= "WHERE id = '$id'";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                " - " . mysqli_error($koneksi));
        } else {

            echo "<script>alert('Data berhasil diubah.');window.location='../userPage.php';</script>";
        }
    } else {

        echo "<script>alert('Ekstensi gambar yang boleh hanya .jpg, .png, .jpeg');window.location='../editUserPage.php';</script>";
    }
} else {
    $query  = "UPDATE tb_user SET nama = '$nama',email = '$email',nid = '$nid',bidang = '$bidang',created_up = '$created_up'";
    $query .= "WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil diubah.');window.location='../userPage.php';</script>";
    }
}
