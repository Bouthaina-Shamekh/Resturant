<?php

namespace App\Models;

use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Auth\User;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Admin extends User
{
    use HasFactory,HasRoles,Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'avatar',
        'status',
        'roles_name',
        'last_activity'
    ];

    // Relationship
    public function roles()
    {
        return $this->belongsToMany(Role::class,'role_admins');
    }


    // Accessors
    public function getAvatarUrlAttribute() // $admin->avatar_url
    {
        if(!$this->avatar){
            return asset('assets-dashboard/images/user/avatar-1.jpg');
        }
        if(Str::startsWith($this->avatar,['http://','https://'])){
            return $this->avatar;
        }
        return asset('storage/'. $this->avatar);
    }

    public function delivery()
    {
        return $this->hasMany(Delivery::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }


    protected $casts = [
        'roles_name' => 'array',
    ];
}
