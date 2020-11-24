<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buku extends Model
{
    use SoftDeletes;
    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    protected $fillable = ['judul_buku', 'penerbit', 'tahun_terbit', 'stok'];
    public $timestamps = false;

    public function peminjamanBuku(){
        return $this->hasMany(Peminjaman::class,'id_buku');
    }

    public function pengembalianBuku(){
        return $this->hasMany(Pengembalian::class,'id_buku');
    }

    public function rak(){
        return $this->hasMany(Rak::class,'id_buku');
    }

}
