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