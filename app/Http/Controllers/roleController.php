<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
    public function petugas()
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
        return view('rak/rak');
    }

    public function peminjaman()
    {
        return view('peminjaman/peminjaman');
    }

    public function pengembalian()
    {
        return view('pengembalian/pengembalian');
    }

    public function historypeminjaman()
    {
        return view('history/historypeminjaman');
    }

    public function koleksi()
    {
        return view('history/koleksibuku');
    }
}
