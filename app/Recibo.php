<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    public function factura(){
        return $this->hasMany('App\Factura','id','idfactura');

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

    public function cliente(){
        return $this->hasOne('App\Cliente','id','idcliente');

    }

    public function sucursal(){
        return $this->hasOne('App\Sucursal','id','sucursal_id');

    }
}
