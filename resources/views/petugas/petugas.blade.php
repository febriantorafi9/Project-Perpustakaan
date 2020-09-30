@extends('komponen/master')

@section("content")
<h3>Data Petugas</h3>
 
	<a href="/petugas/tambah"><p class="text-warning">+ Tambah Petugas Baru</p></a>
	
	<br/>
	<br/>
 
	<table border="2">
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
				<a href="/petugas/edit/{{ $p->id_petugas }}">Edit</a>
				|
				<a href="/petugas/hapus/{{ $p->id_petugas }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection