<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    public function factura(){
        return $this->belongsTo('App\Factura','id','idfactura');

    }

    public function formapago(){

        return $this->hasMany('App\FormaPago','id','idformapago');

    }

    public function financiaciontarjeta(){

        return $this->hasMany('App\Tarjeta','id','idfinanciaciontarjeta');

    }
    public function user(){

        return $this->belongsTo(User::class);

    }
}
