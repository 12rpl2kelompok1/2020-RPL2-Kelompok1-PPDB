<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lanes;

class LaneController extends Controller
{
    public function index()
    {
    	$jalur = Lanes::all();

    	return view('lane/home', compact('jalur'));
    }

    public function edit($id)
    {
    	 $jalur = Lanes::find($id);

        return view('lane/edit', ['jalur' => $jalur]);
    }

    public function update(Request $request, $id)
    {
        $jalur = Lanes::find($id);
        $jalur->ln_name = $request->input('ln_name');
        $jalur->save(); 

        return redirect('lane');
    }

    public function delete($id)
    {
        $jalur = Lanes::find($id);
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

        $jalur = new Lanes;
        $jalur->ln_name = $request->ln_name;
        $jalur->save();

        return redirect('lane');

    }
}