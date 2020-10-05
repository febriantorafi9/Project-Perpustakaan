@extends('/komponen/master')

@section('content')
    <h3>Data Pengembalian</h3>
    
    <a href="/pengembalian/tambah" class="btn btn-success">+ Pengembalian Baru</a>
    
    <br/>
    <br/>

    <table class="table table-striped table-dark">
        <tr>
            <th>ID Pengembalian</th>
            <th>ID Buku</th>
            <th>ID Petugas</th>
            <th>ID Anggota</th>
            <th>Tgl Kembali</th>
            <th>Navigasi</th>
        </tr>
        @foreach($pengembalian as $pe)
        <tr>
            <td>{{ $pe->id_pengembalian }}</td>
            <td>{{ $pe->id_buku }}</td>
            <td>{{ $pe->id_petugas }}</td>
            <td>{{ $pe->id_anggota }}</td>
            <td>{{ $pe->tgl_kembali }}</td>
            <td>
                <a href="/pengembalian/edit/{{ $pe->id_pengembalian }}" class="btn btn-info">Edit</a>
                |
                <a href="/pengembalian/hapus/{{ $pe->id_pengembalian }}" class="btn btn-info">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection