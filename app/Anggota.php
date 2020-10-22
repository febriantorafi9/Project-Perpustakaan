<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anggota extends Model
{
    use SoftDeletes;
    protected $table = 'anggota';
    protected $primarykey = 'id_anggota';
    public $timestamps = false;
}
