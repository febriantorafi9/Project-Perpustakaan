<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Petugas extends Model
{
    use SoftDeletes;
    protected $table = 'petugas';
    protected $primaryKey = 'id_petugas';
    public $timestamps = false;
    public function peminjamanPetugas(){
        return $this->hasMany(Peminjaman::class,'id_petugas');
    }

}
