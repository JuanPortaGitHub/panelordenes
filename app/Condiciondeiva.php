<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condiciondeiva extends Model
{
    public function condicionivaproveedor(){
        return $this->belongsTo(Provider::class);

    }

    public function condicionivacliente(){
        return $this->belongsTo(Cliente::class);

    }
}
