<?php

use illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/peminjaman', function () {
    return view('Komponen/master');
});

Route::get('/pengembalian', function () {
    return view('Komponen/master');
});


//Anggota
route::get('anggota','anggotaController@anggota');
route::get('anggota/tambah','anggotaController@tambah');
route::get('anggota/simpan','anggotaController@simpan');
route::get('anggota/edit/{id_anggota}','anggotaController@edit');
route::get('anggota/update','anggotaController@update');
route::get('anggota/hapus/{id_anggota}','anggotaController@hapus');


//Petugas
route::get('petugas','petugasController@petugas');
route::get('petugas/tambah','petugasController@tambah');
route::get('petugas/simpan','petugasController@simpan');
route::get('petugas/edit/{id_petugas}','petugasController@edit');
route::get('petugas/update','petugasController@update');

//Buku
route::get('buku','bukuController@buku');
route::get('buku/tambah','bukuController@tambah');
route::get('buku/simpan','bukuController@simpan');
route::get('buku/edit/{id_buku}','bukuController@edit');
route::get('buku/update','bukuController@update');

//Rak
route::get('rak','rakController@rak');
route::get('rak/tambah','rakController@tambah');
route::get('rak/simpan','rakController@simpan');
route::get('rak/edit/{id_rak}','rakController@edit');
route::get('rak/update','rakController@update');