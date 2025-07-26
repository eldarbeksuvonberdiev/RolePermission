<?php

namespace App\Models\RolePermission;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    protected $fillable = [
        'name',
        'route_name',
    ];
}
