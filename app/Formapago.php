<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formapago extends Model
{
    public function recibo(){
        return $this->belongsTo(Recibo::class);

    }
}
