<?php

namespace App\Http\Controllers\Api;

use App\Models\Lacture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class lactureApiController extends Controller
{


    public function store(Request $request)
    {
         $request->validate([
            'name'=>'nullable | string | max:191',
            'link'=>'nullable | string | max:191',
        ]);
        $date = [
            'course_id'=>$request->course_id,
            'name'=>$request->name,
            'link'=>$request->link,
        ];
        Lacture::create($date);
        return response()->json('lacture created successfully');
    }

    public function show(string $id)
    {
        $lacture = Lacture::where('course_id','=',$id)->get();
        return response()->json($lacture);
    }

    public function destroy(string $id)
    {
        $lacture =  Lacture::find($id);
        $lacture->delete();
        return response()->json('lacture deleted successfully ');
    }
}
