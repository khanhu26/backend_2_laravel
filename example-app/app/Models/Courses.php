<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trainers;

class Courses extends Model
{
    protected $table = 'courses';

    public function classes()
    {
        return $this->hasMany(Classes::class, 'class_id', 'class_id');
    }
}
