@extends('komponen/master2')

@section("konten")
<h3>Data Rak</h3>

    <a href="/rak/tambah" class="btn btn-success">+ Tambah Rak Baru</a>

    <br/>
    <br/>

    <table class="table table-striped table-dark">
        <tr>
            <td>ID Rak</td>
            <td>Nama Rak</td>
            <td>Lokasi Rak</td>
            <td>Nama Buku</td>
            <th>Navigasi</th>
        </tr>
        @foreach($rak as $r)
        <tr>
            <td>{{ $r -> id_rak }}</td>
            <td>{{ $r -> nama_rak }}</td>
            <td>{{ $r -> lokasi_rak }}</td>
            <td>{{ $r -> buku -> judul_buku }}</td>
            <td>
                <a href="/rak/edit/{{ $r -> id_rak }}" class="btn btn-info">Edit</a>
                |
                <a href="/rak/hapus/{{ $r -> id_rak }}" class="btn btn-info">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection