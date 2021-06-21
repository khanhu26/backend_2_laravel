<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories_Companies extends Model
{
    protected $table = 'categories_companies';

    public function categories(){
        return $this->hasOne(Categories::class,'category_id','category_id');
    }
    public function companies(){
        return $this->hasOne(Companies::class,'company_id','company_id');
    }
}
