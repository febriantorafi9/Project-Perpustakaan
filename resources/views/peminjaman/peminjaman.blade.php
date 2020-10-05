@extends('komponen/master')

@section("content")
<h3>Data Peminjaman</h3>
 
	<a href="/peminjaman/tambah" class="btn btn-success">+ Peminjaman Baru</a>
	
	<br/>
	<br/>
 
	<table class="table table-striped table-dark">
		<tr>
            <th>ID Peminjaman</th>
			<th>ID Buku</th>
			<th>ID Petugas</th>
			<th>ID Anggota</th>
			<th>Tgl Pinjam</th>
            <th>Tgl Kembali</th>
			<th>Navigasi</th>
		</tr>
		@foreach($peminjaman as $m)
		<tr>
			<td>{{ $m->id_peminjaman }}</td>
			<td>{{ $m->id_buku }}</td>
			<td>{{ $m->id_petugas }}</td>
			<td>{{ $m->id_anggota }}</td>
            <td>{{ $m->tgl_pinjam }}</td>
            <td>{{ $m->tgl_kembali }}</td>
			<td>
				<a href="/peminjaman/edit/{{ $m->id_peminjaman }}" class="btn btn-info">Edit</a>
				|
				<a href="/peminjaman/hapus/{{ $m->id_peminjaman }}" class="btn btn-info">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection

