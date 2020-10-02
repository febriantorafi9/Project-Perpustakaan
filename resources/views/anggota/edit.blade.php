@extends('/komponen/master')

@section('content')
        <h2>Update Anggota</h2>
            <br/>
                <a href="/anggota" class="btn btn-warning">kembali</a>
            <br/>
            <br/>
            @foreach($anggota as $c)
            <form action="/anggota/update" method="get">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_anggota" required="required" value="{{$c->id_anggota}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_anggota" required="required" value="{{$c->nama_anggota}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin (isi L/P)</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jenis_kelamin" required="required" value="{{$c->jenis_kelamin}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nomer Telepon</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_telp_anggota" required="required" value="{{$c->no_telp_anggota}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat" required="required" value="{{$c->alamat}}">
                </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @endforeach
@endsection