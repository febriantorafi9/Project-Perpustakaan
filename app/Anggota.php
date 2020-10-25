<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anggota extends Model
{
    use SoftDeletes;
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';
    public $timestamps = false;
    
    public function peminjamanAnggota(){
        return $this->hasMany(Peminjaman::class,'id_anggota');
    }

    public function pengembalianAnggota(){
        return $this->hasMany(Pengembalian::class,'id_anggota');
    }
}
