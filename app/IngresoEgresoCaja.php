<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngresoEgresoCaja extends Model
{

    public function user(){

        return $this->belongsTo(User::class);

    }

    public function caja(){
        return $this->hasOne('App\Caja','id','caja_id');

    }
}
