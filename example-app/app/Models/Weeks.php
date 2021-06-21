<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trainers;

class Weeks extends Model
{
    protected $table = 'weeks';

    public function diaries()
    {
        return $this->hasOne(Diaries::class, 'diary_id', 'diary_id');
    }
    public function diariesContents()
    {
        return $this->hasMany(Diaries_Contents::class, 'week_id', 'week_id');
    }
}
