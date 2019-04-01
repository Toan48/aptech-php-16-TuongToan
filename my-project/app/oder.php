<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class oder extends Model
{
    //
    protected $filable = ['customer_name', 'email', 'address', 'phone', 'car_id'];
    protected $table = 'oders';

    public function cars()
    {
        return $this -> belongsTo('App\cars', 'car_id', 'id');
    }

}


