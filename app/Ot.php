<?php

namespace App;



use Illuminate\Database\Eloquent\Model;
use App\annotation;
use App\Cliente;
use App\Equipo;
use App\Sucursal;
use App\Categoria;
use App\Confirmacion;
use App\Estadorepuesto;
use App\Reparaexito;
use App\User;
use App\estado;


class Ot extends Model
{
    public function equipo(){

        return $this->belongsTo(Equipo::class);

    }
    public function cliente(){

        return $this->belongsTo(Cliente::class);

    }
    public function estado(){

        return $this->belongsTo(estado::class);

    }
    public function user(){

        return $this->belongsTo(User::class);

    }
    public function confirmacion(){

        return $this->belongsTo(Confirmacion::class);

    }
    public function reparaexito(){

        return $this->belongsTo(Reparaexito::class);

    }
    public function categoria(){

        return $this->belongsTo(Categoria::class);

    }
    public function sucursal(){

        return $this->belongsTo(Sucursal::class);

    }
    public function estadorepuesto(){

        return $this->belongsTo(Estadorepuesto::class);

    }
    public function annotation(){

        return $this->hasMany('App\Annotation','ot_id','ot_id');

    }
    
    public function area(){

        return $this->belongsTo('App\area');

    }

    protected $fillable = [

        'estado_id',
        'sintoma'

    ];

}
