<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Petugas;

class petugasController extends Controller
{
    public function petugas(Request $request){
        
        // mengambil data dari table petugas
        //$petugas = DB::table('petugas')->get();
        /*if($request -> has('cari')){
            $petugas = Petugas::where('nama_petugas','LIKE','%'.$request->cari.'%')->get();
        }else{
            $petugas = Petugas::all();
        }*/

        $petugas = Petugas::all();
        $data = array(
            'menu' => 'petugas',
            'submenu' => ''
        );

        // mengirim data petugas ke view master
        return view('/petugas/petugas',['petugas' => $petugas],$data);
        
    }

    public function tambah()
    {
        $data = array(
            'menu' => 'petugas',
            'submenu' => ''
        );
        return view('/petugas/tambah',$data);
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
        $data = array(
            'menu' => 'petugas',
            'submenu' => ''
        );
        return view('/petugas/edit',['petugas' => $petugas],$data);
    }

    public function update(Request $request,$id)
    {
        DB::table('petugas')->where('id_petugas',$id)->update([
            'nama_petugas' => $request->nama_petugas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan' => $request->jabatan,
            'no_telp_petugas' => $request->no_telp_petugas,
            'alamat_petugas' => $request->alamat_petugas
        ]);
        return redirect('/petugas');
    }

    public function hapus($id)
    {
        //menghapus data rak
        /*DB::table('petugas')->where('id_petugas',$request->id_petugas)->delete();
        return redirect('/petugas');*/

        Petugas::find($id)->delete();
        return redirect ('/petugas');

    }


}
