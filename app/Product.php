<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable= ["cod","art","description","costproduct","priceproduct","margin","ivaproduct"];
}
