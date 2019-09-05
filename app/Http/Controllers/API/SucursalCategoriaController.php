<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Detalle;
use DB;
use App\SucursalCategoria;
use App\Sucursal;
use App\Categoria;

class SucursalCategoriaController extends BaseController
{
    public function show1($id)
    {
        header("Access-Control-Allow-Origin: *");
        //esta era la primera bien
 //  $detalles = Detalle::join("categorias","detalles.id_categoria","=","categorias.id_categoria")->Join(DB::raw("(SELECT * FROM sucursal_detalle where sucursal_detalle.id_sucursal=".$id.") as sucursal_detalle"),function($join){$join->on('detalles.id_detalle','=','sucursal_detalle.id_detalle');})->get();
 
  // $categorias = Categoria::join("detalles","detalles.id_categoria","=","categorias.id_categoria")->Join(DB::raw("(SELECT * FROM sucursal_detalle where sucursal_detalle.id_sucursal=".$id.") as sucursal_detalle"),function($join){$join->on('detalles.id_detalle','=','sucursal_detalle.id_detalle');})->SELECT("categorias.*","categorias.nombreCategoria")->get();
  // $sucursales= Sucursal::find($id);
  $sucursalCategoria =SucursalCategoria::join("sucursales","sucursales.id_sucursal","=","sucursal_categoria.id_sucursal")->Join(DB::raw("(SELECT * FROM categorias where categorias.id_categoria=".$id.") as categorias"),function($join){$join->on('detalles.id_sucursalcategoria','=','sucursal_categoria.id_sucursalcategoria');})->SELECT("detalles.*")->get();


   return $this->sendResponse($sucursalCategoria, 'Detalle por categoría retrieved successfully.');
}
public function show($id)
    {
        header("Access-Control-Allow-Origin: *");
   $categorias = Categoria::join("detalles","detalles.id_categoria","=","categorias.id_categoria")->Join(DB::raw("(SELECT * FROM sucursal_detalle where sucursal_detalle.id_sucursal=".$id.") as sucursal_detalle"),function($join){$join->on('detalles.id_detalle','=','sucursal_detalle.id_detalle');})->SELECT("categorias.*","categorias.nombreCategoria")->get();
   $sucursales= Sucursal::find($id);


   return $this->sendResponse([$sucursales,$categorias], 'id Sucursal(categorias) retrieved successfully.');
}
}
