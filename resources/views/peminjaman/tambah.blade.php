@extends('/komponen/master2')

@section('konten')
    <h2><p class = "text-secondry">Tambah Data Peminjaman</p></h2>
        <br>
        <a href="/peminjaman" class="btn btn-warning">kembali</a>
        <br> 
        <br>
        <form action="/peminjaman/simpan" method="get">
        {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Peminjaman</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_peminjaman" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Buku</label>
                    <select name="id_buku" required="required">@foreach ($buku as $b)<option value="{{ $b -> id_buku }}">{{$b -> judul_buku}}</option>@endforeach</select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Petugas</label>
                    <select name="id_petugas" required="required">@foreach ($petugas as $b)<option value="{{ $b -> id_petugas }}">{{$b -> nama_petugas}}</option>@endforeach</select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">ID Anggota</label>
                    <select name="id_anggota" required="required">@foreach ($anggota as $b)<option value="{{ $b -> id_anggota }}">{{$b -> nama_anggota}}</option>@endforeach</select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tgl Pinjam</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tgl_pinjam" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tgl Kembali</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tgl_kembali" required="required">
                </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
@endsection