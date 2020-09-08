<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Administrative_staffs extends Model
{

	use SoftDeletes;

    protected $guarded=[];
    protected $primaryKey = 'staff_id';
    protected $dates = ['deleted_at'];
}
