<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    protected $table= 'detalles';
    protected $primaryKey = 'id_detalle';
    
   
    public function categoria(){
        return $this->hasMany('App\Categoria','id_categoria');
    } 
   public function sucursalDetalle(){
      return $this->hasToMany('App\SucursalDetalle','id_detalle');   
}
   

}
