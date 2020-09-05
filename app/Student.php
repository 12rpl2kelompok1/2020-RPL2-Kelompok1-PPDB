<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class Student extends Authenticable
{
     protected $guarded=[];
     protected $primaryKey = 'student_id';
}
