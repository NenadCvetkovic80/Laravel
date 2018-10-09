<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    //
    public function permissions(): BelongsToMany
    {
    return $this->belongsToMany(
    config('permission.models.permission'),
    config('permission.table_names.role_has_permissions'),
    'role_id'
    );
    }
}
