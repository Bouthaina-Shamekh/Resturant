<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable ,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'image',
        'gender',
        'status',
        'last_activity'
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
    ];


     public function profile()
    {
        return $this->hasOne(Profile::class);
     }

     public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function order_items()
    {
        return $this->hasMany(OrderIteam::class);
    }


    // Accessors
    public function getImageUrlAttribute() // $admin->image_url
    {
        if(!$this->image){
            if($this->gender == 0){
                return asset('assets-dashboard/images/user/avatar-1.jpg');
            }
            if($this->gender == 1){
                return asset('assets-dashboard/images/user/avatar-10.jpg');
            }
            return asset('assets-dashboard/images/user/avatar-1.jpg');
        }
        if(Str::startsWith($this->image,['http://','https://'])){
            return $this->image;
        }
        return asset('storage/'. $this->image);
    }
}
