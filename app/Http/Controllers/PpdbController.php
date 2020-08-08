<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users;


class PpdbController extends Controller
{
    public function index()
    {
    	return view ('siswa');
    }

    function home()
    {
        return view('user');
    }

    public function save_siswa(Request $request)
    {
    	$siswa = new users();
    	$siswa->name = $request->input('name');
    	$siswa ->date_of_birth = $request->input('date_of_birth');
    	$siswa->gender = $request->input('gender');
    	$siswa->religion = $request->input('religion');
        $siswa->addres = $request->input('addres');
    	$siswa->last_school = $request->input('last_school');
    	$siswa->fathers_name = $request->input('fathers_name');
    	$siswa->fathers_occupation = $request->input('fathers_occupation');
    	$siswa->mothers_name = $request->input('mothers_name');
    	$siswa->mothers_occupation = $request->input('mothers_occupation');
    	$siswa->save(); 
    	return redirect('tampil');
    }
   public function tampil()
   {
    $c = Users::all();
    return view('tampil', compact('c'));

    }

     public function edit($id)
    {
        $siswa = Users::find($id);

        return view('edit', ['siswa' => $siswa]);


    }
    public function update(Request $request, $id)
    {
        $siswa = Users::find($id);
        $siswa->name = $request->input('name');
        $siswa->date_of_birth = $request->input('date_of_birth');
        $siswa->gender = $request->input('gender');
        $siswa->religion = $request->input('religion');
        $siswa->addres = $request->input('addres');
        $siswa->last_school = $request->input('last_school');
        $siswa->fathers_name = $request->input('fathers_name');
        $siswa->fathers_occupation = $request->input('fathers_occupation');
        $siswa->mothers_name = $request->input('mothers_name');
        $siswa->mothers_occupation = $request->input('mothers_occupation');
        $siswa->save(); 

        return redirect('tampil');


    }
}