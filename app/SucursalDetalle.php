<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SucursalDetalle extends Model
{
    protected $table= 'sucursal_detalle';
    protected $primaryKey = 'id_sucursaldetalle';
    
    public function sucursal(){
        return $this->hasMany('App\Sucursal','id_sucursal');
    }  
    public function detalles(){
        return $this->hasMany('App\Detalle','id_detalle');
    }
    public function categorias(){
        return $this->hasOneThrough(
        'App\Categoria',
        'App\Detalle',
        'id_categoria',
        'id_categoria',
        'id_categoria',
        'id_detalle'
    );
}
}