<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;



class car extends Model
{
    //
    use Notifiable;
    use SearchableTrait;
    
    // search rules
    protected $searchable = [
        'columns' => [
            'cars.name' => 5
        ]
    ];

    protected $fillable = ['name', 'year', 'price', 'boyd_style', 'engine', 'transmission', 'color', 'fuel_style', 'category_id', 'image', 'description'];

    public function categories()
    {
        return $this -> belongsTO('App\category', 'category_id', 'id');
    }

    public function images_product()
    {
        return $this -> hasMany('App\images_product', 'car_id', 'id');
    }

}
