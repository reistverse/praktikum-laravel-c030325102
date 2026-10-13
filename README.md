# Sistem Informasi Akademik - Praktikum Laravel

* **Nama:** Siti Raihanah
* **NIM:** C030325102
* **Kelas/Prodi:** D3 Teknik Informatika

## Daftar Route (`php artisan route:list`)
```text
  GET|HEAD        / ............................................................................................ routes/web.php:7
  GET|HEAD        akademik/mahasiswa ................................................ mahasiswa.index › MahasiswaController@index
  POST            akademik/mahasiswa ................................................ mahasiswa.store › MahasiswaController@store
  GET|HEAD        akademik/mahasiswa/create ....................................... mahasiswa.create › MahasiswaController@create
  GET|HEAD        akademik/mahasiswa/{nim} ............................................ mahasiswa.show › MahasiswaController@show
  PUT|PATCH       akademik/mahasiswa/{nim} ........................................ mahasiswa.update › MahasiswaController@update
  DELETE          akademik/mahasiswa/{nim} ...................................... mahasiswa.destroy › MahasiswaController@destroy
  GET|HEAD        akademik/mahasiswa/{nim}/edit ....................................... mahasiswa.edit › MahasiswaController@edit
  GET|HEAD        akademik/matakuliah ............................................. matakuliah.index › MatakuliahController@index
  POST            akademik/matakuliah ............................................. matakuliah.store › MatakuliahController@store
  GET|HEAD        akademik/matakuliah/create .................................... matakuliah.create › MatakuliahController@create
  GET|HEAD        akademik/matakuliah/{kode} ........................................ matakuliah.show › MatakuliahController@show
  PUT|PATCH       akademik/matakuliah/{kode} .................................... matakuliah.update › MatakuliahController@update
  DELETE          akademik/matakuliah/{kode} .................................. matakuliah.destroy › MatakuliahController@destroy
  GET|HEAD        akademik/matakuliah/{kode}/edit ................................... matakuliah.edit › MatakuliahController@edit
  GET|HEAD        storage/{path} storage.local › vendor/laravel/framework/src/Illuminate/Filesystem/FilesystemServiceProvider.php
  PUT             storage/{path} storage.local.upload › vendor/laravel/framework/src/Illuminate/Filesystem/FilesystemServiceProvider.php
  GET|HEAD        up ................ vendor/laravel/framework/src/Illuminate/Foundation/Configuration/ApplicationBuilder.php:224

  Showing [18] routes

## Cara Menjalankan Project
1. Ekstrak folder project ke direktori web server lokal (Laragon/XAMPP).
2. Buka terminal pada folder project, lalu jalankan perintah:
composer install
3. Salin file konfigurasi env:
copy .env.example .env
4. Generate key aplikasi:
php artisan key:generate
5. Jalankan server lokal:
php artisan serve
6. Buka browser dan akses URL: http://127.0.0.1:8000/akademik/mahasiswa