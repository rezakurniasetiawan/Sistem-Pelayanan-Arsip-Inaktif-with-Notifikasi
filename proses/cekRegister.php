<?php
//Include file koneksi ke database
include "../koneksi.php";

//menerima nilai dari kiriman form input-barang 
$nama = $_POST["nama"];
$email = $_POST["email"];
$password = md5($_POST["password"]);
$hakakses = $_POST["hakakses"];
$bidang = $_POST["bidang"];
$nid = $_POST["nid"];
$created_at = $_POST["created_at"];
$created_up = $_POST["created_up"];

//query insert data
$query = "INSERT INTO  tb_user
				            VALUES
				        ('','$nama','$email','$password','$hakakses','$bidang','$nid','$created_at','$created_up','450-person.png')
				            ";
$result = mysqli_query($koneksi, $query);

if (!$result) {
	die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
		" - " . mysqli_error($koneksi));
} else {
	//tampil alert dan akan redirect ke halaman index.php
	//silahkan ganti index.php sesuai halaman yang akan dituju
	echo "<script>
	alert('Daftar Berhasil, silahkan login');
	document.location.href = '../login.php'
	</script>";
}
