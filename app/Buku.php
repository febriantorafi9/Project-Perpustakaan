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
}
