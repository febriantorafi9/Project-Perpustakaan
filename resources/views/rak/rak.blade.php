@extends('komponen/master')

@section("content")
<h3>Data Rak</h3>

    <a href="/rak/tambah">+ Tambah Rak Baru</a>

    <br/>
    <br/>

    <table border = '2'>
        <tr>
            <td>ID Rak</td>
            <td>Nama Rak</td>
            <td>Lokasi Rak</td>
            <td>ID Buku</td>
        </tr>
        @foreach($rak as $r)
        <tr>
            <td>{{ $r -> $id_rak }}</td>
            <td>{{ $r -> $nama_rak }}</td>
            <td>{{ $r -> $lokasi_rak }}</td>
            <td>{{ $r -> $id_buku }}</td>
            <td>
                <a href="/rak/edit/{{ $r -> id_rak }}">Edit</a>
                |
                <a href="/rak/hapus/{{ $r -> id_rak }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection