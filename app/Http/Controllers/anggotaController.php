<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Anggota;

class anggotaController extends Controller
{
    public function anggota(Request $request)
    {
        // mengambil data dari table anggota
        //$anggota = DB::table('anggota')->get();
        /*if($request -> has('cari')){
            $anggota = Anggota::where('nama_anggota','LIKE','%'.$request->cari.'%')->get();
        }else{
            $anggota = Anggota::all();
        }
        */
        $anggota = Anggota::all();
        
        $data = array(
            'menu' => 'anggota',
            'submenu' => ''
        );    

        // mengirim data petugas ke view anggota
        return view('/anggota/anggota',['anggota' => $anggota],$data);
    }

    public function tambah()
    {
        $data = array(
            'menu' => 'anggota',
            'submenu' => ''
        );
        return view('/anggota/tambah',$data);
    }

    public function simpan(Request $request)
    {
        DB::table('anggota')->insert([
            'id_anggota' => $request->id_anggota,
            'nama_anggota' => $request->nama_anggota,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telp_anggota' => $request->no_telp_anggota,
            'alamat' => $request->alamat
        ]);
        //alihkan ke halaman anggota
        return redirect('/anggota');
    }

    public function edit($id_anggota)
    {
        $anggota = DB::table('anggota')->where('id_anggota',$id_anggota)->get();
        $data = array(
            'menu' => 'anggota',
            'submenu' => ''
        );
        return view('/anggota/edit',['anggota' => $anggota],$data);
    }

    public function update(Request $request,$id)
    {
        DB::table('anggota')->where('id_anggota',$id)->update([
            'nama_anggota' => $request->nama_anggota,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_telp_anggota' => $request->no_telp_anggota,
            'alamat' => $request->alamat
        ]);
        return redirect('/anggota');
    }

    public function hapus($id)
    {
        //menghapus data anggota
        /*DB::table('anggota')->where('id_anggota',$request->id_anggota)->delete();
        return redirect('/anggota');*/

        Anggota::find($id)->delete();
        return redirect ('/anggota');

    }


    
}
