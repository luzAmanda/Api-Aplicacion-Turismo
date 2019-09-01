<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tnegocio extends Model
{ 

    protected $table= 'tipo_negocio';
    protected $primaryKey = 'id_tiponegocio';
    protected $fillable = [

        'nombre', 'icono'

    ];
}
