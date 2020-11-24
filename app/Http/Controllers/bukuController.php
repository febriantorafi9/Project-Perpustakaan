<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Buku;
use App\Rak;

class bukuController extends Controller
{
    public function buku()
    {
        // mengambil data dari table buku
        //$buku = DB::table('buku')->get();
        $buku = Buku::all();
        $rak = Rak::all();

        $data = array(
            'menu' => 'buku',
            'submenu' => ''
        );
        
        // mengirim data buku ke view master
        return view('/buku/buku',compact('rak','buku'),$data);
    }

    public function tambah()
    {
        $buku = Buku::all();
        $rak = Rak::all();
        
        $data = array(
            'menu' => 'buku',
            'submenu' => ''
        );
        //return view('/buku/tambah',$data);
        return view('/buku/tambah',compact('buku','rak'),$data);
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
        $rak = Rak::all();
        $buku = DB::table('buku')->where('id_buku',$id_buku)->get();
        $data = array(
            'menu' => 'buku',
            'submenu' => ''
        );
        //return view('/buku/edit',['buku' => $buku],$data);
        return view('/buku/edit',compact('buku','rak'),$data);
    }

    public function update(Request $request,$id)
    {
        DB::table('buku')->where('id_buku',$id) -> update([
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