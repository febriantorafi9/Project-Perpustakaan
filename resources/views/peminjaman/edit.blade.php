@extends('/komponen/master2')

@section('konten')
        <h2><p class="text-secondary">Update Peminjaman</p></h2>
            <br/>
                <a href="/peminjaman" class="btn btn-warning">kembali</a>
            <br/>
            <br/>
            @foreach($peminjaman as $m)
                <form action="/peminjaman/update" method="get">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">ID Peminjaman</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_peminjaman" required="required" value="{{$m->id_peminjaman}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ID Buku</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_buku" required="required" value="{{$m->id_buku}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ID Petugas</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_petugas" required="required" value="{{$m->id_petugas}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ID Anggota</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_anggota" required="required" value="{{$m->id_anggota}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tgl Pinjam</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tgl_pinjam" required="required" value="{{$m->tgl_pinjam}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tgl Kembali</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tgl_kembali" required="required" value="{{$m->tgl_kembali}}">
                    </div>
                <button type="submit" class="btn btn-primary">Update</button>
                </form>
            @endforeach
@endsection