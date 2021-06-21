<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trainers;

class Users_Permissions extends Model
{
    protected $table = 'users_permissions';

    public function users()
    {
        return $this->hasOne(Users::class, 'user_id', 'user_id');
    }
    public function permissions()
    {
        return $this->hasOne(Permissions::class, 'permission_id', 'permission_id');
    }
}
