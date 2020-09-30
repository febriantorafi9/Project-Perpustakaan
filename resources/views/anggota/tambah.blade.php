@extends('/komponen/master')

@section('content')
        <h2><p class="text-secondary">Edit Data Anggota</p></h2>
            <br/>
                <a href="/anggota">kembali</a>
            <br/>
            <br/>
            <form action="/anggota/simpan" method="get">
                {{ csrf_field() }}
                    ID <input type="text" name="id_anggota" required="required"> <br/>
                    Nama <input type="text" name="nama_anggota" required="required"> <br/>
                    Jenis Kelamin (isi L/P) <input type="text" name="jenis_kelamin" required="required"> <br/>
                    Nomer Telepon <input type="text" name="no_telp_anggota" required="required"> <br/>
                    Alamat <textarea type="" name="alamat" required="required"></textarea> <br/>
                    <input type="submit" value="simpan data">
            </form>
@endsection