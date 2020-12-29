<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengembalian extends Model
{
    use SoftDeletes;
    protected $table = 'pengembalian';
    protected $primaryKey = 'id_pengembalian';
    protected $fillable = ['id_peminjaman','id_buku','id_petugas','id_anggota','tgl_kembali'];
    public $timestamps = false;
    protected $date = ['deleted_at'];

    public function buku(){
        return $this->belongsTo(Buku::class,'id_buku');
    }
    public function anggota(){
        return $this->belongsTo(Anggota::class,'id_anggota');
    }
    public function petugas(){
        return $this->belongsTo(Petugas::class,'id_petugas');
    }
    public function peminjaman(){
        return $this->belongsTo(Peminjaman::class,'id_peminjaman');
    }

}
