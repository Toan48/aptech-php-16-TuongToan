<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    protected $fillable = ['name'];
    
    
    public function car()
    {
        return $this->hasMany('App\car', 'category_id', 'id');
    }
}

