<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $table= 'sectores';
    protected $primaryKey = 'id_sector';
    
   
    public function tiposnegocios(){
        return $this->hasMany('App\Tnegocio','id_sector');
    } 
}
