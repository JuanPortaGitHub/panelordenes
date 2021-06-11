<?php

namespace App;
use App\Cliente;
use App\Provider;
use Illuminate\Database\Eloquent\Model;

class Condiva extends Model
{
    public function condicionivaproveedor(){
        return $this->belongsTo(Provider::class);

    }

    public function condicionivacliente(){
        return $this->belongsTo(Cliente::class);

    }
}
