@extends('layouts.app')

@section('judul', 'Detail Mahasiswa')

@section('konten')
    <h2>Detail Informasi Mahasiswa</h2>
    <p><strong>NIM:</strong> {{ $nim }}</p>
    <p>
        <a href="{{ route('mahasiswa.index') }}">Kembali ke Daftar Mahasiswa</a>
    </p>
@endsection