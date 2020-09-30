@extends('/komponen/master')

@section('content')
        <h2><p class="text-secondary">Update Data Petugas</p></h2>
            <br/>
                <a href="/petugas">kembali</a>
            <br/>
            <br/>
            @foreach($petugas as $p)

            <form action="/petugas/update" method="get">
                {{ csrf_field() }}
                    ID <input type="text" name="id_petugas" required="required" value="{{$p->id_petugas}}"> 
                    <br/>
                    Nama <input type="text" name="nama_petugas" required="required" value="{{$p->nama_petugas}}"> 
                    <br/>
                    Jenis Kelamin (isi L/P) <input type="text" name="jenis_kelamin" required="required" value="{{$p->jenis_kelamin}}">
                    <br/>
                    Jabatan <input type="text" name="jabatan" required="required" value="{{$p->jabatan}}">
                    <br/>
                    Nomer Telepon <input type="text" name="no_telp_petugas" required="required" value="{{$p->no_telp_petugas}}">
                    <br/>
                    Alamat <textarea type="" name="alamat_petugas">{{$p->alamat_petugas}}</textarea>
                    <br/>
                    <input type="submit" value="update data">
            </form>
            @endforeach
@endsection