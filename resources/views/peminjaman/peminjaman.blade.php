@extends('/komponen/master2')

@section("konten")
<h3>Data Peminjaman</h3>
 
	<a href="/peminjaman/tambah" class="btn btn-success">+ Peminjaman Baru</a>
	
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
			<th>Status Pinjam</th>
			<th>Navigasi</th>
		</tr>
		@foreach($peminjaman as $m)
		<tr>
			<td>{{ $m->id_peminjaman }}</td>
			<td>{{ $m->buku->judul_buku }}</td>
			<td>{{ $m->petugas->nama_petugas }}</td>
			<td>{{ $m->anggota->nama_anggota }}</td>
            <td>{{ $m->tgl_pinjam }}</td>
            <td>{{ $m->tgl_kembali }}</td>
			@if($m->status_pinjam == 0)
				<td>
				<a href="/peminjaman/simpan_pengembalian/{{ $m->id_peminjaman }}" class="badge badge-success"><i class="fas fa-edit"></i> Kembalikan</a>
				</td>
			@else
				<td>
				<a href="#" class="badge badge-danger"><i class="fas fa-edit"></i> sudah dikembalikan</a>
				</td>
			@endif
			<td>
				<a href="/peminjaman/edit/{{ $m->id_peminjaman }}" class="btn btn-info">Edit</a>
				
				<!--<a href="/peminjaman/hapus/{{ $m->id_peminjaman }}" class="btn btn-info">Hapus</a>-->
			</td>
		</tr>
		@endforeach
	</table>
@endsection

