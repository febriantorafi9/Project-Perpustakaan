@extends('/komponen/master')

@section('content')
    <h2><p class = "text-secondry">Tambah Data Rak</p></h2>
        <br>
        <a href="/rak" class="btn btn-warning">kembali</a>
        <br> 
        <br>
        <form action="/rak/simpan" method="get">
        {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Rak</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_rak" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Rak</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_rak" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Lokasi Rak</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lokasi_rak" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Buku</label>
                    <select name="id_buku" required="required">@foreach ($buku as $b)<option value="{{ $b -> id_buku }}">{{$b -> judul_buku}}</option>@endforeach</select>
                </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
@endsection