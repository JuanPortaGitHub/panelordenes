<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Ot;
use App\tipodeequipo;


class Equipo extends Model
{
    public function ot(){

        return $this->hasMany(Ot::class);

    }

    public function tipodeequipo(){
        return $this->belongsTo(tipodeequipo::class);

    }
}
