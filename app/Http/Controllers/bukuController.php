<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bukuController extends Controller
{
    public function buku()
    {
        // mengambil data dari table buku
        $buku = DB::table('buku')->get();

        // mengirim data buku ke view master
        return view('/buku/buku',['buku' => $buku]);
    }

    public function tambah()
    {
        return view('/buku/tambah');
    }

    public function simpan(Request $request)
    {
        DB::table('buku')->insert([
            'id_buku' => $request -> id_buku,
            'judul_buku' => $request -> judul_buku,
            'penerbit' => $request -> penerbit,
            'tahun_terbit' => $request -> tahun_terbit,
            'stok' => $request -> stok
        ]);
        //mengalihkan ke halaman buku
        return redirect('/buku');
    }

    public function edit($id_buku)
    {
        $buku = DB::table('buku')->where('id_buku',$id_buku)->get();
        return view('/buku/edit',['buku' => $buku]);
    }

    public function update(Request $request)
    {
        DB::table('buku')->where('id_buku',$request->id_buku) -> update([
            'id_buku' => $request -> id_buku,
            'judul_buku' => $request -> judul_buku,
            'penerbit' => $request -> penerbit,
            'tahun_terbit' => $request -> tahun_terbit,
            'stok' => $request -> stok
        ]);
        return redirect('/buku');
    }

    public function hapus(Request $request)
    {
        //menghapus data buku
        DB::table('buku')->where('id_buku',$request->id_buku)->delete();
        return redirect('/buku');
    }

}