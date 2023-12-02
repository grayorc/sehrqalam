<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $table = 'permissions';
    protected $fillable = [
        'name',
        'label'
    ];

    public function permissionRole(){
        return $this->hasMany(PermissionRole::class);
    }

    // Permission.php

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


    public function permissionUser(){
        return $this->hasMany(PermissionUser::class);
    }
}
