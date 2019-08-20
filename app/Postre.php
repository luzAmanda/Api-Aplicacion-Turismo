<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postre extends Model
{
    protected $table= 'postres';
    protected $primaryKey = 'id_postre';

    public function Sucursal(){
        return $this->belongsToMany('App\Sucursal','menus','id_sucursal');
        }
}
