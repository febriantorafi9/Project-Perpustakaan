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
                    <label for="exampleInputEmail1">Nama Buku</label>
                    <select name="id_buku" required="required">@foreach ($buku as $b => $value)<option value="{{ $b }}">{{$value}}</option>@endforeach</select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Petugas</label>
                    <select name="id_petugas" required="required">@foreach ($petugas as $p => $value)<option value="{{ $p }}">{{$value}}</option>@endforeach</select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Anggota</label>
                    <select name="id_anggota" required="required">@foreach ($anggota as $a => $value)<option value="{{ $a }}">{{$value}}</option>@endforeach</select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tgl Kembali</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tgl_kembali" required="required">
                </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
@endsection