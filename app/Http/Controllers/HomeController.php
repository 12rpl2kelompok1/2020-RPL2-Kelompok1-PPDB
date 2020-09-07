<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
use App\Student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $siswa = Student::where('id_user', '=',  Auth::user()->id)->first();
        
        return view('home' , ['siswa' => $siswa]);
    }

    public function adminHome()
    {
        return view('admin');
    }
    
    public function siswaHome()
    {
        return view('home');
    }

}
