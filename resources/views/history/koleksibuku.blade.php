@extends('/komponen/master2')

@section("konten")
<h3>Koleksi Buku</h3>
   
    <div class="search-container">
        <form method="GET" action="/koleksibuku">
            <input type="text" name ="cari" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <br/>
	<br/>
    <table class="table table-striped table-dark">
        <tr>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Deskripsi Buku</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
        </tr>
        @foreach($buku as $b)
        <tr>
            <td>{{ $b -> id_buku }}</td>
            <td>{{ $b -> judul_buku }}</td>
            <td>{{ $b -> deskripsi }}</td>
            <td>{{ $b -> penerbit }}</td>
            <td>{{ $b -> tahun_terbit }}</td>
        </tr>
        @endforeach
    </table>
@endsection