<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Media extends Model
{
    use HasFactory;

    protected $table = 'media';

    protected $fillable = [
        'file_name',
        'size',
        'path',
    ];


    // Accessors
    public function getPathUrlAttribute() // $imgae->path_url
    {
        if(!$this->path){
            return asset('assets-dashboard/images/user/avatar-1.jpg');
        }
        if(Str::startsWith($this->path,['http://','https://'])){
            return $this->path;
        }
        return asset('storage/'. $this->path);
    }


}
