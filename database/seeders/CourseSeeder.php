<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Trainer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       for($i=1;$i<3;$i++){
           for($j=1;$j<6;$j++){
               Course::create([
                  'category_id'=>$i,
                  'trainer_id'=>Trainer::all()->random()->id,
                  'name'=>"course num $j cat num $j" ,
                   'desc'=>'kjfku fjkngkjdkugn bkuhdfkhgkuden dsfkuherkuhgkje fgbkuerhugnjer jk',
                   'price'=>rand(1000,5000),
                   'image'=>"$i$j.png"
               ]);
           }

       }
    }
}
