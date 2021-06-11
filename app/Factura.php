<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Detallefactura;
use App\Sucursal;
use App\User;

class Factura extends Model
{
    public function detallefactura(){

        return $this->hasMany('App\Detallefactura','idfactura','id');

    }
    public function sucursal(){

        return $this->BelongsTo('App\Sucursal','idsucursalfactura','id');

    }
    public function cliente(){

        return $this->BelongsTo('App\Cliente','idcliente','id');

    }
    public function user(){

        return $this->belongsTo(User::class);

    }
    public function Recibo(){

        return $this->hasMany('App\Recibo','idfactura','id');

    }
}
