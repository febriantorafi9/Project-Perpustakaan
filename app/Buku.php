<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buku extends Model
{
    use SoftDeletes;
    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    public $timestamps = false;
    public function peminjamanBuku(){
        return $this->hasMany(Peminjaman::class,'id_buku');
    }

}
