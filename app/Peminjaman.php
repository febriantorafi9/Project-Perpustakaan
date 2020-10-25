<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peminjaman extends Model
{
    use SoftDeletes;
    protected $table = 'peminjaman';
    protected $primaryKey = 'id_peminjaman';
    protected $fillable = ['id_buku','id_petugas','id_anggota','tgl_pinjam','tgl_kembali'];
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

    
    
}
