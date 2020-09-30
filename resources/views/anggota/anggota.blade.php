@extends('komponen/master')

@section("content")
<h3>Data Anggota</h3>
 
	<a href="/anggota/tambah"> + Tambah Anggota Baru</a>
	
	<br/>
	<br/>
 
	<table border="2">
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
				<a href="/anggota/edit/{{ $a->id_anggota }}">Edit</a>
				|
				<a href="/anggota/hapus/{{ $a->id_anggota }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection