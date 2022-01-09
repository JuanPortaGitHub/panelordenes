<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caja extends Model
{
    public function sucursal(){

        return $this->hasOne('App\Sucursal','id','sucursal_id');
    }
}
