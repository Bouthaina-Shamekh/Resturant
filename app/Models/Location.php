<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'region',
        'street',
        'floor',
        'near',
        'another_details',
        'longitude',
        'latitude',
        'user_id',
        'delivery_id',
    ];

    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }

}
