@extends('layouts.app')

@section('judul', 'Daftar Mata Kuliah')

@section('konten')
    <h2>Daftar Mata Kuliah</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode MK</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($matakuliahList as $index => $mk)
            <tr style="{{ $loop->odd ? 'background-color: #f9f9f9;' : 'background-color: #ffffff;' }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mk['kode'] }}</td>
                <td>{{ $mk['nama'] }}</td>
                <td>
                    {{ $mk['sks'] }} 
                    @if($mk['sks'] > 3)
                        <span style="color: red; font-weight: bold;">(SKS Besar)</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('matakuliah.show', $mk['kode']) }}">Detail</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" style="text-align: center; color: gray;">Data mata kuliah belum tersedia.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
@endsection