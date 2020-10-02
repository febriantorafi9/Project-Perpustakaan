@extends('komponen/master')

@section("content")
<h3>Data Buku</h3>
   
    <a href="/buku/tambah" class="btn btn-success"> + Tambah Buku Baru</a>
    <br/>
	<br/>
    <table class="table table-striped table-dark">
        <tr>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Stok</th>
            <th>Navigasi</th>
        </tr>
        @foreach($buku as $b)
        <tr>
            <td>{{ $b -> id_buku }}</td>
            <td>{{ $b -> judul_buku }}</td>
            <td>{{ $b -> penerbit }}</td>
            <td>{{ $b -> tahun_terbit }}</td>
            <td>{{ $b -> stok }}</td>
            <td>
                <a href="/buku/edit/{{ $b -> id_buku }}" class="btn btn-info">Edit</a>
                |
                <a href="/buku/hapus/{{ $b -> id_buku }}" class="btn btn-info">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection