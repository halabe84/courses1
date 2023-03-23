<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lacture;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=20;$i++){
            DB::table('lactures')->insert([
                'course_id'=>Course::all()->random()->id,
                'name'=>'lacture'.' '.$i,
                'link'=>'www.lin.com/lacture'.' '.$i,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
    }
}
}