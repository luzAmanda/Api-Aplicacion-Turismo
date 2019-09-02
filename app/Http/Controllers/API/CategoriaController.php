<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class CategoriaController extends Controller
{
    
    public function index()
    {
  $categorias=  Categoria::with('detalle','detallesSucursales')->get();

    return $this->sendResponse($categorias->toArray(), 'Categorias retrieved successfully.');
    }
}
