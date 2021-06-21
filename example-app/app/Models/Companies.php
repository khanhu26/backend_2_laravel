<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trainers;

class Companies extends Model
{
    protected $table = 'companies';

    protected $with = array('trainer');

    public function search($value)
    {
        return self::where("category_id","=",$value)->paginate(10);
    }

    public function trainers()
    {
        return $this->hasMany(Trainers::class, 'company_id', 'company_id');
    }
    public function categoriesCompanies()
    {
        return $this->hasMany(Categories_Companies::class, 'company_id', 'company_id');
    }
}
