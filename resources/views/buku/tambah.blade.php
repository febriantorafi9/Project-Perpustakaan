@extends('/komponen/master2')

@section('konten')
    <h2>Tambah Data Buku</h2>
        <br>
        <a href="/buku" class="btn btn-warning">kembali</a>
        <br> 
        <br>
        <form action="/buku/simpan" method="get">
        {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Rak</label>
                    <select name="id_rak" required="required">@foreach ($rak as $r => $value)<option value="{{ $r }}">{{$value}}</option>@endforeach</select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul Buku</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul_buku" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label>
                    <textarea type="text" class="form-control" id="exampleInputEmail1" rows="5" aria-describedby="emailHelp" name="deskripsi" required="required"></textarea>
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