<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trainers;

class Groups_Permissions extends Model
{
    protected $table = 'groups_permissions';


    public function permissions()
    {
        return $this->hasOne(Permissions::class, 'permission_id', 'permission_id');
    }
    public function groups()
    {
        return $this->hasOne(Groups::class, 'group_id', 'group_id');
    }
}
