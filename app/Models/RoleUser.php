<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class RoleAdmin extends Pivot
{
    use HasFactory;

    protected $table = 'role_admins';

    public $timestamps = false;

    protected $fillable = [
        'admin_id',
        'role_id',
    ];

    // relationship
    public function admin(){
        return $this->belongsTo(Admin::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }
}
