<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    //
    protected $fillable = ['name', 'year', 'price', 'boyd_style', 'engine', 'transmission', 'color', 'fuel_style', 'category_id', 'image', 'description'];

    public function categories()
    {
        return $this -> belongsTO('App\category', 'category_id', 'id');
    }

}
