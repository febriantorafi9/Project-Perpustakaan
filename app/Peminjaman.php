<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peminjaman extends Model
{
    use SoftDeletes;
    protected $table = 'peminjaman';
    protected $primaryKey = 'id_peminjaman';
    public $timestamps = false;
}
