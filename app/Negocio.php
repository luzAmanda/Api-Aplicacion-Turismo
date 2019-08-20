<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    protected $table= 'negocios';
    protected $primaryKey = 'id_negocio';
    protected $filable =['id_tipo_negocio','nombre','descripcion'];

    public function sucursal(){
        return $this->belongsTo('App\Sucursal','id_negocio');   
    }
}
