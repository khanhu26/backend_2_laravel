<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainers extends Model
{
    protected $table = 'trainers';

    public function search($value)
    {
        return self::where("trainer_name","LIKE","%{$value}%");
    }

    public function companies()
    {
        return $this->hasOne(Companies::class, 'company_id', 'company_id');
    }
    public function users()
    {
        return $this->hasMany(Users::class, 'user_id', 'user_id');
    }
}
