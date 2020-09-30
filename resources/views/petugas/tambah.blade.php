@extends('/komponen/master')

@section('content')
<h2><p class="text-secondary">Edit Data Petugas</p></h2>
            <br/>
                <a href="/petugas">kembali</a>
            <br/>
            <br/>
            <form action="/petugas/simpan" method="get">
                {{ csrf_field() }}
                    ID <input type="text" name="id_petugas" required="required"> <br/>
                    Nama <input type="text" name="nama_petugas" required="required"> <br/>
                    Jenis Kelamin (isi L/P) <input type="text" name="jenis_kelamin" required="required"> <br/>
                    Jabatan <input type="text" name="jabatan" required="required"> <br/>
                    Nomer Telepon <input type="text" name="no_telp_petugas" required="required"> <br/>
                    Alamat <textarea type="" name="alamat_petugas" required="required"></textarea> <br/>
                    <input type="submit" value="simpan data">
            </form>
@endsection