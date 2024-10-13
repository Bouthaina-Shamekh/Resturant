<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
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
        'phone',
    ];


    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
