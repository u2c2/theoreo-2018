<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = ['name', 'email', 'email_verified_at', 'password'];
    
    public function roles()
    {
        return $this->belongsToMany('Role');
    }
}
