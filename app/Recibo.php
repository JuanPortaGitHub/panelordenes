<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    public function factura(){
        return $this->belongsTo(factura::class);

    }

    public function formapago(){

        return $this->hasMany('App\FormaPago','id','idformapago');

    }

}
