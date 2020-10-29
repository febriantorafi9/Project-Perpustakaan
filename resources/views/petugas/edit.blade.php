@extends('/komponen/master2')

@section('konten')
        <h2><p class="text-dark">Update Data Petugas</p></h2>
            <br/>
                <a href="/petugas" class="btn btn-warning">kembali</a>
            <br/>
            <br/>
            @foreach($petugas as $p)
            <form action="/petugas/update/{{$p->id_petugas}}" method="get">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_petugas" required="required" value="{{$p->nama_petugas}}">
                </div>
                <div class="form-group">
                        <label for="jenis_kelamin_petugas">Jenis Kelamin (Laki-laki atau Perempuan)</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required="required" value="{{$p->jenis_kelamin}}">
                        <option>L</option>
                        <option>P</option>
      
                        </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="jabatan" required="required" value="{{$p->jabatan}}">
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