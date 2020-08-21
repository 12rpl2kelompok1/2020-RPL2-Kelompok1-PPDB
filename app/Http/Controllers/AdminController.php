<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrative_staffs;

class AdminController extends Controller
{

    public function index()
    {
    	return view ('admin');
    }

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

    public function edit($id)
    {
        $admin = Administrative_staffs::find($id);

        return view('edit_admin', ['admin' => $admin]);
    }

    public function update(Request $request, $id)
    {
        $admin = Administrative_staffs::find($id);
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->save(); 

        return redirect('tampil_admin');
    }

    public function delete($id)
    {
        $admin = Administrative_staffs::find($id);
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
        $admin = new Administrative_staffs();
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->save(); 
        return redirect('tampil_admin');
    }

}

   