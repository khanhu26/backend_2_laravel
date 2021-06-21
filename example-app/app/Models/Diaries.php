<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trainers;

class Diaries extends Model
{
    protected $table = 'diaries';

    public function users()
    {
        return $this->hasOne(Users::class, 'user_id', 'user_id');
    }
    public function weeks()
    {
        return $this->hasMany(Weeks::class, 'diary_id', 'diary_id');
    }
}
