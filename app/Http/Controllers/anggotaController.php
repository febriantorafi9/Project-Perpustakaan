<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Anggota;

class anggotaController extends Controller
{
    public function anggota()
    {
        // mengambil data dari table anggota
        //$anggota = DB::table('anggota')->get();
        $anggota = anggota::all();

        $data = array(
            'menu' => 'anggota',
            'submenu' => ''
        );    

        // mengirim data petugas ke view anggota
        return view('/anggota/anggota',['anggota' => $anggota],$data);
    }

    public function tambah()
    {
        return view('/anggota/tambah');
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
        return view('/anggota/edit',['anggota' => $anggota]);
    }

    public function update(Request $request)
    {
        DB::table('anggota')->where('id_anggota',$request->id_anggota)->update([
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
