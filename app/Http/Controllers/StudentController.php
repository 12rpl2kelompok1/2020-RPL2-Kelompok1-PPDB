<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use App\Student;
use App\Lanes;
Use Auth;



class StudentController extends Controller
{
    public function index()
    {
        $siswa = Student::whereId_user(Auth::user()->id)->first();
        $jalur = Lanes::all();
        $ln_id = Lanes::first()->ln_id;
    	return view ('siswa', compact('jalur', 'siswa','ln_id'));
    }

    function home()
    {
        return view('user');
    }

    public function save_siswa(Request $request)
    {
        //dd(Auth::user()->id);  
    	$siswa = Student::whereId_user(Auth::user()->id)->first();
        if ($siswa) {
            $siswa->ln_id = $request->input('ln_id');
            $siswa->student_name = $request->input('student_name');
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
            return back()->withsuccess('Data Berhasil Disimpan', 'Success Message');

        }else{
            return back()->withwarning('Warning Title', 'Warning Message');

        }
      
        Alert::message('Message', 'Optional Title');
    	return back()->withSuccess('berhasil');
    }

    
   public function tampil()
   {
    $c = Student::join('lanes', 'lanes.ln_id', '=', 'students.ln_id')
    ->get();

    return view('tampil', compact('c'));

    }

     public function edit($student_id)
    {
        $siswa = Student::find($student_id);

        return view('edit', ['siswa' => $siswa]);


    }
    public function update(Request $request, $student_id)
    {
        $siswa = Student::find($student_id);
        $siswa->student_name = $request->input('student_name');
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

    public function verified($student_id){
        $siswa = Student::find($student_id);
       // dd($siswa->is_verified);
        if ($siswa->is_verified==0) {
            $siswa->is_verified=1;
            $siswa->save();
        }
        return back();

    }
}