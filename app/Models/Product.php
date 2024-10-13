<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }

     // Accessors
    public function getImageUrlAttribute() // $admin->image_url
    {
        if(!$this->image){
            return asset('assets-dashboard/images/default/product.jpg');
        }
        if(Str::startsWith($this->image,['http://','https://'])){
            return $this->image;
        }
        return asset('storage/'. $this->image);
    }
}
