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
    public function condiciondeiva(){
        return $this->hasOne('App\Condiva','id','condicioniva');

    }

    public function factura(){
        return $this->hasMany('App\Factura','id','idcliente');

    }

}

