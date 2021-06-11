<?php

namespace App;

use App\Factura;
use App\Product;
use Illuminate\Database\Eloquent\Model;


class Detallefactura extends Model
{
    public function factura(){
        return $this->belongsTo('App\Factura','idfactura','id');

    }

    public function productofactura(){
        return $this->belongsTo('App\Product','idproducto','id');

    }
}
