@extends('/komponen/master')

@section('content')
        <h2>Update Buku</h2>
            <br/>
                <a href="/buku" class="btn btn-warning">kembali</a>
            <br/>
            <br/>
            @foreach($buku as $r)
            <form action="/buku/update" method="get">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">ID Buku</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_buku" required="required" value="{{$r->id_buku}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul Buku</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul_buku" required="required" value="{{$r->judul_buku}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Penerbit</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="penerbit" required="required" value="{{$r->penerbit}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Terbit</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tahun_terbit" required="required" value="{{$r->tahun_terbit}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Stok</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Stok" required="required" value="{{$r->stok}}">
                    </div>
                <button type="submit" class="btn btn-primary">Update</button>
                </form>
            @endforeach
@endsection