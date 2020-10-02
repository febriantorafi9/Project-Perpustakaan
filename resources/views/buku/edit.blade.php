@extends('/komponen/master')

@section('content')
        <h2><p class="text-secondary">Update Buku</p></h2>
            <br/>
                <a href="/buku">kembali</a>
            <br/>
            <br/>
            @foreach($buku as $r)

            <form action="/buku/update" method="get">
                {{ csrf_field() }}
                    ID Buku <input type="text" name="id_buku" required="required" value="{{$r->id_buku}}"> 
                    <br/>
                    Judul Buku <input type="text" name="judul_buku" required="required" value="{{$r->judul_buku}}"> 
                    <br/>
                    Penerbit <input type="text" name="penerbit" required="required" value="{{$r->penerbit}}">
                    <br/>
                    Tahun Terbit <input type="text" name="tahun_terbit" required="required" value="{{$r->tahun_terbit}}">
                    <br/>
                    Stok <input type="text" name="Stok" required="required" value="{{$r->stok}}">
                    <br/>
                    <input type="submit" value="update buku">
            </form>
            @endforeach
@endsection