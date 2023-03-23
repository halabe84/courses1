<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function enroll(Request $request){
//        dd($request->post());

        $data =$request->validate([
            'name'=>'nullable | string | max:191',
            'email'=>'required | email | max:191',
            'spec'=>'nullable | string | max:191',
//            'course_id'=>'required | exists:courses,id ',
        ]);
         $student = Student::create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'spec'=> $data['spec'],
        ]);

         $student_id = $student->id;
        DB::table('course_student')->insert([
            'course_id'=> $request->course_id,
            'student_id'=>$student->id,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);

        return back();


    }
}
