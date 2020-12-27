<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controllers;
use Illuminate\Support\Facades\DB;
use IllUminate\Support\Facades\Auth;
use App\Peminjaman;
use App\Buku;
use App\Petugas;
use App\Anggota;

class historypeminjamanController extends Controller{
    public function index()
    {

         $buku = Buku::all();
         $peminjaman = Peminjaman::all();
         $anggota = Anggota::all();
         $petugas = Petugas::all();

         $data = array(
	        'menu' => 'history',
	        'submenu' => 'historypeminjaman'
         );
 
         // mengirim data petugas ke view peminjaman
         return view('/history/historypeminjaman',compact('buku','petugas','anggota','peminjaman'),$data);
    }

    public function HistoryPeminjamanAnggota()
    {

    	$data = array(
	        'menu' => 'history',
	        'submenu' => 'historypeminjaman'
        );

        $cari = Auth::user()->name;
        $hispeminjaman  = DB::table('peminjaman')
        ->join('anggota', 'peminjaman.id_anggota', '=', 'anggota.id_anggota')
        ->join('petugas', 'peminjaman.id_petugas', '=', 'petugas.id_petugas')
        ->join('buku', 'peminjaman.id_buku', '=', 'buku.id_buku')
        ->where('anggota.nama_anggota','LIKE',"%".$cari."%")
        ->get();
        return view('/historyanggota/historyanggota', compact('hispeminjaman'), $data);
    }
}

