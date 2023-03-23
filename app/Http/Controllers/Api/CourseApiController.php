<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseApiController extends Controller
{
 
    public function index()
    {
        return   Course::all();
    }

    public function store(Request $request)
    {
         $request->validate([
            'name'=>'nullable | string | max:191',
            'spec'=>'nullable | string | max:191',
        ]);
        $date = [
            'trainer_id'=>$request->trainer_id,
            'category_id'=>$request->category_id,
            'name'=>$request->name,
            'desc'=>$request->desc,
            'price'=>$request->price,
            'image'=>$request->image,
        ];
        Course::create($date);
        return response()->json('course created successfully');
    }

    public function update(Request $request, $id)
    {
         $request->validate([
            'name'=>'nullable | string | max:191',
            'spec'=>'nullable | string | max:191',
         ]);

        Course::find($id)->update($request->all());
        return response()->json('course updated successfully');
    }

}
