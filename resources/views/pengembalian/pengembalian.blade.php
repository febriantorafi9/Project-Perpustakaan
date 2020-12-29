@extends('/komponen/master2')

@section('konten')
    <h3>Data Pengembalian</h3>
    
    <a href="/pengembalian/tambah" class="btn btn-success">+ Pengembalian Baru</a>
    
    <br/>
    <br/>

    <table class="table table-striped table-dark">
        <tr>
            <th>ID Pengembalian</th>
            <th>ID Peminjaman</th>
            <th>Nama Anggota</th>
            <th>Nama Petugas</th>
            <th>Judul Buku</th>
            <th>Tgl Kembali</th>
        </tr>
        @foreach($pengembalian as $pe)
        <tr>
            <td>{{ $pe->id_pengembalian }}</td>
            <td>{{ $pe->id_peminjaman  }}</td>
            <td>{{ $pe->anggota->nama_anggota}}</td>
            <td>{{ $pe->petugas->nama_petugas}}</td>
            <td>{{ $pe->buku->judul_buku}}</td>
            <td>{{ $pe->tgl_kembali }}</td>
            
        </tr>
        @endforeach
    </table>
@endsection