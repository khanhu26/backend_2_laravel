<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trainers;

class Classes_Users extends Model
{
    protected $table = 'classes_users';

    public function users()
    {
        return $this->hasOne(Users::class, 'user_id', 'user_id');
    }
    public function classes()
    {
        return $this->hasOne(Classes::class, 'class_id', 'class_id');
    }
}
