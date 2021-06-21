<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trainers;

class Diaries_Contents extends Model
{
    protected $table = 'diaries_contents';

    public function weeks()
    {
        return $this->hasOne(Weeks::class, 'week_id', 'week_id');
    }
}
