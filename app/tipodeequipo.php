<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipodeequipo extends Model
{
    public function equipo(){
        return $this->hasMany(Equipo::class);
    }
}
