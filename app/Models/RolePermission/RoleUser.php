<?php

namespace App\Models\RolePermission;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{

    protected $fillable = [
        'role_id',
        'user_id',
    ];
}
