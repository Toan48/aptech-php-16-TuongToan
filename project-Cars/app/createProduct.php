<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class createProduct extends Model
{
    //
    protected $fillable = ['id','name','price','content', 'discount', 'image'];
}
