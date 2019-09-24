<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Sector;

class SectorController extends BaseController 
{
    public function index()
    {
      header("Access-Control-Allow-Origin: *");
  $sectores=  Sector::all();

    return $this->sendResponse($sectores->toArray(), 'Sectores retrieved successfully.');
    }

    public function show($id)
    {
      header("Access-Control-Allow-Origin: *");
  $sectores=  Sector::with('tiposnegocios')->find($id);

    return $this->sendResponse($sectores->toArray(), 'Tipos de negocio retrieved successfully.');
    }
}
