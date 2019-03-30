<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images_product extends Model
{
    //

    protected $table='images_product';
    protected $fillable = ['car_id', 'photo'];

    public function cars()
    {
        return $this -> belongsTO('App\car', 'car_id', 'id');
    }
}
