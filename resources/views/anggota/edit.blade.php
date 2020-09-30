@extends('/komponen/master')

@section('content')
        <h2><p class="text-secondary">Update Anggota</p></h2>
            <br/>
                <a href="/anggota">kembali</a>
            <br/>
            <br/>
            @foreach($anggota as $c)

            <form action="/anggota/update" method="get">
                {{ csrf_field() }}
                    ID <input type="text" name="id_anggota" required="required" value="{{$c->id_anggota}}"> 
                    <br/>
                    Nama <input type="text" name="nama_anggota" required="required" value="{{$c->nama_anggota}}"> 
                    <br/>
                    Jenis Kelamin (isi L/P) <input type="text" name="jenis_kelamin" required="required" value="{{$c->jenis_kelamin}}">
                    <br/>
                    Nomer Telepon <input type="text" name="no_telp_anggota" required="required" value="{{$c->no_telp_anggota}}">
                    <br/>
                    Alamat <textarea type="" name="alamat">{{$c->alamat}}</textarea>
                    <br/>
                    <input type="submit" value="update data">
            </form>
            @endforeach
@endsection