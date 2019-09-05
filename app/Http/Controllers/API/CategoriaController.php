<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Categoria;

class CategoriaController extends BaseController
{
    
    public function index()
    {
      header("Access-Control-Allow-Origin: *");
  $categorias=  Categoria::with('detalle','detallesSucursales')->get();

    return $this->sendResponse($categorias->toArray(), 'Categorias retrieved successfully.');
    }

    public function show($id)
    {
      header("Access-Control-Allow-Origin: *");
  $categorias=  Categoria::with('detalles')->find($id);

    return $this->sendResponse($categorias->toArray(), 'Categorias retrieved successfully.');
    }
}
