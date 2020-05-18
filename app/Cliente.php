<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Ot;


class Cliente extends Model
{
    public function ot(){

        return $this->hasMany(Ot::class);

    }

    protected $fillable = [

        'apellido',
        'nombre',
        'celular',
        'telefono',
        'mail'



    ];
    public function anotaciones(){

        return $this->hasMany(Annotation::class);
    }
}

