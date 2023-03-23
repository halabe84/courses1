<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Trainer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=>'Ai',

        ]);
        Category::create([
            'name'=>'IT',

        ]);
        Category::create([
            'name'=>'networking',

        ]);
    }
}
