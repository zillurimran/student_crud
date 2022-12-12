<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Section;
use App\Models\Student;
use http\Message;
use Illuminate\Http\Request;
use function League\Flysystem\move;
use DB;

class HomeController extends Controller
{

    public $student;
    public function index(){
        return view('crud.add-student',[
            'departments'=> Department::all(),
            'sections'=> Section::all()
        ]);
    }


    public function saveStudent(Request $request){

           $this->student =new Student();
           $this->student->s_name = $request->s_name;
           $this->student->phone = $request->phone;
           $this->student->email = $request->email;
           $this->student->d_id = $request->d_id;
           $this->student->s_id = $request->s_id;
           $this->student->address = $request->address;

           if($request->file('image')){
               $this->student->image= $this->saveImage($request);
           }
           $this->student->save();

           return redirect(route('manage.student'));
    }


    public function saveImage(Request $request){
        $this->image= $request->file('image');
        $this->imageName= rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory = 'asset/upload/';
        $this->imageUrl = $this->directory.$this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imageUrl;
    }


    public function manageStudent(){
//        $this->student = Student::all();
        $this->student = DB::table('students')
            ->join('departments','students.d_id','departments.id')
            ->join('sections','students.d_id','sections.id')
            ->select('students.*','departments.d_name','sections.sec_name')
            ->get();



        return view('crud.manage-Student',[
            'students'=>$this->student
        ]);
    }

    public function editStudent($id){
       $this->student = Student::find($id);

       return view('crud.edit-student',[
           'student' => $this->student
       ]);
    }

    public function updateStudent(Request $request){

        $this->student = Student::find($request->stu_id);
        $this->student->s_name = $request->s_name;
        $this->student->phone = $request->phone;
        $this->student->email = $request->email;
        $this->student->d_id = $request->d_id;
        $this->student->s_id = $request->s_id;
        $this->student->address = $request->address;

        if($request->file('image')){
                if($this->student->image !== null){
                    unlink($this->student->image);
                }
            $this->student->image= $this->saveImage($request);
        }
        $this->student->save();

        return redirect(route('manage.student'));
    }

//    public function deleteStudent($id){
//
//        $this->student = Student::find($id);
//        $this->student->delete();
//        return redirect(route('manage.student'));
//    }

    public function deleteStudent(Request $request){

        $this->student =  Student::find($request->student_id);
        $this->student->delete();

        return redirect(route('manage.student'));
    }

}
