<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Cliente;
use app\Provider;
class Condicioniva extends Model
{


    public function condicionivaproveedor(){
        return $this->belongsTo(Provider::class);

    }

    public function condicionivacliente(){
        return $this->belongsTo(Cliente::class);

    }
}
