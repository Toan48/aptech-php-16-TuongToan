<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    //
    protected $fillable = ['id', 'name', 'price', 'bodytype', 'engine', 'tranmission', 'fuel_style', 'color', 'catagory_id'];

    public function catagory()
    {
        return $this->belongsTo('App\catagory', 'name_catagory', 'id');
    }
}
