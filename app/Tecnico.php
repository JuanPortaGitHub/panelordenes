<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ot;
use App\Annotation;

class Tecnico extends Model
{
    public function ot(){

        return $this->hasMany(Ot::class);
}
    public function anotaciones(){

        return $this->hasMany(Annotation::class);
    }
}
