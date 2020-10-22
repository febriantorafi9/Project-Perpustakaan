<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rak extends Model
{
    use SoftDeletes;
    protected $table = 'rak';
    protected $primaryKey = 'id_rak';
    public $timestamps = false;
}
