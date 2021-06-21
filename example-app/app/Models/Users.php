<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trainers;

class Users extends Model
{
    protected $table = 'users';


    public function trainers()
    {
        return $this->hasOne(Trainers::class, 'user_id', 'user_id');
    }
    public function usersPermissions()
    {
        return $this->hasMany(Users_Permissions::class, 'user_id', 'user_id');
    }
    public function groups()
    {
        return $this->hasOne(Groups::class, 'group_id', 'group_id');
    }
    public function classesUsers()
    {
        return $this->hasMany(Classes_Users::class, 'user_id', 'user_id');
    }
    public function types()
    {
        return $this->hasOne(Types::class, 'type_id', 'type_id');
    }
    public function diaries()
    {
        return $this->hasMany(Diaries::class, 'diary_id', 'diary_id');
    }
}
