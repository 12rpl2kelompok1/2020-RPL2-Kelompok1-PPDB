<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Administrative_staffs;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Hash;
use App\Student;

class AdminController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/dashboard_admin';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout')->except('index');
    }

    public function index(){
          $data = Student::join('lanes', 'lanes.ln_id', '=', 'students.ln_id')
                        ->get();
          return view ('frontend.master', compact('data'));
    }

    public function showLoginForm()
    {
          return view('login_admin');
    }

    public function username()
    {
            return 'email';
    }

    protected function guard()
    {
          return Auth::guard('admin');
    }

    // public function index()
    // {
    // 	return view('admin');
    // }

    public function save_admin(Request $request)
    {
    	$admin = new Administrative_staffs();
    	$admin->name = $request->input('name');
    	$admin->email = $request->input('email');
    	$admin->save(); 
    	return redirect('tampil_admin');
    }

    public function tampil_admin()
    {

    $d = Administrative_staffs::all();
    return view('tampil_admin', compact('d'));

    }

    public function edit($staff_id)
    {
        $admin = Administrative_staffs::find($staff_id);

        return view('edit_admin', ['admin' => $admin]);
    }

    public function update(Request $request, $staff_id)
    {
        $admin = Administrative_staffs::find($staff_id);
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->save(); 

        return redirect('tampil_admin');
    }

    public function delete($staff_id)
    {
        $admin = Administrative_staffs::find($staff_id);
        $admin->delete();
        return redirect('tampil_admin');

    }

    public function tambah()
    {
       $admin = Administrative_staffs::all();

        return view('tambah_admin', ['admin' => $admin]); 
    }

    public function save_tambah(Request $request)
    {

        
         $user=User::create([
            'name' => $request->name,
            'id_level' => 1,
            'email' => $request->email,
            'password' => Hash::make('admin'),
        ]);

        $admin = Administrative_staffs::create([
            'id_user' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email'],
            'password' => $user['password'],
        ]);
    return redirect('tampil_admin');
    }

    public function login()
    {
        return view('login_admin');
    }
    public function post_login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
        //     return redirect()->intended('/dashboard_admin');
        // }
        $admin = User::whereEmail($request->email)->first();
        //dd(Hash::check($request->password,$admin->password));
        if (!Hash::check($request->password,$admin->password)) {
            return redirect()->back();
        }
        //dd(Auth::user());
        return view('frontend.master');
        //dd($admin);
    }

    public function dashboard_admin()
    {
        return view('frontend.master');
    }

}

   