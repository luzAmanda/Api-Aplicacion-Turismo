<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    protected $table= 'platos';
    protected $primaryKey = 'id_plato';

    public function sucursal(){
            return $this->belongsToMany('App\Sucursal');   
    }
}
