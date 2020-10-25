<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pengembalian;
use App\Buku;
use App\Petugas;
use App\Anggota;

class pengembalianController extends Controller
{
    public function pengembalian()
    {
         // mengambil data dari table pengembalian
         //$pengembalian = DB::table('pengembalian')->get();
         $pengembalian = Pengembalian::all();
         $buku = Buku::all();
         $petugas = Petugas::all();
         $anggota = Anggota::all();

         $data = array(
	        'menu' => 'transaksi',
	        'submenu' => 'pengembalian'
         );
 
         // mengirim data petugas ke view peminjaman
         return view('/pengembalian/pengembalian',compact('buku','petugas','anggota','pengembalian'),$data);
    
    }

    public function tambah()
    {
        
        $buku = DB::table('buku')->pluck('judul_buku','id_buku');
        $data = array(
	        'menu' => 'transaksi',
	        'submenu' => 'pengembalian'
         );
         $petugas = DB::table('petugas')->pluck('nama_petugas','id_petugas');
         $anggota = DB::table('anggota')->pluck('nama_anggota','id_anggota');
        return view('/pengembalian/tambah',compact('buku','petugas','anggota'),$data);

    }

    public function simpan(Request $request)
    {
        DB::table('pengembalian')->insert([
            'id_pengembalian'=>$request->id_pengembalian,
            'id_buku'=>$request->id_buku,
            'id_petugas'=>$request->id_petugas,
            'id_anggota'=>$request->id_anggota,
            'tgl_kembali'=>$request->tgl_kembali
        ]);
        // mengalihkan ke halaman peminjaman
        return redirect('/pengembalian');
    }

    public function edit($id_pengembalian)
    {
        $pengembalian = DB::table('pengembalian')->where('id_pengembalian',$id_pengembalian)->get();
        $data = array(
	        'menu' => 'transaksi',
	        'submenu' => 'pengembalian'
         );
        return view('/pengembalian/edit',['pengembalian' => $pengembalian],$data);
    }

    public function update(Request $request)
    {
        DB::table('pengembalian')->where('id_pengembalian',$request->id_pengembalian)->update([
            'id_pengembalian' => $request->id_pengembalian,
            'id_buku'=>$request->id_buku,
            'id_petugas'=>$request->id_petugas,
            'id_anggota'=>$request->id_anggota,
            'tgl_kembali'=>$request->tgl_kembali
        ]);
        return redirect('/pengembalian');
    }

    public function hapus($id)
    {
        //menghapus data pengembalian
        //DB::table('pengembalian')->where('id_pengembalian',$request->id_pengembalian)->delete();
        
        
        $pengembalian = Pengembalian::find($id);
        $pengembalian -> delete();
        return redirect('/pengembalian');
    }
}