@extends('/komponen/master2')

@section('konten')
        <h2>Update Anggota</h2>
            <br/>
                <a href="/anggota" class="btn btn-warning">kembali</a>
            <br/>
            <br/>
            @foreach($anggota as $c)
            <form action="/anggota/update/{{$c->id_anggota}}" method="get">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_anggota" required="required" value="{{$c->nama_anggota}}">
                </div>
                <div class="form-group">
                        <label for="jenis_kelamin_Anggota">Jenis Kelamin (Laki-laki atau Perempuan)</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required="required" value="{{$c->jenis_kelamin}}">
                        <option>L</option>
                        <option>P</option>
      
                        </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nomer Telepon</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_telp_anggota" required="required" value="{{$c->no_telp_anggota}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat" required="required" value="{{$c->alamat}}">
                </div>
              <button type="submit" class="btn btn-primary">update</button>
            </form>
            @endforeach
@endsection