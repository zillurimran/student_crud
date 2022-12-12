<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(){
        return view('crud.add-department');
    }


    public function saveDept(Request $request){

            $departments = new Department();

            $departments-> d_name = $request->d_name;
            $departments-> d_code = $request->d_code;

            $departments->save();

            return back();
    }

    public function manageDept(){
        $departments = Department::all();
        return view('crud.manage-dept',[
            'departments' => $departments
        ]);
    }


}
