@extends('/komponen/master')

@section('content')
    <h2><p class = "text-secondry">Edit Data Buku</p></h2>
        <br>
        <a href="/buku">kembali</a>
        <br> 
        <br>
        <form action="/buku/simpan" method="get">
        {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Buku</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_buku" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Rak</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul_buku" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul Buku</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lokasi_rak" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Penerbit</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="penerbit" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tahun Terbit</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tahun_terbit" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Stok</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stok" required="required">
                </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
@endsection