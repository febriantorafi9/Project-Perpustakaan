@extends('/komponen/master2')

@section('konten')
        <h2><p class="text-secondary">Update Pengembalian</p></h2>
            <br/>
                <a href="/pengembalian" class="btn btn-warning">kembali</a>
            <br/>
            <br/>
            @foreach($pengembalian as $pe)
                <form action="/pengembalian/update" method="get">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">ID Anggota</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_anggota" required="required" value="{{$pe->id_anggota}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tgl Kembali</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tgl_kembali" required="required" value="{{$pe->tgl_kembali}}">
                    </div>
                <button type="submit" class="btn btn-primary">Update</button>
                </form>
            @endforeach
@endsection