<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    protected $table = 'directory';
    
    protected $fillable = [ 'category_id', 'name', 'address', 'phone', 'phone2', 'phone3', 'cellphone', 'fax', 'radio_frecuency', 'contact', 'email', 'website', 'confirmed'];
    
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
