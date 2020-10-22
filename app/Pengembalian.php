<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengembalian extends Model
{
    use SoftDeletes;
    protected $table = 'pengembalian';
    protected $primaryKey = 'id_pengembalian';
    public $timestamps = false;
}
