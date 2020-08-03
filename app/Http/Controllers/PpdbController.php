<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
App\Http\Controllers\Auth\Users;

class PpdbController extends Controller
{
    public function index()
    {
    	return view ('siswa');
     }
}
