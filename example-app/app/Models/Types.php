<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trainers;

class Types extends Model
{
    protected $table = 'types';

    public function users()
    {
        return $this->hasMany(Users::class, 'type_id', 'type_id');
    }
}
