<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    protected $table= 'opiniones';
    protected $primaryKey = 'id_opinion';
  //  protected $filable =['id_sucursal','titulo_opinion',' opinion','calificacion_general'];

    public function sucursal(){
        return $this->belongsTo('App\Sucursal','id_sucursal');   
    }
   
}
