<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'status',
        'image',
        'slug',
        'created_by',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // Accessors
    public function getImageUrlAttribute() // $admin->image_url
    {
        if(!$this->image){
            return asset('assets-dashboard/images/default/category.jpg');
        }
        if(Str::startsWith($this->image,['http://','https://'])){
            return $this->image;
        }
        return asset('storage/'. $this->image);
    }
}
