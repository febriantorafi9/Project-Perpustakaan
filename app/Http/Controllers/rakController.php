<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class rakController extends Controller
{
    public function rak()
    {
        $rak = DB::table('rak') -> get();

        return view('/rak/rak',['rak' => $buku]);
    }
}

public function tambah()
{
    return('/rak/tambah');
}

public function simpan($request)
    {
        DB::table('rak')->insert([
            'id_rak' => $request -> id_rak,
            'nama_rak' => $request -> nama_rak,
            'lokasi_rak' => $request -> lokasi_rak,
            'id_buku' => $request -> id_buku
        ]);
        //mengalihkan ke halaman rak
        return redirect('/rak');
    }

    public function edit($id_rak)
    {
        $buku = DB::table('rak') -> where('id_rak',$request -> id_rak) ->get();
        return view('/rak/edit',['rak' => $rak]);
    }

    public function update(Request $request)
    {
        DB::table('rak')->where('id_rak',$request->id_rak) -> update([
            'id_rak' => $request -> id_rak,
            'nama_rak' => $request -> nama_rak,
            'lokasi_rak' => $request -> lokasi_rak,
            'id_buku' => $request -> id_buku
        ]);
        return redirect('/rak')
    }

    public function hapus(Request $request)
    {
        //menghapus data rak
        DB::table('rak')->where('id_rak',$request->id_rak)->delete();
        return redirect('/rak');
    }
}