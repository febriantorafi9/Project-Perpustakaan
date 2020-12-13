<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjaman;
use App\Buku;
use App\Petugas;
use App\Anggota;

class roleController extends Controller
{
    /** 
     * 
     * 
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $var_nama = "Admin";
        return view('home1',compact('var_nama'));
    }

    public function anggota()
    {
        $anggota = Anggota::all();
        
        $data = array(
            'menu' => 'anggota',
            'submenu' => ''
        );    

        // mengirim data petugas ke view anggota
        return view('/anggota/anggota',['anggota' => $anggota],$data);
    }

    public function buku()
    {
        $buku = Buku::all();
        $rak = Rak::all();

        $data = array(
            'menu' => 'buku',
            'submenu' => ''
        );
        
        // mengirim data buku ke view master
        return view('/buku/buku',['buku' => $buku,'rak' => $rak],$data);
    }
    
    public function petugas(Request $request)
    {
        $petugas = Petugas::all();
        $data = array(
            'menu' => 'petugas',
            'submenu' => ''
        );

        // mengirim data petugas ke view master
        return view('/petugas/petugas',['petugas' => $petugas],$data);
    }

    public function rak()
    {
        $rak = Rak::all();
        $buku = Buku::all();

        $data = array(
            'menu' => 'rak',
            'submenu' => ''
        );

        return view('/rak/rak',['rak' => $rak,'buku' => $buku],$data);
    }

    public function peminjaman()
    {
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

    public function pengembalian()
    {
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

    public function historypeminjaman()
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

    public function koleksi()
    {
        if($request -> has('cari')){
            $buku = Buku::where('judul_buku','LIKE','%'.$request->cari.'%')->get();
        }else{
            $buku = Buku::all();
        }
        
        $buku = Buku::all();
        $data = array(
            'menu' => 'history',
            'submenu' => 'koleksibuku'
        );

        return view('/history/koleksibuku',['buku' => $buku],$data);

    }
}
