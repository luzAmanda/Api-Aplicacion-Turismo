<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Detalle;
use DB;
use App\SucursalDetalle;
use App\Sucursal;

class SucursalDetalleController extends BaseController
{
    public function show($id)
    {
        header("Access-Control-Allow-Origin: *");
        //esta era la primera bien
 //  $detalles = Detalle::join("categorias","detalles.id_categoria","=","categorias.id_categoria")->Join(DB::raw("(SELECT * FROM sucursal_detalle where sucursal_detalle.id_sucursal=".$id.") as sucursal_detalle"),function($join){$join->on('detalles.id_detalle','=','sucursal_detalle.id_detalle');})->get();
 
   $categorias = Categoria::join("detalles","detalles.id_categoria","=","categorias.id_categoria")->Join(DB::raw("(SELECT * FROM sucursal_detalle where sucursal_detalle.id_sucursal=".$id.") as sucursal_detalle"),function($join){$join->on('detalles.id_detalle','=','sucursal_detalle.id_detalle');})->SELECT("categorias.*","categorias.nombreCategoria")->get();
   $sucursales= Sucursal::find($id);


   return $this->sendResponse([$categorias,$sucursales], 'id Sucursal(categorias) retrieved successfully.');
}
}
