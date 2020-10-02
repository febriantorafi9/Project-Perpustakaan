@extends('komponen/master')

@section("content")
<h3>Data Anggota</h3>
 
	<a href="/anggota/tambah" class="btn btn-success">+ Tambah Anggota Baru</a>
	
	<br/>
	<br/>
 
	<table class="table table-dark">
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