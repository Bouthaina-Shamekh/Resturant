<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'comment',
        'star',
        'local',
        'product_id',
        'user_id',
    ];

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
