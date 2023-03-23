<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            Admin::create([
                'username'=>'Ali',

            ]);
            Admin::create([
                'email'=>'halabe4@gmail.com',

            ]);
            Admin::create([
                'password'=>bcrypt('123456'),

            ]);
        }
    }
}
