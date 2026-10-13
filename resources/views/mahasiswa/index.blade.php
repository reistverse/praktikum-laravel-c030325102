@extends('layouts.app')

@section('judul', 'Daftar Mahasiswa')

@section('konten')
    <h2>Daftar Mahasiswa</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Semester</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mahasiswaList as $index => $mhs)
            <tr style="{{ $loop->even ? 'background-color: #f2f2f2;' : 'background-color: #ffffff;' }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mhs['nim'] ?? '-' }}</td>
                <td>{{ $mhs['nama'] ?? '-' }}</td>
                <td>{{ $mhs['prodi'] ?? '-' }}</td>
                <td>
                    @switch($mhs['semester'] ?? 3)
                        @case(1)
                            <span>Semester 1 (Baru)</span>
                            @break
                        @case(3)
                            <span>Semester 3 (Aktif)</span>
                            @break
                        @default
                            <span>Semester Lanjut</span>
                    @endswitch
                </td>
                <td>
                    <a href="{{ route('mahasiswa.show', $mhs['nim']) }}">Detail</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" style="text-align: center;">Tidak ada data mahasiswa.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
@endsection