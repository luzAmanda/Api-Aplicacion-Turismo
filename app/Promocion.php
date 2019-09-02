<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    protected $table= 'promociones';
    protected $primaryKey = 'id_promocion';
 

    public function sucursal(){
        return $this->belongsTo('App\Promocion','id_promocion');   
    }
}
