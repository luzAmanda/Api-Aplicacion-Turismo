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
  $categorias=  Categoria::find($id);

    return $this->sendResponse($categorias->toArray(), 'Categorias retrieved successfully.');
    }
}
