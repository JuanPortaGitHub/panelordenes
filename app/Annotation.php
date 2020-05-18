<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Ot;
use app\User;
use app\Cliente;
class Annotation extends Model
{
    public function ot(){
        return $this->belongsTo('App\Ot','ot_id','ot_id');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
    public function cliente(){
        return $this->belongsTo('App\Cliente','cliente_id','id');
    }

}




