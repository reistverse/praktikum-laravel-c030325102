@extends('layouts.app')

@section('judul', 'Detail Mata Kuliah')

@section('konten')
    <h2>Detail Informasi Mata Kuliah</h2>
    <p><strong>Kode Mata Kuliah:</strong> {{ $kode }}</p>
    <p>
        <a href="{{ route('matakuliah.index') }}">Kembali ke Daftar Mata Kuliah</a>
    </p>
@endsection