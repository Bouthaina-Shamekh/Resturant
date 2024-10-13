<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Str;

class Delivery extends User
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'status',
        'status_accept_order',
        'age',
        'phone',
        'img',
        'admin_id',

    ];




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


    public function location()
    {
        return $this->hasMany(Location::class);
    }

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }
}
