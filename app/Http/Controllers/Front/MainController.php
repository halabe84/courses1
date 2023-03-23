<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Student;
use App\Models\Trainer;
use Illuminate\Http\Request;

class MainController extends Controller
{
   public function index()
   {
       $data['courses']=Course::select('id','name','desc','category_id','trainer_id','image','price')
           ->orderBy('id','desc')
           ->take(3)
           ->get();
       $data['courses_count']=Course::count();
       $data['trainers_count']=Trainer::count();
       $data['students_count']=Student::count();
       $data['cats']=Category::all();

//       dd($data['courses']);
       return view('Front.index')->with($data);
   }
}
