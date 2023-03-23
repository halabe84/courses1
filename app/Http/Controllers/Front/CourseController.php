<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public  function category($id){

        $data['category'] =Category::findOrFail($id);
       $data['courses'] =Course::where('category_id',$id)->paginate(3);
        //dd($data['category']);

        $data['cats']=Category::all();

       return view('Front.courses.category')->with($data);


    }
    public function show($id,$c_id)
    {
        $data['courses'] =Course::findOrFail($c_id);

        $data['cats']=Category::all();

//        dd($data);
        return view('Front.courses.show')->with($data);

    }
}
