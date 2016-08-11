<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    protected $fillable = ['category'];
    public $timestamps = false;
    
    public function directory(){
        return $this->hasMany('App\Directory');
    }
}
