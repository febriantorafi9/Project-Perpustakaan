@extends('/komponen/master2')

@section('konten')
        <h2>Update Buku</h2>
            <br/>
                <a href="/buku" class="btn btn-warning">kembali</a>
            <br/>
            <br/>
            @foreach($buku as $b)
            <form action="/buku/update/{{$b->id_buku}}" method="get">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Rak</label>
                        <select name="id_rak" required="required">@foreach ($rak as $r => $value)<option value="{{ $r }}">{{$value}}</option>@endforeach</select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul Buku</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul_buku" required="required" value="{{$b->judul_buku}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Penerbit</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="penerbit" required="required" value="{{$b->penerbit}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tahun Terbit</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tahun_terbit" required="required" value="{{$b->tahun_terbit}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Stok</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stok" required="required" value="{{$b->stok}}">
                    </div>
                <button type="submit" class="btn btn-primary">Update</button>
                </form>
            @endforeach
@endsection