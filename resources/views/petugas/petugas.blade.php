@extends('komponen/master2')

@section("konten")
<h3>Data Petugas</h3>
 
	<a href="/petugas/tambah" class="btn btn-success">+ Tambah Petugas Baru</a>
	<br/>
	<br/>
	<div class="search-container">
        <form method="GET" action="/petugas">
            <input type="text" name ="cari" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
	<br/>
	<table class="table table-striped table-dark">
		<tr>
            <th>ID</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Jabatan</th>
			<th>Nomer Telepon</th>
			<th>Alamat</th>
			<th>Navigasi</th>
		</tr>
		@foreach($petugas as $p)
		<tr>
			<td>{{ $p->id_petugas }}</td>
			<td>{{ $p->nama_petugas }}</td>
			<td>{{ $p->jenis_kelamin }}</td>
			<td>{{ $p->jabatan }}</td>
			<td>{{ $p->no_telp_petugas }}</td>
            <td>{{ $p->alamat_petugas }}</td>
			<td>
				<a href="/petugas/edit/{{ $p->id_petugas }}" class="btn btn-info">Edit</a>
				|
				<a href="/petugas/hapus/{{ $p->id_petugas }}" class="btn btn-info">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection