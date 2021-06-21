<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trainers;

class Classes extends Model
{
    protected $table = 'classes';

    public function classesUsers()
    {
        return $this->hasMany(Classes_Users::class, 'class_id', 'class_id');
    }
    public function courses()
    {
        return $this->hasOne(Courses::class, 'course_id', 'course_id');
    }
}
