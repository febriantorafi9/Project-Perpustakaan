@extends('/komponen/master')

@section('content')
        <h2><p class="text-secondary">Update Rak</p></h2>
            <br/>
                <a href="/rak">kembali</a>
            <br/>
            <br/>
            @foreach($rak as $k)

            <form action="/rak/update" method="get">
                {{ csrf_field() }}
                    ID Rak <input type="text" name="id_rak" required="required" value="{{$k->id_rak}}"> 
                    <br/>
                    Nama Rak <input type="text" name="nama_rak" required="required" value="{{$k->nama_rak}}"> 
                    <br/>
                    Lokasi Rak<input type="text" name="lokasi_rak" required="required" value="{{$k->lokasi_rak}}">
                    <br/>
                    ID Buku <input type="text" name="id_buku" required="required" value="{{$k->id_buku}}">
                    <br/>   
                    <input type="submit" value="update rak">
            </form>
            @endforeach
@endsection