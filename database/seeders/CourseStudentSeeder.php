<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { for($i=1;$i<=20;$i++){
        DB::table('course_student')->insert([
            'course_id'=>Course::all()->random()->id,
            'student_id'=>Student::all()->random()->id,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }

    }
}
