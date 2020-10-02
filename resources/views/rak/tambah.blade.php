@extends('/komponen/master')

@section('content')
    <h2><p class = "text-secondry">Edit Data Rak</p></h2>
        <br>
        <a href="/rak">kembali</a>
        <br> 
        <br>
        <form action="/rak/simpan" method = "get">
        {{csrf_field() }}
            ID Rak <input type="text" name="id_rak" required="required">
            Nama Rak <input type="text" name="nama_rak" required="required">
            Lokasi Rak <input type="text" name="lokasi_rak" required="required">
            ID Buku <input type="text" name="id_buku" required="required">
            <input type="submit" value="simpan rak">
        </form> 