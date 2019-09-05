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
    public function detalles(){
        return $this->hasManyThrough(
        'App\Detalle',
        'App\Sucursalcategoria',
        'id_categoria',
        'id_sucursalcategoria',
        'id_categoria',
        'id_sucursalcategoria'
    );
    } 
}
