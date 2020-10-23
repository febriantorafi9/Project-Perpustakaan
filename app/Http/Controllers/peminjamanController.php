<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Peminjaman;

class peminjamanController extends Controller
{
    public function peminjaman()
    {
         // mengambil data dari table peminjaman
         //$peminjaman = DB::table('peminjaman')->get();
         $peminjaman = Peminjaman::all();

         $data = array(
	        'menu' => 'transaksi',
	        'submenu' => 'peminjaman'
         );
 
         // mengirim data petugas ke view peminjaman
         return view('/peminjaman/peminjaman',['peminjaman' => $peminjaman],$data);
    
    }

    public function tambah()
    {
        
        $buku = DB::table('buku')-> get();
        $data = array(
	        'menu' => 'transaksi',
	        'submenu' => 'peminjaman'
         );
        $petugas = DB::table('petugas')-> get();
        $anggota = DB::table('anggota')-> get();
        return view('/peminjaman/tambah',['buku' => $buku, 'petugas' => $petugas, 'anggota' => $anggota],$data);

    }

    public function simpan(Request $request)
    {
        DB::table('peminjaman')->insert([
            'id_peminjaman'=>$request->id_peminjaman,
            'id_buku'=>$request->id_buku,
            'id_petugas'=>$request->id_petugas,
            'id_anggota'=>$request->id_anggota,
            'tgl_pinjam'=>$request->tgl_pinjam,
            'tgl_kembali'=>$request->tgl_kembali
        ]);
        // mengalihkan ke halaman peminjaman
        return redirect('/peminjaman');
    }

    public function edit($id_peminjaman)
    {
        $peminjaman = DB::table('peminjaman')->where('id_peminjaman',$id_peminjaman)->get();
        $data = array(
	        'menu' => 'transaksi',
	        'submenu' => 'peminjaman'
         );
        return view('/peminjaman/edit',['peminjaman' => $peminjaman],$data);
    }

    public function update(Request $request)
    {
        DB::table('peminjaman')->where('id_peminjaman',$request->id_peminjaman)->update([
            'id_peminjaman' => $request->id_peminjaman,
            'id_buku'=>$request->id_buku,
            'id_petugas'=>$request->id_petugas,
            'id_anggota'=>$request->id_anggota,
            'tgl_pinjam'=>$request->tgl_pinjam,
            'tgl_kembali'=>$request->tgl_kembali
        ]);
        return redirect('/peminjaman');
    }

    public function hapus(Request $request)
    {
        //menghapus data peminjaman
        //DB::table('peminjaman')->where('id_peminjaman',$request->id_peminjaman)->delete();

        Peminjaman::find($id)->delete();
        return redirect('/peminjaman');
    }
}