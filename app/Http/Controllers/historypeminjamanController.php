<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Peminjaman;
use App\Buku;
use App\Petugas;
use App\Anggota;

class historypeminjamanController extends Controller{
    public function index()
    {
         $peminjaman = Peminjaman::all();
         $buku = Buku::all();
         $petugas = Petugas::all();
         $anggota = Anggota::all();

         $data = array(
	        'menu' => 'history',
	        'submenu' => 'historypeminjaman'
         );
 
         // mengirim data petugas ke view peminjaman
         return view('/history/historypeminjaman',compact('buku','petugas','anggota','peminjaman'),$data);
    }


}
