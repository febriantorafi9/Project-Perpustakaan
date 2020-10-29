@extends('komponen/master2')

@section("konten")
<h3>Data Anggota</h3>
 
	<a href="/anggota/tambah" class="btn btn-success">+ Tambah Anggota Baru</a>
	<br/>
	<br/>
	<div class="search-container">
        <form method="GET" action="/anggota">
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
			<th>Nomer Telepon</th>
			<th>Alamat</th>
            <th>Navigasi</th>
		</tr>
		@foreach($anggota as $a)
		<tr>
			<td>{{ $a->id_anggota }}</td>
			<td>{{ $a->nama_anggota }}</td>
			<td>{{ $a->jenis_kelamin }}</td>
			<td>{{ $a->no_telp_anggota }}</td>
            <td>{{ $a->alamat }}</td>
			<td>
				<a href="/anggota/edit/{{ $a->id_anggota }}" class="btn btn-info">Edit</a>
				|
				<a href="/anggota/hapus/{{ $a->id_anggota }}" class="btn btn-info">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection