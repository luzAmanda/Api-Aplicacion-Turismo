<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table= 'menus';
    protected $primaryKey = 'id_menu';
   protected $filable =['id_sucursal','id_plato','id_bebida','id_postre','id_combo'];

    public function sucursal(){
        return $this->belongsTo('App\Sucursal','id_sucursal');   
    }
}
