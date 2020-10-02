@extends('/komponen/master')

@section('content')
    <h2><p class = "text-secondry">Edit Data Buku</p></h2>
        <br>
        <a href="/buku">kembali</a>
        <br> 
        <br>
        <form action="/buku/simpan" method = "get">
        {{csrf_field() }}
            ID Buku <input type="text" name="id_buku" required="required">
            Judul Buku <input type="text" name="judul_buku" required="required">
            Penerbit <input type="text" name="penerbit" required="required">
            Tahun Terbit <input type="text" name="tahun_terbit" required="required">
            Stok <input type="text" name="stok" required="required">
            <input type="submit" value="simpan buku">
        </form> 