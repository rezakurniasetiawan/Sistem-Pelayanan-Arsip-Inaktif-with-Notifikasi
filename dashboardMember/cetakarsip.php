<?php
ob_start();
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: ../login.php");
}
if ($_SESSION['hakakses'] != "member") {
    die("<b>Oops!</b> Access Failed.
		<button type='button' onclick=location.href='./'>Back</button>");
}
include '../koneksi.php';


?>
<?php
$tampilPeg    = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE email='$_SESSION[email]'");
$peg    = mysqli_fetch_array($tampilPeg);
?>

<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Retensi Arsip</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/tailwind.output.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="../assets/js/init-alpine.js"></script>
    <script>
        window.print();
    </script>
</head>

<body>
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Data Retensi Arsip
            </h2>

            <!-- With actions -->
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">No.</th>
                                <th class="px-4 py-3">Kode Klasifikasi</th>
                                <th class="px-4 py-3">Isi</th>
                                <th class="px-4 py-3">Nasib Arsip</th>
                                <th class="px-4 py-3">Periode</th>
                                <th class="px-4 py-3">Keterangan</th>

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            <?php

                            // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
                            $query = "SELECT * FROM tb_retensi_arsip WHERE email='$_SESSION[email]' ORDER BY created_at DESC";
                            $result = mysqli_query($koneksi, $query);

                            //mengecek apakah ada error ketika menjalankan query
                            if (!$result) {
                                die("Query Error: " . mysqli_errno($koneksi) .
                                    " - " . mysqli_error($koneksi));
                            }

                            //buat perulangan untuk element tabel dari data mahasiswa
                            $no = 1; //variabel untuk membuat nomor urut
                            // hasil query akan disimpan dalam variabel $data dalam bentuk array
                            // kemudian dicetak dengan perulangan while
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>

                                <tr class="text-gray-700 dark:text-gray-400">
                                    <td class="px-4 py-3 text-sm">
                                        <?php echo $no ?>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <?php echo $row['kode_klas']; ?>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <?php echo $row['isi']; ?>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <?php echo $row['ket_fisik']; ?>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <?php echo $row['periode']; ?>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <?php echo $row['keterangan']; ?>
                                    </td>
                                </tr>
                            <?php
                                $no++; //untuk nomor urut terus bertambah 1
                            }
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </main>
</body>

</html>