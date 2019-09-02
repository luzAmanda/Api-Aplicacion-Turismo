<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table= 'categorias';
    protected $primaryKey = 'id_categoria';
    
   
    public function detalle(){
        return $this->hasMany('App\Detalle','id_categoria');
    } 
    public function detallesSucursales(){
        return $this->hasOneThrough(
        'App\SucursalDetalle',
        'App\Detalle',
        'id_categoria',
        'id_detalle',
        'id_categoria',
        'id_detalle'
    );
    } 
}
