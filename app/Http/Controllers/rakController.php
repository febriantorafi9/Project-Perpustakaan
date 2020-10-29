<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rak;
use App\Buku;

class rakController extends Controller
{
    public function rak(Request $request)
    {
        //$rak = DB::table('rak') -> get();
        if($request -> has('cari')){
            $rak = Rak::where('nama_rak','LIKE','%'.$request->cari.'%')->get();
        }else{
            $rak = Rak::all();
        }
        $buku = Buku::all();

        $data = array(
            'menu' => 'rak',
            'submenu' => ''
        );

        return view('/rak/rak',compact('buku','rak'),$data);
    }

    public function tambah()
    {
        $buku = DB::table('buku')-> pluck('judul_buku','id_buku');
        $data = array(
            'menu' => 'rak',
            'submenu' => ''
        );
        return view('/rak/tambah',compact('buku'),$data);
    }
        

    public function simpan(Request $request)
    {
        DB::table('rak')->insert([
            'id_rak' => $request->id_rak,
            'nama_rak' => $request->nama_rak,
            'lokasi_rak' => $request->lokasi_rak,
            'id_buku' => $request->id_buku
        ]);
        //mengalihkan ke halaman rak
        return redirect('/rak');
    }

    public function edit($id_rak)
    {
        $rak = DB::table('rak')->where('id_rak',$id_rak)->get();
        $data = array(
            'menu' => 'rak',
            'submenu' => ''
        );
        return view('/rak/edit',['rak' => $rak],$data);
    }

    public function update(Request $request,$id)
    {
        DB::table('rak')->where('id_rak',$id) -> update([
            'nama_rak' => $request ->nama_rak,
            'lokasi_rak' => $request ->lokasi_rak
        ]);
        return redirect('/rak');
    }
    
    public function hapus($id)
    {
        //menghapus data rak
        //DB::table('rak')->where('id_rak',$request->id_rak)->delete();
        //return redirect('/rak');

        Rak::find($id)->delete();
        return redirect ('/rak');

    }

}
