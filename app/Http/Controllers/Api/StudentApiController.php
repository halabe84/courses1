<?php

namespace App\Http\Controllers\Api;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;

class StudentApiController extends Controller
{
   
    public function index()
    {
        return Student::all();
    }

    public function store(Request $request)
    {
         $request->validate([
            'name'=>'nullable | string | max:191',
            'email'=>'nullable | email | max:191',
//            'Student_id'=>'required | exists:Students,id ',
        ]);
        $date = [
            'name'=>$request->name,
            'email'=>$request->email,
            'spec'=>$request->spec
        ];
        Student::create($date);
        return response()->json('Student created successfully');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'nullable | string | max:191',
            'email'=>'nullable | email | max:191',
        ]);
        Student::find($id)->update($request->all());
        return response()->json('Student updated successfully');
    }

}
