@extends('/komponen/master2')

@section('konten')
        <h2>Tambah Data Anggota</h2>
            <br/>
                <a href="/anggota" class="btn btn-warning">kembali</a>
            <br/>
            <br/>
            <form action="/anggota/simpan" method="get">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_anggota" required="required">
                </div>
                <div class="form-group">
                        <label for="jenis_kelamin_Anggota">Jenis Kelamin (Laki-laki atau Perempuan)</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                        <option>L</option>
                        <option>P</option>
      
                        </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nomer Telepon</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_telp_anggota" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat" required="required">
                </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
@endsection