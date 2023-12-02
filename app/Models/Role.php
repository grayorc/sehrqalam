<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'label'
    ];

    public function permissionRole(){
        return $this->hasMany(PermissionRole::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function roleUser(){
        return $this->belongsToMany(RoleUser::class);
    }
}
