<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'permission_id'
    ];

    public function permission(){
        return $this->belongsTo(Permission::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
