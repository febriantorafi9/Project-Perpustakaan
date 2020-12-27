@extends('/komponen/master2')

@section("konten")
<h3>Data History Peminjaman</h3>
<br>

	<table class="table table-striped table-dark">
		<tr>
            <th>ID Peminjaman</th>
			<th>Judul Buku</th>
			<th>Nama Petugas</th>
			<th>Nama Anggota</th>
			<th>Tgl Pinjam</th>
            <th>Tgl Kembali</th>
		</tr>
		@foreach($hispeminjaman as $h)
		<tr>
			<td>{{ $h->id_peminjaman }}</td>
			<td>{{ $h->judul_buku }}</td>
			<td>{{ $h->nama_petugas }}</td>
			<td>{{ $h->nama_anggota }}</td>
            <td>{{ $h->tgl_pinjam }}</td>
            <td>{{ $h->tgl_kembali }}</td>
		</tr>
		@endforeach
	</table>
@endsection