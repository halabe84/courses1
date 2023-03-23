<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lacture extends Model
{
    use HasFactory;
    protected $guarded=['id'];


 public function Course()
    {
        return $this->belongsTo(Course::class);
    }
    
}
