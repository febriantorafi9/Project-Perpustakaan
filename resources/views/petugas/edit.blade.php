@extends('/komponen/master')

@section('content')
        <h2><p class="text-dark">Update Data Petugas</p></h2>
            <br/>
                <a href="/petugas" class="btn btn-warning">kembali</a>
            <br/>
            <br/>
            @foreach($petugas as $p)
            <form action="/anggota/update" method="get">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_petugas" required="required" value="{{$p->id_petugas}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_petugas" required="required" value="{{$p->nama_petugas}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin (isi L/P)</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jenis_kelamin" required="required" value="{{$p->jenis_kelamin}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nomer Telepon</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_telp_petugas" required="required" value="{{$p->no_telp_petugas}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat_petugas" required="required" value="{{$p->alamat_petugas}}">
                </div>
              <button type="submit" class="btn btn-primary">update data</button>
            </form>
            @endforeach
@endsection