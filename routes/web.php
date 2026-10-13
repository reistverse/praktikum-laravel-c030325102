<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('mahasiswa.index');
});

// Menggunakan Route Resource (Otomatis membuat named route seperti mahasiswa.index, mahasiswa.show, dll)
Route::resource('/akademik/mahasiswa', MahasiswaController::class)->parameters([
    'mahasiswa' => 'nim'
]);

Route::resource('/akademik/matakuliah', MatakuliahController::class)->parameters([
    'matakuliah' => 'kode'
]);







// Rute Mahasiswa
// Route::get('/akademik/mahasiswa', [MahasiswaController::class, 'index']);
// Route::get('/akademik/mahasiswa/{nim}', [MahasiswaController::class, 'show']);

// // Rute Mata Kuliah (Tugas Mandiri)
// Route::get('/akademik/matakuliah', [MatakuliahController::class, 'index']);
// Route::get('/akademik/matakuliah/{kode}', [MatakuliahController::class, 'show']);

// Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
// Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show']);

// // Rute untuk halaman daftar mahasiswa (index)
// Route::get('/akademik/mahasiswa', [MahasiswaController::class, 'index']);

// // Rute untuk halaman detail mahasiswa (show berdasarkan NIM)
// Route::get('/akademik/mahasiswa/{nim}', [MahasiswaController::class, 'show']);


// Route::get('/mahasiswa/tugas5', function () {
//     $mahasiswaList = [
//         ['nama' => "<script>alert('XSS')</script>Hacker", 'nim' => 'C030325102', 'prodi' => 'D3 Teknik Informatika'],
//         ['nama' => 'Adinda Ridha Salsabila', 'nim' => null, 'prodi' => 'D3 Teknik Informatika'], 
//         ['nama' => null, 'nim' => 'C030325054', 'prodi' => 'D3 Teknik Informatika'],
//         ['nama' => 'Siti Nuor Azkia', 'nim' => 'C030325047', 'prodi' => null],
//         ['nama' => 'Ravitha Aurel Nathaly Eryckvanda', 'nim' => 'C030325039', 'prodi' => 'D3 Teknik Informatika'],
//     ];
    
//     return view('mahasiswa.tugas5', compact('mahasiswaList'));
// });


// Route::get('/akademik/statistik', function () {
//     return view('akademik.statistik');
// });

// Route::get('/profil', function () {
//     return view('profil')
//         ->with('mahasiswa', 'Siti Raihanah')
//         ->with('nim', 'C030325102')
//         ->with('prodi', 'D3 Teknik Informatika');
// });

// Route::get('/sapa', function () {
//     return view('sapa');
// });

// Route::prefix('akademik')->group(function () {
//     Route::resource('mahasiswa', MahasiswaController::class);
//     Route::resource('matakuliah', MatakuliahController::class)->only(['index', 'show', 'create', 'store']);
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', function () {
//         return "Halaman Dashboard Admin";
//     });
//     Route::get('/users', function () {
//         return "Halaman Kelola User Admin";
//     });
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/halo', function () {
//     return 'Halo, ini adalah route pertama saya!';
// });

// Route::get('/kontak', function () {
//     return 'Silakan hubungi kami melalui halaman kontak ini.';
// });

// Route::get('/tentang', function () {
//     return 'Ini adalah halaman Tentang Kami.';
// });
