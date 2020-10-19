@extends('/komponen/master2')

@section('konten')
    <h2><p class = "text-secondry">Tambah Data Pengembalian</p></h2>
        <br>
        <a href="/pengembalian" class="btn btn-warning">kembali</a>
        <br> 
        <br>
        <form action="/pengembalian/simpan" method="get">
        {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Pengembalian</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_pengembalian" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Buku</label>
                    <select name="id_buku" required="required">@foreach ($buku as $b)<option value="{{ $b -> id_buku }}">{{$b -> judul_buku}}</option>@endforeach</select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Petugas</label>
                    <select name="id_petugas" required="required">@foreach ($petugas as $p)<option value="{{ $p -> id_petugas }}">{{$p -> nama_petugas}}</option>@endforeach</select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Anggota</label>
                    <select name="id_anggota" required="required">@foreach ($anggota as $a)<option value="{{ $a -> id_anggota }}">{{$a -> nama_anggota}}</option>@endforeach</select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tgl Kembali</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tgl_kembali" required="required">
                </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
@endsection