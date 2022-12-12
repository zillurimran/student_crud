<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index(){
        return view('crud.add-section');
    }

    public function saveSec(Request $request){
        $sections= new Section();
        $sections->sec_name = $request->sec_name;

        $sections->save();

        return back();
    }

    public function manageSec(){
        $sections = Section::all();
        return view('crud.manage-section',[
            'sections'=> $sections
        ]);
    }
}
