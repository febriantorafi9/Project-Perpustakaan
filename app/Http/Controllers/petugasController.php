<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class petugasController extends Controller
{
    public function petugas(){
        
        // mengambil data dari table petugas
        $petugas = DB::table('petugas')->get();
 
        // mengirim data petugas ke view master
        return view('/petugas/petugas',['petugas' => $petugas]);
        
    }

    public function tambah()
    {
        return view('/petugas/tambah');
    }

    public function simpan(Request $request)
    {
        DB::table('petugas')->insert([
            'id_petugas' => $request->id_petugas,
            'nama_petugas' => $request->nama_petugas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan' => $request->jabatan,
            'no_telp_petugas' => $request->no_telp_petugas,
            'alamat_petugas' => $request->alamat_petugas
        ]);
        //alihkan ke halaman petugas
        return redirect('/petugas');
    }

    public function edit($id_petugas)
    {
        $petugas = DB::table('petugas')->where('id_petugas',$id_petugas)->get();
        return view('/petugas/edit',['petugas' => $petugas]);
    }

    public function update(Request $request)
    {
        DB::table('petugas')->where('id_petugas',$request->id_petugas)->update([
            'nama_petugas' => $request->nama_petugas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan' => $request->jabatan,
            'no_telp_petugas' => $request->no_telp_petugas,
            'alamat_petugas' => $request->alamat_petugas
        ]);
        return redirect('/petugas');
    }

    public function hapus(Request $request)
    {
        //menghapus data rak
        DB::table('petugas')->where('id_petugas',$request->id_petugas)->delete();
        return redirect('/petugas');
    }


}
