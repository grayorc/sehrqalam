<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    public function isSuperuser()
    {
        return $this->is_superuser;
    }

    public function isStaff()
    {
        return $this->is_staff;
    }
    public function isDisabled()
    {
        return $this->is_disabled;
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    public function commnets()
    {
        return $this->hasMany(Comment::class);
    }

    public function RoleUser()
    {
        return $this->hasOne(RoleUser::class);
    }

    public function permissionUser()
    {
        return $this->hasOne(PermissionUser::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function hasRole($roles)
    {
        return !!$roles->intersect($this->roles)->all();
    }

    public function hasPermission($permission)
    {
        return $this->permissions->contains('name', $permission->name) || $this->hasRole($permission->role);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }




    protected $fillable = [
        'phone_number',
        'password',
        'is_superuser',
        'is_staff',
        'is_writer',
        'wallet',
        'verification_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
