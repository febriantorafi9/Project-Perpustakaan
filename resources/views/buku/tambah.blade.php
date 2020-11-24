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
                    <select class="form-control" id="rak_id_rak" name="rak_id_rak">
                            @foreach ( $rak as $r )    
                                <option value="{{ $r->id_rak }}">{{ $r->nama_rak }}</option>
                            @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul Buku</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul_buku" required="required">
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