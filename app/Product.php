<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function Condiva(){
        return $this->belongsTo(Condiva::class);
    }

    protected $fillable= ["cod","art","description","costproduct","priceproduct","margin","ivaproduct"];




}
