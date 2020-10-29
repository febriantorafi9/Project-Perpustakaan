@extends('/komponen/master2')

@section("konten")
<h3>Data Peminjaman</h3>
	
	<br/>
	<br/>
 
	<table class="table table-striped table-dark">
		<tr>
            <th>ID Peminjaman</th>
			<th>Judul Buku</th>
			<th>Nama Petugas</th>
			<th>Nama Anggota</th>
			<th>Tgl Pinjam</th>
            <th>Tgl Kembali</th>
		</tr>
		@foreach($peminjaman as $m)
		<tr>
			<td>{{ $m->id_peminjaman }}</td>
			<td>{{ $m->buku->judul_buku }}</td>
			<td>{{ $m->petugas->nama_petugas }}</td>
			<td>{{ $m->anggota->nama_anggota }}</td>
            <td>{{ $m->tgl_pinjam }}</td>
            <td>{{ $m->tgl_kembali }}</td>
		</tr>
		@endforeach
	</table>
@endsection