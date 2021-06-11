<?php

namespace App;

use App\Condiva;
use Illuminate\Database\Eloquent\Model;


class Provider extends Model
{
    public function condiciondeiva(){
        return $this->hasOne('App\Condiva','id','condicioniva');

    }
}
