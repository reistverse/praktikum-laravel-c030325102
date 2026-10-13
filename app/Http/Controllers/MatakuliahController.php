<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliahList = [
            ['kode' => 'TI101', 'nama' => 'Desain Web', 'sks' => 3],
            ['kode' => 'TI102', 'nama' => 'Basis Data Lanjut', 'sks' => 3],
            ['kode' => 'TI103', 'nama' => 'Internet of Things', 'sks' => 4],
            ['kode' => 'TI104', 'nama' => 'Pemrograman Berorientasi Objek', 'sks' => 3],
        ];

        return view('matakuliah.index', compact('matakuliahList'));
    }

    public function show($kode)
    {
        return view('matakuliah.show', compact('kode'));
    }
}