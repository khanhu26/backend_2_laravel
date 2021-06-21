<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trainers;

class Groups extends Model
{
    protected $table = 'users_permissions';

    protected $with = array('trainer');

    public function trainers()
    {
        return $this->hasOne(Trainers::class, 'user_id', 'user_id');
    }
    public function categoriesCompanies()
    {
        return $this->hasMany(Categories_Companies::class, 'company_id', 'company_id');
    }
}
