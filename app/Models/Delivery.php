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
        'created_by',
        'last_activity'
    ];

    public function chats()
    {
        return $this->morphMany(Chat::class, 'sender');
    }

    // public function setStatusAcceptOrderAttribute($value)
    // {
    //     $this->attributes['status_accept_order'] = $value ?? 1; // القيمة الافتراضية
    // }

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

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
