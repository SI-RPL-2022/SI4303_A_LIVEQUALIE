<?php

namespace App\Http\Controllers;

use App\Models\Glosarium;
use Illuminate\Http\Request;

class glosariumController extends Controller
{
    public function glosariumIndex(Request $request){
        $data = $request->session()->all();
        $glossary = Glosarium::all();
        return view('glosarium' ,['data'=>$data , 'glossary' =>$glossary]);
    }
    
    public function glosariumAdd(Request $request){
        $glossary = new Glosarium();
        $glossary->title = $request->title;
        $glossary->baca = $request->baca;
        $glossary->definition = $request->defenition;
        $glossary->save();

        return redirect()->route('glosarium.index');
    }

    public function glosariumUpdate(Request $request , $id){
        $glossary = Glosarium::find($id);
        $glossary->title = $request->title;
        $glossary->baca = $request->baca;
        $glossary->definition = $request->defenition;
        $glossary->update();

        return redirect()->route('glosarium.index');
    }
    public function glosariumDelete($id){
        $glossary = Glosarium::find($id);
        $glossary->delete();
        return redirect()->route('glosarium.index');
    }
}