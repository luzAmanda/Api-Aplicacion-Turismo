<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SucursalCategoria extends Model
{
    protected $table= 'sucursal_categoria';
    protected $primaryKey = 'id_sucursalcategoria';
    
    public function sucursal(){
        return $this->hasMany('App\Sucursal','id_sucursal');
    }  
   // public function detalles(){
     //   return $this->hasMany('App\Detalle','id_detalle');
//    }
    public function categorias(){
        return $this->hasMany('App\Categoria','id_categoria');
    }
  /*  public function categorias(){
        return $this->hasOneThrough(
        'App\Categoria',
        'App\Detalle',
        'id_categoria',
        'id_categoria',
        'id_categoria',
        'id_detalle'
    );
}*/
}