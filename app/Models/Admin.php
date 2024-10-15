<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Str;

class Admin extends User
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'avatar',
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

}
