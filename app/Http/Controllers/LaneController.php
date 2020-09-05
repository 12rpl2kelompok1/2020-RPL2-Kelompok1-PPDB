<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Lanes;

class LaneController extends Controller
{
    public function index()
    {
    	$jalur = Lanes::all();

    	return view('lane/home', compact('jalur'));
    }

    public function edit($ln_id)
    {
    	 $jalur = Lanes::find($ln_id);

        return view('lane/edit', ['jalur' => $jalur]);
    }

    public function update(Request $request, $ln_id)
    {
        $jalur = Lanes::find($ln_id);
        $jalur->ln_name = $request->input('ln_name');
        $jalur->save(); 

        return redirect('lane');
    }

    public function delete($ln_id)
    {
        $jalur = Lanes::find($ln_id);
        $jalur->delete();
        return redirect('lane');
    }

    public function tambah()
    {
       $jalur = Lanes::all();

       return view('lane/tambah'); 
    }

   public function save(Request $request)
    {
        //dd($request->all());
        $jalur = new Lanes;
        $jalur->ln_name = $request->ln_name;
        $jalur->save();

        return redirect('lane');

    }
}