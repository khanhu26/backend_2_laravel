<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trainers;

class Permissions extends Model
{
    protected $table = 'permissions';

    public function usersPermissions()
    {
        return $this->hasMany(Users_Permissions::class, 'permission_id', 'permission_id');
    }
    public function groupsPermissions()
    {
        return $this->hasMany(Groups_Permissions::class, 'permission_id', 'permission_id');
    }
}
