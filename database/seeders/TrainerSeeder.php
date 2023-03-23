<?php

namespace Database\Seeders;

use App\Models\Trainer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     Trainer::create([
         'name'=>'Ahmad Alahalabi',
         'spec'=>'Network',
         'img'=>'10.jpg'
     ]);
        Trainer::create([
            'name'=>'Abd almuhsen',
            'spec'=>'Lravel',
            'img'=>'7.jpg'
        ]);
        Trainer::create([
            'name'=>'mo3tasm',
            'spec'=>'ASP.NET',
            'img'=>'12.jpg'
        ]);
    }
}
