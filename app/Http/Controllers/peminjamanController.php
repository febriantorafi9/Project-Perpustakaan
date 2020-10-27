<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Peminjaman;
use App\Buku;
use App\Petugas;
use App\Anggota;

class peminjamanController extends Controller
{
    public function peminjaman()
    {
         // mengambil data dari table peminjaman
         //$peminjaman = DB::table('peminjaman')->get();
         $peminjaman = Peminjaman::all();
         $buku = Buku::all();
         $petugas = Petugas::all();
         $anggota = Anggota::all();

         $data = array(
	        'menu' => 'transaksi',
	        'submenu' => 'peminjaman'
         );
 
         // mengirim data petugas ke view peminjaman
         return view('/peminjaman/peminjaman',compact('buku','petugas','anggota','peminjaman'),$data);
    
    }

    public function tambah()
    {
        
        $buku = DB::table('buku')->pluck('judul_buku','id_buku');
        $data = array(
	        'menu' => 'transaksi',
	        'submenu' => 'peminjaman'
         );
        $petugas = DB::table('petugas')->pluck('nama_petugas','id_petugas');
        $anggota = DB::table('anggota')->pluck('nama_anggota','id_anggota');
        return view('/peminjaman/tambah',compact('buku','petugas','anggota'),$data);

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
        $buku = DB::table('buku')->pluck('judul_buku','id_buku');
        $petugas = DB::table('petugas')->pluck('nama_petugas','id_petugas');
        $anggota = DB::table('anggota')->pluck('nama_anggota','id_anggota');
        $data = array(
	        'menu' => 'transaksi',
	        'submenu' => 'peminjaman'
         );
        return view('/peminjaman/edit',compact('peminjaman','buku','petugas','anggota'),$data);
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

    public function hapus($id)
    {
        //menghapus data peminjaman
        //DB::table('peminjaman')->where('id_peminjaman',$request->id_peminjaman)->delete();

        $peminjaman = Peminjaman::find($id);
    	$peminjaman->delete();
        return redirect('/peminjaman');

        
    }
}