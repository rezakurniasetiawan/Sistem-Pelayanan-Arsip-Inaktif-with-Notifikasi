<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Buat akun</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/tailwind.output.css" />
  <!-- <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script> -->
  <script src="assets/js/init-alpine.js"></script>
</head>

<body>
  <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
      <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
          <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="assets/img/create-account-office.jpeg" alt="Office" />
          <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="assets/img/create-account-office-dark.jpeg" alt="Office" />
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
          <div class="w-full">
            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
              Buat Akun
            </h1>
            <form action="proses/cekRegister.php" method="post">
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Nama</span>
                <input name="nama" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="masukkan nama" required />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Email</span>
                <input name="email" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="masukkan email" required />
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">NID</span>
                <input name="nid" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="masukkan email nid" required />
              </label>
              <label class="block text-sm">
                <span for="cars" class="text-gray-700 dark:text-gray-400">Bidang</span>
                <select class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" id=" cars" name="bidang" required>
                  <option value="" selected="" disabled="">Pilih bidang disini</option>
                  <option value="Operasi">Operasi</option>
                  <option value="Pemeliharaan">Pemeliharaan</option>
                  <option value="Enjiniring & Quality Assurance">Enjiniring & Quality Assurance </option>
                  <option value="Keuangan & Administrasi">Keuangan & Administrasi </option>
                  <option value="Logistik">Logistik </option>
                </select>
              </label>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Password</span>
                <input name="password" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="***************" type="password" required />
              </label>
              <input name="created_at" type="text" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta');
                                                                                echo date("d-m-Y H:i:s"); ?>" hidden>
              <input name="created_up" type="text" class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta');
                                                                                echo date("d-m-Y H:i:s"); ?>" hidden>

              <div class="flex mt-6 text-sm">
                <label class="flex items-center dark:text-gray-400">
                  <input name="hakakses" value="member" type="checkbox" class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" required />
                  <span class="ml-2">
                    Saya setuju dengan
                    <span class="underline">kebijakan privasi</span>
                  </span>
                </label>
              </div>

              <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">

                Buat akun
              </button>

            </form>

            <hr class="my-8" />


            <p class="mt-4">
              <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="./login.php">
                Sudah memiliki akun? Masuk Sekarang
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>