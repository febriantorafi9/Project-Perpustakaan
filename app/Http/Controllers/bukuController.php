<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Buku;

class bukuController extends Controller
{
    public function buku()
    {
        // mengambil data dari table buku
        //$buku = DB::table('buku')->get();
        $buku = buku::all();

        $data = array(
            'menu' => 'buku',
            'submenu' => ''
        );
        
        // mengirim data buku ke view master
        return view('/buku/buku',['buku' => $buku],$data);
    }

    public function tambah()
    {
        $data = array(
            'menu' => 'buku',
            'submenu' => ''
        );
        return view('/buku/tambah',$data);
    }

    public function simpan(Request $request)
    {
        DB::table('buku')->insert([
            'id_buku' => $request ->id_buku,
            'judul_buku' => $request ->judul_buku,
            'penerbit' => $request ->penerbit,
            'tahun_terbit' => $request ->tahun_terbit,
            'stok' => $request ->stok
        ]);
        //mengalihkan ke halaman buku
        return redirect('/buku')->with('status edit berhasil', 'Hore, Data Petugas Telah Diedit!');
    }

    public function edit($id_buku)
    {
        $buku = DB::table('buku')->where('id_buku',$id_buku)->get();
        $data = array(
            'menu' => 'buku',
            'submenu' => ''
        );
        return view('/buku/edit',['buku' => $buku],$data);
    }

    public function update(Request $request)
    {
        DB::table('buku')->where('id_buku',$request->id_buku) -> update([
            'id_buku' => $request ->id_buku,
            'judul_buku' => $request ->judul_buku,
            'penerbit' => $request ->penerbit,
            'tahun_terbit' => $request ->tahun_terbit,
            'stok' => $request ->stok
        ]);
        return redirect('/buku')->with('status edit berhasil', 'Hore, Data Petugas Telah Diedit!');
    }

    public function hapus($id)
    {
        //menghapus data buku
        /*DB::table('buku')->where('id_buku',$request->id_buku)->delete();
        return redirect('/buku');*/

        Buku::find($id)->delete();
        return redirect ('/buku');

    }

}