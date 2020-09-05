<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lanes extends Model
{

use SoftDeletes;

    protected $guarded=[];
    protected $primaryKey = 'ln_id';
    protected $dates = ['deleted_at'];
}
