<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = ['name'];
    
    public function brands()
    {
        return $this->belongsToMany('App\Models\Brand');
    }
    
    public function actions()
    {
        return $this->hasMany('App\Models\Action');
    }
}