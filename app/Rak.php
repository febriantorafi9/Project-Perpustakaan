<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rak extends Model
{
    use SoftDeletes;
    protected $table = 'rak';
    protected $primaryKey = 'id_rak';
    protected $fillable = ['nama_rak','lokasi_rak','id_buku'];
    public $timestamps = false;
    protected $date = ['deleted_at'];

    public function buku(){
        return $this->belongsTo(Buku::class,'id_buku');
    }
}
