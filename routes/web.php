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

/*Route::get('/', function () {
    return view('login');
})->name('login');
*/

Route::get('/',function (){
    return view('welcome');
});


Route::get('/home',function (){
    return view('home');
});


Route::get('login', 'HomeController@index');

Route::post('/home1', function () {
    $data = array(
	    'menu' => 'Home1',
        'submenu' => ''
	);        
    return view('home1',$data);
})->name('beranda');

Route::get('/home1', function () {
    $data = array(
	    'menu' => 'Home1',
        'submenu' => ''
	);        
    return view('home1',$data);
})->name('beranda');

//Anggota
route::get('anggota','anggotaController@anggota');
route::get('anggota/tambah','anggotaController@tambah');
route::get('anggota/simpan','anggotaController@simpan');
route::get('anggota/edit/{id_anggota}','anggotaController@edit');
route::get('anggota/update/{id_anggota}','anggotaController@update');
route::get('anggota/hapus/{id_anggota}','anggotaController@hapus');


//Petugas
route::get('petugas','petugasController@petugas');
route::get('petugas/tambah','petugasController@tambah');
route::get('petugas/simpan','petugasController@simpan');
route::get('petugas/edit/{id_petugas}','petugasController@edit');
route::get('petugas/update/{id_petugas}','petugasController@update');
route::get('petugas/hapus/{id_petugas}','petugasController@hapus');

//Buku
route::get('buku','bukuController@buku');
route::get('buku/tambah','bukuController@tambah');
route::get('buku/simpan','bukuController@simpan');
route::get('buku/edit/{id_buku}','bukuController@edit');
route::get('buku/update/{id_buku}','bukuController@update');
route::get('buku/hapus/{id_buku}','bukuController@hapus');
route::get('buku/cari','bukuController@cari');

//Rak
route::get('rak','rakController@rak');
route::get('rak/tambah','rakController@tambah');
route::get('rak/simpan','rakController@simpan');
route::get('rak/edit/{id_rak}','rakController@edit');
route::get('rak/update/{id_rak}','rakController@update');
route::get('rak/hapus/{id_rak}','rakController@hapus');

//Pengembalian
route::get('pengembalian','pengembalianController@pengembalian');
route::get('pengembalian/tambah','pengembalianController@tambah');
route::get('pengembalian/simpan','pengembalianController@simpan');
route::get('pengembalian/edit/{id_pengembalian}','pengembalianController@edit');
route::get('pengembalian/update/{id_pengembalian}','pengembalianController@update');
route::get('pengembalian/hapus/{id_pengembalian}','pengembalianController@hapus');

//Peminjaman
route::get('peminjaman','peminjamanController@peminjaman');
route::get('peminjaman/tambah','peminjamanController@tambah');
route::get('peminjaman/simpan','peminjamanController@simpan');
route::get('peminjaman/edit/{id_peminjaman}','peminjamanController@edit');
route::get('peminjaman/update/{id_peminjaman}','peminjamanController@update');
route::get('peminjaman/hapus/{id_peminjaman}','peminjamanController@hapus');

//History
route::get('historypeminjaman','historypeminjamanController@index');

//Koleksi
route::get('koleksibuku','koleksibukuController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    route::get('/anggota','anggotaController@anggota')->name('anggota');
    route::get('/petugas','petugasController@petugas')->name('petugas');
    route::get('/buku','bukuController@buku')->name('buku');
    route::get('/rak','rakController@rak')->name('rak');
    route::get('/pengembalian','pengembalianController@pengembalian')->name('pengembalian');
    route::get('/peminjaman','peminjamanController@peminjaman')->name('peminjaman');
});

route::group(['middleware' => ['auth','ceklevel:admin,user']], function () {
    route::get('beranda','roleController@index');
    route::get('/historypeminjaman','historypeminjamanController@historypeminjaman')->name('historypeminjaman');
    route::get('/koleksibuku','historypeminjaman@koleksibuku')->name('koleksibuku');
});