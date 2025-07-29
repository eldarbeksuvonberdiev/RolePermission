<?php

namespace App\Models\RolePermission;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    protected $fillable = [
        'role_id',
        'permission_id',
    ];
}
