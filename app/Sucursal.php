<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Ot;
class Sucursal extends Model
{
    public function ot(){

        return $this->hasMany(Ot::class);
    }
}
