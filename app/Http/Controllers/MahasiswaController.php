<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswaList = [
            ['nama' => 'Siti Raihanah', 'nim' => 'C030325102', 'prodi' => 'D3 Teknik Informatika'],
            ['nama' => 'Adinda Ridha Salsabila', 'nim' => 'C030325002', 'prodi' => 'D3 Teknik Informatika'],
            ['nama' => 'Siti Nuor Azkia', 'nim' => 'C030325047', 'prodi' => 'D3 Teknik Informatika'],
            ['nama' => 'Ravitha Aurel Nathaly Eryckvanda', 'nim' => 'C030325039', 'prodi' => 'D3 Teknik Informatika'],
            ['nama' => 'Trista', 'nim' => 'C030325054', 'prodi' => 'D3 Teknik Informatika'],
        ];

        return view('mahasiswa.index', compact('mahasiswaList'));
    }

    // SIMPAN METHOD SHOW DI SINI
    public function show($nim) 
    { 
        return view('mahasiswa.show', compact('nim')); 
    }
}