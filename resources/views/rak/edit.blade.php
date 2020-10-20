@extends('/komponen/master2')

@section('konten')
        <h2><p class="text-secondary">Update Rak</p></h2>
            <br/>
                <a href="/rak" class="btn btn-warning">kembali</a>
            <br/>
            <br/>
            @foreach($rak as $k)
                <form action="/rak/update" method="get">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Rak</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_rak" required="required" value="{{$k->nama_rak}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Lokasi Rak</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lokasi_rak" required="required" value="{{$k->lokasi_rak}}">
                    </div>
                <button type="submit" class="btn btn-primary">Update</button>
                </form>
            @endforeach
@endsection