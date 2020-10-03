<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class peminjamanController extends Controller
{
    public function peminjaman()
    {
         // mengambil data dari table peminjaman
         $peminjaman = DB::table('peminjaman')->get();
 
         // mengirim data petugas ke view peminjaman
         return view('/peminjaman/peminjaman',['peminjaman' => $peminjaman]);
    
    }

    public function tambah()
    {
        // menampilkan data buku yang ingin dipinjam 
        $buku = DB::table('buku')-> get();
        return view('/rak/tambah',['buku' => $buku]);

        // menampilkan data petugas yang melayani saat itu juga
        $petugas = DB::table('petugas')-> get();
        return view('/petugas/tambah',['petugas' => $petugas]);
        
        // menampilkan data anggota yang ingin meminjam buku
        $anggota = DB::table('anggota')-> get();
        return view('/anggota/tambah',['anggota' => $anggota]);
    }




}