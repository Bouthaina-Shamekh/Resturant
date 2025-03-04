<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'region',
        'street',
        'floor',
        'near',
        'another_details',
        'longitude',
        'latitude',
        'country',
        'locale',
        'phone',

    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
